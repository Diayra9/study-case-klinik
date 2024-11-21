@extends('homepage.template.layout')

@section('title', $product->name . ' - Éternelle Beauté')

@section('content')
    <div class="container-7">
        <div class="left">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
        </div>
        <div class="right">
            <h1>{{ $product->name }}</h1>
            <p>Price: Rp {{ number_format($product->selling_price, 2) }}</p>
            <p>Verified: 
                @if ($product->halal_status == 1)
                Halal
                @else
                Not Halal
                @endif
                - BPOM 
                @if ($product->bpom_status == 1)
                Approved
                @else
                Still Pending
                @endif
            </p><br>
            <p>{{ $product->description }}</p>
            <button  onclick="location.href='{{ url()->previous() }}'">Back</button>
        </div>
    </div>

    <a href="https://wa.me/6285859730416" class="floating-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
@endsection