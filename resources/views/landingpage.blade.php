<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - Riko & Natasya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Great+Vibes:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <div id="landingPage" class="landing-page landing-page-floral">
        <div class="landing-card">
            <p class="event-type">The Wedding Of</p>

            <div class="photo-frame">
                <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Couple Photo" class="couple-photo">
            </div>

            <h1 class="couple-names">Riko & Natasya</h1>

            <button class="save-date-btn">
                <span class="btn-icon"><i class="fa-solid fa-calendar-days"></i></span>
                <span>Save The Date</span>
            </button>

            <p class="wedding-date">Rabu, 11 November 2026</p>
        </div>

        <div class="decor-floral top-left"></div>
        <div class="decor-floral top-right"></div>
        <div class="decor-floral bottom-left"></div>
        <div class="decor-floral bottom-right"></div>
    </div>

    <div class="bottom-navbar">
        <a href="#landingPage" class="navbar-item active" aria-label="Beranda">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="#dateSection" class="navbar-item" aria-label="Tanggal">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a href="#gallerySection" class="navbar-item" aria-label="Love Gallery">
            <i class="fa-solid fa-heart"></i>
        </a>
        <a href="#locationSection" class="navbar-item" aria-label="Lokasi">
            <i class="fa-solid fa-location-dot"></i>
        </a>
        <a href="#messageSection" class="navbar-item" aria-label="Pesan">
            <i class="fa-solid fa-comment"></i>
        </a>
    </div>

    <div class="page-sections">
        <section id="dateSection" class="section-block">
            <div class="section-heading">
                <span class="section-icon"><i class="fa-solid fa-clock"></i></span>
                <div>
                    <h2>Detail Acara</h2>
                    <p class="section-subtitle">Tanggal dan jadwal penting pernikahan kami.</p>
                </div>
            </div>

            <div class="date-grid">
                <div class="date-card">
                    <span class="date-label">Akad Nikah</span>
                    <p class="date-value">Rabu, 11 November 2026</p>
                    <p class="date-detail">10:00 WIB</p>
                    <p class="date-detail">Masjid Agung Kota</p>
                </div>
                <div class="date-card">
                    <span class="date-label">Resepsi</span>
                    <p class="date-value">Minggu, 22 November 2026</p>
                    <p class="date-detail">12:30 WIB</p>
                    <p class="date-detail">Ballroom Hotel Central</p>
                </div>
            </div>
        </section>

        <section id="gallerySection" class="section-block">
            <div class="section-heading">
                <span class="section-icon"><i class="fa-solid fa-heart"></i></span>
                <div>
                    <h2>Love Gallery</h2>
                    <p class="section-subtitle">Kenangan manis kami dalam momen terbaik.</p>
                </div>
            </div>

            <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Galeri 1">
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Galeri 2">
                </div>
                <div class="gallery-card">
                    <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Galeri 3">
                </div>
            </div>
        </section>

        <section id="locationSection" class="section-block">
            <div class="section-heading">
                <span class="section-icon"><i class="fa-solid fa-map-location-dot"></i></span>
                <div>
                    <h2>Lokasi</h2>
                    <p class="section-subtitle">Tepatnya tempat kami menggelar acara bahagia ini.</p>
                </div>
            </div>

            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322635!2d106.8269885!3d-6.175092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c2b3befffff%3A0x9b9c3c0c5c5c5c5c!2sGedung%20Serbaguna!5e0!3m2!1sid!2sid!4v1234567890" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="messageSection" class="section-block">
            <div class="section-heading">
                <span class="section-icon"><i class="fa-solid fa-comment-dots"></i></span>
                <div>
                    <h2>Kirim Pesan</h2>
                    <p class="section-subtitle">Tulis doa dan ucapan untuk kami.</p>
                </div>
            </div>

            <form class="message-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="guestName">Nama</label>
                        <input type="text" id="guestName" name="guestName" placeholder="Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="guestEmail">Email</label>
                        <input type="email" id="guestEmail" name="guestEmail" placeholder="Email Anda">
                    </div>
                </div>
                <div class="form-group">
                    <label for="guestMessage">Pesan</label>
                    <textarea id="guestMessage" name="guestMessage" placeholder="Tulis pesan atau doa..." rows="5"></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-send">Kirim Pesan</button>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
