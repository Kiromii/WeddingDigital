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
    <div class="page-shell">
        <section class="hero-wrap" id="landingPage">
            <div class="hero-bg-parallax"
                style="background-image: url('{{ asset('images/hero/background-jawa.jpg') }}')">
            </div>
            <div class="hero-content">
                <div class="hero-copy">
                    <p class="hero-label">The Wedding Of</p>
                    <div class="mempelai-info">
                        <div class="mempelai-groom">
                            <h3>Riko Alfauzan</h3>
                            <p>Putra dari Bapak Kasmijan</p>
                            <p>Putra dari Ibu Rukmiyati</p>
                        </div>
                        <div class="mempelai-divider">&</div>
                        <div class="mempelai-bride">
                            <h3>Natasya Fitriya Nabila</h3>
                            <p>Putri dari Bapak Agus Margono</p>
                            <p>Putri dari Ibu Sri Murwatiningsih</p>
                        </div>
                        <p class="hero-date">Rabu, 11 November 2026</p>
                    </div>

                    <div class="countdown-wrapper">
                        <div class="countdown-title">Menuju Hari Istimewa</div>
                        <div class="countdown" id="countdown">
                            <div class="countdown-item">
                                <div class="countdown-circle">
                                    <div class="countdown-number" id="days">0</div>
                                    <div class="countdown-label">Hari</div>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-circle">
                                    <div class="countdown-number" id="hours">0</div>
                                    <div class="countdown-label">Jam</div>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-circle">
                                    <div class="countdown-number" id="minutes">0</div>
                                    <div class="countdown-label">Menit</div>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-circle">
                                    <div class="countdown-number" id="seconds">0</div>
                                    <div class="countdown-label">Detik</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn-save-date">
                        <i class="fa-solid fa-calendar-days"></i>
                        Save The Date
                    </button>
                </div>
            </div>
        </section>

        <div class="wave-divider"></div>

        <section class="content-sections">
            <div class="section-block intro-block">
                <h2>Momen Indah Kami</h2>
                <p>Sunnatulloh wa Ahsanu Ahsan • سنة الله وأحسن أحسن</p>
                <p class="intro-subtitle">Semua momen indah kami dikemas dalam satu halaman, supaya terasa nyatu dan mudah dinikmati.</p>
            </div>

            <section id="gallerySection" class="section-block">
                <div class="section-heading section-heading-center">
                    <h2>Wedding Gallery</h2>
                    <p class="section-subtitle">Kenangan manis kami dalam momen terbaik.</p>
                </div>
                <div class="wedding-collage">
                    <div class="left-column">
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                        <div class="photo">
                            <img src="{{ asset('images/hero/wedding.jpeg') }}">
                        </div>
                    </div>
                </div>
            </section>

            <section id="loveStorySection" class="section-block">
                <div class="section-heading section-heading-center">
                    <h2>Our Love Story</h2>
                    <p class="section-subtitle">Perjalanan indah kami bersama.</p>
                </div>

                <div class="timeline-container">
                    <div class="timeline-line"></div>

                    <div class="timeline-item timeline-left">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Awal Bertemu</h3>
                            <p>Saat praktik kerja lapangan / PKL di kantor pemerintah opo kecamatan, terus cowo e nganter surat.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-right">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Menjalin Hubungan</h3>
                            <p>Awal mula tukar WA untuk menghubungi bahwa kalau surat tersebut dari mana dan bertujuan untuk apa, gara-gara aku anak magang dadi kan gak tau. Neng kono mulai kenal seminggu kemudian jadian.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-left">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Lamaran</h3>
                            <p>Sebelum e sih masih tembung gara-gara jauh kan Blora Semarang, jadi lamarane di H-1 sebelum lamaran.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-right">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3>Menikah</h3>
                            <p>Melangsungkan pernikahan.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="dateSection" class="section-block">
                <div class="section-heading section-heading-center">
                    <h2>Detail Acara</h2>
                    <p class="section-subtitle">Informasi akad nikah dan resepsi lengkap dalam satu tampilan.</p>
                </div>

                <div class="event-details-card">
                    <div class="event-block">
                        <div class="event-top">
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
                        <div class="event-location-btn">
                            <a href="https://maps.google.com/?q=Ngaliyan" target="_blank" class="btn-location">
                                <i class="fa-solid fa-location-dot"></i>
                                View Location
                            </a>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="event-block">
                        <div class="event-top">
                            <div>
                                <h3>Resepsi</h3>
                                <p class="event-date">Sabtu, 22 November 2026</p>
                            </div>
                        </div>
                        <div class="event-info">
                            <div><i class="fa-solid fa-calendar-day"></i> 22 November 2026</div>
                            <div><i class="fa-solid fa-clock"></i> Pukul 19.00 WIB</div>
                            <div><i class="fa-solid fa-map-marker-alt"></i> Ballroom Hotel Harmoni, Semarang</div>
                        </div>
                        <div class="event-location-btn">
                            <a href="https://maps.google.com/?q=Ballroom+Hotel+Harmoni+Semarang" target="_blank" class="btn-location">
                                <i class="fa-solid fa-location-dot"></i>
                                View Location
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="messageSection" class="section-block">
                <div class="section-heading section-heading-center">
                    <h2>Kirim Pesan</h2>
                    <p class="section-subtitle">Tulis doa dan ucapan untuk kami.</p>
                </div>

                <form class="message-form" id="messageForm">
                    <div class="form-group">
                        <label for="guestName">Nama</label>
                        <input type="text" id="guestName" name="guestName" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="guestMessage">Pesan</label>
                        <textarea id="guestMessage" name="guestMessage" placeholder="Tulis pesan atau doa..." rows="5" required></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-send">Kirim Pesan</button>
                        <a href="https://wa.me/6288226668254?text=Assalamualaikum%20Natasya%20%26%20Riko%2C%20saya%20ingin%20memberikan%20ucapan%20selamat%20atas%20pernikahan%20kalian" target="_blank" class="btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            Ucapkan melalui WhatsApp
                        </a>
                    </div>
                </form>

                <div id="messagesDisplay" class="messages-display">
                    <!-- Pesan akan ditampilkan di sini -->
                </div>
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
        <a href="#loveStorySection" class="navbar-item" aria-label="Love Story">
            <i class="fa-solid fa-scroll"></i>
        </a>
        <a href="#dateSection" class="navbar-item" aria-label="Tanggal">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a href="#messageSection" class="navbar-item" aria-label="Pesan">
            <i class="fa-solid fa-comment"></i>
        </a>
    </div>
</body>
</html>