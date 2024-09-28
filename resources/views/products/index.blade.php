<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
    <a href="{{ route('products.create') }}">Add New Product</a>
</body>
</html>
