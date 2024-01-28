@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container mt-5">
        <h1>List of Products</h1>

        @if(count($products) > 0)
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->price }} EUR</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products available.</p>
        @endif
    </div>
@endsection