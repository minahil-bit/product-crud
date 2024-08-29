<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
<h1>Product Details</h1>

<p><strong>Make:</strong> {{ $product->make }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>
<p><strong>Category:</strong> {{ $product->category->name }}</p>

<a href="{{ route('products.index') }}">Back to List</a>
<a href="{{ route('products.edit', $product->id) }}">Edit</a>
</body>
</html>
