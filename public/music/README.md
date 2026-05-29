# Public Assets

Folder ini untuk menyimpan assets yang accessible dari web.

## 📁 Struktur

```
public/
├── music/
│   └── wedding-music.mp3  (File musik untuk landing page)
└── images/
    └── (Background images jika diperlukan)
```

## 📌 Catatan

- Files di folder `public/` dapat diakses langsung via URL
- Contoh URL: `http://yoursite.com/music/wedding-music.mp3`
- Pastikan files sudah di-upload ke server saat deploy

## 🔒 Security

- Jangan upload files terlarang
- Pastikan permissions sudah benar (readable)
- Gunakan .htaccess jika perlu restrict access
