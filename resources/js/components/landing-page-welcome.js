/* ============================================
   WELCOME PAGE - NEW CONCEPT JS
   ============================================ */

export function initLandingPage() {
    // Wait for DOM to be fully ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initializeElements);
        return;
    }

    initializeElements();
}

function initializeElements() {
    // Get elements with safety checks
    const monogramCircle = document.getElementById("monogramCircle");
    const backgroundMusic = document.getElementById("backgroundMusic");
    const landingPage = document.getElementById("landingPage");
    const photoLeft = document.getElementById("photoLeft");
    const photoRight = document.getElementById("photoRight");

    // Safety check
    if (!monogramCircle) {
        console.warn("Monogram circle element not found");
        return;
    }

    let isMusicPlaying = false;
    let invitationOpened = false;

    // ============================================
    // AOS INITIALIZATION
    // ============================================
    if (typeof AOS !== "undefined") {
        // Small delay to ensure AOS library is fully loaded
        setTimeout(() => {
            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: false,
                mirror: true,
                offset: 50,
            });
        }, 100);
    }

    // ============================================
    // MONOGRAM CIRCLE CLICK HANDLER
    // ============================================
    if (monogramCircle) {
        monogramCircle.addEventListener("click", handleMonogramClick);
    }

    function handleMonogramClick() {
        if (invitationOpened) return;

        invitationOpened = true;
        console.log("Opening invitation...");

        // Add opening animation to circle
        monogramCircle.classList.add("opening");

        // Open photo doors - with slight delay for sequence
        if (photoLeft) {
            setTimeout(() => {
                photoLeft.classList.add("opening-left");
            }, 100);
        }

        if (photoRight) {
            setTimeout(() => {
                photoRight.classList.add("opening-right");
            }, 100);
        }

        // Play background music
        playBackgroundMusic();

        // Hide landing page with animation after doors open
        setTimeout(() => {
            transitionToMainPage();
        }, 1000);
    }

    // ============================================
    // MUSIC CONTROL HANDLER
    // ============================================
    if (toggleMusicBtn) {
        toggleMusicBtn.addEventListener("click", handleMusicToggle);
    }

    function handleMusicToggle(e) {
        e.stopPropagation();

        if (isMusicPlaying) {
            pauseBackgroundMusic();
        } else {
            playBackgroundMusic();
        }
    }

    function playBackgroundMusic() {
        if (!isMusicPlaying && backgroundMusic) {
            backgroundMusic
                .play()
                .then(() => {
                    isMusicPlaying = true;
                    if (toggleMusicBtn) toggleMusicBtn.classList.add("playing");
                    if (pulse) pulse.classList.add("active");
                    console.log("Music playing");
                })
                .catch((error) => {
                    console.warn("Audio playback failed:", error);
                    // Fallback: Try again after user interaction
                    document.addEventListener(
                        "click",
                        () => {
                            if (!isMusicPlaying && backgroundMusic) {
                                backgroundMusic.play();
                                isMusicPlaying = true;
                                if (toggleMusicBtn)
                                    toggleMusicBtn.classList.add("playing");
                                if (pulse) pulse.classList.add("active");
                            }
                        },
                        { once: true },
                    );
                });
        }
    }

    function pauseBackgroundMusic() {
        if (isMusicPlaying && backgroundMusic) {
            backgroundMusic.pause();
            isMusicPlaying = false;
            if (toggleMusicBtn) toggleMusicBtn.classList.remove("playing");
            if (pulse) pulse.classList.remove("active");
            console.log("Music paused");
        }
    }

    // ============================================
    // PAGE TRANSITION
    // ============================================
    function transitionToMainPage() {
        if (landingPage) {
            // Fade out landing page
            landingPage.style.transition = "opacity 0.8s ease-out";
            landingPage.style.opacity = "0";
            landingPage.style.pointerEvents = "none";

            // Redirect to landing page after transition
            setTimeout(() => {
                window.location.href = "/landingpage";
            }, 800);
        }
    }

    // ============================================
    // KEYBOARD INTERACTION
    // ============================================
    document.addEventListener("keydown", (e) => {
        // Space bar untuk play/pause music
        if (e.code === "Space" && document.activeElement !== monogramCircle) {
            e.preventDefault();
            handleMusicToggle({ stopPropagation: () => {} });
        }

        // Enter untuk open invitation
        if (e.code === "Enter" && document.activeElement === monogramCircle) {
            handleMonogramClick();
        }
    });

    // ============================================
    // RESPONSIVE HANDLER
    // ============================================
    function handleResize() {
        if (typeof AOS !== "undefined") {
            AOS.refresh();
        }
    }

    window.addEventListener("resize", handleResize);
}
