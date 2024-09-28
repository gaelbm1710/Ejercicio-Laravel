<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Creation</title>
</head>
<body>
    <h1>Create New Product</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="price">Product Price:</label>
            <input type="number" id="price" name="price" required>
        </div>
        <button type="submit">Create Product</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
