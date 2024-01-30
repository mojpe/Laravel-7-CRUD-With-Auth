@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Create a new product</h1>

        <div class="mt-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form method="POST" action="{{ route('dashboard.product.store') }}" class="mt-3">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="qty">Quantity:</label>
                <input type="number" class="form-control" name="qty" id="qty" placeholder="Enter quantity">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter price" step="any">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
