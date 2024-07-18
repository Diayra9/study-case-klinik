<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Action Button</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .fab-tip {
            position: fixed;
            right: 85px;
            padding: 0px 0.5rem;
            text-align: right;
            background-color: #323232;
            border-radius: 2px;
            color: #FFF;
            width: auto;
            display: none; /* Awalnya tersembunyi */
        }
    </style>
</head>
<body>
    <main>
        <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large pink waves-effect waves-light">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li>
                    <a href="#!" class="btn-floating red"><i class="material-icons">note_add</i></a>
                    <a href="#!" class="fab-tip">Sales</a>
                </li>
                <li>
                    <a href="#!" class="btn-floating yellow darken-1"><i class="material-icons">add_a_photo</i></a>
                    <a href="#!" class="fab-tip">Costumer</a>
                </li>
                <li>
                    <a href="#!" class="btn-floating green"><i class="material-icons">alarm_add</i></a>
                    <a href="#!" class="fab-tip">Revenue</a>
                </li>
                <li>
                    <a href="#!" class="btn-floating blue"><i class="material-icons">vpn_key</i></a>
                    <a href="#!" class="fab-tip">F.A.Q</a>
                </li>
            </ul>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            // Inisialisasi floating action button dan submenu
            $('.fixed-action-btn').floatingActionButton();

            // Menampilkan dan menyembunyikan tooltip saat tombol floating action button diklik
            $('.fixed-action-btn').on('click', function(){
                $('.fab-tip').toggle(); // Toggle (tampilkan atau sembunyikan) tooltip saat diklik
            });
        });
    </script>
</body>
</html>
