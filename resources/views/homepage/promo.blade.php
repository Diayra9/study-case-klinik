<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle Beauté Promo</title>
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
    <div class="promo-container">
        <h2 style="text-align: center;">Exclusive Promo</h2>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />
        <p>Get up to 50% off on all treatments and products. Enhance your beauty with our exclusive offers!</p>
        <div class="line-1"></div><br><br>

        <section id="promo-details" class="promo-details">
            <div class="promo-card2">
                <h2>Facial Treatment</h2>
                <p>Special price for all facial treatments. Experience deep cleansing and rejuvenating care!</p>
                <span class="discount">40 % OFF</span>
                <span class="expiry">Expires: Nov 30, 2024</span>
            </div>
            <div class="promo-card">
                <h2>Body Spa</h2>
                <p>Relax and unwind with our premium body spa services. Available now at a discounted price.</p>
                <span class="discount">30 % OFF</span>
                <span class="expiry">Expires: Nov 10, 2024</span>
            </div>
            <div class="promo-card2">
                <h2>Hair Care Package</h2>
                <p>Take advantage of our special hair care package to get that healthy and beautiful hair you desire.
                </p>
                <span class="discount">50 % OFF</span>
                <span class="expiry">Expires: Nov 23, 2024</span>
            </div>
            <div class="promo-card">
                <h2>Anti-Aging Treatment</h2>
                <p>Rejuvenate your skin with our exclusive anti-aging treatments. Look youthful and fresh!</p>
                <span class="discount">35 % OFF</span>
                <span class="expiry">Expires: Nov 26, 2024</span>
            </div>
            <div class="promo-card2">
                <h2>Acne Treatment</h2>
                <p>Effective acne treatments to help you achieve smooth and flawless skin.</p>
                <span class="discount">45 % OFF</span>
                <span class="expiry">Expires: Nov 19, 2024</span>
            </div>
            <div class="promo-card">
                <h2>Manicure & Pedicure</h2>
                <p>Pamper your hands and feet with our manicure and pedicure treatments.</p>
                <span class="discount">25 % OFF</span>
                <span class="expiry">Expires: Nov 30, 2024</span>
            </div>
        </section>

        <!-- Discover Offers Button Positioned Below the Promo Cards -->
        <div class="cta-button-container">
            <a href="{{ url('add-appointment') }}" class="cta-button2">Get The Discount!</a>
            <a href="{{ url('display-treatment') }}" class="cta-button2">Check Another Treatment</a>
        </div>
    </div>
    
    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    @include('homepage.partials.footer')
</body>

</html>
