<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../public/styles.css') }}" />
</head>

<body>
    <!--- FOOTER --->
    <div class="footer">
        <div class="footer-content">
            <div class="column contact-us-column">
                <span class="contact-us">Contact Us</span>
                <div class="line-5"></div><br>
                <p class="working-hours-admin">
                    <strong>Working Hour Admin</strong><br>
                    Sunday - Saturday: 09:00 - 20:00
                </p> <br>
                <p class="working-hours-clinic">
                    <strong>Working Hour Clinic</strong><br>
                    Monday - Friday: 09:00 - 20:00<br>
                    Saturday & Sunday: 10:00 - 17:00
                </p>
            </div>
            <div class="column social-media-column">
                <span class="social-media">Social Media</span>
                <div class="line-6"></div><br>
                <p class="contact-number">Telegram: +62 858-5973-0416</p>
                <p class="instagram">Instagram: @Eternelle_Beaute</p>
                <p class="shopee">Shopee: Eternelle_Beaute</p>
            </div>
            <div class="column our-location-column">
                <span class="our-location">Our Central Location</span>
                <div class="line-4"></div><br>
                <p class="locations">
                    <strong>Surabaya</strong>
                    Jl. Siwalankerto Permai No.1A, Siwalankerto, Kec. Wonocolo<br><br>
                    <strong>Bandung</strong>
                    Jl. Mohamad Toha 08, Kawasan Summarecon, Kec. Gedebage<br><br>
                </p>
            </div>
        </div>
    </div>
    
    <!--- FOOTER BOTTOM --->
    <div class="footer-bottom">
        <div class="footer-content-2">
            <div class="left-content">
                <img src="{{ asset('../public/assets/images/logo-2.png') }}" alt="Logo" class="logo-img">
                <p class="ternellebeaut">Étern<span class="highlight">e</span>lle B<span class="highlight">e</span>auté</p>
            </div>
            <span class="all-rights-reserved">© 2024. All Rights Reserved</span>
        </div>
    </div>
</body>

</html>