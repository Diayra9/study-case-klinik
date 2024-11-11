<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Treatment</title>
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
                <form id="treatmentForm" action="{{ url('treatments/'.$treatment->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Treatment</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Masukkan Nama Disini.." value="{{ $treatment->name}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Selling Price</label>
                                <div class="control">
                                    <input name="selling_price" type="text" class="input is-link" placeholder="Rp." value="{{ $treatment->selling_price}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Description</label>
                                <div class="control">
                                    <textarea name="description" class="textarea is-link" placeholder="Masukkan Deskripsi Disini..">{{ $treatment->description}}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Image</label>
                                <div class="control">
                                    <input name="image" type="file" class="input is-link" />
                                    @if($treatment->image)
                                    <img src="{{ asset('storage/' . $treatment->image) }}" alt="Treatment Image" width="100" />
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Show Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="show_status">
                                            <option value="1" @if($treatment->show_status == 1) selected @endif>Show</option>
                                            <option value="0" @if($treatment->show_status == 0) selected @endif>Hide</option>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Edit Treatment</title>

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
        <form name="treatmentForm" action="{{ url('treatments/' . $treatment->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Treatment Edit</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ url('treatments') }}">Treatments</a></li>
                                    <li class="breadcrumb-item active">Treatment Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
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
                                        <label for="name">Treatment Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $treatment->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="selling_price">Selling Price</label>
                                        <input type="text" name="selling_price" class="form-control"
                                            value="{{ $treatment->selling_price }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" rows="4">{{ $treatment->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_status">Status</label>
                                        <select name="show_status" class="form-control custom-select">
                                            <option value="1" @if ($treatment->show_status == 1) selected @endif>Show</option>
                                            <option value="0" @if ($treatment->show_status == 0) selected @endif>Hide</option>
>>>>>>> main
                                        </select>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Save</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('treatments') }}" class="button is-link">Cancel</a>
=======
                        </div>
                        <div class="col-md-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Files</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>File Name</th>
                                                <th>File Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $treatment->name }}</td>
                                                <td>49.8005 kb</td>
                                                <td class="text-right py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="#" class="btn btn-info" data-toggle="modal"
                                                            data-target="#modal-sm"><i class="fas fa-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
>>>>>>> main
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                </form>
            </div>
        </section>
    </main>
    @include('admin.side.footer')
</body>

</html>
=======
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ url('treatments') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Save Changes" class="btn btn-success float-right">
                        </div>
                    </div>
                </section>
            </div>

            @include('admin.partials.footer')

            <div class="modal fade" id="modal-sm">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Treatment Image</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input name="image" name="image" type="file" class="form-control" />
                            @if ($treatment->image)
                                <img src="{{ asset('storage/' . $treatment->image) }}" alt="Treatment Image"
                                    width="100" />
                            @endif
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Change Image</button>
                        </div>
                    </div>
                </div>
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
    {{-- <script src="admin/dist/js/demo.js"></script> --}}
</body>

</html>
>>>>>>> main
