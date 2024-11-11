<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Our Éternelle Beauté Clinic</title>
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

    <div class="clinic-section">
        <div class="text-section">
            <h1 class="main-title">Étern<span class="highlight-text">e</span>lle B<span
                    class="highlight-text">e</span>auté</h1>
            <p>Founded by a Beauty Doctor who has decades of experience in the field of aesthetics and beauty. Stay
                Beauty Aesthetic Clinic as the leading aesthetic and anti aging clinic is a beauty and health clinic.
                We provide effective medical beauty treatments with modern technology in the form of laser treatments,
                non-surgical facelifts, dermal fillers, facials, PRP+, non-invasive body contouring and rejuvenations
                for men and women.</p>
            <p>Many of the treatments at Stay Beauty clinic are non-invasive and require zero downtime - safe and
                popular among young professionals, senior executives, housewives and active parents from all walks of
                life.</p>
            <p>Our passion is to provide the best beauty services. By formulating a 5 star service that prioritizes
                comfort and adapts effective medical aesthetic treatments.</p>
            <p>You can trust yourself to your care without worry. Stay Beauty offers choices that can help you appear
                confident. Supported by a team of trained and professional doctors, we will help you meet your treatment
                needs.</p>
            <p><em>It's never too late to turn back the clock and maintain your appearance.</em></p>
        </div>
        <div class="image-section">
            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="Stay Beauty Aesthetic Clinic">
        </div>
    </div>


    <div class="timeline">
        <h2 style="text-align: center;">Our History</h2>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />
        <div class="line-1"></div><br><br>

        <input type="radio" id="year2005" name="year" checked>
        <input type="radio" id="year2006" name="year">
        <input type="radio" id="year2007" name="year">
        <input type="radio" id="year2008" name="year">

        <div class="slider">
            <label for="year2005">2005</label>
            <label for="year2006">2006</label>
            <label for="year2007">2007</label>
            <label for="year2008">2008</label>
        </div>

        <div class="description">
            <div class="content2" data-year="2005">
                <div>
                    <h2>Lahirnya Éternelle Beauté</h2>
                    <p>Seorang dokter ternama yang sangat menyukai bidang industri kecantikan mulai mewujudkan mimpinya
                        membangun dan mengelola klinik kecantikan sebagai solusi bagi problem kecantikan dan kesehatan
                        kulit. Tepat pada tanggal 25 Juli 2005, Éternelle Beauté pertama berdiri di jalan Siwalankerto Permai
                        nomor 10, Surabaya, Jawa Timur.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us2.webp') }}" alt="Image for 2005" />
            </div>

            <div class="content2" data-year="2006">
                <div>
                    <h2>Memperluas Cabang</h2>
                    <p>Miracle cabang Surakarta, dan Jakarta dibuka tahun 2006. Cabang baru dibuka di Jakarta pada bulan
                        September, sedangkan cabang Surakarta dibuka pada bulan Desember.
                    </p>
                </div>
                <img src="{{ asset('assets/images/Refreshing HydraFacial.jpeg') }}" alt="Image for 2006" />
            </div>

            <div class="content2" data-year="2007">
                <div>
                    <h2>Cabang Bandung</h2>
                    <p>Pada tahun 2007, cabang baru di Bandung didirikan. Dengan dukungan tim profesional, klinik ini
                        terus berkembang.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us4.png') }}" alt="Image for 2007" />
            </div>

            <div class="content2" data-year="2008">
                <div>
                    <h2>Cabang Bandung</h2>
                    <p>Pada tahun 2007, cabang baru di Bandung didirikan. Dengan dukungan tim profesional, klinik ini
                        terus berkembang.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us5.png') }}" alt="Image for 2008" />
            </div>
        </div>
    </div>

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
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon"
                        class="icon">
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
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon"
                        class="icon">
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
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon"
                        class="icon">
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
                    <img src="{{ asset('assets/images/icons8-location-30.png') }}" alt="Location Icon"
                        class="icon">
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
