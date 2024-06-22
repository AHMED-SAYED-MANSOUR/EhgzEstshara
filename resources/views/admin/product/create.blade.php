@extends('dashboard')
@section('title')
Create New Product
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

    <h1>Create Product</h1>
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="ProductName">Name</label>
            <input type="text" class="form-control" id="ProductName" name="ProductName" required>
        </div>
        <div class="form-group">
            <label for="Quantity">Quantity</label>
            <input type="number" class="form-control" id="Quantity" name="Quantity" required>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="number" step="0.01" class="form-control" id="Price" name="Price" required>
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" class="form-control" id="Category" name="Category" required>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea class="form-control" id="Description" name="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="offer">Offer (%)</label>
            <input type="number" step="0.01" class="form-control" id="offer" name="offer">
        </div>
        <div class="form-group">
            <label for="Brand">Brand</label>
            <input type="text" class="form-control" id="Brand" name="Brand">
        </div>
        <div class="form-group">
            <label for="Material">Material</label>
            <input type="text" class="form-control" id="Material" name="Material">
        </div>
        <div class="form-group">
            <label for="Color">Color</label>
            <input type="text" class="form-control" id="Color" name="Color">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
