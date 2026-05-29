## 🎉 Landing Page Wedding Undangan Digital - Setup Berhasil!

Selamat! Landing page modern dan aesthetic untuk website undangan digital Anda sudah siap.

---

## 🚀 Quick Start Guide

### Step 1: Install Dependencies

```bash
npm install
```

### Step 2: Persiapkan Asset

#### 📷 Background Image

1. Simpan background image Anda di salah satu tempat:
    - `resources/assets/images/`
    - `public/images/`

2. Update image URL di `resources/views/welcome-wedding.blade.php` (baris ~24):

```html
<div
    class="background-image"
    style="background-image: url('your-image-url-here');"
></div>
```

#### 🎵 Wedding Music

1. Simpan file musik (MP3 format) ke: `public/music/wedding-music.mp3`
2. Musik akan otomatis play setelah tombol "Buka Undangan" diklik

### Step 3: Customize Konten

Edit `resources/views/welcome-wedding.blade.php`:

```blade
<!-- Ubah nama mempelai -->
<h1 class="groom-name">Muhammad</h1>        <!-- Nama pria -->
<h1 class="bride-name">Sarah</h1>           <!-- Nama wanita -->

<!-- Ubah tanggal & lokasi -->
<p class="wedding-date">Sabtu, 15 Juni 2024</p>
<p class="wedding-location">Ballroom Grand Palace, Jakarta</p>
```

### Step 4: Customize Warna (Optional)

Edit `resources/css/wedding-landing.css` (baris ~13-23):

```css
:root {
    --primary-color: #f5e6e1; /* Blush Pink */
    --accent-color: #e8d4c9; /* Soft Taupe */
    --text-dark: #3d3d3d; /* Text gelap */
    --text-light: #8b8b8b; /* Text terang */
    --blush-pink: #ffc0cb; /* Blush Pink */
    --champagne: #f8f3e6; /* Champagne */
    --gold: #d4af37; /* Gold */
}
```

### Step 5: Update Config (Advanced)

Edit `resources/js/components/config.js` untuk:

- Mengubah nama mempelai secara programmatic
- Mengubah tanggal, lokasi, jam
- Mengubah action button (redirect, scroll, dll)
- Mengubah musik volume, loop, dll

### Step 6: Run Development Server

```bash
npm run dev
```

Server akan jalan di: **http://localhost:5173/**

---

## ✨ Fitur yang Sudah Siap Pakai

✅ **Background Aesthetic**

- Full screen background dengan blur effect
- Gradient overlay dengan warna Blush Pink & Champagne
- Parallax effect saat mouse bergerak (desktop)

✅ **Nama Kedua Mempelai**

- Font elegan Playfair Display
- Typography premium dengan gradient gold
- Animasi zoom-in saat loading

✅ **Tombol "Buka Undangan"**

- Design glassmorphism dengan border gold
- Hover animation smooth dengan translate & gradient
- Icon Font Awesome envelope

✅ **Animasi Opening**

- Fade in dan scale animation
- Smooth scroll ke konten berikutnya
- AOS library untuk scroll animations

✅ **Musik Otomatis**

- Play otomatis setelah tombol diklik
- Floating music control di bottom-right
- Pulse indicator saat musik playing
- Play/pause dengan space bar

✅ **Responsive Design**

- Mobile-first approach
- Tested semua ukuran device
- Touch-friendly buttons
- Optimized font sizes

✅ **Modern UI**

- Glassmorphism effect
- Gold & Blush Pink color theme
- Clean typography
- Premium aesthetic

---

## 📁 File Structure

```
WeddingDigital/
├── resources/
│   ├── assets/
│   │   ├── images/              ← Background images
│   │   └── audio/               ← Audio files
│   ├── css/
│   │   ├── app.css              ← Main CSS
│   │   └── wedding-landing.css  ← Landing page styles
│   ├── js/
│   │   ├── app.js
│   │   └── components/
│   │       ├── config.js        ← Configuration
│   │       ├── landing-page.js  ← Main logic
│   │       └── landing-page-v2.js ← Alternative
│   └── views/
│       └── welcome-wedding.blade.php ← Main template
├── public/
│   ├── music/                   ← wedding-music.mp3
│   └── images/                  ← Background images
└── routes/
    └── web.php                  ← Route configuration
```

---

## 🎨 Color Palette

| Warna          | Hex     | Penggunaan                  |
| -------------- | ------- | --------------------------- |
| **Blush Pink** | #ffc0cb | Accent, button hover        |
| **Champagne**  | #f8f3e6 | Background, overlay         |
| **Gold**       | #d4af37 | Text gradient, border, icon |
| **Dark Text**  | #3d3d3d | Main text                   |
| **Light Text** | #8b8b8b | Subtitle, hint              |

---

## 🎬 Usage

### Route URL

```
GET /              → Landing Page Wedding
GET /undangan      → Landing Page Wedding (alias)
```

### Keyboard Shortcuts

- **Enter**: Open Invitation (saat fokus di button)
- **Space**: Play/Pause Musik
- **Scroll**: Smooth scroll ke section berikutnya

### Button Actions

Default: Scroll to main content
Bisa diubah di config:

- `'scroll'` → Scroll ke bawah
- `'redirect'` → Redirect ke halaman lain
- `'openInvitation'` → Custom action

---

## 📦 Dependencies

```json
{
    "devDependencies": {
        "tailwindcss": "^4.0.0",
        "@tailwindcss/vite": "^4.0.0",
        "vite": "^6.0.11",
        "laravel-vite-plugin": "^1.2.0"
    },
    "dependencies": {
        "aos": "^2.3.4"
    }
}
```

---

## 🔧 Troubleshooting

### Musik tidak terdengar?

- ✅ Pastikan file ada di `public/music/wedding-music.mp3`
- ✅ Cek browser console (F12 → Console) untuk error
- ✅ Pastikan browser allow autoplay after user interaction

### Background image tidak muncul?

- ✅ Verifikasi URL image sudah benar
- ✅ Gambar harus accessible (cors-enabled)
- ✅ Cek file permissions

### Animasi tidak smooth?

- ✅ Clear browser cache (Ctrl+Shift+Del)
- ✅ Cek browser support CSS animations
- ✅ Pastikan tidak ada error di console

### Mobile tidak responsive?

- ✅ Refresh page (Ctrl+F5)
- ✅ Rotate device untuk landscape
- ✅ Cek Dev Tools (F12) → Toggle device toolbar

---

## 📚 Full Documentation

Untuk informasi lebih detail, lihat:

- `LANDING_PAGE_SETUP.md` → Complete documentation
- `resources/css/wedding-landing.css` → CSS comments
- `resources/js/components/config.js` → Configuration options
- `resources/js/components/landing-page.js` → JavaScript logic

---

## 🚀 Next Steps

1. **Customize konten** dengan nama, tanggal, lokasi Anda
2. **Tambahkan background image** & wedding music
3. **Test di berbagai devices** untuk responsive check
4. **Customize warna** sesuai tema pernikahan Anda
5. **Build untuk production** dengan `npm run build`

---

## 💡 Pro Tips

- 📸 Gunakan high-quality wedding photos untuk background
- 🎵 Pilih wedding instrumental yang elegant & premium
- 🎨 Stick dengan color palette Blush Pink & Champagne
- 📱 Always test di mobile device atau Chrome DevTools
- 🔍 Minimize CSS & JS saat deploy ke production
- ⚡ Optimize image size (< 500KB) untuk faster loading

---

## ✅ Checklist Sebelum Deploy

- [ ] Background image sudah di-upload & URL benar
- [ ] Wedding music file ada di `public/music/wedding-music.mp3`
- [ ] Nama mempelai, tanggal, lokasi sudah diupdate
- [ ] Warna theme sudah customize sesuai keinginan
- [ ] Testing di mobile & desktop sudah OK
- [ ] Music volume & loop setting sudah sesuai
- [ ] Button action sudah configure (scroll/redirect)
- [ ] Meta tags & SEO sudah di-set
- [ ] `npm run build` sudah dijalankan
- [ ] Deploy ke production server

---

## 🎊 Happy Wedding!

Semoga landing page ini membuat momen spesial Anda semakin memorable.

**Questions? Issues?**

- Check `LANDING_PAGE_SETUP.md` untuk detailed guide
- Check browser console (F12) untuk error messages
- Review code comments di CSS dan JS files

**Enjoy! 💒✨**

---

## 📞 Quick Reference

| Task                  | File                        | Baris    |
| --------------------- | --------------------------- | -------- |
| Ubah nama             | `welcome-wedding.blade.php` | ~33, ~35 |
| Ubah tanggal/lokasi   | `welcome-wedding.blade.php` | ~42, ~43 |
| Ubah warna            | `wedding-landing.css`       | ~13-23   |
| Ubah musik volume     | `config.js`                 | ~70      |
| Ubah animasi duration | `config.js`                 | ~37      |
| Ubah image background | `welcome-wedding.blade.php` | ~24      |

---

Selamat menggunakan! 🎉
