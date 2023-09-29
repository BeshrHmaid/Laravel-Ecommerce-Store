@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/showStyle.css') }}?v={{ filemtime(public_path('css/showStyle.css')) }}">
</head>
<div class="centered-container">
    <h1 class="product-name">{{ "PRODUCT NAME: " . $product->name }}</h1>
    <h2 class="product-price">{{ "PRODUCT PRICE: $" . $product->price }}</h2>

    @if ($product->path)
        <div class="product-image-container">
            <img src="{{ asset('storage/' . $product->path) }}" alt="Product Image" class="product-image">
        </div>
    @endif
    
    <a href="{{ route('product.edit', $product->id) }}" class="edit-link">Edit</a>

    <!-- Delete Button -->
    <form method="POST" action="{{ route('product.destroy', $product->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button">Delete</button>
    </form>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif
</div>
@endsection