
<head>
    <link rel="stylesheet" href="{{ asset('css/updateStyle.css') }}">
</head>

<div class="container">
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" value="{{$product->path}}">
        </div>

        <!-- Add other fields and form elements as needed -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    
</div>
