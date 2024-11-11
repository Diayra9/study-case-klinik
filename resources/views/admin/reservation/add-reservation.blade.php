<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reservation</title>
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

        #stateInput {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
                <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Add Reservation</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." required/>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Age</label>
                                <div class="control">
                                    <input name="age" type="number" class="input is-link" placeholder="Masukkan Umur Anda Disini.." required/>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Phone Number</label>
                                <div class="control">
                                    <input name="phone_number" type="number" class="input is-link" placeholder="Masukkan Nomor Telepom Anda Disini.." required/>
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="gender">
                                            <option disabled selected>--Select Gender--</option>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Add Reservation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
        <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Reservation</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Add Reservation</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Fill Data</h3>

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
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">No Phone</label>
                                        <input type="number" name="phone_number" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" class="form-control custom-select" required>
                                            <option disabled selected>Select one</option>
>>>>>>> main
                                            <option value="2">Other</option>
                                            <option value="1">Man</option>
                                            <option value="0">Woman</option>
                                        </select>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Location</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="location">
                                            <option disabled selected>--Select Location--</option>
=======
                                    <div class="form-group">
                                        <label for="date">Reservation Date</label>
                                        <input type="date" name="date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control custom-select">
                                            <option value="" disabled selected>Select one</option>
                                            <option value="3">Attended</option>
                                            <option value="2">Canceled</option>
                                            <option value="1">Confirmed</option>
                                            <option value="0">Waiting Response</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <select name="doctor" class="form-control custom-select" required>
                                            <option disabled selected>Select one</option>
                                            <option value="1">Aesthetic Doctor</option>
                                            <option value="0">Beautician</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select name="location" class="form-control custom-select" required>
                                            <option disabled selected>Select one</option>
>>>>>>> main
                                            <option value="5">Surabaya</option>
                                            <option value="4">Surakarta</option>
                                            <option value="3">Sidoarjo</option>
                                            <option value="2">Bandung</option>
                                            <option value="1">Jakarta</option>
                                            <option value="0">Jogja</option>
                                        </select>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Doctor</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="doctor">
                                            <option disabled selected>--Select Doctor--</option>
                                            <option value="1">Aesthetic Doctor</option>
                                            <option value="0">Beautician</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Treatment</label>
                                <div class="control">
                                    <input list="treatmentOptions" id="stateInput" placeholder="Pilih atau ketik untuk mencari treatment:" />
                                    <datalist id="treatmentOptions">
                                        @foreach($treatments as $treatment)
                                        <option value="{{ $treatment->name }} - {{ $treatment->selling_price }}" data-id="{{ $treatment->id }}"></option>
                                        @endforeach
                                    </datalist>
                                    <input type="hidden" name="treatment_id" id="treatmentId">
                                </div>
                            </div>
                            
                            <div class="field">
                                <label class="label">Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="status">
                                            <option disabled selected>--Select Status--</option>
                                            <option value="3">Attended</option>
                                            <option value="2">Canceled</option>
                                            <option value="1">Confirmed</option>
                                            <option value="0">Waiting Response</option>
=======
                                    <div class="form-group">
                                        <label for="payment_status">Payment Status</label>
                                        <select name="payment_status" class="form-control custom-select">
                                            <option value="" disabled selected>Select one</option>
                                            <option value="5">Canceled</option>
                                            <option value="4">Expire</option>
                                            <option value="3">Refund</option>
                                            <option value="2">Pending</option>
                                            <option value="1">Settlement</option>
                                            <option value="0">Capture</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment">Choose Treatment</label>
                                        <select name="treatment_id" id="treatmentId"
                                            class="form-control custom-select" required>
                                            <option value="" disabled selected>Select a Treatment</option>
                                            @foreach ($treatments as $treatment)
                                                <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                            @endforeach
>>>>>>> main
                                        </select>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD

                            <div class="field">
                                <label class="label">Reservation Date</label>
                                <div class="control">
                                    <input name="date" type="date" class="input is-link" placeholder="Masukkan Tanggal Reservasi Disini.." required/>
                                </div>
                            </div>  

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Add</button>
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

    <script>
        document.getElementById('stateInput').addEventListener('input', function() {
            var input = this;
            var list = document.getElementById('treatmentOptions');
            var hiddenInput = document.getElementById('treatmentId');
            var options = list.options;

            hiddenInput.value = ''; // Clear the hidden input value if input is changed

            for (var i = 0; i < options.length; i++) {
                if (options[i].value === input.value) {
                    hiddenInput.value = options[i].getAttribute('data-id');
                    break;
                }
            }
        });
    </script>

    @include('admin.side.footer')
</body>

</html>
=======
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Create New Reservation"
                                    class="btn btn-success float-right">
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
>>>>>>> main
