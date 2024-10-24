<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Product</title>
    <link rel="icon" href="{{ asset('assets/images/loogo.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
</head>

<body>
@include('homepage.partials.header')
    <div class="group">
        <div class="filter-section">
            <div class="text-wrapper">Filter Product</div>
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-filter"></i> Category Product</button>
                <button>Show Products</button>
            </div>

            <!-- ISI PRODUCT -->
            <div class="product-container">
                @foreach ($products as $product)
                <div class="product-card" onclick="location.href='{{ route('showProduct', $product->id) }}'">
                        <img class="product-image-1" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy"/>
                        <div class="product-details">
                            <div class="product-name">{{ $product->name }}</div>
                            <div class="product-stock">{{ $product->stock }} in stock</div>
                            <div class="product-price">Rp {{ number_format($product->selling_price, 2) }}</div>
                        </div>
                </div>
                @endforeach
                <!-- Pagination links -->
                <div class="pagination">
                    @for ($i = 1; $i <= ceil($totalProducts / $perPage); $i++)
                        <a href="{{ url()->current() }}?page={{ $i }}" class="{{ $currentPage == $i ? 'active' : '' }}">
                            {{ $i }}
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@include('homepage.partials.footer')
</body>
</html>
