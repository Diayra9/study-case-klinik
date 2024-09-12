<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Online Payment</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
    @include('homepage.partials.header')
    <!--- ISI --->
    <div class="appointment">
        <span class="appointment-online">APPOINTMENT ONLINE</span>
        <div class="line-1"></div>
        <img class="line-2" src="{{ asset('assets/vectors/line_2_x2.svg') }}" />

        <h3>Reservation Details</h3>
        <p><strong>Name:</strong> {{ $reservation->name }}</p>
        <p><strong>Phone:</strong> {{ $reservation->phone_number }}</p>
        <p><strong>Doctor:</strong> {{ $reservation->doctor->name }}</p>
        <p><strong>Location:</strong> {{ $reservation->location }}</p>
        <p><strong>Treatment:</strong> {{ $reservation->treatment->name }}</p>
        <p><strong>Amount:</strong> {{ $reservation->treatment->price }}</p>

        <!-- Form for payment processing -->
        <form method="POST" action="{{ route('process-payment') }}">
            @csrf
            <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
            <input type="hidden" name="snapToken" value="{{ $snapToken }}">

            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control">
                    <option value="midtrans_snap">Midtrans</option>
                    <!-- Add more payment methods as needed -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Proceed to Payment</button>
        </form>
    </div>

    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
    </script>
    <script type="text/javascript">
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            snap.pay('{{ $snapToken }}', {
                // Optional, show payment success/failure in view
                onSuccess: function(result) {
                    alert("Payment successful!");
                },
                onPending: function(result) {
                    alert("Waiting for your payment!");
                },
                onError: function(result) {
                    alert("Payment failed!");
                }
            });
        });
    </script>

    @include('homepage.partials.footer')
</body>

</html>
