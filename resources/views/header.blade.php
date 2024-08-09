<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
    <div class="header">
        <div class="header-salma">
            <div class="eternelle">Étern<span class="highlight">e</span>lle</div>
            <div class="container">
                <a href="{{ url('BeautyClinic') }}">Home</a>
                <a href="#">Treatment</a>
                <a href="#">Product</a>
                <a href="#">Promo</a>
                <a href="{{ url('AboutUs') }}">About Us</a>
                @if (Route::currentRouteName() !== 'add-appointment')
                <button class="appointment-1" onclick="location.href='{{ url('add-appointment') }}'">MAKE APPOINTMENT</button>
                @endif
                @if (Route::currentRouteName() !== 'add-membership')
                    <button class="button-6" onclick="location.href='{{ url('add-membership') }}'">Register</button>
                @endif
            </div>
        </div>
    </div>
</body>

</html>