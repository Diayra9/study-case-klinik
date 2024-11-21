@extends('homepage.template.layout')

@section('title', 'Various Products - Éternelle Beauté')

@section('content')
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

    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
@endsection
