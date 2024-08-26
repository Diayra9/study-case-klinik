<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Edit Membership</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin.partials.preloader')
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark"></aside> --}}

        <!-- Content Wrapper. Contains page content -->
        <form name="membershipForm" action="{{ url('memberships/' . $membership->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Membership Edit</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ url('memberships') }}">Memberships</a></li>
                                    <li class="breadcrumb-item active">Edit Membership</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $membership->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_phone">No Phone</label>
                                        <input type="number" name="no_phone" class="form-control" value="{{ $membership->no_phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $membership->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control" rows="4">{{ $membership->address }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Date of Birthday</label>
                                        <input type="date" name="birthday" class="form-control" value="{{ $membership->birthday }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control custom-select">
                                            <option value="2" @if ($membership->gender == 2) selected @endif>Other</option>
                                            <option value="1" @if ($membership->gender == 1) selected @endif>Male</option>
                                            <option value="0" @if ($membership->gender == 0) selected @endif>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="valid_status">Valid Status</label>
                                        <select name="valid_status" class="form-control custom-select">
                                            <option value="1" @if ($membership->valid_status == 1) selected @endif>Valid</option>
                                            <option value="0" @if ($membership->valid_status == 0) selected @endif>Invalid</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="point">Point</label>
                                        <input type="number" name="point" class="form-control" value="{{ $membership->point }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-3">
                                <a href="{{ url('memberships') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save Changes" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                </section>
                @include('admin.partials.footer')
            </div>
        </form>
    </div>
            
    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="admin/dist/js/demo.js"></script> -->
</body>

</html>
