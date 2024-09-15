@extends('frontend.layout.app')

@section('title', 'Home')

@section('content')

<div class="container mt-4">
    <div class="row">
        @foreach ($products as $item)  <!-- Changed $product to $products -->
            <div class="col-md-4 mb-4">
                <a href="/products/{{ $item->id }}">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>

                            {{-- Check if the product has variations --}}
                            @if ($item->variations->isNotEmpty())  <!-- Changed $product to $item -->
                                <h3>Variations:</h3>
                                <ul>
                                    @foreach ($item->variations as $variation)  <!-- Changed $product to $item -->
                                        <li>{{ $variation->unit }} - {{ $variation->price }}</li> <!-- Assuming 'unit' exists in ProductVariation model -->
                                    @endforeach
                                </ul>
                            @else
                                <p>No variations available for this product.</p>
                            @endif

                            <a href="/cart" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
