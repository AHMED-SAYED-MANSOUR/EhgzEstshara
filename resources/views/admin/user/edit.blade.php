@extends('dashboard')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="container mt-5">
        <h1>Edit User</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
            </div>

            <div class="form-group mb-3">
                <label for="password">Password (Leave blank if not changing)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="DOB">Date of Birth</label>
                <input type="date" name="DOB" class="form-control" value="{{ $user->DOB }}">
            </div>

            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control">
                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
