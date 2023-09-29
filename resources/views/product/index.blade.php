@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

@if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
@endif

<ul class="product-list">
    @foreach ($products as $product)
        <a href="{{route('product.show',$product->id)}}"><li>{{$product->name}}</li></a>
    @endforeach
</ul>

<a href="{{ route('product.create') }}" class="create-product-link">Create Product</a>
@endsection