<!-- resources/views/home.blade.php -->

@extends('layouts.app') {{-- If you have a common layout, adjust as needed --}}

@section('content')
    <div class="jumbotron jumbotron-fluid jumbo_text">
        <div class="container">
            <h1 class="display-3">Product management made easy.</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
            <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of Poducts</a>             
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convenient</h5>
                        <p class="card-text">Manage all your products in one place</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Best prices</h5>
                        <p class="card-text">We have special discounts at the best products</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Easy to use</h5>
                        <p class="card-text">Manage with the click of a button</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
