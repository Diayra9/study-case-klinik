<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Data Information</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
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
                            <h1>Data Information</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active">Information</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="fa fa-eye"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Treatment Show</span>
                                    <span class="info-box-number">{{ $data['show_treatments'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-success"><i class="fa fa-check-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reservation Attended</span>
                                    <span class="info-box-number">{{ $data['attended_reservations'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-warning"><i class="fa fa-times-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Reservation Canceled</span>
                                    <span class="info-box-number">{{ $data['canceled_reservations'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-danger"><i class="far fa-id-card"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Valid Membership</span>
                                    <span class="info-box-number">{{ $data['verified_memberships'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- =========================================================== -->
                    <h5 class="mb-2">Product</h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="fa fa-boxes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">All Stock</span>
                                    <span class="info-box-number">{{ $data['total_stock'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-success"><i class="fa fa-shield-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">BPOM Approved</span>
                                    <span class="info-box-number">{{ $data['bpom_approved'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-warning"><i class="fa fa-check-circle"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Halal Approved</span>
                                    <span class="info-box-number">{{ $data['halal_approved'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-danger"><i class="fa fa-eye"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Product Show</span>
                                    <span class="info-box-number">{{ $data['show_products'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- =========================================================== -->
                    {{-- <h5 class="mb-2">Status Product and Treatment</h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Product Show</span>
                                    <span class="info-box-number">{{ $data['show_products'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Product Hide</span>
                                    <span class="info-box-number">Small</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Treatment Show</span>
                                    <span class="info-box-number">{{ $data['show_treatments'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box shadow">
                                <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Treatment Hide</span>
                                    <span class="info-box-number">Large</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>

            <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button"
                aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
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
