<!DOCTYPE html>
<html lang="en">

<head>
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
                                            @endif
                                        </td>
                                        <td>
                                            @if ($reservation->status == 3)
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
