<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle Beauté</title>
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
    <!--- BANNER --->
    <div class="klinik-1"></div>
    <div class="rectangle-1"></div>
    <div class="hero">
        <h1 class="main-title">Étern<span class="highlight-text">e</span>lle B<span class="highlight-text">e</span>auté</h1>
        <p class="subtitle">Great experience with the best treatment</p>
        <div class="cta-buttons">
            <button class="cta-button" onclick="location.href='{{ url('display-treatment') }}'">Our Treatment</button>
            <button class="cta-button location-button" onclick="location.href='{{ url('about-us') }}'">Our Location</button>
            <button class="cta-button" onclick="location.href='{{ url('display-product') }}'">Our Product</button>
        </div>
    </div>

    <!--- TREATMENT --->
    <section class="treatment-section">
        <div class="container-8">
            <h2>Presenting <span class="highlight">Eternal Beauty</span> with a Touch of Professionalism, Aesthetics and Elegance</h2>
            <p class="intro-text">
                Welcome to Eternelle Beauté, a place where your timeless beauty can be perfectly realized. We offer a range of exclusive beauty treatments 
                designed to enhance and renew your appearance. You will experience a mesmerizing transformation. At Eternelle Beauté, we believe that
                everyone has a unique beauty that deserves to be preserved and enhanced. Therefore, we provide services tailored to your needs, from facials
                to body treatments to skin rejuvenation.
            </p>
            <div class="treatment-grid">
                <div class="treatment-card">
                    <img src="{{ asset('assets/images/download_1.jpeg') }}" alt="Deep Cleansing Facial"
                        class="treatment-image">
                    <div class="treatment-info">
                        <h3>Deep Cleansing Facial</h3>
                        <p>This treatment deeply cleanses the skin.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('assets/images/download_171.jpeg') }}" alt="Laser Treatment"
                        class="treatment-image">
                    <div class="treatment-info">
                        <h3>Laser Treatment</h3>
                        <p>Resolves various skin problems such as acne, pigmentation, and wrinkles.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('assets/images/download_241.jpeg') }}"
                        alt="Detox Treatment" class="treatment-image">
                    <div class="treatment-info">
                        <h3>Detox Treatment</h3>
                        <p>Treatment to cleanse toxins from the body.</p>
                    </div>
                </div>
                <div class="treatment-card">
                    <img src="{{ asset('assets/images/facial.jpg') }}" alt="Hydration Facial" class="treatment-image">
                    <div class="treatment-info">
                        <h3>Hydration Facial</h3>
                        <p>Provides deep moisture to the skin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- LABEL --->
    <div class="container-9">
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/halal.png') }}" alt="Halal MUI">
            <h3>HALAL MUI CERTIFIED</h3>
            <p>All Eternelle Aesthetic Products have received MUI Halal certificates.</p>
        </div>
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/bpom.png') }}" alt="Badan POM">
            <h3>BPOM RI CERTIFIED</h3>
            <p>All Eternelle Aesthetic Products have received a BPOM RI certificate number.</p>
        </div>
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/hewan.png') }}" alt="Cruelty Free">
            <h3>CRUELTY FREE</h3>
            <p>The entire process of making and testing does not harm any animals.</p>
        </div>
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/bahan.png') }}" alt="Minimal Ingredients">
            <h3>MINIMAL INGREDIENTS</h3>
            <p>Eternelle Products use formulas with minimal ingredients. Free of additives that your skin doesn't need.</p>
        </div>
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/bestseller (2).png') }}" alt="Best Seller">
            <h3>BEST SELLER PRODUCT</h3>
            <p>Thousands of Eternelle Aesthetic Products are sold every month in various marketplaces.</p>
        </div>
        <div class="test-item">
            <img class="image" src="{{ asset('assets/images/cht.png') }}" alt="Work on All Skin Types">
            <h3>WORK ON ALL SKIN TYPES</h3>
            <p>Thousands of testimonials prove the effectiveness of Eternelle Products on various types and conditions of skin until it returns to healthy.</p>
        </div>
    </div>

    <!--- PRODUCT --->
    <div class="product">
        <div class="produk">
            <div class="rekomendasi-produk">
                PRODUCT RECOMMENDATIONS
            </div>
            <div class="pilihanterbaikuntukmu">
                BEST CHOICE FOR YOU
            </div>
            <div class="group-3">
                <div class="container-5">
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('assets/images/download_removebg_preview_1.png') }}"
                            alt="The Bath Box Barrier Fit" class="product-image">
                        </div>
                        <div class="product-name">
                            <span class="spoiler-text">The Bath Box Barrier Fit</span>
                            <span class="panel" tabindex="0"></span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('assets/images/whats_app_image_20240719_at_1610008_f_3_b_47_d_7_removebg_preview_1.png') }}"
                            alt="Whitelab Hydrating Sleeping Mask" class="product-image">
                        </div>
                        <div class="product-name">
                            <span class="spoiler-text">Whitelab Hydrating Mask</span>
                            <span class="panel" tabindex="0"></span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('assets/images/whats_app_image_20240719_at_161039_dd_307_dcc_removebg_preview_1.png') }}"
                            alt="Daviena Skincare Hand Body Dosting" class="product-image">
                        </div>
                        <div class="product-name">
                            <span class="spoiler-text">Daviena Body Dosting</span>
                            <span class="panel" tabindex="0"></span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('assets/images/whats_app_image_20240719_at_160921_b_692860_aremovebg_preview_1.png') }}"
                            alt="Purbasari Lulur Mandi" class="product-image">
                        </div>
                        <div class="product-name">
                            <span class="spoiler-text">Purbasari Lulur Mandi</span>
                            <span class="panel" tabindex="0"></span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="rectangle">
                            <img src="{{ asset('assets/images/whats_app_image_20240719_at_160837_b_3_aee_2_da_removebg_preview_1.png') }}"
                            alt="Ellips Hair Vitamin Silky Black" class="product-image">
                        </div>
                        <div class="product-name">
                            <span class="spoiler-text">Ellips Hair Vitamin Silky</span>
                            <span class="panel" tabindex="0"></span>
                        </div>
                    </div>
                </div>
            </div> <br><br>
            <div class="button" onclick="location.href='{{ url('display-product') }}'">
                <span class="button-1">
                    OTHER PRODUCTS &gt;&gt;
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
                    <img src="{{ asset('assets/images/fu_1.jpeg') }}" alt="Dr. Reza Graha" class="expert-image">
                    <div class="expert-info">
                        <h3>Dr. Reza Graha, M.D, Sp.KK</h3>
                        <p>Dermatologist</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('assets/images/fu_11.jpeg') }}" alt="Dr. Alina Pratiwi" class="expert-image">
                    <div class="expert-info">
                        <h3>Dr. Alina Pratiwi, M.B.B.Ch.</h3>
                        <p>Aesthetic Doctor</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('assets/images/download_2.jpeg') }}" alt="Dr. Clara Riana" class="expert-image">
                    <div class="expert-info">
                        <h3>Clara Riana, Cosmetologist</h3>
                        <p>Beauty Therapy</p>
                    </div>
                </div>
                <div class="expert">
                    <img src="{{ asset('assets/images/image.jpeg') }}" alt="Dr. Maya Kusuma" class="expert-image">
                    <div class="expert-info">
                        <h3>Maya Kusuma, Esthetician</h3>
                        <p>Skin Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---BERITA--->
    <section class="update-news">
        <h2>Updates and Latest News</h2>
        <div class="line"></div>
        <div class="content">
            <div class="grid">
                <div class="news">
                    <h3>Collaboration with Various Influencers</h3>
                    <div class="image-container">
                        <p>Eternelle Clinic collaborates for <span class="color-text">"Naturally Healthy Skin"</span>, which aims
                        to increase awareness about the importance of <span class="bold-text">routine skin care</span>.</p>
                    </div>
                    <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="news">
                    <h3>New Service Just Launch!</h3>
                    <div class="image-container">
                        <p>Eternelle Clinic introduces facial treatments with the latest technology
                        that can help <span class="color-text">reduce wrinkles</span> in just <span class="bold-text">four weeks</span>.</p>
                    </div>
                    <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="news">
                    <h3>Expansion of Clinic Branches</h3>
                    <div class="image-container">
                        <p>Eternelle Clinic officially opens its 6th branch in the <span class="color-text">Bandung!</span> We offering
                        attractive <span class="bold-text">promotions</span> for skin care until the end of the month.</p>
                    </div>
                    <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                </div>
                <div class="news">
                    <h3>Big Awards in the Beauty Industry</h3>
                    <div class="image-container">
                        <p>Eternelle Clinic was named the<span class="color-text"> Best Clinic 2024 in the Beauty Awards</span>, for its innovation in using organic ingredients in every treatment.</p>
                    </div>
                    <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!--- TESTIMONI --->
    <section class="testimonials-section">
        <h2>What Our Clients Say</h2>
        <div class="line"></div>
        <div class="testimonials-slider">
            <!-- Set 1 -->
            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>Emily Johnson</h3>
                        <p>Brightening Facial</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "The Brightening Facial made a huge difference in my skin! My complexion looks so much more radiant and even-toned.
                    I absolutely love how refreshed and glowing my face feels after each session!"
                </p>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>Sarah Williams</h3>
                        <p>Dark Circle Treatment</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "I've struggled with dark circles for years, but after trying the Dark Circle Treatment, they've significantly reduced.
                    My eyes look brighter, and I feel more confident without makeup. This treatment truly works wonders!"
                </p>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>Olivia Carter</h3>
                        <p>Deep Cleansing Facial</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "The Deep Cleansing Facial was exactly what my skin needed! It removed all the impurities and left my skin feeling incredibly smooth and clean.
                    I noticed fewer breakouts and healthier-looking skin after just a few sessions."
                </p>
            </div>

            <!-- Set 2 (duplikat untuk menciptakan loop) -->
            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>John Michael Doe</h3>
                        <p>Anti-Dandruff Treatment</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "I used to deal with constant dandruff, but the Anti-Dandruff Treatment changed that! My scalp feels so much healthier, and I've noticed a huge reduction in flakes.
                    This treatment has made a big difference in my hair care routine"
                </p>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>Jessica Smith</h3>
                        <p>Hydration Facial</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "The Hydration Facial is my go-to for dry skin! My face feels deeply moisturized and plump after every session.
                    It's perfect for anyone looking to restore moisture and achieve a dewy glow."
                </p>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-author">
                    <div class="author-info">
                        <h3>David Thompson</h3>
                        <p>Medical Aesthetic Treatments</p>
                    </div>
                </div>
                <div class="rating">
                    &#9733; &#9733; &#9733; &#9733; &#9733;
                </div>
                <p class="testimonial-text">
                    "The Medical Aesthetic Treatments have transformed my skin! The results are visible and long-lasting,
                    and the process is always professional and comfortable. I couldn't be happier with how my skin looks and feels!"
                </p>
            </div>
        </div>
    </section>

    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    @include('homepage.partials.footer')
</body>

</html>