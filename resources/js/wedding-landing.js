/**
 * Wedding Landing Page - JavaScript Functionality
 * Handles gallery, calendar, forms, and navigation
 */

document.addEventListener('DOMContentLoaded', function() {
    initializeEventListeners();
    initializeAOS();
});

/**
 * Initialize all event listeners
 */
function initializeEventListeners() {
    // Gallery event listeners
    initializeGallery();

    // Navigation event listeners
    initializeNavigation();

    // Calendar modal listeners
    initializeCalendarModal();

    // Contact form listener
    initializeContactForm();

    // Image modal listeners
    initializeImageModal();
}

/**
 * Initialize gallery functionality
 */
function initializeGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            openImageModal(index);
        });
    });
}

/**
 * Initialize navigation
 */
function initializeNavigation() {
    const navbarItems = document.querySelectorAll('.navbar-item');
    
    navbarItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const section = this.getAttribute('data-section');
            scrollToSection(e, section);
        });
    });
}

/**
 * Initialize calendar modal
 */
function initializeCalendarModal() {
    const saveTheDateBtn = document.getElementById('saveTheDateBtn');
    const calendarModal = document.getElementById('calendarModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const addToCalendarBtn = document.getElementById('addToCalendarBtn');

    // Save The Date button
    if (saveTheDateBtn) {
        saveTheDateBtn.addEventListener('click', () => {
            calendarModal.classList.add('show');
        });
    }

    // Close modal button
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', () => {
            calendarModal.classList.remove('show');
        });
    }

    // Add to calendar button
    if (addToCalendarBtn) {
        addToCalendarBtn.addEventListener('click', () => {
            downloadCalendarEvent();
        });
    }

    // Close modal when clicking outside
    if (calendarModal) {
        calendarModal.addEventListener('click', (e) => {
            if (e.target === calendarModal) {
                calendarModal.classList.remove('show');
            }
        });
    }
}

/**
 * Initialize image modal
 */
function initializeImageModal() {
    const imageModal = document.getElementById('imageModal');
    const imagePrevBtn = document.getElementById('imagePrevBtn');
    const imageNextBtn = document.getElementById('imageNextBtn');
    const imageCloseBtn = document.getElementById('imageCloseBtn');

    // Previous button
    if (imagePrevBtn) {
        imagePrevBtn.addEventListener('click', prevImage);
    }

    // Next button
    if (imageNextBtn) {
        imageNextBtn.addEventListener('click', nextImage);
    }

    // Close button
    if (imageCloseBtn) {
        imageCloseBtn.addEventListener('click', closeImageModal);
    }

    // Close image modal when clicking outside
    if (imageModal) {
        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) {
                closeImageModal();
            }
        });
    }

    // Keyboard navigation for image modal
    document.addEventListener('keydown', (e) => {
        if (!imageModal || !imageModal.classList.contains('show')) return;
        
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'Escape') closeImageModal();
    });
}

/**
 * Initialize contact form
 */
function initializeContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            handleContactFormSubmit();
        });
    }
}

/**
 * Scroll to section
 */
function scrollToSection(e, section) {
    const navbarItems = document.querySelectorAll('.navbar-item');
    navbarItems.forEach(item => item.classList.remove('active'));
    e.currentTarget.classList.add('active');

    let target;
    
    switch(section) {
        case 'home':
            target = document.getElementById('homeSection');
            break;
        case 'photos':
            target = document.getElementById('photosSection');
            break;
        case 'calendar':
            const calendarModal = document.getElementById('calendarModal');
            calendarModal.classList.add('show');
            return;
        case 'location':
            target = document.getElementById('locationSection');
            break;
        case 'contact':
            target = document.getElementById('contactSection');
            break;
    }

    if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

/**
 * Gallery and Image Modal Functions
 */
let currentImageIndex = 0;

function openImageModal(index) {
    currentImageIndex = index;
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const galleryItems = document.querySelectorAll('.gallery-item img');
    
    if (galleryItems[index]) {
        modalImage.src = galleryItems[index].src;
        imageModal.classList.add('show');
    }
}

function closeImageModal() {
    const imageModal = document.getElementById('imageModal');
    imageModal.classList.remove('show');
}

function nextImage() {
    const galleryItems = document.querySelectorAll('.gallery-item img');
    currentImageIndex = (currentImageIndex + 1) % galleryItems.length;
    const modalImage = document.getElementById('modalImage');
    
    if (galleryItems[currentImageIndex]) {
        modalImage.src = galleryItems[currentImageIndex].src;
    }
}

function prevImage() {
    const galleryItems = document.querySelectorAll('.gallery-item img');
    currentImageIndex = (currentImageIndex - 1 + galleryItems.length) % galleryItems.length;
    const modalImage = document.getElementById('modalImage');
    
    if (galleryItems[currentImageIndex]) {
        modalImage.src = galleryItems[currentImageIndex].src;
    }
}

/**
 * Download calendar event
 */
function downloadCalendarEvent() {
    const addToCalendarBtn = document.getElementById('addToCalendarBtn');
    const calendarModal = document.getElementById('calendarModal');
    
    const eventData = `BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Wedding Digital//EN
CALSCALE:GREGORIAN
BEGIN:VEVENT
SUMMARY:Tasyakuran Pernikahan - B & B
DTSTART:20260920T100000Z
DTEND:20260920T180000Z
DESCRIPTION:Acara pernikahan B & B
LOCATION:Lokasi Pernikahan
END:VEVENT
END:VCALENDAR`;

    const blob = new Blob([eventData], { type: 'text/calendar' });
    const url = window.URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = 'wedding-bb.ics';
    link.click();
    window.URL.revokeObjectURL(url);

    // Show success message
    const originalText = addToCalendarBtn.innerHTML;
    addToCalendarBtn.textContent = '✓ Tersimpan!';
    
    setTimeout(() => {
        addToCalendarBtn.innerHTML = originalText;
        calendarModal.classList.remove('show');
    }, 1500);
}

/**
 * Handle contact form submission
 */
function handleContactFormSubmit() {
    const contactForm = document.getElementById('contactForm');
    const formSuccess = document.getElementById('formSuccess');
    
    const name = document.getElementById('guestName').value;
    const email = document.getElementById('guestEmail').value;
    const message = document.getElementById('guestMessage').value;

    console.log('Form submitted:', { name, email, message });

    // Show success message
    formSuccess.classList.add('show');
    contactForm.reset();

    // Hide success message after 3 seconds
    setTimeout(() => {
        formSuccess.classList.remove('show');
    }, 3000);
}

/**
 * Initialize AOS (Animate On Scroll)
 */
function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
        });
    }
}
