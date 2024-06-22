@extends('dashboard')
@section('title')
Show Orders
@endsection
@section('content')
    <div class="container mt-5">
        <h1>Orders</h1>
        <a href="{{ route('admin.order.create') }}" class="btn btn-primary mb-3">Add Order</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Items</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>
                        <ul>
                            @foreach($order->items as $item)
                                <li>{{ $item->product->Product }} - {{ $item->quantity }} x {{ $item->price }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>${{ $order->items->sum(fn($item) => $item->quantity * $item->price) }}</td>
                    <td>
                        <a href="{{ route('admin.order.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.order.delete', $order->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
