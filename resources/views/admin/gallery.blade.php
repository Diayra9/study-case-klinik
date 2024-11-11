<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Gallery</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="admin/plugins/ekko-lightbox/ekko-lightbox.css">
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
                            <h1>Gallery</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Gallery Beauty Clinic</h4>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="btn-group w-100 mb-2">
                                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                                            <div class="float-right">
                                                <select class="custom-select" style="width: auto;" data-sortOrder>
                                                    <option value="index"> Sort by Position </option>
                                                    <option value="sortData"> Sort by Custom Data </option>
                                                </select>
                                                <div class="btn-group">
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white">
                                                    <img src="{{ asset('assets/images/image.jpeg') }}" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                                                    <img src="{{ asset('assets/images/download_2.jpeg') }}" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                                                    <img src="{{ asset('assets/images/fu_1.jpeg') }}" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                                                    <img src="{{ asset('assets/images/fu_11.jpeg') }}" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                                                    <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                                                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                                                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                                <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                                                    <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Location Picture</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/sidoarjo.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/surabaya.jpg') }}" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/surakarta.jpg') }}" class="img-fluid mb-2" alt="red sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/jogja.jpg') }}" class="img-fluid mb-2" alt="red sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/jakarta.jpeg') }}" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                                                <img src="{{ asset('assets/images/bandung.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                                                <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('admin.partials.footer')
    </div>

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="admin/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>
