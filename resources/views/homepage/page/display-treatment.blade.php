@extends('homepage.template.layout')

@section('title', 'Various Treatments - Éternelle Beauté')

@section('content')
    <div class="group">
        <div class="filter-section">
            <div class="text-wrapper">Filter Treatment</div>
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-filter"></i>Treatment Type</button>
                <button>Show Treatments</button>
            </div>

            <!-- ISI TREATMENT -->
            <div class="treat-container">
                @foreach ($treatments as $treatment)
                <div class="treat-card">
                    <img class="treat-image-1" src="{{ asset('storage/' . $treatment->image) }}" alt="{{ $treatment->name }}" loading="lazy" />
                    <div class="treat-details">
                        <div class="treat-name">{{ $treatment->name }}</div>
                        <div class="treat-description">{{ $treatment->description }}</div>
                        <div class="treat-price">Rp {{ number_format($treatment->selling_price, 2) }}</div>
                    </div>
                </div>
                @endforeach
                <!-- Pagination links -->
                <div class="pagination">
                    @for ($i = 1; $i <= ceil($totalTreatments / $perPage); $i++)
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