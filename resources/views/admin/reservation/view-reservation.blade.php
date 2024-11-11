<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservation</title>
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

        .title {
            font-family: "Verdana", sans-serif;
        }

        .content {
            font-family: "Roboto", sans-serif;
        }

        .card-header {
            background-color: #edada3;
        }

        .table-head {
            background-color: #3273dc;
            color: #fff;
        }

        .table-head th {
            font-weight: bold;
            background-color: #fdb0c0;
            color: #4a4a4a;
        }

        .table-head {
            background-color: #3273dc;
            color: #fff;
            text-align: center;
        }

        .table-head th {
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
        }

        .table-body tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-body tr:hover {
            background-color: #f6f5e1;
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
                <h1 class="title has-text-centered"> Reservation </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Reservation
                        </p>
                        <!--- Tombol Add --->
                        <a href="{{ url('reservations/create') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Add Reservation</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
                                <!--- Memanggil Data --->
                                <thead class="table-head">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Need</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <!--- Isi Data --->
                                <tbody class="table-body" id="treatmentTableBody">
                                    @foreach ($reservations as $reservation)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>
                                            @if ($reservation->doctor == 1)
                                            Aesthetic Doctor
                                            @else
                                            Beautician
                                            @endif
                                        </td>
                                        <td>
                                            @if ($reservation->location == 5)
                                            Surabaya
                                            @elseif ($reservation->location == 4)
                                            Surakarta
                                            @elseif ($reservation->location == 3)
                                            Sidoarjo
                                            @elseif ($reservation->location == 2)
                                            Bandung
                                            @elseif ($reservation->location == 1)
                                            Jakarta
                                            @elseif ($reservation->location == 0)
                                            Jogja
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Reservations</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark"></aside> --}}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>List Reservations</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active">Reservations</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Reservations</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 15%">
                                        Full Name
                                    </th>
                                    <th style="width: 15%" class="text-left">
                                        Treatment
                                    </th>
                                    <th style="width: 10%">
                                        Date
                                    </th>
                                    <th style="width: 5%">
                                        Gender
                                    </th>
                                    <th style="width: 15%" class="text-center">
                                        Status
                                    </th>
                                    {{-- <th style="width: 10%" class="text-left">
                                        Payment
                                    </th> --}}
                                    <th style="width: 20%" class="text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $index => $reservation)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $reservation->name }}</td>
                                        {{-- <td>{{ $reservation->treatment->name }}</td> --}}
                                        <td>{{ $reservation->treatment ? $reservation->treatment->name : 'No Treatment' }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>
                                            @if ($reservation->gender == 1)
                                            <button type="button" class="btn btn-block bg-gradient-info">
                                                Man
                                            </button>
                                            @elseif ($reservation->gender == 0)
                                            <button type="button" class="btn btn-block bg-gradient-warning">
                                                Woman
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-block bg-gradient-secondary">
                                                Other
                                            </button>
>>>>>>> main
                                            @endif
                                        </td>
                                        <td>
                                            @if ($reservation->status == 3)
<<<<<<< HEAD
                                            Attended
                                            @elseif ($reservation->status == 2)
                                            Canceled
                                            @elseif ($reservation->status == 1)
                                            Confirmed
                                            @elseif ($reservation->status == 0)
                                            Waiting Response
                                            @endif
                                        </td>
                                        <!-- Memanggil PopUp / Modal -->
                                        <td>
                                            <a class="btn btn-floating btn-info" onclick="showModal('{{ $reservation->id }}', '{{ $reservation->name }}',
                                            '{{ asset('storage/' . $reservation->treatment->image) }}', '{{ $reservation->treatment->name }}',
                                            '{{ $reservation->age }}', '{{ $reservation->gender }}', '{{ $reservation->phone_number }}')">
                                                <i class="material-icons">help_outline</i></a>
                                        </td>
                                        <!-- Button Aksi -->
                                        <td>
                                            <div class="buttons is-centered">
                                                <a class="button is-small is-info" href="{{ url('reservations/'.$reservation->id.'/edit') }}">Edit</a>
                                                <form action="{{ url('reservations/'.$reservation->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button is-small is-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--- Tampilan PopUp / Modal --->
    <div id="reservationModalContent" class="modal">
        <div class="modal-header" style="background-color: #ffd6c5; padding: 10px; text-align: center;">
            <h4 id="reservationModalTitle"></h4>
        </div>
        <div class="modal-content" style="padding: 20px; text-align: justify;">
            <div class="row">
                <!-- Tampilan Kiri -->
                <div class="col s12 m6">
                    <p id="reservationModalTreatment"></p>
                    <img id="reservationModalTreatmentImage" alt="Image" width="auto" style="max-height: 180px;">
                </div>
                <!-- Tampilan Kanan -->
                <div class="col s12 m6">
                    <p id="reservationModalAge"></p>
                    <p id="reservationModalGender"></p>
                    <p id="reservationModalPhoneNumber"></p>
                </div>
            </div>
        </div>
        <!-- Tampilan Silang -->
        <div class="modal-footer">
            <a class="modal-close btn-flat" style="background-color: #edada3;"> </a>
        </div>
    </div>

    <!--- Script js untuk PopUp / Modal --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);

            window.showModal = function(reservationId, reservationName, reservationTreatmentImage, reservationTreatment, reservationAge, reservationGender, reservationPhoneNumber) {
                document.getElementById('reservationModalTitle').innerText = reservationName;
                document.getElementById('reservationModalTreatment').innerText = reservationTreatment;
                document.getElementById('reservationModalTreatmentImage').src = reservationTreatmentImage;
                document.getElementById('reservationModalAge').innerText = "Age: " + reservationAge + " y.o";
                document.getElementById('reservationModalGender').innerText = reservationGender == 1 ? 'Gender: Man' : (reservationGender == 2 ? 'Gender: Other' : 'Gender: Woman');
                document.getElementById('reservationModalPhoneNumber').innerText = "Phone Number: " + reservationPhoneNumber;

                var instance = M.Modal.getInstance(document.getElementById('reservationModalContent'));
                instance.open();
            };
        });
    </script>
    @include('admin.side.footer')
</body>
</html>
=======
                                                <button type="button" class="btn btn-block bg-gradient-success">
                                                    Attended
                                                </button>
                                            @elseif ($reservation->status == 2)
                                                <button type="button" class="btn btn-block bg-gradient-warning">
                                                    Canceled
                                                </button>
                                            @elseif ($reservation->status == 1)
                                                <button type="button" class="btn btn-block bg-gradient-info">
                                                    Confirmed
                                                </button>
                                            @elseif ($reservation->status == 0)
                                                <button type="button" class="btn btn-block bg-gradient-secondary">
                                                    Waiting Response
                                                </button>
                                            @endif
                                        </td>
                                        {{-- <td>
                                            @if ($reservation->payment_status == 5)
                                                <button type="button" class="btn btn-block bg-gradient-warning">
                                                    Canceled
                                                </button>
                                            @elseif ($reservation->payment_status == 4)
                                                <button type="button" class="btn btn-block bg-gradient-secondary">
                                                    Expire
                                                </button>
                                            @elseif ($reservation->payment_status == 3)
                                                <button type="button" class="btn btn-block bg-gradient-info">
                                                    Refund
                                                </button>
                                            @elseif ($reservation->payment_status == 2)
                                                <button type="button" class="btn btn-block bg-gradient-info">
                                                    Pending
                                                </button>
                                            @elseif ($reservation->payment_status == 1)
                                                <button type="button" class="btn btn-block bg-gradient-success">
                                                    Settlement
                                                </button>
                                            @elseif ($reservation->payment_status == 0)
                                                <button type="button" class="btn btn-block bg-gradient-secondary">
                                                    Capture
                                                </button>
                                            @endif
                                        </td> --}}
                                        <td class="project-actions text-right">
                                            {{-- <a class="btn btn-primary btn-sm" href="{{ url('payment/'.$reservation->id) }}">
                                                <i class="fas fa-money-bill"></i>
                                                Pay
                                            </a> --}}
                                            <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modal-sm-{{ $index }}">
                                                <i class="fas fa-folder"></i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ url('reservations/'.$reservation->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                            </a>
                                            <form action="{{ url('reservations/'.$reservation->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <!-- Modal Detail Data -->
                                        <div class="modal fade" id="modal-sm-{{ $index }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">{{ $reservation->name }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Age : {{ $reservation->age}}</p>
                                                        <p>Location :
                                                            @if ($reservation->location == 5)
                                                                Surabaya
                                                            @elseif ($reservation->location == 4)
                                                                Surakarta
                                                            @elseif ($reservation->location == 3)
                                                                Sidoarjo
                                                            @elseif ($reservation->location == 2)
                                                                Bandung
                                                            @elseif ($reservation->location == 1)
                                                                Jakarta
                                                            @elseif ($reservation->location == 0)
                                                                Jogja
                                                            @endif
                                                        </p>
                                                        <p>Need :
                                                            @if ($reservation->doctor == 1)
                                                                Aesthetic Doctor
                                                            @else
                                                                Beautician
                                                            @endif
                                                        </p>
                                                        <p>No Phone : {{ $reservation->phone_number}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <!-- Menampilkan pagination -->
                        <div class="d-flex justify-content-center">
                            {!! $reservations->links('pagination::bootstrap-4') !!}
                        </div>
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
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="admin/dist/js/demo.js"></script> --}}
</body>

</html>
>>>>>>> main
