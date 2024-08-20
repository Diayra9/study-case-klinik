<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Our Clinic</title>
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
    <!--- LOCATION --->
    <div class="container-6">
        <h2 style="text-align: center;">Our Location</h2>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />
        <div class="line-1"></div><br><br>

        <div class="locations">
            <div class="location-card">
                <h2 class="location-name eternelle-surabaya">Eternelle Surabaya</h2>
                <img src="{{ asset('assets/images/surabaya.jpg') }}" alt="Location 1" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Siwalankerto Permai 10</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>

            <div class="location-card">
                <h2 class="location-name eternelle-surakarta">Eternelle Surakarta</h2>
                <img src="{{ asset('assets/images/surakarta.jpg') }}" alt="Location 2" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Dr Wahidin Surakarta</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>

            <div class="location-card">
                <h2 class="location-name eternelle-sidoarjo">Eternelle Sidoarjo</h2>
                <img src="{{ asset('assets/images/sidoarjo.jpg') }}" alt="Location 3" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Abdul Rahman 02</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>

            <div class="location-card">
                <h2 class="location-name eternelle-bandung">Eternelle Bandung</h2>
                <img src="{{ asset('assets/images/bandung.jpg') }}" alt="Location 4" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Mohamad Toha 08</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>

            <div class="location-card">
                <h2 class="location-name eternelle-jakarta">Eternelle Jakarta</h2>
                <img src="{{ asset('assets/images/jakarta.jpeg') }}" alt="Location 5" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Bekasi Timur Raya</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>

            <div class="location-card">
                <h2 class="location-name eternelle-jogja">Eternelle Jogja</h2>
                <img src="{{ asset('assets/images/jogja.jpg') }}" alt="Location 6" class="location-card-img">
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon" class="icon">
                    <p class="address">Jl. Dewan Karangnongko</p>
                </div>
                <div class="location-info">
                    <img src="{{ asset('assets/images/icons8-phone-30.png') }}" alt="Phone Icon" class="icon">
                    <p class="phone">08819041223</p>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
@include('homepage.partials.footer')
</body>
</html>