<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #fedfe6;
        }

        .dropdown-content {
            top: 100% !important;
        }
    </style>
</head>

<body>
    <header>
        <ul class="dropdown-content" id="user_dropdown">
            <li><a class="indigo-text" href="{{ url('view-user') }}">Profile</a></li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    @method('POST')
                </form>
                <a class="indigo-text" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>

        <nav style="background-color:#93acf0;" role="navigation">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li>
                        <!-- Tambahkan class 'dropdown-trigger' untuk inisialisasi dropdown -->
                        <a class='dropdown-trigger' data-target='user_dropdown'><i class='material-icons'>account_circle</i></a>
                    </li>
                </ul>

                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>

        <nav style="padding-left: 240px;">
            <div class="nav-wrapper" style="background-color:#ffc4da;">
                <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
                <a class="breadcrumb" href="#!">Index</a>

                <div style="margin-right: 20px;" id="timestamp" class="right"></div>
            </div>
        </nav>

    </header>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize dropdown button
            $('.dropdown-trigger').dropdown({
                constrainWidth: false, // Opsional, untuk membatasi lebar dropdown
                hover: true, // Aktifkan opsi hover
                closeOnClick: true // Tutup dropdown saat klik di luar
            });

            // Inisialisasi sidenav
            $('.button-collapse').sideNav({
                menuWidth: 240, // Lebar sidenav
                edge: 'left', // Sisi sidenav
                closeOnClick: true // Tutup sidenav saat elemen diklik
            });
        });
    </script>

</body>

</html>
