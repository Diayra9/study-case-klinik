<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | FAQ</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin.partials.preloader')
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>FAQ - Frequently Asked Question</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">FAQ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12" id="accordion">
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        1. How to add a new product or new treatment to the system?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    In the Dashboard you can see "Product", click on the "Add Product" button. Fill out the required details such as product name,
                                    product code, price, stock, description, and upload images, then click "Create New Product". <br>
                                    For the Treatment, you can click on the "Add Treatment" button. Fill out the required details such as treatment name,
                                    price, description, and upload images, then click "Create New Treatment".
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        2. How do we manage reservations?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Go to the "Reservations" section. You can view, edit, or update the status of each reservation.
                                    Use the search filters to find specific reservations based on date, customer name, or treatment type.
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        3. What do we do if we encounter a technical issue?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    For technical issues, you can contact the support team by submitting a ticket in the "Contact" section of the admin dashboard.
                                    Provide detailed information about the issue for faster resolution.
                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        4. What services do we offer at our clinic?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    We offer a wide range of services, including facials, body treatments, skin rejuvenation, laser treatments, and more.
                                    Each service is designed to enhance your natural beauty and promote overall well-being. We also selling so many beauty product with so many various brands.
                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        5. What is the cancellation policy?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    We require at least 24 hours' notice for any cancellations or rescheduling.
                                    If a cancellation is made less than 24 hours before the appointment, a cancellation fee may apply.
                                    So please be careful whenever you put various information that you need, don't forget to check it twice so there will be no problem afterwards.
                                </div>
                            </div>
                        </div>
                        <div class="card card-warning card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        6. Are the products and treatments safe?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseSix" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Yes, all our treatments are performed by certified professionals who use safe and approved techniques.
                                    And all our products are already get tested by so many proffesionals, with cruelty free and already received
                                    BPOM RI certificate number and MUI Halal certificates. Your safety and well-being are our top priority.
                                </div>
                            </div>
                        </div>
                        <div class="card card-danger card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        7. Do we offer any promotions or discounts?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Yes, we periodically offer promotions and special discounts. Be sure to check our website <a href="{{ url('BeautyClinic') }}">Éternelle Beauté</a>
                                    or follow our social media channels for updates on the latest offers. And make sure to have a membership, so you can have more various discounts!
                                </div>
                            </div>
                        </div>
                        <div class="card card-danger card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        8. What should I do before and after my treatment?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseEight" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Our professionals will provide specific aftercare instructions based on the treatment you received.
                                    Generally, we recommend avoiding direct sun exposure and following a gentle skincare routine after your treatment.
                                    And don't forget to use the products that we already prepared for you.
                                </div>
                            </div>
                        </div>
                        <div class="card card-danger card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        9. How long do treatments take?
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseNine" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    The duration of each treatment varies depending on the type of service.
                                    Typically, treatments can take anywhere from 30 minutes to 2 hours. 
                                    You can inquire about specific treatment durations when booking your appointment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <p class="lead">
                            <a href="{{ url('contact') }}">Contact us</a>,
                            if you found not the right anwser or you have a other question?<br />
                        </p>
                    </div>
                </div>
            </section>
        </div>
        @include('admin.partials.footer')
    </div>

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
</body>

</html>
