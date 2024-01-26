<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Products')
@section('content')
<div class="container my-5">
@if(isset($products))
    @foreach($products as $product)
        {{-- Your code here --}}
    @endforeach
@else
    <p>No products available.</p>
@endif
    <div class="row">
    
    </div>
</div>
@endsection