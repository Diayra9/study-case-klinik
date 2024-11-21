<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Online Payment - Éternelle Beauté</title>
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
    <div class="containerpay">
        <form id="paymentForm" action="" method="POST">
            @csrf
            <div class="box payment-box">
            <h2>Payment</h2>
            <div class="total-amount">
                <p>Total: Rp. 2.000.000,00</p>
            </div>

            <form action="#" method="POST">
                
                <label for="email">Masukkan Email:</label>
                <input type="email" class="input-email" id="email" name="email" placeholder="email@example.com" required>

                <label for="payment">Pilih Metode Pembayaran:</label>
                <div class="payment-options">
                    <label class="payment-method">
                        <input type="radio" name="payment" value="bca" onchange="showInput('bca')">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwo9I-RHeQJ8Qvl9lgdV5TGl0egr3RpcYXEw&s" alt="BCA">
                        <span>BCA</span>
                    </label>
                    <div class="payment-info" id="bca-info" style="display: none;">
                        <label for="bca-number">Masukkan Nomor Rekening BCA:</label>
                        <input type="text" class="input-email" id="bca-number" name="bca-number" placeholder="1234567890">
                    </div>

                    <label class="payment-method">
                        <input type="radio" name="payment" value="bri" onchange="showInput('bri')">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV4MhmcXalmLLFDYlR8Rq6W9jFTm-C8-D27w&s" alt="BRI">
                        <span>BRI</span>
                    </label>
                    <div class="payment-info" id="bri-info" style="display: none;">
                        <label for="bri-number">Masukkan Nomor Rekening BRI:</label>
                        <input type="text" class="input-email" id="bri-number" name="bri-number" placeholder="9876543210">
                    </div>

                    <label class="payment-method">
                        <input type="radio" name="payment" value="credit-card" onchange="showInput('credit-card')">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo62eA6OIbzakpgzaGIbKeFXiWvH5pLdCmEg&s" alt="Credit Card">
                        <span>Kartu Kredit</span>
                    </label>
                    <div class="payment-info" id="credit-card-info" style="display: none;">
                        <label for="credit-card-number">Masukkan Nomor Kartu Kredit:</label>
                        <input type="text" class="input-email" id="credit-card-number" name="credit-card-number" placeholder="4111 1111 1111 1111">
                    </div>
                  
                  <label class="payment-method">
                    <input type="radio" name="payment" value="dana" onchange="showInput('dana')">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" alt="Dana">
                    <span>Dana</span>
                </label>
                <div class="payment-info" id="dana-info" style="display: none;">
                    <label for="dana-number">Masukkan Nomor Dana:</label>
                    <input type="text" class="input-email" id="dana-number" name="dana-number" placeholder="081234567890">
                </div>
                </div>
                <button type="submit" class="pay-btn">Bayar Sekarang</button>
            </form>
        </div>

        <!-- Box Kanan - Customer Details -->
        <div class="box details-box">
            <h2>Customer Details</h2>
            <p><strong>Full Name:</strong> John Doe</p>
            <p><strong>Phone Number:</strong> 081234567890</p>
            <p><strong>Treatment:</strong> Facial Treatment</p>
            <p><strong>Location:</strong> Jakarta</p>
            <p><strong>Service:</strong> Aesthetic Doctor</p>
            <p><strong>Reservation Date:</strong> 20 September 2024</p>
        </div>
        </form>
    </div>

    <script type="text/javascript">
        document.getElementById('paymentForm').onsubmit = function(e) {
            e.preventDefault();
            const form = this;

            // Make AJAX request to initiate payment
            fetch("", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    email: form.email.value,
                    price: form.price.value,
                    payment_method: form.payment_method.value
                })
            })
            .then(response => response.json())
            .then(data => {
                // Redirect to Midtrans payment page
                window.location.href = data.redirect_url;
            })
            .catch(error => console.error('Payment error:', error));
        };
    </script>

    <script>
        function showInput(paymentType) {
            // Sembunyikan semua input
            document.querySelectorAll('.payment-info').forEach(info => info.style.display = 'none');
            // Tampilkan input sesuai pilihan
            document.getElementById(paymentType + '-info').style.display = 'block';
        }
    </script>
    @include('homepage.partials.footer')
</body>

</html>