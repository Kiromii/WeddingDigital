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

    <!-- ========== HERO ========== -->
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
    <section class="section-quote" id="quoteSection"
    style="background-image: url('{{ asset('images/backgroundquote.jpg') }}')">
        <div class="quote-overlay"></div>
        <div class="section-content quote-content">
            <div class="quote-bismillah">﷽</div>
            <div class="quote-ref">QS. Ar-Rum : 21</div>
            <p class="quote-arabic">
                وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
            </p>
            <div class="quote-divider"><span></span><i class="fa-solid fa-star-and-crescent"></i><span></span></div>
            <p class="quote-translation">
                "Dan di antara tanda-tanda kebesaran-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda kebesaran Allah bagi kaum yang berpikir."
            </p>
        </div>
    </section>

    <!-- ========== GALLERY ========== -->
    <section class="section-parallax" id="gallerySection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/backgroundwedding.jpg') }}')"></div>
        <div class="parallax-overlay"></div>
        <div class="section-content">
            <div class="section-label">Our Moments</div>
            <h2 class="section-title">Wedding Gallery</h2>
            <p class="section-sub">Kenangan manis kami dalam setiap momen terbaik</p>
            <div class="gallery-ornament"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
            <div class="wedding-collage">
            <div class="left-column">
                <div class="photo" data-index="0"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                <div class="photo" data-index="1"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                <div class="photo" data-index="2"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
            </div>
            <div class="right-column">
                <div class="photo" data-index="3"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                <div class="photo" data-index="4"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
                <div class="photo" data-index="5"><img src="{{ asset('images/hero/wedding.jpeg') }}" data-src="{{ asset('images/hero/wedding.jpeg') }}"></div>
            </div>
        </div>
        </div>
    </section>

    <!-- ========== LOVE STORY ========== -->
    <section class="section-parallax" id="loveStorySection">
        <div class="parallax-bg" style="background-image: url('{{ asset('images/backgroundlovestory.jpg') }}')"></div>
        <div class="parallax-overlay" style="background: linear-gradient(180deg, rgba(5,12,30,0.7) 0%, rgba(5,12,30,0.55) 100%)"></div>
        <div class="section-content">

            <div class="ls-header">
                <em class="ls-script">Our</em>
                <h2 class="ls-heading">Love Story</h2>
                <div class="ls-header-line"><span></span><i class="fa-solid fa-heart"></i><span></span></div>
                <p class="ls-subtext">Empat langkah kecil yang membawa kami ke satu ikatan selamanya.</p>
            </div>

            <div class="timeline-container">
            <div class="timeline-line"></div>

            <div class="timeline-item timeline-right">
                <div class="timeline-marker"><i class="fa-solid fa-heart"></i></div>
                <div class="timeline-content">
                    <div class="timeline-title-row">
                        <span class="timeline-number">01</span>
                        <h3>Pertemuan</h3>
                    </div>
                    <p>Saat praktik kerja lapangan di kantor pemerintah kecamatan, saat itulah kami pertama kali berjumpa dan saling mengenal.</p>
                    <div class="timeline-date-row">Mei 2022</div>
                </div>
            </div>

            <div class="timeline-item timeline-left">
                <div class="timeline-marker"><i class="fa-solid fa-people-arrows"></i></div>
                <div class="timeline-content">
                    <div class="timeline-title-row">
                        <span class="timeline-number">02</span>
                        <h3>Menjalin Hubungan</h3>
                    </div>
                    <p>Dari tukar nomor WA untuk urusan surat, lalu mulai saling mengenal — seminggu kemudian kami resmi bersama.</p>
                    <div class="timeline-date-row">Agustus 2022</div>
                </div>
            </div>

            <div class="timeline-item timeline-right">
                <div class="timeline-marker"><i class="fa-solid fa-ring"></i></div>
                <div class="timeline-content">
                    <div class="timeline-title-row">
                        <span class="timeline-number">03</span>
                        <h3>Lamaran</h3>
                    </div>
                    <p>Meski jarak Blora–Semarang memisahkan, cinta kami tak pernah redup hingga tiba saat lamaran yang penuh haru.</p>
                    <div class="timeline-date-row">12 November 2023</div>
                </div>
            </div>

            <div class="timeline-item timeline-left">
                <div class="timeline-marker"><i class="fa-solid fa-church"></i></div>
                <div class="timeline-content">
                    <div class="timeline-title-row">
                        <span class="timeline-number">04</span>
                        <h3>Pernikahan</h3>
                    </div>
                    <p>Akhirnya, di hadapan Allah dan orang-orang tercinta, kami resmi menjadi sepasang suami istri.</p>
                    <div class="timeline-date-row">11 November 2026</div>
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
                Kami sangat bahagia bisa berbagi momen ini bersama orang-orang terkasih. 🤍
            </p>
            <div class="thankyou-bottom-ornament">
                <span></span>
                <i class="fa-solid fa-heart"></i>
                <span></span>
            </div>
        </div>
    </section>

    <!-- ========== LIGHTBOX ========== -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" id="lbClose"><i class="fa-solid fa-xmark"></i></button>
        <button class="lightbox-nav prev" id="lbPrev"><i class="fa-solid fa-chevron-left"></i></button>
        <img id="lbImg" src="" alt="Wedding Photo">
        <button class="lightbox-nav next" id="lbNext"><i class="fa-solid fa-chevron-right"></i></button>
        <div class="lightbox-counter" id="lbCounter"></div>
    </div>

    <!-- ========== NAVBAR ========== -->
    <div class="bottom-navbar">
        <a href="#landingPage" class="navbar-item active" aria-label="Beranda"><i class="fa-solid fa-house"></i></a>
        <a href="#gallerySection" class="navbar-item" aria-label="Gallery"><i class="fa-solid fa-heart"></i></a>
        <a href="#loveStorySection" class="navbar-item" aria-label="Love Story"><i class="fa-solid fa-scroll"></i></a>
        <a href="#dateSection" class="navbar-item" aria-label="Tanggal"><i class="fa-solid fa-calendar-days"></i></a>
        <a href="#messageSection" class="navbar-item" aria-label="Pesan"><i class="fa-solid fa-comment"></i></a>
    </div>

    <script>
    // Message form + localStorage
    (function() {
        var form    = document.getElementById('messageForm');
        var display = document.getElementById('messagesDisplay');
        var key     = 'wedding_messages';

        function timeAgo(ts) {
            var diff = Math.floor((Date.now() - ts) / 1000);
            if (diff < 60)   return diff + ' detik yang lalu';
            if (diff < 3600) return Math.floor(diff/60) + ' menit yang lalu';
            if (diff < 86400) return Math.floor(diff/3600) + ' jam yang lalu';
            return Math.floor(diff/86400) + ' hari yang lalu';
        }

        function attendanceBadge(val) {
            var map = {
                hadir:       { label: 'Hadir',        icon: 'fa-circle-check',    color: 'rgba(50,200,100,0.25)',  border: 'rgba(50,200,100,0.5)' },
                tidak_hadir: { label: 'Tidak Hadir',  icon: 'fa-circle-xmark',    color: 'rgba(220,80,80,0.25)',   border: 'rgba(220,80,80,0.5)' },
                ragu:        { label: 'Masih Ragu',   icon: 'fa-circle-question', color: 'rgba(220,180,50,0.25)',  border: 'rgba(220,180,50,0.5)' }
            };
            var m = map[val] || map['ragu'];
            return '<span class="msg-attendance" style="background:'+m.color+';border-color:'+m.border+'"><i class="fa-solid '+m.icon+'"></i> '+m.label+'</span>';
        }

        function renderMessages() {
            var msgs = JSON.parse(localStorage.getItem(key) || '[]');
            display.innerHTML = '';
            if (!msgs.length) {
                display.innerHTML = '<p class="messages-empty">Belum ada pesan. Jadilah yang pertama!</p>';
                return;
            }
            msgs.slice().reverse().forEach(function(m) {
                var el = document.createElement('div');
                el.className = 'message-item';
                el.innerHTML =
                    '<div class="message-top">' +
                        '<div class="message-avatar">' + m.name.charAt(0).toUpperCase() + '</div>' +
                        '<div class="message-meta">' +
                            '<div class="message-name">' + m.name + ' <i class="fa-solid fa-circle-check msg-verified"></i></div>' +
                            '<div class="message-time">' + timeAgo(m.ts) + '</div>' +
                        '</div>' +
                        attendanceBadge(m.attendance) +
                    '</div>' +
                    '<p class="message-content">' + m.message + '</p>';
                display.appendChild(el);
            });
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var name       = document.getElementById('guestName').value.trim();
            var message    = document.getElementById('guestMessage').value.trim();
            var attendance = (form.querySelector('input[name="attendance"]:checked') || {}).value || 'ragu';
            if (!name || !message) return;
            var msgs = JSON.parse(localStorage.getItem(key) || '[]');
            msgs.push({ name: name, message: message, attendance: attendance, ts: Date.now() });
            localStorage.setItem(key, JSON.stringify(msgs));
            form.reset();
            renderMessages();
        });

        renderMessages();
        setInterval(renderMessages, 30000);
    })();

    // Countdown
    (function() {
        var target = new Date('2026-11-11T08:00:00+07:00');
        function pad(n) { return n < 10 ? '0' + n : '' + n; }
        function update() {
            var now = new Date();
            var diff = target - now;
            if (diff <= 0) {
                ['days','hours','minutes','seconds'].forEach(function(id) {
                    document.getElementById(id).textContent = '00';
                });
                return;
            }
            document.getElementById('days').textContent    = Math.floor(diff / 86400000);
            document.getElementById('hours').textContent   = pad(Math.floor((diff % 86400000) / 3600000));
            document.getElementById('minutes').textContent = pad(Math.floor((diff % 3600000) / 60000));
            document.getElementById('seconds').textContent = pad(Math.floor((diff % 60000) / 1000));
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

    // Lightbox
    (function() {
        var photos  = Array.from(document.querySelectorAll('.photo img'));
        var lb      = document.getElementById('lightbox');
        var lbImg   = document.getElementById('lbImg');
        var lbClose = document.getElementById('lbClose');
        var lbPrev  = document.getElementById('lbPrev');
        var lbNext  = document.getElementById('lbNext');
        var lbCount = document.getElementById('lbCounter');
        var current = 0;

        function open(index) {
            current = index;
            var src = photos[current].getAttribute('data-src') || photos[current].src;
            lbImg.src = src;
            lbCount.textContent = (current + 1) + ' / ' + photos.length;
            lb.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function close() {
            lb.classList.remove('active');
            document.body.style.overflow = '';
        }

        function prev() { open((current - 1 + photos.length) % photos.length); }
        function next() { open((current + 1) % photos.length); }

        photos.forEach(function(img, i) {
            img.parentElement.addEventListener('click', function() { open(i); });
        });

        lbClose.addEventListener('click', close);
        lbPrev.addEventListener('click', function(e) { e.stopPropagation(); prev(); });
        lbNext.addEventListener('click', function(e) { e.stopPropagation(); next(); });
        lb.addEventListener('click', function(e) { if (e.target === lb) close(); });

        document.addEventListener('keydown', function(e) {
            if (!lb.classList.contains('active')) return;
            if (e.key === 'Escape')     close();
            if (e.key === 'ArrowLeft')  prev();
            if (e.key === 'ArrowRight') next();
        });
    })();
    </script>
</body>
</html>