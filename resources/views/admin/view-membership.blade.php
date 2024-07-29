<!DOCTYPE html>
<html lang="en">

<head>
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
            <h1 class="title has-text-centered"> Membership </h1>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        List Membership
                    </p>
                    <a href="{{ url('add-membership') }}" class="card-header-icon" aria-label="more options">
                        <button class="button is-primary" data-toggle="modal" data-target="#addTreatmentModal">Add Membership</button>
                    </a>
                </header>
                <div class="card-content">
                    <div class="table-container">
                        <table class="table is-bordered is-fullwidth">
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
                                    <td>
                                        <button class="btn btn-floating btn-info" onclick="showModal('{{ $membership->id }}', '{{ $membership->name }}',
                                            '{{ $membership->no_phone }}', '{{ $membership->birthday }}', '{{ $membership->address }}', '{{ $membership->gender }}')">
                                            <i class="material-icons">help_outline</i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="buttons is-centered">
                                            <a class="button is-small is-info" href="{{ url('edit-membership/'.$membership->id) }}">Edit</a>
                                            <form action="{{ url('delete-membership/'.$membership->id) }}" method="POST" style="display:inline;">
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
            document.getElementById('membershipModalGender').innerText = membershipGender == 1 ? 'Gender: Man' : (membershipGender == 2 ? 'Gender: Other' : 'Gender: Woman');

            var instance = M.Modal.getInstance(document.getElementById('membershipModalContent'));
            instance.open();
        };
    });
</script>

@include('admin.footer')
</body>

</html>
