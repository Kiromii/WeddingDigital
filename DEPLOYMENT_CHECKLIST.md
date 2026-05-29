# 📋 Deployment Checklist

Gunakan checklist ini sebelum deploy landing page ke production.

---

## ✅ Pre-Deployment Checklist

### 📦 Build & Dependencies

- [ ] Run `npm install` di local
- [ ] Jalankan `npm run build` berhasil
- [ ] `dist/` folder sudah ter-generate
- [ ] Tidak ada console errors atau warnings

### 🎨 Content & Branding

- [ ] Nama mempelai pria sudah benar
- [ ] Nama mempelai wanita sudah benar
- [ ] Tanggal pernikahan sudah benar
- [ ] Lokasi pernikahan sudah benar
- [ ] Tidak ada typo di teks

### 📸 Background Image

- [ ] Background image sudah di-upload
- [ ] Image URL sudah di-update di template
- [ ] Image sudah di-compress (< 500KB)
- [ ] Image responsif di semua device
- [ ] Image quality ok (HD)

### 🎵 Wedding Music

- [ ] Music file sudah di-upload ke `public/music/wedding-music.mp3`
- [ ] File format adalah MP3
- [ ] File size reasonable (2-5MB)
- [ ] Audio quality bagus (128-192 kbps)
- [ ] Music sudah tested play/pause

### 🎨 Colors & Styling

- [ ] Warna sudah customize sesuai theme
- [ ] Font sudah appropriate
- [ ] Glassmorphism effect terlihat baik
- [ ] Responsive design checked di mobile

### 🎬 Animations & Features

- [ ] Button hover animation smooth
- [ ] Music control button berfungsi
- [ ] Play/pause keyboard shortcut tested
- [ ] Scroll animation smooth
- [ ] No janky animations pada mobile

### 📱 Responsive Testing

- [ ] Tested di smartphone (< 375px)
- [ ] Tested di mobile (375-480px)
- [ ] Tested di tablet (768px)
- [ ] Tested di desktop (1920px)
- [ ] Tested di large desktop (2560px)
- [ ] Landscape orientation tested
- [ ] All buttons clickable pada mobile
- [ ] No horizontal scroll

### 🌐 Browser Compatibility

- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Edge (latest)
- [ ] Mobile Safari (iOS)
- [ ] Chrome Mobile (Android)

### 🔊 Audio Testing

- [ ] Music plays setelah button klik
- [ ] Volume level appropriate
- [ ] Play/pause bekerja
- [ ] Loop setting sesuai
- [ ] No audio errors di console

### ⌨️ Keyboard Testing

- [ ] Enter key membuka undangan
- [ ] Space bar play/pause musik
- [ ] Tab navigation works
- [ ] Escape key tested (jika ada)

### 🔍 Performance

- [ ] Page load time < 3 detik
- [ ] Image optimized
- [ ] CSS/JS minified
- [ ] No console errors
- [ ] No 404 errors
- [ ] No CORS issues
- [ ] Lighthouse score > 80

### 📊 Analytics & SEO (Optional)

- [ ] Meta tags di-set (title, description)
- [ ] Open Graph tags added
- [ ] Google Analytics setup
- [ ] Sitemap updated (jika ada)
- [ ] Robots.txt updated

### 🔒 Security

- [ ] No sensitive data exposed
- [ ] Environment variables configured
- [ ] HTTPS enabled
- [ ] No security warnings
- [ ] No console security errors

### 📝 Documentation

- [ ] README.md update dengan info landing page
- [ ] Setup guide tersedia untuk team
- [ ] Configuration documented
- [ ] Backup konfigurasi dibuat

### 🔗 Links & Routes

- [ ] Route `/` bekerja
- [ ] Route `/undangan` bekerja (jika ada)
- [ ] External links tested
- [ ] Internal links tested
- [ ] No broken links

### 📧 Testing

- [ ] Tested di email client preview
- [ ] Share preview dengan stakeholder
- [ ] Approval dari bride & groom
- [ ] Feedback incorporated

### 🚀 Final Checks

- [ ] Backup existing files made
- [ ] Deployment script tested
- [ ] Database migrations ok (jika ada)
- [ ] Environment variables correct
- [ ] No pending commits
- [ ] Code reviewed

---

## 🔧 Pre-Deployment Commands

```bash
# 1. Clean install
rm -rf node_modules package-lock.json
npm install

# 2. Run build
npm run build

# 3. Check for errors
npm run lint          # Jika ada

# 4. Test production build locally
npm run preview       # Jika ada

# 5. Build final
npm run build
```

---

## 📤 Deployment Steps

### For Laravel Deployment

```bash
# 1. SSH to server
ssh user@yourserver.com

# 2. Pull latest code
cd /var/www/yourapp
git pull origin main

# 3. Install dependencies
npm install
composer install

# 4. Build assets
npm run build

# 5. Restart queue (jika ada)
php artisan queue:restart

# 6. Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### For Static Hosting

```bash
# 1. Build
npm run build

# 2. Upload dist/ folder ke hosting
# Gunakan FTP, SFTP, atau Git

# 3. Update DNS (jika domain baru)

# 4. Test di production URL
```

---

## 🧪 Post-Deployment Testing

- [ ] Landing page loads di production URL
- [ ] Background image displays correctly
- [ ] Music plays (setelah button klik)
- [ ] All buttons responsive
- [ ] Animations smooth
- [ ] No console errors
- [ ] Performance acceptable
- [ ] Mobile view OK
- [ ] Desktop view OK
- [ ] All links working

---

## 🆘 Rollback Plan

Jika ada issue:

```bash
# 1. Revert to previous version
git revert HEAD

# 2. Rebuild
npm run build

# 3. Deploy lagi

# 4. Investigate issue
# 5. Fix & test locally
# 6. Deploy fixed version
```

---

## 📞 Support Contacts

- **Frontend Issues**: Check `LANDING_PAGE_SETUP.md`
- **Server Issues**: Contact hosting provider
- **Music Issues**: Check file format & permissions
- **Image Issues**: Check CORS settings

---

## 📋 Sign Off

Deployment approval:

- [ ] Developer: ******\_****** Date: **\_\_\_**
- [ ] QA: ******\_****** Date: **\_\_\_**
- [ ] Manager: ******\_****** Date: **\_\_\_**

---

## 🎊 Post-Launch

After successful deployment:

- [ ] Monitor error logs
- [ ] Check analytics
- [ ] Share link dengan guests
- [ ] Collect user feedback
- [ ] Monitor performance
- [ ] Update status report

---

## 📝 Notes

**Do NOT deploy if:**

- ❌ Build fails
- ❌ Console errors exist
- ❌ Music file missing
- ❌ Image broken
- ❌ Responsive issues
- ❌ Browser compatibility issue

**Always:**

- ✅ Test locally first
- ✅ Backup current version
- ✅ Have rollback plan ready
- ✅ Monitor after deploy
- ✅ Be ready to support

---

**Happy Deployment!** 🚀

Good luck with your wedding website! 💒✨
