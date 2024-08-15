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
    @include('admin.side.navigation')
    @include('admin.side.header')
    <main>
        @include('admin.side.floating')

        <section class="section">
            <div class="container">
                <h1 class="title has-text-centered"> Reservation </h1>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            List Reservation
                        </p>
                        <!--- Tombol Add --->
                        <a href="{{ url('add-reservation') }}" class="card-header-icon" aria-label="more options">
                            <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Add Reservation</button>
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
                                        <th>Date</th>
                                        <th>Need</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <!--- Isi Data --->
                                <tbody class="table-body" id="treatmentTableBody">
                                    @foreach ($reservations as $reservation)
                                    <tr class="has-text-centered">
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>
                                            @if ($reservation->doctor == 1)
                                            Aesthetic Doctor
                                            @else
                                            Beautician
                                            @endif
                                        </td>
                                        <td>
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
                                        </td>
                                        <td>
                                            @if ($reservation->status == 3)
                                            Attended
                                            @elseif ($reservation->status == 2)
                                            Canceled
                                            @elseif ($reservation->status == 1)
                                            Confirmed
                                            @elseif ($reservation->status == 0)
                                            Waiting Response
                                            @endif
                                        </td>
                                        <!-- Memanggil PopUp / Modal -->
                                        <td>
                                            <a class="btn btn-floating btn-info" onclick="showModal('{{ $reservation->id }}', '{{ $reservation->name }}',
                                            '{{ asset('storage/' . $reservation->treatment->image) }}', '{{ $reservation->treatment->name }}',
                                            '{{ $reservation->age }}', '{{ $reservation->gender }}', '{{ $reservation->phone_number }}')">
                                                <i class="material-icons">help_outline</i></a>
                                        </td>
                                        <!-- Button Aksi -->
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--- Tampilan PopUp / Modal --->
    <div id="reservationModalContent" class="modal">
        <div class="modal-header" style="background-color: #ffd6c5; padding: 10px; text-align: center;">
            <h4 id="reservationModalTitle"></h4>
        </div>
        <div class="modal-content" style="padding: 20px; text-align: justify;">
            <div class="row">
                <!-- Tampilan Kiri -->
                <div class="col s12 m6">
                    <p id="reservationModalTreatment"></p>
                    <img id="reservationModalTreatmentImage" alt="Image" width="auto" style="max-height: 180px;">
                </div>
                <!-- Tampilan Kanan -->
                <div class="col s12 m6">
                    <p id="reservationModalAge"></p>
                    <p id="reservationModalGender"></p>
                    <p id="reservationModalPhoneNumber"></p>
                </div>
            </div>
        </div>
        <!-- Tampilan Silang -->
        <div class="modal-footer">
            <a class="modal-close btn-flat" style="background-color: #edada3;"> </a>
        </div>
    </div>

    <!--- Script js untuk PopUp / Modal --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);

            window.showModal = function(reservationId, reservationName, reservationTreatmentImage, reservationTreatment, reservationAge, reservationGender, reservationPhoneNumber) {
                document.getElementById('reservationModalTitle').innerText = reservationName;
                document.getElementById('reservationModalTreatment').innerText = reservationTreatment;
                document.getElementById('reservationModalTreatmentImage').src = reservationTreatmentImage;
                document.getElementById('reservationModalAge').innerText = "Age: " + reservationAge + " y.o";
                document.getElementById('reservationModalGender').innerText = reservationGender == 1 ? 'Gender: Man' : (reservationGender == 2 ? 'Gender: Other' : 'Gender: Woman');
                document.getElementById('reservationModalPhoneNumber').innerText = "Phone Number: " + reservationPhoneNumber;

                var instance = M.Modal.getInstance(document.getElementById('reservationModalContent'));
                instance.open();
            };
        });
    </script>
    @include('admin.side.footer')
</body>
</html>