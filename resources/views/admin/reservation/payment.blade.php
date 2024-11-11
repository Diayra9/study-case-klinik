<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éternelle | Payment</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin.partials.preloader')
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <form name="paymentForm" action="{{ url('payment/' . $reservation->reservation_id) }}" method="POST"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Payment</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                                    <li class="breadcrumb-item active"><a
                                            href="{{ url('reservations') }}">Reservations</a></li>
                                    <li class="breadcrumb-item active">Payment</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Check Data</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $reservation->name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Reservation Date</label>
                                        <input type="date" name="date" class="form-control" value="{{ $reservation->date }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" name="location" class="form-control" value="@switch($reservation->location)
                                                @case(5) Surabaya @break
                                                @case(4) Surakarta @break
                                                @case(3) Sidoarjo @break
                                                @case(2) Bandung @break
                                                @case(1) Jakarta @break
                                                @case(0) Jogja @break
                                            @endswitch
                                        " readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment_id">Treatment</label>
                                        @foreach ($treatments as $treatment)
                                            @if ($reservation->treatment_id == $treatment->id)
                                                <input name="treatment_id" class="form-control" value="{{ $treatment->name }}" readonly>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Payment</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="total_price">Total Price</label>
                                        @foreach ($treatments as $treatment)
                                            @if ($reservation->treatment_id == $treatment->id)
                                                <input name="total_price" class="form-control" value="{{ $treatment->selling_price }}" readonly>
                                            @endif
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="reservation_id" value="{{ $reservation->reservation_id }}">
                                    <div class="form-group">
                                        <label for="email">Masukkan Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                                    </div>
                                    <div>
                                        <label for="payment">Pilih Metode Pembayaran:</label>
                                        <div class="payment-options">
                                            <label class="payment-method">
                                                <input type="radio" name="payment_method" value="bca" onchange="showInput('bca')">
                                                <span>BCA</span>
                                            </label>
                                            <div class="payment-info" id="bca-info" style="display: none;">
                                                <label for="bca-number">Masukkan Nomor Rekening BCA:</label>
                                                <input type="number" class="form-control" id="bca-number" name="bca-number" placeholder="1234567890">
                                            </div>
                                            <br>

                                            <label class="payment-method">
                                                <input type="radio" name="payment_method" value="bri" onchange="showInput('bri')">
                                                <span>BRI</span>
                                            </label>
                                            <div class="payment-info" id="bri-info" style="display: none;">
                                                <label for="bri-number">Masukkan Nomor Rekening BRI:</label>
                                                <input type="number" class="form-control" id="bri-number" name="bri-number" placeholder="9876543210">
                                            </div>
                                            <br>

                                            <label class="payment-method">
                                                <input type="radio" name="payment_method" value="credit-card" onchange="showInput('credit-card')">
                                                <span>Kartu Kredit</span>
                                            </label>
                                            <div class="payment-info" id="credit-card-info" style="display: none;">
                                                <label for="credit-card-number">Masukkan Nomor Kartu Kredit:</label>
                                                <input type="number" class="form-control" id="credit-card-number" name="credit-card-number" placeholder="4111 1111 1111 1111">
                                            </div>
                                            <br>

                                            <label class="payment-method">
                                                <input type="radio" name="payment_method" value="dana" onchange="showInput('dana')">
                                                <span>Dana</span>
                                            </label>
                                            <div class="payment-info" id="dana-info" style="display: none;">
                                                <label for="dana-number">Masukkan Nomor Dana:</label>
                                                <input type="number" class="form-control" id="dana-number" name="dana-number" placeholder="081234567890">
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3">
                            <a href="{{ url('reservations') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Pay Now" class="btn btn-success float-right">
                        </div>
                    </div>
                </section>
                @include('admin.partials.footer')
            </div>
        </form>
    </div>

    <script>
        function showInput(paymentMethod) {
            document.querySelectorAll('.payment-info').forEach(function(el) {
                el.style.display = 'none';
            });
            document.getElementById(paymentMethod + '-info').style.display = 'block';
        }
    </script>
    <!-- jQuery -->
    <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
