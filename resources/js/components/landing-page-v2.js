/* ============================================
   LANDING PAGE - WEDDING INVITATION JS
   ============================================ */

import { LANDING_PAGE_CONFIG } from "./config.js";

export function initLandingPage() {
    const openInvitationBtn = document.getElementById("openInvitationBtn");
    const toggleMusicBtn = document.getElementById("toggleMusicBtn");
    const backgroundMusic = document.getElementById("backgroundMusic");
    const musicControlBtn = document.getElementById("musicControlBtn");
    const pulse = document.querySelector(".pulse");

    let isMusicPlaying = false;

    // Debug log
    if (LANDING_PAGE_CONFIG.debug) {
        console.log("Landing Page Config:", LANDING_PAGE_CONFIG);
    }

    // ============================================
    // AOS INITIALIZATION
    // ============================================
    if (LANDING_PAGE_CONFIG.animation.aosEnabled) {
        AOS.init({
            duration: LANDING_PAGE_CONFIG.animation.aosDuration,
            easing: LANDING_PAGE_CONFIG.animation.aosEasing,
            once: false,
            mirror: true,
            offset: 100,
        });
    }

    // ============================================
    // OPEN INVITATION BUTTON HANDLER
    // ============================================
    openInvitationBtn.addEventListener("click", handleOpenInvitation);

    function handleOpenInvitation() {
        if (LANDING_PAGE_CONFIG.debug) {
            console.log("Opening invitation...");
        }

        // Add animation class to button
        openInvitationBtn.style.pointerEvents = "none";
        openInvitationBtn.classList.add("fade-in-up");

        // Play background music
        if (LANDING_PAGE_CONFIG.music.enabled) {
            playBackgroundMusic();
        }

        // Handle action based on config
        setTimeout(() => {
            const action = LANDING_PAGE_CONFIG.button.action;

            if (action === "redirect") {
                window.location.href = LANDING_PAGE_CONFIG.button.redirectUrl;
            } else if (action === "scroll") {
                scrollToMainContent();
            } else {
                scrollToMainContent();
            }
        }, 800);

        // Hide landing page with animation
        setTimeout(() => {
            transitionToMainPage();
        }, 1000);
    }

    // ============================================
    // MUSIC CONTROL HANDLER
    // ============================================
    if (
        LANDING_PAGE_CONFIG.music.enabled &&
        LANDING_PAGE_CONFIG.ui.showMusicControl
    ) {
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
            backgroundMusic.volume = LANDING_PAGE_CONFIG.music.volume;
            backgroundMusic.loop = LANDING_PAGE_CONFIG.music.loop;

            backgroundMusic
                .play()
                .then(() => {
                    isMusicPlaying = true;
                    toggleMusicBtn.classList.add("playing");
                    pulse.classList.add("active");
                    if (LANDING_PAGE_CONFIG.debug) {
                        console.log("Music playing");
                    }
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
                                toggleMusicBtn.classList.add("playing");
                                pulse.classList.add("active");
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
            toggleMusicBtn.classList.remove("playing");
            pulse.classList.remove("active");
            if (LANDING_PAGE_CONFIG.debug) {
                console.log("Music paused");
            }
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

        // Fade out landing page
        landingPage.style.transition = "opacity 0.8s ease-out";
        landingPage.style.opacity = "0";
        landingPage.style.pointerEvents = "none";
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
            if (window.scrollY < window.innerHeight / 2) {
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
        if (LANDING_PAGE_CONFIG.animation.aosEnabled) {
            AOS.refresh();
        }
    }

    window.addEventListener("resize", handleResize);

    // ============================================
    // MOUSE MOVE PARALLAX EFFECT
    // ============================================
    if (LANDING_PAGE_CONFIG.animation.parallaxEnabled) {
        document.addEventListener("mousemove", (e) => {
            if (window.innerWidth > 768) {
                const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
                const moveY = (e.clientY - window.innerHeight / 2) * 0.01;

                const backgroundImage =
                    document.querySelector(".background-image");
                if (backgroundImage) {
                    backgroundImage.style.transform = `scale(1.1) translate(${moveX}px, ${moveY}px)`;
                }
            }
        });
    }

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

    if (LANDING_PAGE_CONFIG.debug) {
        console.log("Landing page initialized successfully");
    }
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
