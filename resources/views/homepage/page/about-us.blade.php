@extends('homepage.template.layout')

@section('title', 'About Éternelle Beauté Clinic')

@section('content')
    <!--- DESCRIPTION --->
    <div class="clinic-section">
        <div class="text-section">
            <h1 class="main-title">Étern<span class="highlight-text">e</span>lle B<span class="highlight-text">e</span>auté</h1>
            <p>Founded by a Beauty Doctor who has decades of experience in the field of aesthetics and beauty. Éternelle Beauté 
                Clinic as the leading aesthetic and anti aging clinic is a beauty and health clinic. 
                We provide effective medical beauty treatments with modern technology in the form of laser treatments, 
                non-surgical facelifts, dermal fillers, facials, PRP+, non-invasive body contouring and rejuvenations 
                for men and women.</p>
            <p>Many of the treatments at Éternelle Beauté Clinic are non-invasive and require zero downtime - safe and
                popular among young professionals, senior executives, housewives and active parents from all walks of
                life.</p>
            <p>Our passion is to provide the best beauty services. By formulating a 5 star service that prioritizes
                comfort and adapts effective medical aesthetic treatments.</p>
            <p>You can trust yourself to your care without worry. Éternelle Beauté Clinic offers choices that can help you appear
                confident. Supported by a team of trained and professional doctors, we will help you meet your treatment
                needs.</p><br>
            <p><em>Try our services as soon as possible.</em></p>
        </div>
        <div class="image-section">
            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="Éternelle Beauté Clinic">
        </div>
    </div>

    <!--- HISTORY & YEARS --->
    <div class="timeline">
        <h2 style="text-align: center;">Our History</h2>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />
        <div class="line-1"></div><br><br>

        <input type="radio" id="year2021" name="year" checked>
        <input type="radio" id="year2022" name="year">
        <input type="radio" id="year2023" name="year">
        <input type="radio" id="year2024" name="year">
        <input type="radio" id="year2025" name="year">

        <div class="slider">
            <label for="year2021">2021</label>
            <label for="year2022">2022</label>
            <label for="year2023">2023</label>
            <label for="year2024">2024</label>
            <label for="year2025">2025</label>
        </div>

        <div class="description">
            <div class="content2" data-year="2021">
                <div>
                    <h2>The Birth of Éternelle Beauté</h2>
                    <p>A renowned doctor with a passion for the beauty industry began to realize their dream
                        of building and managing a beauty clinic to address beauty and skin health issues.
                        On July 25, 2021, the first Éternelle Beauté clinic was established at Siwalankerto Permai street number 10, Surabaya, East Java.
                    </p>
                    <p>The clinic focused on providing high-quality beauty treatments, especially for skincare.
                        With a small but dedicated team of experts, Éternelle Beauté quickly gained a reputation for its excellent service,
                        attracting clients from different areas of the city.
                    </p>
                    <p>From the start, Éternelle Beauté was committed to providing top-quality beauty treatments using advanced technology. The clinic attracted many customers,
                        eager to improve their skin health with the guidance of experienced professionals. By the end of the year, the clinic had gained a strong reputation in the Surabaya area.
                        It quickly became known as one of the leading beauty clinics in the city, offering personalized care for each client.</p>
                </div>
                <img src="{{ asset('assets/images/about-us2.webp') }}" alt="Image for 2021" />
            </div>

            <div class="content2" data-year="2022">
                <div>
                    <h2>Expanding the Treatment Range</h2>
                    <p>Éternelle Beauté expanded its range of services to meet the growing demand for specialized beauty treatments.
                        New procedures for skin rejuvenation, anti-aging, and body contouring were introduced, attracting even more clients.
                    </p>
                    <p>To accommodate the increasing number of visitors, the clinic hired additional skilled professionals.
                        This helped maintain high-quality service while ensuring that each client received the attention they deserved.
                    </p>
                    <p>As Éternelle Beauté's reputation continued to grow, the clinic began to plan for further expansion. The management
                        started exploring new locations to open additional branches, aiming to reach more people outside of Surabaya.
                    </p>
                </div>
                <img src="{{ asset('assets/images/Refreshing HydraFacial.jpeg') }}" alt="Image for 2022" />
            </div>

            <div class="content2" data-year="2023">
                <div>
                    <h2>Opening New Branches</h2>
                    <p>We achieved a major milestone by opening its second branch. Located in a busy area of East Java,
                        the new clinic aimed to serve clients who had difficulty accessing the original location.
                    </p>
                    <p>
                        With the opening of the new branch, Éternelle Beauté introduced cutting-edge beauty treatments,
                        including laser therapy and non-invasive cosmetic procedures.
                        These services set the clinic apart from other beauty centers in the region.
                    </p>
                    <p>
                        The year also saw significant growth in the clinic's customer base, as word spread about its innovative treatments and excellent customer care.
                        The clinic became a favorite destination for people looking to enhance their appearance.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us4.png') }}" alt="Image for 2023" />
            </div>

            <div class="content2" data-year="2024">
                <div>
                    <h2>A Growing Network</h2>
                    <p>Éternelle Beauté had successfully established itself as a leading beauty clinic in East Java, with plans to expand beyond the region. The clinic continued to innovate
                        by introducing advanced treatments and collaborating with international beauty experts.
                    </p>
                    <p>
                        The management team focused on improving customer experience, investing in state-of-the-art equipment, and launching exclusive beauty packages.
                        Éternelle Beauté also started offering beauty consultations with renowned dermatologists.
                    </p>
                    <p>
                        Towards the end of 2024, Éternelle Beauté began planning to open more branches in major cities across Indonesia, marking the beginning of its journey to become a nationwide brand in the beauty industry.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us5.png') }}" alt="Image for 2024" />
            </div>
            
            <div class="content2" data-year="2025">
                <div>
                    <h2>National Recognition</h2>
                    <p>We gained national recognition as one of the top beauty clinics in Indonesia. With its consistent focus on quality and innovation, the clinic was featured in several prestigious beauty and health magazines,
                        solidifying its reputation across the country.
                    </p>
                    <p>
                        This year also marked the launch of Éternelle Beauté's signature skincare product line. Developed by in-house dermatologists, the products were designed to complement the treatments offered at the clinic,
                        allowing clients to maintain their skin care routine at home.
                    </p>
                    <p>
                        As demand for its services continued to grow, Éternelle Beauté expanded its training programs to ensure that all staff were up-to-date with the latest beauty techniques and technology. This dedication to staff development further enhanced
                        the clinic's ability to deliver top-notch service to its clients. By the end of 2025, Éternelle Beauté had opened additional branches in Jakarta and Bandung, extending its reach to a broader clientele and reinforcing its position as a national leader in the beauty industry.
                    </p>
                </div>
                <img src="{{ asset('assets/images/about-us1.jpg') }}" alt="Image for 2025" />
            </div>
        </div>
    </div>

    <!--- LOCATION --->
    <div id="location" class="container-6">
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
@endsection
