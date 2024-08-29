<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="make">Make:</label>
    <input type="text" id="make" name="make" value="{{ $product->make }}">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}">

    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Update Product</button>
</form>
</body>
</html>
