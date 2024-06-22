@extends('dashboard')
@section('title')
    All Trainers
@endsection
@section('content')
        <h1>All Trainers</h1>
        <a href="{{ route('admin.trainer.create') }}" class="btn btn-primary mb-3">Create Trainer</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Image</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Twitter</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($trainers as $trainer)
                <tr>
                    <td>{{ $trainer->name }}</td>
                    <td>{{ $trainer->title }}</td>
                    <td><img src="{{ asset('images/Trainers/' . $trainer->image) }}" alt="Trainer Image" width="100"></td>
                    <td><a href="{{ $trainer->facebook }}" target="_blank">{{ $trainer->facebook }}</a></td>
                    <td><a href="{{ $trainer->instagram }}" target="_blank">{{ $trainer->instagram }}</a></td>
                    <td><a href="{{ $trainer->twitter }}" target="_blank">{{ $trainer->twitter }}</a></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.trainer.edit', $trainer->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.trainer.delete', $trainer->id) }}" method="POST" style="display:inline;">
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
