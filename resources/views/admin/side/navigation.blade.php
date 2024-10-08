<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <ul id="slide-out" class="side-nav fixed z-depth-2">
        <li class="center no-padding">
            <div class="black-text" style="height: 180px; background-color:#ffc4da;">
                <div class="row">
                    <img style="margin-top: 5%;" width="100" height="100" src="https://cdn.pixabay.com/photo/2018/08/14/11/59/silhouette-3605401_1280.png" class="circle responsive-img" />

                    <p style="margin-top: -13%;">
                        Klinik Kecantikan
                    </p>
                </div>
            </div>
        </li>

        <li id="dash_dashboard"><a href="{{ url('index') }}"><b>Dashboard</b></a></li>

        <ul class="collapsible" data-collapsible="accordion">
            <li id="dash_users">
                <div id="dash_users_header" class="collapsible-header"><b>Users</b></div>
                <div id="dash_users_body" class="collapsible-body">
                    <ul>
                        <li id="users_seller">
                            <a style="text-decoration: none;" href="{{ url('view-user') }}">Admin</a>
                        </li>

                        <li id="users_customer">
                            <a style="text-decoration: none;" href="{{ url('memberships') }}">Membership</a>
                        </li>

                        <li id="users_customer">
                            <a style="text-decoration: none;" href="{{ url('reservations') }}">Costumer</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_products">
                <div id="dash_products_header" class="collapsible-header"><b>Products</b></div>
                <div id="dash_products_body" class="collapsible-body">
                    <ul>
                        <li id="products_product">
                            <a style="text-decoration: none;" href="{{ url('products') }}">Products</a>
                            <a style="text-decoration: none;" href="#!">Brands</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_categories">
                <div id="dash_categories_header" class="collapsible-header"><b>Treatment</b></div>
                <div id="dash_categories_body" class="collapsible-body">
                    <ul>
                        <li id="categories_category">
                            <a style="text-decoration: none;" href="{{ url('treatments') }}">Treatment</a>
                        </li>

                        <li id="categories_sub_category">
                            <a style="text-decoration: none;" href="#!">Category</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </ul>
</body>

</html>