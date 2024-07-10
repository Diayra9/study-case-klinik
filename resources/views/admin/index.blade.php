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
            flex: 1; /* Expand main content to fill remaining vertical space */
            padding-left: 240px; /* Adjust for sidebar if present */
        }
    </style>
</head>

<body>
@include('admin.navigation')
@include('admin.header')
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
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">person</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Seller</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">people</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Customer</h5>
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
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">store</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Product</h5>
                                </span>
                            </div>
                        </a>

                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Orders</h5>
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
                            <b>Brand Management</b>
                        </div>
                    </div>

                    <div class="row">
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Brand</h5>
                                </span>
                            </div>
                        </a>

                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">loyalty</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Sub Brand</h5>
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
                            <b>Category Management</b>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="indigo-text text-lighten-1">
                                    <h5>Category</h5>
                                </span>
                            </div>
                        </a>
                        <div class="col s1"> </div>
                        <div class="col s1"> </div>

                        <a href="#!">
                            <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                                <span class="truncate indigo-text text-lighten-1">
                                    <h5>Sub Category</h5>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.floating')
    </main>
@include('admin.footer')
</body>

</html>