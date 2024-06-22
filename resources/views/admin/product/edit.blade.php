@extends('dashboard')
@section('title')
    Edit Product
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Edit Product</h1>
    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="ProductName">Name</label>
            <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ $product->ProductName }}" required>
        </div>
        <div class="form-group">
            <label for="Quantity">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" value="{{ $product->Quantity }}" required>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" step="0.01" class="form-control" id="Price" name="Price" value="{{ $product->Price }}" required>
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" class="form-control" id="Category" name="Category" value="{{ $product->Category }}" required>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea class="form-control" id="Description" name="Description">{{ $product->Description }}</textarea>
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="offer">Offer (%)</label>
            <input type="number" step="0.01" class="form-control" id="offer" name="offer" value="{{ $product->offer }}">
        </div>
        <div class="form-group">
            <label for="Brand">Brand</label>
            <input type="text" class="form-control" id="Brand" name="Brand" value="{{ $product->Brand }}">
        </div>
        <div class="form-group">
            <label for="Material">Material</label>
            <input type="text" class="form-control" id="Material" name="Material" value="{{ $product->Material }}">
        </div>
        <div class="form-group">
            <label for="Color">Color</label>
            <input type="text" class="form-control" id="Color" name="Color" value="{{ $product->Color }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
