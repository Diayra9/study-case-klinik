<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <style>
        body {
            font-family: "Arial", sans-serif;
        }

        main {
            flex: 1;
            padding-left: 240px;
        }

        .card-content {
            font-family: "Roboto", sans-serif;
        }

        .card-header {
            background-color: #edada3;
        }

        .input.is-link {
            border-color: #fdb0c0;
        }

        .textarea.is-link {
            border-color: #fdb0c0;
        }

        .select.is-info select {
            border-color: #fdb0c0;
        }
    </style>

</head>

<body>
    @include('admin.side.navigation')
    @include('admin.side.header')
    <main>
        @include('admin.side.floating')
        <section class="section">
            <div class="container">
                <form action="{{ url('reservations/' . $reservation->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Reservation</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." value="{{ $reservation->name }}" />
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Age</label>
                                <div class="control">
                                    <input name="age" type="number" class="input is-link" placeholder="age" value="{{ $reservation->age }}" />
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Phone Number</label>
                                <div class="control">
                                    <input name="phone_number" type="number" class="input is-link" placeholder="Masukkan Nomor Telepom Anda Disini.." value="{{ $reservation->phone_number }}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="gender">
                                            <option value="2" @if($reservation->gender == 2) selected @endif>Other</option>
                                            <option value="1" @if($reservation->gender == 1) selected @endif>Man</option>
                                            <option value="0" @if($reservation->gender == 0) selected @endif>Woman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Location</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="location">
                                            <option value="5" @if($reservation->location == 5) selected @endif>Surabaya</option>
                                            <option value="4" @if($reservation->location == 4) selected @endif>Surakarta</option>
                                            <option value="3" @if($reservation->location == 3) selected @endif>Sidoarjo</option>
                                            <option value="2" @if($reservation->location == 2) selected @endif>Bandung</option>
                                            <option value="1" @if($reservation->location == 1) selected @endif>Jakarta</option>
                                            <option value="0" @if($reservation->location == 0) selected @endif>Jogja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Doctor</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="doctor">
                                            <option value="1" @if($reservation->doctor == 1) selected @endif>Aesthetic Doctor</option>
                                            <option value="0" @if($reservation->doctor != 1) selected @endif>Beautician</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Jenis Treatment</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="treatment_id">
=======
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
                                        <label for="payment_status">Payment Status</label>
                                        <select name="payment_status" class="form-control custom-select">
                                            <option value="" disabled selected>Select one</option>
                                            <option value="5" @if ($reservation->payment_status == 5) selected @endif>Canceled</option>
                                            <option value="4" @if ($reservation->payment_status == 4) selected @endif>Expire</option>
                                            <option value="3" @if ($reservation->payment_status == 3) selected @endif>Refund</option>
                                            <option value="2" @if ($reservation->payment_status == 2) selected @endif>Pending</option>
                                            <option value="1" @if ($reservation->payment_status == 1) selected @endif>Settlement</option>
                                            <option value="0" @if ($reservation->payment_status == 0) selected @endif>Capture</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment_id">Treatment</label>
                                        <select name="treatment_id" class="form-control custom-select">
>>>>>>> main
                                            @foreach($treatments as $treatment)
                                            <option value="{{ $treatment->id }}" @if($reservation->treatment_id == $treatment->id) selected @endif>
                                                {{ $treatment->name }} - {{ $treatment->selling_price }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </div>
                                                        
                            <div class="field">
                                <label class="label">Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="status">
                                            <option value="3" @if($reservation->status == 3) selected @endif>Attended</option>
                                            <option value="2" @if($reservation->status == 2) selected @endif>Canceled</option>
                                            <option value="1" @if($reservation->status == 1) selected @endif>Confirmed</option>
                                            <option value="0" @if($reservation->status == 0) selected @endif>Waiting Response</option>
=======
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control custom-select">
                                            <option value="3" @if ($reservation->status == 3) selected @endif>Attended</option>
                                            <option value="2" @if ($reservation->status == 2) selected @endif>Canceled</option>
                                            <option value="1" @if ($reservation->status == 1) selected @endif>Confirmed</option>
                                            <option value="0" @if ($reservation->status == 0) selected @endif>Waiting Response</option>
>>>>>>> main
                                        </select>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD

                            <div class="field">
                                <label class="label">Reservation Date</label>
                                <div class="control">
                                    <input name="date" type="date" class="input is-link" placeholder="date" value="{{ $reservation->date }}" />
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Save</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('reservations') }}" class="button is-link">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    @include('admin.side.footer')
</body>

</html>
=======
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
>>>>>>> main
