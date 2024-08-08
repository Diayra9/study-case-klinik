<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle Beaute</title>
    <link rel="icon" href="{{ asset('../public/assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('../public/styles.css') }}" />
</head>

<body>
@include('header')
    <!--- BANNER --->
    <div class="klinik-1"></div>
    <div class="rectangle-1"></div>
    <div class="hero">
        <h1 class="main-title">Étern<span class="highlight-text">e</span>lle B<span class="highlight-text">e</span>auté
        </h1>
        <p class="subtitle">Great experience with the best treatment</p>
        <div class="cta-buttons">
            <button class="cta-button">Our Treatment</button>
            <button class="cta-button location-button">Our Location</button>
            <button class="cta-button">Our Product</button>
        </div>
    </div>
    
    <!--- TREATMENT --->
    <section class="treatment-section">
        <div class="container-8">
            <h2>Menghadirkan <span class="highlight">Kecantikan Abadi</span> dengan Sentuhan Profesionalisme dan Elegansi</h2>
            <p class="intro-text">
                Selamat datang di Eternelle Beauté, tempat di mana kecantikan abadi Anda diwujudkan dengan sempurna. Kami menawarkan
                berbagai perawatan kecantikan eksklusif yang dirancang untuk mempercantik dan memperbaharui penampilan Anda. Anda akan
                merasakan transformasi yang memikat. Di Eternelle Beauté, kami percaya bahwa setiap orang memiliki kecantikan unik yang
                layak untuk dipertahankan dan ditingkatkan. Oleh karena itu, kami menyediakan layanan yang dipersonalisasi sesuai dengan
                kebutuhan Anda, mulai dari perawatan wajah, tubuh, hingga peremajaan kulit.
            </p>
            <div class="treatment-grid">
                <div class="treatment-card">
                    <img src="{{ asset('../public/assets/images/download_1.jpeg') }}" alt="Deep Cleansing Facial"
                        class="treatment-image">
                    <div class="treatment-info">
                        <h3>Deep Cleansing Facial</h3>
                        <p>Perawatan ini membersihkan kulit secara mendalam.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('../public/assets/images/download_171.jpeg') }}" alt="Laser Treatment"
                        class="treatment-image">
                    <div class="treatment-info">
                        <h3>Laser Treatment</h3>
                        <p>Mengatasi berbagai masalah kulit seperti jerawat, pigmentasi, dan kerutan.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('../public/assets/images/download_241.jpeg') }}"
                        alt="Detox Treatment" class="treatment-image">
                    <div class="treatment-info">
                        <h3>Detox Treatment</h3>
                        <p>Perawatan untuk membersihkan racun dari tubuh.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('../public/assets/images/facial.jpg') }}" alt="Hydration Facial" class="treatment-image">
                    <div class="treatment-info">
                        <h3>Hydration Facial</h3>
                        <p>Memberikan kelembapan mendalam pada kulit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- PRODUCT --->
    <div class="product">
        <div class="produk">
            <div class="rekomendasi-produk">
                REKOMENDASI PRODUK
            </div>
            <div class="pilihanterbaikuntukmu">
                PILIHAN TERBAIK UNTUKMU
            </div>
            <div class="group-3">
                <div class="container-5">
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('../public/assets/images/download_removebg_preview_1.png') }}" alt="The Bath Box Barrier Fit"
                                class="product-image">
                        </div>
                        <div class="product-name">The Bath Box Barrier Fit</div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('../public/assets/images/whats_app_image_20240719_at_160837_b_3_aee_2_da_removebg_preview_1.png') }}"
                                alt="Whitelab Hydrating Sleeping Mask" class="product-image">
                        </div>
                        <div class="product-name">Whitelab Hydrating Sleeping Mask</div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('../public/assets/images/whats_app_image_20240719_at_160921_b_692860_aremovebg_preview_1.png') }}"
                                alt="Daviena Skincare Hand Body Dosting" class="product-image">
                        </div>
                        <div class="product-name">Daviena Skincare Hand Body Dosting</div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('../public/assets/images/whats_app_image_20240719_at_1610008_f_3_b_47_d_7_removebg_preview_1.png') }}"
                                alt="Purbasari Lulur Mandi" class="product-image">
                        </div>
                        <div class="product-name">Purbasari Lulur Mandi</div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('../public/assets/images/whats_app_image_20240719_at_161039_dd_307_dcc_removebg_preview_1.png') }}"
                                alt="Ellips Hair Vitamin Silky Black" class="product-image">
                        </div>
                        <div class="product-name">Ellips Hair Vitamin Silky Black</div>
                    </div>
                </div>
            </div> <br><br>
            <div class="button">
                <span class="button-1">
                    PRODUK LAINNYA &gt;&gt;
                </span>
            </div>
        </div>
    </div>

    <!--- EXPERTS --->
    <div class="experts">
        <div class="container-2">
            <div class="meet-our-experts">
                Meet Our Experts
            </div>
            <div class="line"></div>
            <div class="container-3">
                <div class="expert">
                    <img src="{{ asset('../public/assets/images/fu_1.jpeg') }}" alt="Dr. Reza Graha" class="expert-image">
                    <div class="expert-info">
                        <h3>Dr. Reza Graha, M.D, Sp.KK</h3>
                        <p>Dermatologist</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('../public/assets/images/fu_11.jpeg') }}" alt="Dr. Alina Pratiwi" class="expert-image">
                    <div class="expert-info">
                        <h3>Dr. Alina Pratiwi, M.B.B.Ch.</h3>
                        <p>Aesthetic Doctor</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('../public/assets/images/download_2.jpeg') }}" alt="Dr. Clara Riana" class="expert-image">
                    <div class="expert-info">
                        <h3>Clara Riana, Cosmetologist</h3>
                        <p>Beauty Therapy</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('../public/assets/images/image.jpeg') }}" alt="Dr. Maya Kusuma" class="expert-image">
                    <div class="expert-info">
                        <h3>Maya Kusuma, Esthetician</h3>
                        <p>Skin Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/085859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
@include('footer')
</body>

</html>