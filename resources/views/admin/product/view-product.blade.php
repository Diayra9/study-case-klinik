<!DOCTYPE html>
<html lang="en">

<head>
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
                        <a href="{{ url('add-product') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary">Add Product</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
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
                                        <td>
                                            <a class="btn btn-floating btn-info" onclick="showModal('{{ $product->id }}', '{{ $product->name }}',
                                        '{{ $product->code }}', '{{ $product->description }}','{{ $product->stock }}',
                                        '{{ $product->show_status }}', '{{ $product->bpom_status }}',
                                        '{{ $product->halal_status }}')"><i class="material-icons">help_outline</i></a>
                                        </td>
                                        <td>
                                            <div class="buttons is-centered">
                                                <a class="button is-small is-info" href="{{ url('edit-product/'.$product->id) }}">Edit</a>
                                                <form action="{{ url('delete-product/'.$product->id) }}" method="POST" style="display:inline;">
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