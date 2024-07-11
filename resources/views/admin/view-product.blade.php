<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    @include('admin.navigation')
    @include('admin.header')
    <main>
        @include('admin.floating')
        <section class="section">
            <div class="container">
                <h1 class="title has-text-centered"> Product </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Daftar Product
                        </p>
                        <a href="{{ url('add-product') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary">Tambah Treatment</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
                                <thead class="table-head">
                                    <tr>
                                        <th>No</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Selling Price</th>
                                        <th>Stock</th>
                                        <th>Image</th>
                                        <th>Show Status</th>
                                        <th>BPOM Status</th>
                                        <th>Halal Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    @foreach ($products as $product)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>Rp. {{ $product->selling_price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>{{ $product->image }}</td>
                                        <td>
                                            @if ($product->show_status == 1)
                                            Tampilkan
                                            @else
                                            Sembunyikan
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->bpom_status == 1)
                                            Sudah BPOM
                                            @else
                                            Belum BPOM
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->halal_status == 1)
                                            Halal
                                            @else
                                            Tidak Halal
                                            @endif
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
            </div>
        </section>
    </main>
    @include('admin.footer')
</body>

</html>