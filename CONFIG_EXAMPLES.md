# 📝 CONTOH KONFIGURASI LANDING PAGE

Folder ini berisi contoh-contoh konfigurasi yang bisa Anda gunakan sebagai referensi.

---

## 🎨 Contoh 1: Premium Gold & Blush Pink

Edit `resources/js/components/config.js`:

```javascript
export const LANDING_PAGE_CONFIG = {
    mempelai: {
        pria: {
            nama: "Muhammad Reza",
            gelar: "Putra dari Bapak Reza & Ibu Sinta",
        },
        wanita: {
            nama: "Sarah Putri",
            gelar: "Putri dari Bapak Santoso & Ibu Dewi",
        },
    },
    acara: {
        tanggal: "Sabtu, 15 Juni 2024",
        lokasi: "Grand Ballroom, Jl. Sudirman Jakarta",
        jam: "19:00 - 23:00",
    },
    colors: {
        gold: "#d4af37",
        blushPink: "#ffc0cb",
        champagne: "#f8f3e6",
    },
    music: {
        enabled: true,
        autoplay: false,
        volume: 0.6,
        loop: true,
    },
};
```

---

## 🎨 Contoh 2: Minimalist Modern

Edit untuk style yang lebih simple:

```javascript
export const LANDING_PAGE_CONFIG = {
    mempelai: {
        pria: { nama: "Arjun" },
        wanita: { nama: "Nia" },
    },
    acara: {
        tanggal: "Minggu, 20 Agustus 2024",
        lokasi: "Hotel Bintang Lima",
    },
    colors: {
        gold: "#c9a961", // Softer gold
        blushPink: "#f5d5d0", // Lighter pink
        champagne: "#fffaf0", // Lighter champagne
    },
    button: {
        text: "Lihat Undangan",
        icon: "fa-heart", // Ubah icon
    },
};
```

---

## 🎨 Contoh 3: Romantic Dark Theme

Untuk dark theme aesthetic:

```javascript
export const LANDING_PAGE_CONFIG = {
    mempelai: {
        pria: { nama: "Rafi" },
        wanita: { nama: "Aida" },
    },
    colors: {
        textDark: "#2a2a2a", // Darker text
        gold: "#daa520", // Golden rod
        blushPink: "#e6a8b8", // Deeper pink
        champagne: "#f5f1e8", // Warmer champagne
    },
    animation: {
        aosDuration: 1500, // Slower animation
        parallaxEnabled: true,
    },
};
```

---

## 🎵 Contoh Musik Recommendations

Cari di royalty-free music sites:

1. **Romantic Piano**
    - Artist: Bensound - "A Day Well Spent"
    - Mood: Elegant, sentimental
    - BPM: 72

2. **String Orchestra**
    - Source: AudioJungle - "Wedding Ceremony"
    - Mood: Grand, premium
    - BPM: 60

3. **Acoustic Guitar**
    - Source: Free Music Archive - "Wedding Day"
    - Mood: Intimate, romantic
    - BPM: 80

---

## 📸 Background Image Suggestions

Cari di:

- Unsplash.com → search "wedding elegant"
- Pexels.com → search "luxury wedding"
- Pixabay.com → search "wedding backdrop"

Requirements:

- Landscape orientation (16:9)
- Resolution: 1920x1080 atau lebih
- File size: < 500KB (compress)
- Aesthetic: Wedding elegant, premium look

---

## 🎬 Contoh Action Button

### Redirect ke halaman lain:

```javascript
button: {
    action: 'redirect',
    redirectUrl: '/main-invitation',
}
```

### Scroll ke bawah:

```javascript
button: {
    action: 'scroll',
}
```

### Custom function:

Edit di `landing-page.js` dan tambahkan case baru.

---

## 🔊 Audio Configuration Examples

### Loud volume dengan single play:

```javascript
music: {
    enabled: true,
    volume: 0.8,
    loop: false,
    fadeInDuration: 500,
}
```

### Soft background music:

```javascript
music: {
    enabled: true,
    volume: 0.3,
    loop: true,
    fadeInDuration: 2000,
}
```

### Silent mode (disable music):

```javascript
music: {
    enabled: false,
}
```

---

## 🎨 Font Customization

Edit `resources/views/welcome-wedding.blade.php`:

### Gunakan font lain dari Google Fonts:

```html
<link
    href="https://fonts.googleapis.com/css2?family=FONT_NAME:wght@400;700&display=swap"
    rel="stylesheet"
/>
```

Kemudian update CSS:

```css
.groom-name,
.bride-name {
    font-family: "FONT_NAME", serif;
}
```

### Font Suggestions:

- **Elegant**: Playfair Display, Cormorant Garamond, Bodoni Moda
- **Modern**: Poppins, Inter, Montserrat
- **Romantic**: Tangerine, Great Vibes, Allura

---

## 🎯 Animation Speed Comparison

Slow (formal):

```javascript
animation: {
    aosDuration: 1500,  // 1.5 detik
}
```

Normal (default):

```javascript
animation: {
    aosDuration: 1000,  // 1 detik
}
```

Fast (modern):

```javascript
animation: {
    aosDuration: 600,   // 0.6 detik
}
```

---

## 📱 Responsive Testing

### Test Points:

- iPhone SE (375px) - Mobile small
- iPhone 14 (390px) - Mobile
- iPad (768px) - Tablet
- MacBook (1920px) - Desktop
- 4K Monitor (2560px) - Large desktop

Test pada semua breakpoints!

---

## 🎊 Complete Example Setup

Copy-paste konfigurasi lengkap ini untuk memulai:

```javascript
// resources/js/components/config.js
export const LANDING_PAGE_CONFIG = {
    mempelai: {
        pria: {
            nama: "Nama Mempelai Pria",
            gelar: "Putra dari...",
        },
        wanita: {
            nama: "Nama Mempelai Wanita",
            gelar: "Putri dari...",
        },
    },

    acara: {
        tanggal: "Hari, TanggalBulan Tahun",
        lokasi: "Nama Venue, Kota",
        jam: "Jam mulai - Jam selesai",
    },

    colors: {
        primaryColor: "#f5e6e1",
        accentColor: "#e8d4c9",
        textDark: "#3d3d3d",
        textLight: "#8b8b8b",
        blushPink: "#ffc0cb",
        champagne: "#f8f3e6",
        gold: "#d4af37",
    },

    assets: {
        backgroundImage: "https://link-to-image.jpg",
        backgroundMusic: "/music/wedding-music.mp3",
    },

    animation: {
        aosEnabled: true,
        aosDuration: 1000,
        aosEasing: "ease-in-out",
        parallaxEnabled: true,
    },

    button: {
        text: "Buka Undangan",
        icon: "fa-envelope",
        action: "openInvitation",
    },

    music: {
        enabled: true,
        autoplay: false,
        loop: true,
        volume: 0.5,
    },

    ui: {
        showScrollIndicator: true,
        showMusicControl: true,
        glassmorphismEffect: true,
        mobileOptimized: true,
    },

    debug: false,
};
```

---

## 💾 Save as Template

1. Copy file ini
2. Rename menjadi `config-TEMPLATE-yourname.js`
3. Simpan di project untuk referensi
4. Gunakan kapan pun perlu configure baru

---

Happy customizing! 🎉
