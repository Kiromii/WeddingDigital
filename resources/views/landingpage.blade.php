<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Digital</title>
    @vite(["resources/css/app.css", "resources/js/app.js", "resources/css/wedding-landing-sections.css", "resources/js/wedding-landing.js"])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Great+Vibes:wght@400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
</head>
<body>
    <div class="page-container">
        <!-- Home Section -->
        <section class="page-section" id="homeSection">
            <div class="content-box landing-page">
                <h1 class="event-title">The Wedding Of</h1>

                <div class="photo-container">
                    <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Pasangan" id="couplePhoto">
                </div>

                <h2 class="couple-names">B & B</h2>

                <div class="cta-button">
                    <button class="btn-save-date" id="saveTheDateBtn">
                        <i class="fas fa-calendar-check"></i>
                        Save The Date
                    </button>
                </div>

                <p class="wedding-date">Sabtu, 20 September 2026</p>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="page-section" id="photosSection">
            <div class="content-box">
                <div class="section-header">
                    <h2>Galeri Kami</h2>
                    <p>Momen-momen spesial kami</p>
                </div>

                <div class="gallery-grid" id="galleryGrid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=400&h=400&fit=crop" alt="Wedding Photo 1">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=400&h=400&fit=crop" alt="Wedding Photo 2">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1505631346881-b72b27e84530?w=400&h=400&fit=crop" alt="Wedding Photo 3">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=400&h=400&fit=crop" alt="Wedding Photo 4">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1606216174967-f0f390a1e7a8?w=400&h=400&fit=crop" alt="Wedding Photo 5">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" alt="Wedding Photo 6">
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section class="page-section" id="locationSection">
            <div class="content-box">
                <div class="section-header">
                    <h2>📍 Lokasi Acara</h2>
                    <p>Tempat kami mengikat janji</p>
                </div>

                <div class="location-box">
                    <h3>🎊 Akad Nikah & Resepsi</h3>
                    <p><strong>Nama Tempat:</strong> Gedung Pesta XYZ</p>
                    <p><strong>Alamat:</strong> Jl. Diponegoro No. 123<br>Jakarta, Indonesia 12345</p>
                    <p><strong>Jam:</strong> 10:00 - 17:00 WIB</p>
                    <p><strong>Tanggal:</strong> Sabtu, 20 September 2026</p>
                    <p><a href="tel:+62812345678">📞 Hubungi Kami</a></p>
                </div>

                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322635!2d106.8269885!3d-6.175092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c2b3befffff%3A0x9b9c3c0c5c5c5c5c!2sGedung%20Serbaguna!5e0!3m2!1sid!2sid!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="page-section" id="contactSection">
            <div class="content-box">
                <div class="section-header">
                    <h2>💬 Kirim Pesan</h2>
                    <p>Kami ingin mendengar dari Anda</p>
                </div>

                <div class="form-success" id="formSuccess">✓ Terima kasih! Pesan Anda telah terkirim.</div>

                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="guestName">Nama Tamu</label>
                        <input type="text" id="guestName" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="guestEmail">Email</label>
                        <input type="email" id="guestEmail" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="guestMessage">Pesan</label>
                        <textarea id="guestMessage" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn-send">Kirim Pesan</button>
                </form>
            </div>
        </section>

        <!-- Calendar Modal -->
        <div class="calendar-modal" id="calendarModal">
            <div class="calendar-content">
                <h2>📅 Simpan Ke Kalender</h2>
                <p class="calendar-date">Sabtu, 20 September 2026</p>
                <p style="color: #666; font-size: 14px; margin-bottom: 20px;">Acara pernikahan B & B akan disimpan ke kalender Anda</p>
                <div class="calendar-actions">
                    <button class="btn-calendar btn-add" id="addToCalendarBtn">Simpan</button>
                    <button class="btn-calendar btn-close" id="closeModalBtn">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Lightbox Modal -->
    <div class="image-modal" id="imageModal">
        <div class="image-modal-content">
            <button class="image-modal-nav image-modal-prev" id="imagePrevBtn">❮</button>
            <img id="modalImage" src="" alt="Full Size Photo">
            <button class="image-modal-nav image-modal-next" id="imageNextBtn">❯</button>
            <button class="image-modal-close" id="imageCloseBtn">✕</button>
        </div>
    </div>

    <!-- Bottom Navbar -->
    <div class="bottom-navbar">
        <a href="#home" class="navbar-item active" data-section="home">
            <i class="fas fa-home"></i>
            <span class="navbar-label">Beranda</span>
        </a>
        <a href="#photos" class="navbar-item" data-section="photos">
            <i class="fas fa-heart"></i>
            <span class="navbar-label">Foto</span>
        </a>
        <a href="#calendar" class="navbar-item" data-section="calendar">
            <i class="fas fa-calendar"></i>
            <span class="navbar-label">Acara</span>
        </a>
        <a href="#location" class="navbar-item" data-section="location">
            <i class="fas fa-map-marker-alt"></i>
            <span class="navbar-label">Lokasi</span>
        </a>
        <a href="#contact" class="navbar-item" data-section="contact">
            <i class="fas fa-comment"></i>
            <span class="navbar-label">Pesan</span>
        </a>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</body>
</html>
