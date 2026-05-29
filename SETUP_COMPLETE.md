# 🎉 Landing Page Wedding Invitation - Complete Setup

Selamat! Anda sudah memiliki landing page modern dan aesthetic untuk website undangan digital yang lengkap dan siap digunakan.

---

## 📋 Apa yang Sudah Dibuat

### ✅ Template & Views

- **`resources/views/welcome-wedding.blade.php`** - Template utama landing page dengan struktur HTML lengkap

### ✅ Styling & CSS

- **`resources/css/wedding-landing.css`** - Stylesheet lengkap dengan:
    - Responsive design
    - Animations & transitions
    - Glassmorphism effect
    - Color variables
    - Mobile-first approach

### ✅ JavaScript & Logic

- **`resources/js/components/landing-page.js`** - Logic untuk:
    - AOS animation initialization
    - Music player control
    - Button interactions
    - Parallax effect
    - Keyboard shortcuts
    - Page transitions

- **`resources/js/components/landing-page-v2.js`** - Alternative version dengan config support

- **`resources/js/components/config.js`** - Centralized configuration untuk:
    - Mempelai names
    - Acara details
    - Colors & theme
    - Asset paths
    - Animation settings
    - Music settings

### ✅ Assets Folders

- **`resources/assets/images/`** - Folder untuk background images
- **`resources/assets/audio/`** - Folder untuk audio files
- **`public/music/`** - Folder untuk music files (accessible from web)
- **`public/images/`** - Folder untuk image assets

### ✅ Documentation

- **`QUICK_START.md`** - Panduan cepat untuk setup & deployment
- **`LANDING_PAGE_SETUP.md`** - Dokumentasi lengkap & detail
- **`CONFIG_EXAMPLES.md`** - Contoh konfigurasi & customization
- **`README_ASSETS.md`** di setiap folder asset - Penjelasan penggunaan

### ✅ Routes

- **`routes/web.php`** - Updated dengan route ke landing page:
    - `GET /` → Landing page
    - `GET /undangan` → Landing page alias

### ✅ Configuration

- **`package.json`** - Updated dengan AOS dependency
- **`resources/css/app.css`** - Import wedding-landing.css

---

## 🎨 Fitur Unggulan

### 1. **Background Aesthetic** ✨

- Full-screen background dengan blur effect
- Gradient overlay dengan Blush Pink & Champagne
- Smooth parallax effect saat mouse bergerak
- Responsive di semua device

### 2. **Nama Kedua Mempelai** 💒

- Font elegan Playfair Display
- Typography premium dengan gradient gold
- Centered layout dengan separator "&"
- Animation zoom-in saat loading

### 3. **Tombol "Buka Undangan"** 🎁

- Design glassmorphism dengan border gold
- Smooth hover animation (translateY + gradient)
- Font Awesome envelope icon
- Responsive sizing untuk mobile

### 4. **Animasi Opening** 🎬

- Fade in & scale animation
- Smooth scroll ke konten
- AOS library untuk scroll-triggered animations
- Support reduced motion preference

### 5. **Musik Otomatis** 🎵

- Play setelah tombol "Buka Undangan" diklik
- Floating music control di bottom-right
- Play/pause dengan space bar
- Pulse indicator saat playing
- Volume & loop control

### 6. **Responsive Design** 📱

- Mobile-first approach
- Tested semua ukuran device
- Touch-friendly buttons
- Optimized typography

### 7. **Modern UI Elements** ✨

- Glassmorphism effect
- Premium color scheme
- Clean typography
- Elegant animations

---

## 🚀 Quick Start (5 Menit)

### Step 1: Install Dependencies

```bash
npm install
```

### Step 2: Add Assets

- Background image → `public/images/` atau URL eksternal
- Wedding music → `public/music/wedding-music.mp3`

### Step 3: Customize Content

Edit `resources/views/welcome-wedding.blade.php`:

- Ubah nama mempelai
- Ubah tanggal & lokasi

### Step 4: Run Dev Server

```bash
npm run dev
```

**Done!** Landing page siap di: `http://localhost:5173/`

---

## 📁 File Structure

```
WeddingDigital/
├── resources/
│   ├── assets/
│   │   ├── images/              ← Background images
│   │   │   └── README.md
│   │   └── audio/               ← Audio files
│   │       └── README.md
│   ├── css/
│   │   ├── app.css              ← Main (updated)
│   │   └── wedding-landing.css  ← Landing styles ✨ NEW
│   ├── js/
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── components/
│   │       ├── config.js        ← Configuration ✨ NEW
│   │       ├── landing-page.js  ← Main logic ✨ NEW
│   │       └── landing-page-v2.js ✨ NEW
│   └── views/
│       ├── welcome.blade.php
│       └── welcome-wedding.blade.php ✨ NEW
├── public/
│   ├── music/                   ← wedding-music.mp3 ✨ NEW
│   │   └── README.md
│   └── images/                  ← Background images ✨ NEW
│       └── README.md
├── routes/
│   └── web.php                  ← Updated ✨
├── QUICK_START.md               ✨ NEW
├── LANDING_PAGE_SETUP.md        ✨ NEW
├── CONFIG_EXAMPLES.md           ✨ NEW
├── package.json                 ← Updated ✨
└── ... files lainnya
```

---

## 🎯 Key Files untuk Customization

| File                        | Untuk Ubah                       | Line      |
| --------------------------- | -------------------------------- | --------- |
| `welcome-wedding.blade.php` | Nama, tanggal, lokasi, image URL | 33-43, 24 |
| `wedding-landing.css`       | Warna, animasi, responsive       | 13-23     |
| `config.js`                 | Konfigurasi lengkap (advanced)   | -         |
| `landing-page.js`           | Logic & behavior                 | -         |

---

## 🎨 Color Palette

```css
--blush-pink: #ffc0cb /* Accent, button hover */ --champagne: #f8f3e6
    /* Background, overlay */ --gold: #d4af37 /* Text gradient, border */
    --text-dark: #3d3d3d /* Main text */ --text-light: #8b8b8b /* Subtitle */;
```

---

## 📦 Dependencies Added

```json
{
    "dependencies": {
        "aos": "^2.3.4" // Scroll animations
    }
}
```

Plus:

- Tailwind CSS 4.0.0
- Vite 6.0.11
- Laravel Vite Plugin 1.2.0
- Font Awesome Icons (CDN)
- Google Fonts - Playfair Display (CDN)

---

## 🔧 Development Workflow

### Start Dev Server

```bash
npm run dev
```

### Build for Production

```bash
npm run build
```

### Features Available

- Hot module replacement (HMR)
- CSS preprocessing
- JavaScript bundling
- Asset optimization

---

## 📖 Documentation

### Quick Start

👉 Start here → [`QUICK_START.md`](QUICK_START.md)

### Full Documentation

Complete guide → [`LANDING_PAGE_SETUP.md`](LANDING_PAGE_SETUP.md)

### Configuration Examples

Contoh setup → [`CONFIG_EXAMPLES.md`](CONFIG_EXAMPLES.md)

### Code Comments

Baca comments di:

- `resources/css/wedding-landing.css`
- `resources/js/components/landing-page.js`
- `resources/js/components/config.js`

---

## ✨ Highlights

✅ **Production-Ready** - Semua files sudah optimized
✅ **Fully Responsive** - Mobile, tablet, desktop
✅ **Customizable** - Mudah diubah warna, font, animasi
✅ **Performance Optimized** - Lazy loading, minification ready
✅ **Accessibility** - Support keyboard navigation, reduced motion
✅ **Browser Compatible** - Chrome, Firefox, Safari, Edge
✅ **Well Documented** - Comments & documentation lengkap

---

## 🎯 Next Steps

1. **Review** → Baca `QUICK_START.md`
2. **Setup** → Install npm dependencies
3. **Customize** → Ubah nama, tanggal, warna
4. **Add Assets** → Tambahkan background & musik
5. **Test** → Run dev server & test di berbagai device
6. **Deploy** → Build & upload ke server

---

## 🆘 Troubleshooting

### Issue: Musik tidak terdengar

→ Cek file ada di `public/music/wedding-music.mp3`
→ Buka browser console untuk error

### Issue: Background image tidak muncul

→ Verifikasi URL image di Blade template
→ Pastikan CORS enabled untuk URL eksternal

### Issue: Animasi tidak smooth

→ Clear cache (Ctrl+Shift+Del)
→ Cek browser compatibility

→ **Lihat `LANDING_PAGE_SETUP.md` untuk troubleshooting detail**

---

## 📝 Notes

- Background image menggunakan Unsplash sample. Ganti dengan image Anda sendiri.
- Wedding music placeholder. Tambahkan musik Anda ke `public/music/wedding-music.mp3`.
- Semua warna dapat dikustomisasi via CSS variables.
- AOS library support semua modern browsers.
- Responsive di semua screen sizes.

---

## 🎊 Support

Untuk bantuan lebih lanjut:

1. Cek documentation di folder ini
2. Review code comments
3. Check browser console (F12) untuk errors
4. Test di multiple devices

---

## 📞 Quick Reference

```bash
# Install dependencies
npm install

# Start development
npm run dev

# Build production
npm run build
```

---

**Selamat menggunakan Landing Page Wedding Anda!** 💒✨

**Created with ❤️ for Wedding Invitations**

---

## 🎉 Ready to Go!

Semua sudah siap. Tinggal:

1. Install npm packages
2. Customize dengan data Anda
3. Add background image & music
4. Run dan test
5. Deploy!

Happy wedding! 🎊
