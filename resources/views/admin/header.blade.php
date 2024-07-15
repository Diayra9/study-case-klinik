<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body{
            background-color:#ffe3e3;
        }
    </style>
</head>   

<body>
    <header>
        <ul class="dropdown-content" id="user_dropdown">
            <li><a class="indigo-text" href="#!">Profile</a></li>
            <li><a class="indigo-text" href="#!">Logout</a></li>
        </ul>

        <nav style="background-color:#fa5252;" role="navigation">
            <div class="nav-wrapper">
                <!-- <a data-activates="slide-out" class="button-collapse show-on-large" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a> -->

                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class='dropdown-button' href='#' data-activates='user_dropdown' data-beloworigin="true"><i class='material-icons'>account_circle</i></a>
                    </li>
                </ul>

                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>

        <nav style="padding-left: 240px;"
        >
            <div class="nav-wrapper" style="background-color:#ff6b6b;">
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
        $(document).ready(function(){
            // Initialize dropdown button
            $('.dropdown-button').dropdown();
        });
    </script>
</body>

</html>
