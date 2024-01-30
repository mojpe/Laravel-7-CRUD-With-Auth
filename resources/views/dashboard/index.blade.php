@extends('layouts.app')

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
                        <th scope="col">Actions</th>
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
                            <td> 
                                <a href="/dashboard/product/{{ $product->id }}/view" class="btn btn-sm btn-info">View</a>
                                <a href="/dashboard/product/{{ $product->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                                <a href="/dashboard/product/{{ $product->id }}/delete" class="btn btn-sm btn-danger">Delete</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No products available.</p>
        @endif
    </div>
@endsection