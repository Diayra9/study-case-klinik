<!DOCTYPE html>
<html lang="en">

<head>
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
@include('admin.navigation')
@include('admin.header')
    <main>
        @include('admin.floating')
        
        <section class="section">
            <div class="container">
                <h1 class="title has-text-centered"> Reservation </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Reservation
                        </p>
                        <a href="{{ url('add-reservation') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Add Reservation</button>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="table-container">
                            <table class="table is-bordered is-fullwidth">
                                <thead class="table-head">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Treatment</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body" id="treatmentTableBody">
                                <tbody class="table-body">
                                    @foreach ($reservations as $reservation)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>{{ $reservation->age }}</td>
                                        <td>
                                            @if ($reservation->gender == 2)
                                            Other
                                            @elseif ($reservation->gender == 1)
                                            Man
                                            @else ($reservation->gender == 0)
                                            Woman
                                            @endif
                                        </td>
                                        <td>{{ $reservation->treatment->name }}</td>
                                        <td>
                                            @if($reservation->file_upload)
                                            <img src="{{ asset('storage/' . $reservation->file_upload) }}" alt="{{ $reservation->name }}" width="100" />
                                            @endif
                                        </td>
                                        <td>
                                            <div class="buttons is-centered">
                                                <a class="button is-small is-info" href="{{ url('edit-reservation/'.$reservation->id) }}">Edit</a>
                                                <form action="{{ url('delete-reservation/'.$reservation->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button is-small is-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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