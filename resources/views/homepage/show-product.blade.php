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
@include('homepage.partials.footer')
</body>

</html>