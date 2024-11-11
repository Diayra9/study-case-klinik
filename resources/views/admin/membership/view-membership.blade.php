<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Membership</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
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
            text-align: center;
        }

        .table-head th {
            font-weight: bold;
            background-color: #fdb0c0;
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
            <h1 class="title has-text-centered"> Membership </h1>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        List Membership
                    </p>
                    <!--- Tombol Add --->
                    <a href="{{ url('memberships/create') }}" class="card-header-icon" aria-label="more options">
                        <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Add Membership</button>
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
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Poin</th>
                                    <th>More</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <!--- Isi Data --->
                            <tbody class="table-body">
                                @foreach ($memberships as $membership)
                                <tr class="has-text-centered">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $membership->name }}</td>
                                    <td>{{ $membership->email }}</td>
                                    <td>
                                        @if ($membership->valid_status == 1)
                                            Valid
                                        @elseif ($membership->valid_status == 0)
                                            Invalid
                                        @else
                                            Pending
                                        @endif
                                    </td>
                                    <td>{{ $membership->point }}</td>
                                    <!-- Memanggil PopUp / Modal -->
                                    <td>
                                        <button class="btn btn-floating btn-info" onclick="showModal('{{ $membership->id }}', '{{ $membership->name }}',
                                            '{{ $membership->no_phone }}', '{{ $membership->birthday }}', '{{ $membership->address }}', '{{ $membership->gender }}')">
                                            <i class="material-icons">help_outline</i>
                                        </button>
                                    </td>
                                    <!-- Button Aksi -->
                                    <td>
                                        <div class="buttons is-centered">
                                            <a class="button is-small is-info" href="{{ url('memberships/'.$membership->id.'/edit') }}">Edit</a>
                                            <form action="{{ url('memberships/'.$membership->id) }}" method="POST" style="display:inline;">
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

<div id="membershipModalContent" class="modal">
    <div class="modal-header" style="background-color: #ffd6c5; padding: 10px; text-align: center;">
        <h4 id="membershipModalTitle"></h4>
    </div>
    <div class="modal-content" style="padding: 20px; text-align: justify;">
        <p id="membershipModalGender"></p>
        <p id="membershipModalNoPhone"></p>
        <p id="membershipModalBirthday"></p><br>
        <p id="membershipModalAddress"></p>
    </div>
    <div class="modal-footer">
        <a class="modal-close btn-flat" style="background-color: #edada3;"> </a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);

        window.showModal = function(membershipId, membershipName, membershipNoPhone, membershipBirthday, membershipAddress, membershipGender) {
            document.getElementById('membershipModalTitle').innerText = membershipName;
            document.getElementById('membershipModalNoPhone').innerText = "No Phone: " + membershipNoPhone;
            document.getElementById('membershipModalBirthday').innerText = "Birthday: " + membershipBirthday;
            document.getElementById('membershipModalAddress').innerText = membershipAddress;
            document.getElementById('membershipModalGender').innerText = membershipGender == 1 ? 'Gender: Male' : (membershipGender == 2 ? 'Gender: Other' : 'Gender: Female');

            var instance = M.Modal.getInstance(document.getElementById('membershipModalContent'));
            instance.open();
        };
    });
</script>

@include('admin.side.footer')
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | Memberships</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />

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
                            <h1>List Memberships</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Memberships</li>
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
                        <h3 class="card-title">Memberships</h3>
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
                                    <th style="width: 25%">
                                        Full Name
                                    </th>
                                    <th style="width: 25%">
                                        Email
                                    </th>
                                    <th style="width: 10%" class="text-left">
                                        Point
                                    </th>
                                    <th style="width: 5%">
                                        Gender
                                    </th>
                                    <th style="width: 5%" class="text-center">
                                        Status
                                    </th>
                                    <th style="width: 25%" class="text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memberships as $index => $membership)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $membership->name }}</td>
                                        <td>{{ $membership->email }}</td>
                                        <td>{{ $membership->point }}</td>
                                        <td>
                                            @if ($membership->gender == 1)
                                            <button type="button" class="btn btn-block bg-gradient-info">
                                                Male
                                            </button>
                                            @elseif ($membership->gender == 0)
                                            <button type="button" class="btn btn-block bg-gradient-warning">
                                                Female
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-block bg-gradient-secondary">
                                                Other
                                            </button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($membership->valid_status == 1)
                                            <button type="button" class="btn btn-block bg-gradient-success">
                                                Valid
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-block bg-gradient-secondary disabled">
                                                Invalid
                                            </button>
                                            @endif
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modal-sm-{{ $index }}">
                                                <i class="fas fa-folder"></i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ url('memberships/'.$membership->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                            </a>
                                            <form action="{{ url('memberships/'.$membership->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <div class="modal fade" id="modal-sm-{{ $index }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">{{ $membership->name }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Date of Birthday : {{ $membership->birthday}}</p>
                                                        <p>No Phone : {{ $membership->no_phone}}</p>
                                                        <p>Address : {{ $membership->address }}</p>
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
                            {!! $memberships->links('pagination::bootstrap-4') !!}
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
>>>>>>> main
</body>

</html>
