<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | Dashboard</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.partials.preloader')
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Product</h3>
                                    <p>With so many different Brand</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ url('products/create') }}" class="small-box-footer">Add Product <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>Treatment</h3>
                                    <p>Various adjustments to suit needs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-heart"></i>
                                </div>
                                <a href="{{ url('treatments/create') }}" class="small-box-footer">Add Treatment <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Membership</h3>
                                    <p>Enjoy various discount</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ url('memberships/create') }}" class="small-box-footer">Add Membership <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Reservation</h3>
                                    <p>Booking just with one click</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="{{ url('reservations/create') }}" class="small-box-footer">Add Reservation <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <!-- TO DO List -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        To Do List
                                    </h3>

                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="todo-list" data-widget="todo-list">
                                        <li>
                                            <!-- drag handle -->
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo1" id="todoCheck1" checked>
                                                <label for="todoCheck1"></label>
                                            </div>
                                            <!-- todo text -->
                                            <span class="text">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                                                mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                                <label for="todoCheck2"></label>
                                            </div>
                                            <span class="text">Make the theme responsive</span>
                                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 days</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo3" id="todoCheck3" checked>
                                                <label for="todoCheck3"></label>
                                            </div>
                                            <span class="text">Make The User Design</span>
                                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1
                                                day</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo4"
                                                    id="todoCheck4">
                                                <label for="todoCheck4"></label>
                                            </div>
                                            <span class="text">Make mobile user interface</span>
                                            <small class="badge badge-success"><i class="far fa-clock"></i> 4 days</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo5"
                                                    id="todoCheck5">
                                                <label for="todoCheck5"></label>
                                            </div>
                                            <span class="text">Finishing our website!!</span>
                                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1
                                                month</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo6"
                                                    id="todoCheck6">
                                                <label for="todoCheck6"></label>
                                            </div>
                                            <span class="text">Finish the Report and our PKL</span>
                                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer clearfix">
                                    <button type="button" class="btn btn-primary float-right"><i
                                            class="fas fa-plus"></i> Add item</button>
                                </div>
                            </div>
                        </section>

                        <!-- Right col -->
                        <section class="col-lg-5 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Data
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart"
                                                    data-toggle="tab">Area</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @include('admin.partials.footer')
    </div>

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="admin/plugins/chart.js/Chart.min.js"></script>
    <script>
        // Chart untuk Revenue (Area Chart)
        var revenueChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d')
        var revenueChart = new Chart(revenueChartCanvas, {
            type: 'line',
            data: {
                labels: @json($labels),
                datasets: @json($datasets),
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                }
            }
        })

        // Chart untuk Sales (Donut Chart)
        var salesChartCanvas = document.getElementById('sales-chart-canvas').getContext('2d')
        var salesChart = new Chart(salesChartCanvas, {
            type: 'doughnut', // Tipe donut chart
            data: {
                labels: @json($labels2),
                datasets: @json($datasets2),
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
            }
        })
    </script>

    <!-- Sparkline -->
    <script src="admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.js"></script>
</body>

</html>
