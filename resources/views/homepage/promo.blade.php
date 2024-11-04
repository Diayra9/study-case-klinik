<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promo!</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
@include('homepage.partials.header')
    <!--- PROMO --->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Klinik Kecantikan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Promo Spesial di Klinik Kecantikan Kami!</h1>
        <p>Kecantikan alami dimulai dari perawatan terbaik. Manfaatkan promo spesial kami hari ini!</p>
        <a href="#promo" class="btn-main">Lihat Promo</a>
    </header>
    
    <section id="promo">
        <h2>Paket Promo Eksklusif</h2>
        <div class="promo-container">
            <div class="promo-card">
                <img src="facial.jpg" alt="Facial Treatment">
                <h3>Facial Treatment</h3>
                <p>Perawatan wajah dengan bahan alami untuk kulit bercahaya.</p>
                <span class="price">Diskon 30%</span>
                <button class="btn">Pesan Sekarang</button>
            </div>
            <div class="promo-card">
                <img src="body.jpg" alt="Body Spa">
                <h3>Body Spa</h3>
                <p>Relaksasi tubuh lengkap dengan aroma terapi yang menenangkan.</p>
                <span class="price">Diskon 25%</span>
                <button class="btn">Pesan Sekarang</button>
            </div>
            <div class="promo-card">
                <img src="glow.jpg" alt="Glowing Skin Package">
                <h3>Glowing Skin Package</h3>
                <p>Perawatan intensif untuk kulit bersinar dan sehat.</p>
                <span class="price">Diskon 40%</span>
                <button class="btn">Pesan Sekarang</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Klinik Kecantikan. All Rights Reserved.</p>
        <p>Follow us on:
            <a href="#">Instagram</a> | <a href="#">Facebook</a> | <a href="#">Twitter</a>
        </p>
    </footer>
</body>
</html>


    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
@include('homepage.partials.footer')
</body>

</html>