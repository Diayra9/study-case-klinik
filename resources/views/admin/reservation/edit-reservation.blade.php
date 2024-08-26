<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Edit Reservation</title>

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
        <form name="reservationForm" action="{{ url('reservations/' . $reservation->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Reservation Edit</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ url('reservations') }}">Reservations</a></li>
                                    <li class="breadcrumb-item active">Edit Reservation</li>
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
                                        <input type="text" name="name" class="form-control" value="{{ $reservation->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">No Phone</label>
                                        <input type="number" name="phone_number" class="form-control" value="{{ $reservation->phone_number }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" class="form-control" value="{{ $reservation->age }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control custom-select">
                                            <option value="2" @if ($reservation->gender == 2) selected @endif>Other</option>
                                            <option value="1" @if ($reservation->gender == 1) selected @endif>Man</option>
                                            <option value="0" @if ($reservation->gender == 0) selected @endif>Woman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Reservation Date</label>
                                        <input type="date" name="date" class="form-control" value="{{ $reservation->date }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <select name="doctor" class="form-control custom-select">
                                            <option value="1" @if ($reservation->doctor == 1) selected @endif>Aesthetic Doctor</option>
                                            <option value="0" @if ($reservation->doctor == 0) selected @endif>Beautician</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select name="location" class="form-control custom-select">
                                            <option value="5" @if ($reservation->location == 5) selected @endif>Surabaya</option>
                                            <option value="4" @if ($reservation->location == 4) selected @endif>Surakarta</option>
                                            <option value="3" @if ($reservation->location == 3) selected @endif>Sidoarjo</option>
                                            <option value="2" @if ($reservation->location == 2) selected @endif>Bandung</option>
                                            <option value="1" @if ($reservation->location == 1) selected @endif>Jakarta</option>
                                            <option value="0" @if ($reservation->location == 0) selected @endif>Jogja</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment_id">Treatment</label>
                                        <select name="treatment_id" class="form-control custom-select">
                                            @foreach($treatments as $treatment)
                                            <option value="{{ $treatment->id }}" @if($reservation->treatment_id == $treatment->id) selected @endif>
                                                {{ $treatment->name }} - {{ $treatment->selling_price }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control custom-select">
                                            <option value="3" @if ($reservation->status == 3) selected @endif>Attended</option>
                                            <option value="2" @if ($reservation->status == 2) selected @endif>Canceled</option>
                                            <option value="1" @if ($reservation->status == 1) selected @endif>Confirmed</option>
                                            <option value="0" @if ($reservation->status == 0) selected @endif>Waiting Response</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3">
                            <a href="{{ url('reservations') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Save Changes" class="btn btn-success float-right">
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
