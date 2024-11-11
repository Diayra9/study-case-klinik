<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
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
            text-align: center;
        }
        .table-head th {
            font-weight: bold;
            background-color: #fdb0c0;
            color: #4a4a4a;
        }
        .table-head {
            background-color: #3273dc;
            color: #fff;
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
                <h1 class="title has-text-centered"> Product </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Product
                        </p>
                        <!--- Tombol Add --->
                        <a href="{{ url('products/create') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary">Add Product</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
                                <!--- Memanggil Data --->
                                <thead class="table-head">
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <!--- Isi Data --->
                                <tbody class="table-body">
                                    @foreach ($products as $index => $product)
                                    <tr class="has-text-centered">
                                        <td>{{ ($products->currentPage() - 1) * $products->perPage() + $index + 1 }}.</td>
                                        <td>
                                            @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" />
                                            @endif
                                        </td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>Rp. {{ number_format($product->selling_price, 2, ',', '.') }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <!-- Memanggil PopUp / Modal -->
                                        <td>
                                            <a class="btn btn-floating btn-info" onclick="showModal('{{ $product->id }}', '{{ $product->name }}',
                                            '{{ $product->code }}', '{{ $product->description }}','{{ $product->stock }}',
                                            '{{ $product->show_status }}', '{{ $product->bpom_status }}',
                                            '{{ $product->halal_status }}')"><i class="material-icons">help_outline</i></a>
                                        </td>
                                        <!-- Button Aksi -->
                                        <td>
                                            <div class="buttons is-centered">
                                                <a class="button is-small is-info" href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
                                                <form action="{{ url('products/'.$product->id) }}" method="POST" style="display:inline;">
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
                    {{ $products->links('admin.side.pagination') }}
                </div>
            </div>
        </section>
    </main>

    <div id="productModalContent" class="modal">
        <div class="modal-header" style="background-color: #ffd6c5; padding: 10px; text-align: center;">
            <h4 id="productModalTitle"></h4>
            <p id="productModalCode"></p>
        </div>
        <div class="modal-content" style="padding: 20px; text-align: justify;">
            <p id="productModalDescription"></p>
            <br>
            <p id="productModalHalalStatus"></p>
            <p id="productModalStock"></p>
            <p id="productModalShowStatus"></p>
            <p id="productModalBpomStatus"></p>
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

            window.showModal = function(productId, productName, productCode, productDescription, productStock, showStatus, bpomStatus, halalStatus) {
                document.getElementById('productModalTitle').innerText = productName;
                document.getElementById('productModalDescription').innerText = productDescription;
                document.getElementById('productModalCode').innerText = "Code: " + productCode;
                document.getElementById('productModalStock').innerText = "Stock: " + productStock;
                document.getElementById('productModalShowStatus').innerText = showStatus == 1 ? 'Status: Show' : 'Status: Hide';
                document.getElementById('productModalBpomStatus').innerText = bpomStatus == 1 ? 'BPOM: Approved' : 'BPOM: Pending';
                document.getElementById('productModalHalalStatus').innerText = halalStatus == 1 ? 'Halal' : 'Not Halal';

                var instance = M.Modal.getInstance(document.getElementById('productModalContent'));
                instance.open();
            };
        });
    </script>

    @include('admin.side.footer')
</body>

</html>
=======
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternelle | Products</title>

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
                            <h1>List Products</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
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
                        <h3 class="card-title">Products</h3>
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
                                    <th style="width: 9%">
                                        Code
                                    </th>
                                    <th style="width: 20%">
                                        Image
                                    </th>
                                    <th style="width: 20%">
                                        Product Name
                                    </th>
                                    <th style="width: 15%">
                                        Selling Price
                                    </th>
                                    <th style="width: 5%" class="text-left">
                                        Stock
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
                                @foreach ($products as $index => $product)
                                    <tr class="has-text-centered">
                                        <td>{{ ($products->currentPage() - 1) * $products->perPage() + $index + 1 }}.</td>
                                        <td>{{ $product->code }}</td>
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}" width="100" />
                                            @endif
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>Rp. {{ number_format($product->selling_price, 2, ',', '.') }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td class="text-center">
                                            @if ($product->show_status == 1)
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
                                            <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modal-lg-{{ $index }}" >
                                                <i class="fas fa-folder"></i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ url('products/'.$product->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                            </a>
                                            <form action="{{ url('products/'.$product->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <div class="modal fade" id="modal-lg-{{ $index }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">{{ $product->name }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $product->description }}</p><br>
                                                        <p>
                                                            @if ($product->bpom_status == 1)
                                                                BPOM status : Approved
                                                            @else
                                                                BPOM status : Pending
                                                            @endif
                                                        </p>
                                                        <p>
                                                            @if ($product->halal_status == 1)
                                                                Halal status : Halal
                                                            @else
                                                                Halal status : Not Halal
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Menampilkan pagination -->
                        <div class="d-flex justify-content-center">
                            {!! $products->links('pagination::bootstrap-4') !!}
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
