@extends('dashboard')
@section('title')
Show Products
@endsection
@section('content')
    <h1>Products</h1>
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Create Product</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image</th>
            <th>Offer (%)</th>
            <th>Brand</th>
            <th>Material</th>
            <th>Color</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->ProductName }}</td>
                <td>{{ $product->Quantity }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Category }}</td>
                <td>{{ $product->Description }}</td>
                <td><img src="{{ asset('products_images/' . $product->img) }}" alt="{{ $product->ProductName }}" style="max-width: 100px;"></td>
                <td>{{ $product->offer }}</td>
                <td>{{ $product->Brand }}</td>
                <td>{{ $product->Material }}</td>
                <td>{{ $product->Color }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.product.delete', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
