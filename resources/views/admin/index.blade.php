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

    <style>
        main {
            flex: 1;
            padding-left: 240px;
        }

        .rounded-corners {
            border-radius: 30px;
        }
    </style>
</head>

<body>
    @include('admin.side.navigation')
    @include('admin.side.header')
    <main>
        <div class="row">
            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>User Management</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="{{ url('view-user') }}">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">person</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Admin</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">people</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Seller</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Product Management</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{ url('view-product') }}">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">shopping_cart</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Product</h5>
                                </span>
                            </div>
                        </a>

                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">loyalty</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Brands</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Treatment Management</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="{{ url('view-treatment') }}">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">face</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Treatment</h5>
                                </span>
                            </div>
                        </a>

                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">airline_seat_flat_angled</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Category</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s6">
                <div style="padding: 35px;" align="center" class="card">
                    <div class="row">
                        <div class="left card-title">
                            <b>Costumer Management</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{ url('view-membership') }}">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">assignment_ind</i>
                                <span class="white-text text-lighten-1">
                                    <h5>Membership</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="{{ url('view-reservation') }}">
                            <div style="padding: 30px;" class="blue lighten-3 col s5 rounded-corners">
                                <i class="white-text text-lighten-1 large material-icons">today</i>
                                <span class="truncate white-text text-lighten-1">
                                    <h5>Reservation</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.side.floating')
    </main>
    @include('admin.side.footer')
</body>

</html>