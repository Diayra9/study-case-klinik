<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Membership</title>
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
                <form id="membershipForm" action="{{ url('memberships/' . $membership->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Membership</p>
                        </header>

                        <div class="card-content">
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input name="name" type="text" class="input is-link" placeholder="Enter Your Name" value="{{ $membership->name}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">No Phone</label>
                                <div class="control">
                                    <input name="no_phone" type="text" class="input is-link" placeholder="Enter Your Phone Number" value="{{ $membership->no_phone}}" />
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input name="email" type="text" class="input is-link" placeholder="Enter Your Email" value="{{ $membership->email}}"></input>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Birthday</label>
                                <div class="control">
                                    <input name="birthday" type="date" class="input is-link" value="{{ $membership->birthday}}" />
                                </div>
                            </div>
                        
                            <div class="field">
                                <label class="label">Gender</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="gender">
                                            <option value="2" @if($membership->gender == 2) selected @endif>Other</option>
                                            <option value="1" @if($membership->gender == 1) selected @endif>Male</option>
                                            <option value="0" @if($membership->gender == 0) selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
 
                            <div class="field">
                                <label class="label">Address</label>
                                <div class="control">
                                    <textarea name="address" class="textarea is-link" placeholder="Enter Your Address">{{ $membership->address}}</textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Valid Status</label>
                                <div class="control">
                                    <div class="select is-info">
                                        <select name="valid_status">
                                            <option value="1" @if($membership->valid_status == 1) selected @endif>Valid</option>
                                            <option value="0" @if($membership->valid_status == 0) selected @endif>Invalid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Point</label>
                                <div class="control">
                                    <input name="point" class="input is-link" type="number" placeholder="Enter Points" value="{{ $membership->point}}" required>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-danger">Save</button>
                                </div>
                                <div class="control">
                                    <a href="{{ url('memberships') }}" class="button is-link">Cancel</a>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | Edit Membership</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />

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
                                    <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
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
>>>>>>> main
