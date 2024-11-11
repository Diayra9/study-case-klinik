<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Treatment</title>
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

        .modal {
            display: none;
        }
        .modal.is-active {
            display: flex;
        }

        .pagination{
            border-radius: 10px;
            background-color: #edada3;
        }
        .pagination-list li {
            margin-bottom: 20px;
        }
        .pagination-next {
            margin-right: 20px
        }
        .pagination-previous {
            margin-left: 20px
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
                <h1 class="title has-text-centered"> Treatment </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Treatment
                        </p>
                        <a href="{{ url('treatments/create') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary">Add Treatment</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
                                <thead class="table-head">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Selling Price</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Show Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach ($treatments as $index => $treatment)
                                    <tr class="has-text-centered">
                                        <td>{{ ($treatments->currentPage() - 1) * $treatments->perPage() + $index + 1 }}.</td>
                                        <td>{{ $treatment->name }}</td>
                                        <td>Rp. {{ number_format($treatment->selling_price, 2, ',', '.') }}</td>
                                        <td>{{ $treatment->description }}</td>
                                        <td>
                                            @if($treatment->image)
                                            <img src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" width="100" />
                                            @endif
                                        </td>
                                        <td>
                                            @if ($treatment->show_status == 1)
                                            Show
                                            @else
                                            Hide
                                            @endif
                                        </td>
                                        <td>
                                            <div class="buttons is-centered">
                                                <a class="button is-small is-info" href="{{ url('treatments/'.$treatment->id.'/edit') }}">Edit</a>
                                                <form action="{{ url('treatments/'.$treatment->id) }}" method="POST" style="display:inline;">
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
                <!-- Pagination Links -->
                <div class="pagination-links">
                    {{ $treatments->links('admin.side.pagination') }}
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal" id="actionModal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <button class="delete" aria-label="close" onclick="closeModal()"></button>
                    <p>Apakah Anda yakin ingin melakukan aksi ini?</p>
                    <div class="buttons">
                        <button class="button is-success" onclick="handleOke()">Oke</button>
                        <button class="button is-danger" onclick="closeModal()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.side.footer')

    <script>
        function openModal() {
            document.getElementById('actionModal').classList.add('is-active');
        }

        function closeModal() {
            document.getElementById('actionModal').classList.remove('is-active');
        }

        function handleOke() {
            // Tambahkan aksi yang diinginkan di sini
            alert("Aksi Oke dipilih");
            closeModal();
        }
    </script>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | Treatments</title>
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
                            <h1>List Treatments</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Treatments</li>
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
                        <h3 class="card-title">Treatments</h3>
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
                                    <th style="width: 20%">
                                        Image
                                    </th>
                                    <th style="width: 30%">
                                        Description
                                    </th>
                                    <th style="width: 12%">
                                        Treatment Name
                                    </th>
                                    <th style="width: 12%">
                                        Selling Price
                                    </th>
                                    <th style="width: 5%" class="text-center">
                                        Status
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($treatments as $index => $treatment)
                                    <tr class="has-text-centered">
                                        <td>{{ ($treatments->currentPage() - 1) * $treatments->perPage() + $index + 1 }}.
                                        </td>
                                        <td>
                                            @if ($treatment->image)
                                                <img src="{{ asset('storage/' . $treatment->image) }}"
                                                    alt="{{ $treatment->name }}" width="100" />
                                            @endif
                                        </td>
                                        <td>{{ $treatment->description }}</td>
                                        <td>{{ $treatment->name }}</td>
                                        <td>Rp. {{ number_format($treatment->selling_price, 2, ',', '.') }}</td>
                                        <td class="text-center">
                                            @if ($treatment->show_status == 1)
                                            <button type="button" class="btn btn-block bg-gradient-success">
                                                Show
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-block bg-gradient-secondary disabled">
                                                Hide
                                            </button>
                                            @endif
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ url('treatments/'.$treatment->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <form action="{{ url('treatments/'.$treatment->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <!-- Menampilkan pagination -->
                        <div class="d-flex justify-content-center">
                            {!! $treatments->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.partials.footer')
    </div>
    <!-- ./wrapper -->

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
