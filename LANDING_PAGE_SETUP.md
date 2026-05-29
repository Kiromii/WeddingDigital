# Landing Page Wedding Undangan Digital - Documentation

## 📋 Struktur Folder

```
resources/
├── assets/
│   ├── images/
│   │   └── [Tempat untuk menyimpan background images]
│   └── audio/
│       └── [Tempat untuk menyimpan musik latar]
├── css/
│   ├── app.css
│   └── wedding-landing.css
├── js/
│   ├── app.js
│   ├── bootstrap.js
│   └── components/
│       └── landing-page.js
└── views/
    └── welcome-wedding.blade.php
```

---

## 🎨 Fitur Utama

### 1. Background Aesthetic

- **Full Screen Background**: Gambar backdrop dengan blur effect
- **Gradient Overlay**: Gradient halus dengan warna Blush Pink & Champagne
- **Responsive**: Menyesuaikan dengan semua ukuran device
- **Paralax Effect**: Gerakan subtle saat mouse bergerak (desktop only)

### 2. Nama Kedua Mempelai

- **Font**: Playfair Display (elegant serif font)
- **Layout**: Centered dengan separator "&"
- **Styling**: Groom name warna dark, Bride name dengan gradient gold
- **Animation**: Zoom-in dengan AOS library

### 3. Tombol "Buka Undangan"

- **Design**: Glassmorphism dengan border gold
- **Animation**:
    - Hover: Translasi ke atas + gradient background
    - Click: Fade out animation
- **Icon**: Font Awesome envelope icon
- **Responsive**: 100% width pada mobile

### 4. Animasi Opening

- **Fade In**: Content muncul dengan gradual opacity
- **Scale Animation**: Zoom-in effect untuk nama mempelai
- **Smooth Scroll**: Transisi ke konten berikutnya
- **AOS Library**: Intersection Observer untuk scroll animations

### 5. Musik Otomatis

- **Autoplay**: Baru dimulai setelah tombol "Buka Undangan" diklik (browser policy compliance)
- **Toggle Button**: Floating music control di bottom-right
- **Visual Indicator**: Pulse animation saat musik playing
- **Keyboard Shortcut**: Space bar untuk play/pause

---

## 📝 Setup Instructions

### 1. Install Dependencies

```bash
npm install
```

Ini akan install:

- `tailwindcss@^4.0.0`
- `@tailwindcss/vite@^4.0.0`
- `aos@^2.3.4`
- Dependencies lainnya

### 2. Persiapan Asset

#### Background Image

1. Letakkan gambar background di: `public/images/` atau gunakan URL eksternal
2. Update image URL di `welcome-wedding.blade.php`:

```html
<div
    class="background-image"
    style="background-image: url('your-image-url-here');"
></div>
```

Rekomendasi:

- Format: JPG atau WebP
- Ukuran: 1920x1080px atau lebih besar
- Resolusi: HD quality
- File size: < 500KB (kompres jika perlu)

#### Background Music

1. Letakkan file musik di: `public/music/` dengan nama `wedding-music.mp3`
2. Format yang didukung: MP3, WAV, OGG
3. Rekomendasi:
    - Duration: 3-5 menit
    - Bitrate: 128-192 kbps
    - Genre: Classical, Romantic, atau Wedding instrumental

### 3. Customize Konten

Edit `resources/views/welcome-wedding.blade.php`:

```blade
<!-- Ubah nama mempelai -->
<h1 class="groom-name">Sarah</h1>
<h1 class="bride-name">Muhammad</h1>

<!-- Ubah tanggal dan lokasi -->
<p class="wedding-date">Sabtu, 15 Juni 2024</p>
<p class="wedding-location">Ballroom Grand Palace, Jakarta</p>
```

### 4. Customize Warna

Edit `resources/css/wedding-landing.css` di bagian `:root`:

```css
:root {
    --primary-color: #f5e6e1;
    --accent-color: #e8d4c9;
    --text-dark: #3d3d3d;
    --text-light: #8b8b8b;
    --blush-pink: #ffc0cb;
    --champagne: #f8f3e6;
    --gold: #d4af37;
}
```

### 5. Run Development Server

```bash
npm run dev
```

Server akan berjalan di: `http://localhost:5173/`

---

## 🎯 Personalisasi

### Mengubah Font

1. Edit di `welcome-wedding.blade.php` link Google Fonts
2. Gunakan di CSS dengan `font-family`

### Mengubah Ukuran Teks

Edit di `wedding-landing.css`:

```css
.groom-name,
.bride-name {
    font-size: clamp(2rem, 8vw, 4.5rem);
}
```

### Mengubah Animasi

Edit duration di `landing-page.js`:

```javascript
AOS.init({
    duration: 1000, // ubah sesuai kebutuhan
    easing: "ease-in-out",
});
```

### Mengubah Warna Gradient

Edit `wedding-landing.css`:

```css
.gradient-overlay {
    background: linear-gradient(
        135deg,
        rgba(245, 230, 225, 0.75) 0%,
        rgba(232, 212, 201, 0.7) 50%,
        rgba(248, 243, 230, 0.75) 100%
    );
}
```

---

## ⌨️ Keyboard Shortcuts

| Key        | Action                               |
| ---------- | ------------------------------------ |
| **Enter**  | Buka Undangan (saat fokus di button) |
| **Space**  | Play/Pause Musik                     |
| **Scroll** | Smooth scroll ke section berikutnya  |

---

## 🔊 Audio Playback Behavior

### Browser Policy

- Modern browsers memerlukan user interaction untuk autoplay audio
- Musik hanya bisa dijalankan setelah user klik tombol
- Ini adalah security & UX best practice

### Fallback

Jika audio tidak bisa dimulai otomatis:

1. User harus klik tombol musik floating
2. Atau ubah setting browser untuk allow autoplay

---

## 📱 Responsive Breakpoints

| Breakpoint  | Width          | Optimized                       |
| ----------- | -------------- | ------------------------------- |
| **Desktop** | > 1024px       | Full experience dengan parallax |
| **Tablet**  | 768px - 1023px | Optimized layout & touch        |
| **Mobile**  | < 768px        | Single column, touch-friendly   |

---

## 🚀 Production Build

```bash
npm run build
```

Ini akan:

1. Minify CSS & JavaScript
2. Optimize assets
3. Generate dist folder untuk deployment

---

## 🐛 Troubleshooting

### Musik tidak terdengar

- Pastikan file ada di `public/music/wedding-music.mp3`
- Cek browser console untuk error messages
- Pastikan volume browser tidak di-mute

### Image background tidak muncul

- Verifikasi URL image sudah benar
- Pastikan gambar accessible (jika URL eksternal)
- Cek browser console untuk CORS issues

### Animasi tidak smooth

- Pastikan browser support CSS animations
- Cek apakah user punya "Reduce Motion" enabled
- Clear browser cache

### Mobile display tidak responsive

- Verifikasi viewport meta tag ada di header
- Test dengan device yang berbeda atau dev tools
- Cek CSS media queries

---

## 📦 Dependencies Breakdown

| Package                 | Versi   | Fungsi                          |
| ----------------------- | ------- | ------------------------------- |
| **tailwindcss**         | ^4.0.0  | Utility-first CSS framework     |
| **@tailwindcss/vite**   | ^4.0.0  | Vite integration untuk Tailwind |
| **aos**                 | ^2.3.4  | Scroll animations library       |
| **laravel-vite-plugin** | ^1.2.0  | Vite plugin untuk Laravel       |
| **vite**                | ^6.0.11 | Build tool & dev server         |

---

## 💡 Tips & Tricks

1. **Untuk performa lebih baik**: Compress image background menggunakan tinypng.com
2. **Untuk custom font**: Gunakan Google Fonts untuk consistency
3. **Untuk SEO**: Tambahkan meta tags di `<head>` Blade template
4. **Untuk sharing**: Pastikan Open Graph meta tags di-set dengan benar
5. **Untuk testing**: Gunakan different devices atau Chrome DevTools

---

## 📄 File Structure Explanation

### welcome-wedding.blade.php

- Template utama untuk landing page
- Berisi struktur HTML & referensi CSS/JS
- Customizable untuk nama, tanggal, lokasi

### wedding-landing.css

- Styling lengkap dengan Tailwind directives
- CSS custom properties untuk warna
- Media queries untuk responsive design
- Animasi dan transitions

### landing-page.js

- JavaScript logic untuk interaksi user
- AOS initialization & configuration
- Music player control
- Event listeners & handlers
- Keyboard shortcuts
- Utility functions

---

## 🎬 Quick Start

```bash
# 1. Install dependencies
npm install

# 2. Prepare your assets
# - Add background image to public/images/
# - Add wedding music to public/music/wedding-music.mp3

# 3. Customize content
# - Edit welcome-wedding.blade.php
# - Change bride/groom names, date, location

# 4. Start dev server
npm run dev

# 5. Visit http://localhost:5173/

# 6. Build for production
npm run build
```

---

## 📞 Support Notes

- Tested on Chrome, Firefox, Safari, Edge
- Mobile tested on iOS & Android
- Supports all modern browsers
- Fallbacks untuk older browsers

---

**Happy Wedding Planning! 💒✨**
