<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - Natasya & Riko</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
    <section class="section-parallax" id="landingPage">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/hero/background-jawa.jpg') }}')"></div>
        <div class="parallax-overlay"></div>
        <div class="section-content hero-content">
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
    </section>

    <!-- ========== QUOTE ========== -->
    <section class="section-parallax" id="quoteSection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/hero/background-jawa.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,12,30,0.75) 0%, rgba(5,12,30,0.6) 100%)"></div>
        <div class="section-content">
            <div class="section-label">Firman Allah SWT</div>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-star-and-crescent"></i><span></span></div>
            <p class="quran-arabic">
                وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
            </p>
            <div class="thankyou-divider"></div>
            <p class="quran-translation">
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
            </p>
            <p class="quran-source">QS. Ar-Rum : 21</p>
        </div>
    </section>

    <!-- ========== GALLERY ========== -->
    <section class="section-parallax" id="gallerySection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/backgroundflower2.jpg') }}')"></div>
        <div class="parallax-overlay"></div>
        <div class="section-content">
            <div class="section-label">Our Moments</div>
            <h2 class="section-title">Wedding Gallery</h2>
            <p class="section-sub">Kenangan manis kami dalam setiap momen terbaik</p>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
            <div class="wedding-collage">
                <div class="left-column">
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                </div>
                <div class="right-column">
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                    <div class="photo"><img src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== LOVE STORY ========== -->
    <section class="section-parallax" id="loveStorySection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/hero/background-jawa.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,12,30,0.7) 0%, rgba(5,12,30,0.55) 100%)"></div>
        <div class="section-content">
            <div class="section-label">Perjalanan Kami</div>
            <h2 class="section-title">Our Love Story</h2>
            <p class="section-sub">Setiap langkah yang membawa kami ke hari ini</p>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
            <div class="timeline-container">
                <div class="timeline-line"></div>
                <div class="timeline-item timeline-left">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3>Awal Bertemu</h3>
                        <p>Saat praktik kerja lapangan / PKL di kantor pemerintah kecamatan, saat itulah kami pertama kali berjumpa.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-right">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3>Menjalin Hubungan</h3>
                        <p>Dari tukar nomor WA untuk urusan surat, lalu mulai saling mengenal — seminggu kemudian kami resmi bersama.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-left">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3>Lamaran</h3>
                        <p>Meski jarak Blora–Semarang memisahkan, cinta kami tak pernah redup hingga tiba saat lamaran yang penuh haru.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-right">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3>Menikah</h3>
                        <p>Akhirnya, di hadapan Allah dan orang-orang tercinta, kami resmi menjadi sepasang suami istri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== DETAIL ACARA ========== -->
    <section class="section-parallax" id="dateSection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/backgroundflower2.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,18,40,0.72) 0%, rgba(5,18,40,0.6) 100%)"></div>
        <div class="section-content">
            <div class="section-label">Save The Date</div>
            <h2 class="section-title">Detail Acara</h2>
            <p class="section-sub">Dengan penuh kebahagiaan, kami mengundang kehadiran Anda</p>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
            <div class="event-cards">
                <div class="event-card">
                    <div class="event-card-icon"><i class="fa-solid fa-ring"></i></div>
                    <h3>Akad Nikah</h3>
                    <div class="event-card-detail"><i class="fa-solid fa-calendar-day"></i> Rabu, 3 Juni 2026</div>
                    <div class="event-card-detail"><i class="fa-solid fa-clock"></i> Pukul 11.00 WIB</div>
                    <div class="event-card-detail"><i class="fa-solid fa-location-dot"></i> Ngaliyan, Semarang</div>
                    <a href="https://maps.google.com/?q=Ngaliyan" target="_blank" class="btn-event-location">
                        <i class="fa-solid fa-map-location-dot"></i> View Location
                    </a>
                </div>
                <div class="event-card-divider"></div>
                <div class="event-card">
                    <div class="event-card-icon"><i class="fa-solid fa-champagne-glasses"></i></div>
                    <h3>Resepsi</h3>
                    <div class="event-card-detail"><i class="fa-solid fa-calendar-day"></i> Sabtu, 22 November 2026</div>
                    <div class="event-card-detail"><i class="fa-solid fa-clock"></i> Pukul 19.00 WIB</div>
                    <div class="event-card-detail"><i class="fa-solid fa-location-dot"></i> Ballroom Hotel Harmoni, Semarang</div>
                    <a href="https://maps.google.com/?q=Ballroom+Hotel+Harmoni+Semarang" target="_blank" class="btn-event-location">
                        <i class="fa-solid fa-map-location-dot"></i> View Location
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PESAN ========== -->
    <section class="section-parallax" id="messageSection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/hero/background-jawa.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,12,30,0.65) 0%, rgba(5,12,30,0.5) 100%)"></div>
        <div class="section-content">
            <div class="section-label">Doa & Ucapan</div>
            <h2 class="section-title">Kirim Pesan</h2>
            <p class="section-sub">Tuliskan doa dan ucapan terbaik untuk kami</p>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
            <form class="message-form" id="messageForm">
                <div class="form-group">
                    <input type="text" id="guestName" name="guestName" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                    <textarea id="guestMessage" name="guestMessage" placeholder="Tulis pesan atau doa..." rows="4" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn-send">
                        <i class="fa-solid fa-paper-plane"></i> Kirim Pesan
                    </button>
                    <a href="https://wa.me/6288226668254?text=Assalamualaikum%20Natasya%20%26%20Riko%2C%20saya%20ingin%20memberikan%20ucapan%20selamat%20atas%20pernikahan%20kalian" target="_blank" class="btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </form>
            <div id="messagesDisplay" class="messages-display"></div>
        </div>
    </section>

    <!-- ========== THANK YOU ========== -->
    <section class="section-parallax thankyou-section">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/backgroundflower2.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,12,30,0.78) 0%, rgba(5,12,30,0.65) 100%)"></div>
        <div class="section-content">
            <div class="thankyou-top-ornament">
                <span></span><span></span><span></span>
            </div>
            <p class="section-label">With Love</p>
            <h2 class="thankyou-title">Thank You</h2>
            <h3 class="thankyou-names">Natasya &amp; Riko</h3>
            <div class="thankyou-divider"></div>
            <p class="thankyou-quote">
                Terima kasih telah menjadi bagian dari hari paling istimewa dalam hidup kami.<br>
                Kehadiran, doa, dan senyum kalian adalah hadiah terindah yang tak ternilai harganya.
            </p>
            <p class="thankyou-sub">
                Semoga setiap kebaikan yang kalian berikan kembali berlipat ganda.<br>
                Kami sangat bahagia bisa berbagi momen ini bersama orang-orang terkasih.
            </p>
            <div class="thankyou-bottom-ornament">
                <span></span>
                <i class="fa-solid fa-heart"></i>
                <span></span>
            </div>
        </div>
    </section>

    <!-- ========== NAVBAR ========== -->
    <div class="bottom-navbar">
        <a href="#landingPage" class="navbar-item active" aria-label="Beranda"><i class="fa-solid fa-house"></i></a>
        <a href="#gallerySection" class="navbar-item" aria-label="Gallery"><i class="fa-solid fa-heart"></i></a>
        <a href="#loveStorySection" class="navbar-item" aria-label="Love Story"><i class="fa-solid fa-scroll"></i></a>
        <a href="#dateSection" class="navbar-item" aria-label="Tanggal"><i class="fa-solid fa-calendar-days"></i></a>
        <a href="#messageSection" class="navbar-item" aria-label="Pesan"><i class="fa-solid fa-comment"></i></a>
    </div>

    <script>
    // Countdown
    (function() {
        var target = new Date('2026-11-11T00:00:00');
        function update() {
            var now = new Date();
            var diff = target - now;
            if (diff <= 0) {
                ['days','hours','minutes','seconds'].forEach(function(id) {
                    document.getElementById(id).textContent = '0';
                });
                return;
            }
            document.getElementById('days').textContent    = Math.floor(diff / 86400000);
            document.getElementById('hours').textContent   = Math.floor((diff % 86400000) / 3600000);
            document.getElementById('minutes').textContent = Math.floor((diff % 3600000) / 60000);
            document.getElementById('seconds').textContent = Math.floor((diff % 60000) / 1000);
            }
            update();
            setInterval(update, 1000);
        })();

    // Parallax
    (function() {
        var bgs = document.querySelectorAll('.parallax-bg');
        var ticking = false;
        function update() {
            var scrollY = window.scrollY || window.pageYOffset;
            bgs.forEach(function(bg) {
                var section = bg.parentElement;
                var rect = section.getBoundingClientRect();
                var sectionTop = scrollY + rect.top;
                var rel = scrollY - sectionTop;
                bg.style.transform = 'translateY(' + (rel * 0.3) + 'px)';
            });
            ticking = false;
        }
        window.addEventListener('scroll', function() {
            if (!ticking) { requestAnimationFrame(update); ticking = true; }
        }, { passive: true });
        update();
    })();
    </script>
</body>
</html>