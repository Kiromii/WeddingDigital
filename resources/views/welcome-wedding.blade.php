<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Digital - Wedding</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Great+Vibes:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
</head>
<body>
    <!-- Landing / Cover Page -->
    <div id="landingPage" class="landing-page">
        <!-- Content -->
        {{-- <div class="landing-content">
            <!-- Central Monogram Circle -->
            <div class="monogram-container">
                <div id="monogramCircle" class="monogram-circle">
                    <div class="monogram-content">
                        <span class="monogram-text">B & B</span>
                    </div>
                </div>
            </div> --}}

            <!-- Photo Door - Left -->
            <div class="photo-door photo-left" id="photoLeft" style="background-image: url('{{ asset('images/photo-left.jpg') }}');"></div>

            <!-- Photo Door - Right -->
            <div class="photo-door photo-right" id="photoRight" style="background-image: url('{{ asset('images/photo-right.jpg') }}');"></div>
        </div>

    <!-- Hidden Audio Element -->
    <audio id="backgroundMusic" preload="none">
        <source src="{{ asset('music/wedding-music.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
</body>
</html>
