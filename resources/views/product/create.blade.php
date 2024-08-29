
@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="Name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('Name') }}">

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{ old('price') }}">
    <label for="Quantity">Quantity:</label>
    <input type="number" id="qunatity" name="qunatity" value="{{ old('qunatity') }}">
    <label for="Description">Description:</label>
    <input type="number" id="description" name="description" value="{{ old('description') }}">

    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Create Product</button>
</form>
<@endsection>
