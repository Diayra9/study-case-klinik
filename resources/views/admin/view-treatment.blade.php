<!DOCTYPE html>
<html lang="en">

<head>
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
    @include('admin.navigation')
    @include('admin.header')
    <main>
        @include('admin.floating')
        <section class="section">
            <div class="container">
                <h1 class="title has-text-centered"> Treatment </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Treatment
                        </p>
                        <a href="{{ url('add-treatment') }}" class="card-header-icon" aria-label="more options">
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
                                                <a class="button is-small is-info" href="{{ url('edit-treatment/'.$treatment->id) }}">Edit</a>
                                                <form action="{{ url('delete-treatment/'.$treatment->id) }}" method="POST" style="display:inline;">
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
                    {{ $treatments->links('admin.pagination') }}
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
    @include('admin.footer')

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
</body>

</html>
