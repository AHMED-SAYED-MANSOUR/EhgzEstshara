@extends('dashboard')
@section('title')
Show Connection Messages
@endsection

@section('content')
    <div class="container">
        <h1>Connection Messages</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->first_name }} {{ $message->last_name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a href="{{ route('admin.connection_message.edit', ['id' => $message->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.connection_message.delete', ['id' => $message->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
