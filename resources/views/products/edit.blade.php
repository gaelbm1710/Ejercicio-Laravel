<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Editing</title>
</head>
<body>
    <h1>Edit Product</h1>
    
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="price">Product Price:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <button type="submit">Update Product</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
