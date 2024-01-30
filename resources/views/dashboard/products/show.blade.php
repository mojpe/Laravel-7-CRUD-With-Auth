@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Product Details</h1>

        <div class="card">
            <div class="card-body">
                <!-- Display product details here -->
                <p class="mb-2"><strong>Product ID:</strong> {{ $product->id }}</p>
                <p class="mb-2"><strong>Product Name:</strong> {{ $product->name }}</p>
                <p class="mb-2"><strong>Quantity:</strong> {{ $product->qty }}</p>
                <p class="mb-2"><strong>Price:</strong> {{ $product->price }} EUR</p>
                <p class="mb-2"><strong>Product Description:</strong> {{ $product->description }}</p>
                <p>
                    <!-- Back button -->
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                </p>
            </div>
        </div>
    </div>
@endsection