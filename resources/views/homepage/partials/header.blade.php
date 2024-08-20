<!--- HEADER --->
    <div class="header">
        <div class="header-salma">
            <div class="eternelle">Étern<span class="highlight">e</span>lle</div>
            <div class="container">
                <a href="{{ url('BeautyClinic') }}">Home</a>
                <a href="{{ url('display-treatment') }}">Treatment</a>
                <a href="{{ url('display-product') }}">Product</a>
                <a href="{{ url('Promo') }}">Promo</a>
                <a href="{{ url('about-us') }}">About Us</a>
                @if (Route::currentRouteName() !== 'add-appointment')
                <button class="appointment-1" onclick="location.href='{{ url('add-appointment') }}'">MAKE APPOINTMENT</button>
                @endif
                @if (Route::currentRouteName() !== 'add-new-membership')
                    <button class="button-6" onclick="location.href='{{ url('add-new-membership') }}'">Register</button>
                @endif
            </div>
        </div>
    </div>

