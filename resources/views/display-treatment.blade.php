<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Treatment</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
@include('header')
    <div class="group">
        <div class="filter-section">
            <div class="text-wrapper">Saring Treatment</div>
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-filter"></i> Jenis Treatment</button>
                <button>Tampilkan Produk</button>
            </div>

            <!-- ISI TREATMENT -->
            <div class="treatment-container">
                @foreach ($treatments as $treatment)
                <div class="treatment-card">
                    <img class="treatment-image-1" src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" />
                    <div class="treatment-details">
                        <div class="treatment-name">{{ $treatment->name }}</div>
                        <div class="treatment-price">Rp {{ number_format($treatment->selling_price, 2) }}</div>
                    </div>
                </div>
                @endforeach
                <!-- Pagination links -->
            </div>
            <div class="pagination">
                {{ $treatments->links() }}
            </div>
        </div>
    </div>
@include('footer')
</body>
</html>
