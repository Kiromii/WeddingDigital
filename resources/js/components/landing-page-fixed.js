/* ============================================
   LANDING PAGE - WEDDING INVITATION JS
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
    const openInvitationBtn = document.getElementById("openInvitationBtn");
    const toggleMusicBtn = document.getElementById("toggleMusicBtn");
    const backgroundMusic = document.getElementById("backgroundMusic");
    const musicControlBtn = document.getElementById("musicControlBtn");
    const pulse = document.querySelector(".pulse");

    // Safety check
    if (!openInvitationBtn) {
        console.warn("Landing page elements not found");
        return;
    }

    let isMusicPlaying = false;

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
    // OPEN INVITATION BUTTON HANDLER
    // ============================================
    if (openInvitationBtn) {
        openInvitationBtn.addEventListener("click", handleOpenInvitation);
    }

    function handleOpenInvitation() {
        console.log("Opening invitation...");

        // Add animation class to button
        openInvitationBtn.style.pointerEvents = "none";
        openInvitationBtn.classList.add("fade-in-up");

        // Play background music
        playBackgroundMusic();

        // Smooth scroll to main content after delay
        setTimeout(() => {
            scrollToMainContent();
        }, 800);

        // Hide landing page with animation
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
    function scrollToMainContent() {
        window.scrollBy({
            top: window.innerHeight,
            behavior: "smooth",
        });
    }

    function transitionToMainPage() {
        const landingPage = document.getElementById("landingPage");

        if (landingPage) {
            // Fade out landing page
            landingPage.style.transition = "opacity 0.8s ease-out";
            landingPage.style.opacity = "0";
            landingPage.style.pointerEvents = "none";
        }
    }

    // ============================================
    // KEYBOARD INTERACTION
    // ============================================
    document.addEventListener("keydown", (e) => {
        // Space bar untuk play/pause music
        if (
            e.code === "Space" &&
            document.activeElement !== openInvitationBtn
        ) {
            e.preventDefault();
            handleMusicToggle({ stopPropagation: () => {} });
        }

        // Enter untuk open invitation
        if (
            e.code === "Enter" &&
            document.activeElement === openInvitationBtn
        ) {
            handleOpenInvitation();
        }
    });

    // ============================================
    // SCROLL BEHAVIOR
    // ============================================
    const landingPage = document.getElementById("landingPage");
    window.addEventListener(
        "wheel",
        (e) => {
            if (window.scrollY < window.innerHeight / 2 && landingPage) {
                e.preventDefault();
                window.scrollBy({
                    top:
                        e.deltaY > 0 ? window.innerHeight : -window.innerHeight,
                    behavior: "smooth",
                });
            }
        },
        { passive: false },
    );

    // ============================================
    // RESPONSIVE HANDLER
    // ============================================
    function handleResize() {
        if (typeof AOS !== "undefined") {
            AOS.refresh();
        }
    }

    window.addEventListener("resize", handleResize);

    // ============================================
    // MOUSE MOVE PARALLAX EFFECT
    // ============================================
    document.addEventListener("mousemove", (e) => {
        if (window.innerWidth > 768) {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;

            const backgroundImage = document.querySelector(".background-image");
            if (backgroundImage) {
                backgroundImage.style.transform = `scale(1.1) translate(${moveX}px, ${moveY}px)`;
            }
        }
    });

    // ============================================
    // PREVENT AUDIO AUTOPLAY & HANDLE BROWSER RESTRICTIONS
    // ============================================
    document.addEventListener(
        "click",
        () => {
            if (
                backgroundMusic &&
                backgroundMusic.paused &&
                backgroundMusic.currentTime === 0
            ) {
                backgroundMusic.load();
            }
        },
        { once: true },
    );

    // ============================================
    // CLEANUP
    // ============================================
    window.addEventListener("beforeunload", () => {
        if (backgroundMusic) {
            backgroundMusic.pause();
            backgroundMusic.currentTime = 0;
        }
    });

    console.log("Landing page initialized successfully");
}

// ============================================
// UTILITY FUNCTIONS
// ============================================

export function smoothScrollTo(element, offset = 0) {
    const elementPosition =
        element.getBoundingClientRect().top + window.pageYOffset;
    const offsetPosition = elementPosition - offset;

    window.scrollBy({
        top: offsetPosition,
        behavior: "smooth",
    });
}

export function prefersReducedMotion() {
    return window.matchMedia("(prefers-reduced-motion: reduce)").matches;
}

// Handle reduced motion
if (prefersReducedMotion()) {
    console.log("User prefers reduced motion");
    document.documentElement.style.setProperty(
        "--animation-duration",
        "0.01ms",
    );
    document.documentElement.style.setProperty(
        "--animation-iteration-count",
        "1",
    );
}
