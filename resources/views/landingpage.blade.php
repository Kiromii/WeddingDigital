<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - Dimas & Risma</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Great+Vibes:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page-shell">
        <section class="hero-wrap" id="landingPage">
            <div class="hero-card">
                <div class="hero-photo">
                    <img src="{{ asset('images/hero/wedding.jpeg') }}" alt="Dimas & Risma">
                </div>

                <div class="hero-copy">
                    <p class="hero-label">The Wedding Of</p>
                    <h1 class="hero-title">Natasya & Riko</h1>
                    <button class="btn-save-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        Save The Date
                    </button>
                    <p class="hero-date">Rabu, 11 November 2026</p>
                </div>
            </div>

            <div class="hero-accent top"></div>
            <div class="hero-accent bottom"></div>
        </section>

        <div class="wave-divider"></div>

        <section class="content-sections">
            <div class="section-block intro-block">
                <h2>Gallery</h2>
                <p>Semua momen indah kami dikemas dalam satu halaman, supaya terasa nyatu dan mudah dinikmati.</p>
            </div>

            <section id="gallerySection" class="section-block">
                <div class="section-heading">
                    <span class="section-icon"><i class="fa-solid fa-heart"></i></span>
                    <div>
                        <h2>Wedding Gallery</h2>
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

            <section id="dateSection" class="section-block">
                <div class="section-heading">
                    <span class="section-icon"><i class="fa-solid fa-clock"></i></span>
                    <div>
                        <h2>Detail Acara</h2>
                        <p class="section-subtitle">Informasi akad nikah dan resepsi lengkap dalam satu tampilan.</p>
                    </div>
                </div>

                <div class="event-details-card">
                    <div class="event-block">
                        <div class="event-top">
                            <span class="event-icon"><i class="fa-solid fa-ring"></i></span>
                            <div>
                                <h3>Akad Nikah</h3>
                                <p class="event-date">Rabu, 3 Juni 2026</p>
                            </div>
                        </div>
                        <div class="event-info">
                            <div><i class="fa-solid fa-calendar-day"></i> 3 Juni 2026</div>
                            <div><i class="fa-solid fa-clock"></i> Pukul 11.00 WIB</div>
                            <div><i class="fa-solid fa-map-marker-alt"></i> Ngaliyan</div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="event-block">
                        <div class="event-top">
                            <span class="event-icon event-icon-accent"><i class="fa-solid fa-glass-cheers"></i></span>
                            <div>
                                <h3>Resepsi</h3>
                                <p class="event-date">Sabtu, 22 November 2026</p>
                            </div>
                        </div>
                        <div class="event-info">
                            <div><i class="fa-solid fa-calendar-day"></i> 22 November 2026</div>
                            <div><i class="fa-solid fa-clock"></i> Pukul 19.00 WIB</div>
                            <div><i class="fa-solid fa-map-marker-alt"></i> Ballroom Hotel Harmoni, Semarang</div>
                            <div><i class="fa-solid fa-link"></i> <a href="https://www.google.com/maps/search/?api=1&query=Ballroom+Hotel+Harmoni+Semarang" target="_blank" rel="noopener noreferrer">Lihat di Google Maps</a></div>
                        </div>
                    </div>

                    <a href="#locationSection" class="btn-view-location">View location</a>
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
        </section>
    </div>

    <div class="bottom-navbar">
        <a href="#landingPage" class="navbar-item active" aria-label="Beranda">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="#gallerySection" class="navbar-item" aria-label="Love Gallery">
            <i class="fa-solid fa-heart"></i>
        </a>
        <a href="#dateSection" class="navbar-item" aria-label="Tanggal">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a href="#locationSection" class="navbar-item" aria-label="Lokasi">
            <i class="fa-solid fa-location-dot"></i>
        </a>
        <a href="#messageSection" class="navbar-item" aria-label="Pesan">
            <i class="fa-solid fa-comment"></i>
        </a>
    </div>
</body>
</html>
