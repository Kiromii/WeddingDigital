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

    let isMusicPlaying = false;
    let invitationOpened = false;

    // ============================================
    // MESSAGE FORM HANDLER
    // ============================================
    initializeMessageForm();

    // ============================================
    // TIMELINE SCROLL ANIMATION
    // ============================================
    initializeTimeline();

    // ============================================
    // COUNTDOWN TIMER
    // ============================================
    initializeCountdown();

    // ============================================
    // PARALLAX EFFECT FOR HERO SECTION
    // ============================================
    initializeParallax();

    // Skip remaining initialization if monogramCircle doesn't exist (landing page)
    if (!monogramCircle) {
        return;
    }

    function initializeMessageForm() {
        const messageForm = document.getElementById("messageForm");
        const messagesDisplay = document.getElementById("messagesDisplay");

        if (!messageForm || !messagesDisplay) {
            console.warn("Message form or display element not found");
            return;
        }

        // Load existing messages from localStorage
        loadMessages();

        // Handle form submission
        messageForm.addEventListener("submit", handleMessageSubmit);

        function handleMessageSubmit(e) {
            e.preventDefault();

            const nameInput = document.getElementById("guestName");
            const messageInput = document.getElementById("guestMessage");

            const name = nameInput.value.trim();
            const message = messageInput.value.trim();

            if (!name || !message) {
                alert("Nama dan pesan tidak boleh kosong!");
                return;
            }

            // Create message object
            const messageObj = {
                id: Date.now(),
                name: name,
                message: message,
                timestamp: new Date(),
            };

            // Add message to display
            addMessageToDisplay(messageObj);

            // Save to localStorage
            saveMessage(messageObj);

            // Clear form
            nameInput.value = "";
            messageInput.value = "";
            nameInput.focus();
        }

        function addMessageToDisplay(messageObj) {
            if (messagesDisplay.querySelector(".messages-empty")) {
                messagesDisplay.innerHTML = "";
            }

            const messageElement = createMessageElement(messageObj);
            messagesDisplay.insertBefore(
                messageElement,
                messagesDisplay.firstChild,
            );
        }

        function createMessageElement(messageObj) {
            const div = document.createElement("div");
            div.className = "message-item";
            div.id = `message-${messageObj.id}`;

            const timestamp =
                messageObj.timestamp instanceof Date
                    ? messageObj.timestamp
                    : new Date(messageObj.timestamp);
            const timeString = formatTime(timestamp);

            div.innerHTML = `
                <div class="message-header">
                    <span class="message-name">${escapeHtml(messageObj.name)}</span>
                    <span class="message-time">${timeString}</span>
                </div>
                <div class="message-content">${escapeHtml(messageObj.message)}</div>
            `;

            return div;
        }

        function formatTime(date) {
            const today = new Date();
            const messageDate = new Date(date);

            const isToday =
                messageDate.getDate() === today.getDate() &&
                messageDate.getMonth() === today.getMonth() &&
                messageDate.getFullYear() === today.getFullYear();

            const time = messageDate.toLocaleTimeString("id-ID", {
                hour: "2-digit",
                minute: "2-digit",
            });

            if (isToday) {
                return time;
            }

            const dateStr = messageDate.toLocaleDateString("id-ID", {
                day: "numeric",
                month: "short",
                year: "numeric",
            });

            return `${dateStr} ${time}`;
        }

        function saveMessage(messageObj) {
            let messages = JSON.parse(
                localStorage.getItem("weddingMessages") || "[]",
            );
            messages.unshift({
                ...messageObj,
                timestamp: messageObj.timestamp.toISOString(),
            });
            localStorage.setItem("weddingMessages", JSON.stringify(messages));
        }

        function loadMessages() {
            const messages = JSON.parse(
                localStorage.getItem("weddingMessages") || "[]",
            );

            if (messages.length === 0) {
                messagesDisplay.innerHTML =
                    '<div class="messages-empty">Belum ada pesan. Jadilah yang pertama mengirim ucapan!</div>';
                return;
            }

            messagesDisplay.innerHTML = "";
            messages.forEach((msg) => {
                const messageObj = {
                    ...msg,
                    timestamp: new Date(msg.timestamp),
                };
                addMessageToDisplay(messageObj);
            });
        }

        function escapeHtml(text) {
            const map = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#039;",
            };
            return text.replace(/[&<>"']/g, (m) => map[m]);
        }
    }

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
    // TIMELINE SCROLL ANIMATION
    // ============================================
    function initializeTimeline() {
        const timelineContainer = document.querySelector(".timeline-container");
        const timelineLine = document.getElementById("timelineLine");

        if (!timelineContainer || !timelineLine) {
            return;
        }

        function updateTimelineHeight() {
            const items = document.querySelectorAll(".timeline-item");
            if (items.length === 0) return;

            const firstItem = items[0];
            const lastItem = items[items.length - 1];

            const containerTop =
                timelineContainer.getBoundingClientRect().top + window.scrollY;
            const windowTop = window.scrollY;

            // Calculate scroll progress
            const viewportHeight = window.innerHeight;
            const scrollProgress = Math.max(
                0,
                Math.min(
                    1,
                    (windowTop + viewportHeight - containerTop) /
                        (timelineContainer.offsetHeight + viewportHeight),
                ),
            );

            // Apply scale transform to timeline line
            timelineLine.style.scaleY = scrollProgress;
        }

        // Update on scroll
        window.addEventListener("scroll", updateTimelineHeight, {
            passive: true,
        });

        // Initial call
        updateTimelineHeight();
    }

    function initializeParallax() {
        const heroBgParallax = document.querySelector(".hero-bg-parallax");
        const galleryBgParallax = document.querySelector(
            ".gallery-bg-parallax",
        );
        const gallerySection = document.querySelector(".gallery-section");

        if (!heroBgParallax && !galleryBgParallax) return;

        // Function to update parallax effects
        function updateParallax() {
            const scrollPosition = window.scrollY;

            if (heroBgParallax) {
                const offset = scrollPosition * 0.5;
                heroBgParallax.style.transform = `translateY(${offset}px)`;
            }

            if (galleryBgParallax && gallerySection) {
                const sectionTop = gallerySection.offsetTop;
                const galleryScroll = scrollPosition - sectionTop;
                const offset = galleryScroll * 0.25;
                galleryBgParallax.style.transform = `translateY(${offset}px)`;
            }
        }

        window.addEventListener("scroll", updateParallax, { passive: true });
        updateParallax();
    }

    function initializeCountdown() {
        // Wedding date: November 22, 2026
        const weddingDate = new Date(2026, 10, 22, 0, 0, 0).getTime(); // Month is 0-indexed

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");

        if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
            x;
            return;
        }

        function setValue(el, value) {
            if (el.textContent !== value) {
                el.textContent = value;
            }
        }

        function updateCountdown() {
            const now = Date.now();
            const timeRemaining = weddingDate - now;

            if (timeRemaining <= 0) {
                setValue(daysEl, "00");
                setValue(hoursEl, "00");
                setValue(minutesEl, "00");
                setValue(secondsEl, "00");
                return;
            }

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60),
            );
            const minutes = Math.floor(
                (timeRemaining % (1000 * 60 * 60)) / (1000 * 60),
            );
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            setValue(daysEl, String(days).padStart(2, "0"));
            setValue(hoursEl, String(hours).padStart(2, "0"));
            setValue(minutesEl, String(minutes).padStart(2, "0"));
            setValue(secondsEl, String(seconds).padStart(2, "0"));
        }

        function scheduleUpdate() {
            const now = Date.now();
            const delay = 1000 - (now % 1000);

            setTimeout(() => {
                updateCountdown();
                scheduleUpdate();
            }, delay);
        }

        // Update countdown immediately and sync to the next second boundary.
        updateCountdown();
        scheduleUpdate();
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
