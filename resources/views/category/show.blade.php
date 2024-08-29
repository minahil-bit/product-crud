@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1>Category Details</h1>

    <div class="mb-3">
        <strong>Name:</strong> {{ $category->name }}
    </div>

    <div class="mb-3">
        <strong>Description:</strong> {{ $category->description ?? 'N/A' }}
    </div>

    <div class="mb-3">
        <strong>Products:</strong>
        @if($category->products->isEmpty())
            <p>No products in this category.</p>
        @else
            <ul>
                @foreach($category->products as $product)
                    <li>
                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> - ${{ $product->price }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this category?');">
            Delete
        </button>
    </form>
@endsection
