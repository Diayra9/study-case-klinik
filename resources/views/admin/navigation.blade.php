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
            <div class="black-text" style="height: 180px; background-color:#ff8787;">
                <div class="row">
                    <img style="margin-top: 5%;" width="100" height="100" src="https://cdn.pixabay.com/photo/2018/08/14/11/59/silhouette-3605401_1280.png" class="circle responsive-img" />

                    <p style="margin-top: -13%;">
                        Klinik Kecantikan
                    </p>
                </div>
            </div>
        </li>

        <li id="dash_dashboard"><a class="waves-effect" href="{{ url('/') }}"><b>Dashboard</b></a></li>

        <ul class="collapsible" data-collapsible="accordion">
            <li id="dash_users">
                <div id="dash_users_header" class="collapsible-header waves-effect"><b>Users</b></div>
                <div id="dash_users_body" class="collapsible-body">
                    <ul>
                        <li id="users_seller">
                            <a class="waves-effect" style="text-decoration: none;" href="#!">Admin</a>
                        </li>

                        <li id="users_customer">
                            <a class="waves-effect" style="text-decoration: none;" href="{{ url('view-membership') }}">Costumer</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_products">
                <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
                <div id="dash_products_body" class="collapsible-body">
                    <ul>
                        <li id="products_product">
                            <a class="waves-effect" style="text-decoration: none;" href="{{ url('view-product') }}">Products</a>
                            <a class="waves-effect" style="text-decoration: none;" href="#!">Brands</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_categories">
                <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Treatment</b></div>
                <div id="dash_categories_body" class="collapsible-body">
                    <ul>
                        <li id="categories_category">
                            <a class="waves-effect" style="text-decoration: none;" href="{{ url('view-treatment') }}">Category</a>
                        </li>

                        <li id="categories_sub_category">
                            <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li id="dash_brands">
                <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Reservation</b></div>
                <div id="dash_brands_body" class="collapsible-body">
                    <ul>
                        <li id="brands_brand">
                            <a class="waves-effect" style="text-decoration: none;" href="{{ url('view-reservation') }}">Data</a>
                        </li>

                        <li id="brands_sub_brand">
                            <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Data</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </ul>
</body>

</html>