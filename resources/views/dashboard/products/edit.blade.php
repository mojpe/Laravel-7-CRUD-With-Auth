<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
</head>
<body>
    <h1>Edit product</h1>
    <div> 
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form method="POST" action="{{ route('dashboard.product.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div> 
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter product name" value="{{ $product->name }}">
        </div>
        <div>
            <label for="qty">Quantity:</label>
            <input type="number" name="qty" id="qty" placeholder="Enter quantity" value="{{ $product->qty }}">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" placeholder="Enter price" step="any" value="{{ $product->price }}">
        </div>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" placeholder="Enter description" value="{{ $product->description }}">
        </div>
        <div>
            <button type="submit">Update product</button>
        </div>
    </form>
</body>
</html>