// ============================================
// LANDING PAGE CONFIGURATION
// ============================================

/**
 * File ini berisi konfigurasi utama untuk landing page.
 * Edit sesuai kebutuhan Anda.
 */

export const LANDING_PAGE_CONFIG = {
    // ============================================
    // MEMPELAI CONFIGURATION
    // ============================================
    mempelai: {
        pria: {
            nama: "Muhammad",
            gelar: "Putra dari...", // optional
        },
        wanita: {
            nama: "Sarah",
            gelar: "Putri dari...", // optional
        },
    },

    // ============================================
    // TANGGAL & LOKASI
    // ============================================
    acara: {
        tanggal: "Sabtu, 15 Juni 2024",
        lokasi: "Ballroom Grand Palace, Jakarta",
        jam: "19:00 - 23:00", // optional
    },

    // ============================================
    // WARNA THEME
    // ============================================
    colors: {
        primaryColor: "#f5e6e1", // Blush Pink
        accentColor: "#e8d4c9", // Soft Taupe
        textDark: "#3d3d3d", // Dark Text
        textLight: "#8b8b8b", // Light Text
        blushPink: "#ffc0cb", // Blush Pink
        champagne: "#f8f3e6", // Champagne
        gold: "#d4af37", // Gold
    },

    // ============================================
    // ASSET PATHS
    // ============================================
    assets: {
        backgroundImage:
            "https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop",
        backgroundMusic: "/music/wedding-music.mp3",
        favicon: "/images/favicon.ico",
    },

    // ============================================
    // ANIMASI CONFIGURATION
    // ============================================
    animation: {
        aosEnabled: true,
        aosDuration: 1000, // milliseconds
        aosEasing: "ease-in-out",
        parallaxEnabled: true,
        musicAutoplay: false, // Harus false untuk browser compliance
    },

    // ============================================
    // BUTTON CONFIGURATION
    // ============================================
    button: {
        text: "Buka Undangan",
        icon: "fa-envelope",
        action: "openInvitation", // 'openInvitation', 'redirect', 'scroll'
        redirectUrl: "/undangan",
    },

    // ============================================
    // MUSIK CONFIGURATION
    // ============================================
    music: {
        enabled: true,
        autoplay: false,
        loop: true,
        volume: 0.5, // 0 - 1
        fadeInDuration: 1000, // milliseconds
        fadeOutDuration: 500, // milliseconds
    },

    // ============================================
    // UI/UX CONFIGURATION
    // ============================================
    ui: {
        showScrollIndicator: true,
        showMusicControl: true,
        glassmorphismEffect: true,
        mobileOptimized: true,
    },

    // ============================================
    // SEO CONFIGURATION
    // ============================================
    seo: {
        title: "Undangan Digital - Muhammad & Sarah",
        description:
            "Kami dengan senang hati mengundang Anda untuk merayakan pernikahan kami.",
        keywords: "undangan digital, pernikahan, wedding",
        ogImage:
            "https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1200",
    },

    // ============================================
    // DEBUGGING
    // ============================================
    debug: false, // Set to true untuk console logs
};

// Export utility functions
export const getConfig = (key) => {
    const keys = key.split(".");
    let value = LANDING_PAGE_CONFIG;

    for (let k of keys) {
        value = value[k];
        if (value === undefined) return null;
    }

    return value;
};

export const setConfig = (key, value) => {
    const keys = key.split(".");
    let obj = LANDING_PAGE_CONFIG;

    for (let i = 0; i < keys.length - 1; i++) {
        obj = obj[keys[i]];
    }

    obj[keys[keys.length - 1]] = value;
};
