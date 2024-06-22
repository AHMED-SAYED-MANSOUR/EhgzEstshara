@extends('dashboard')
@section('title')
Show Doctors
@endsection
@section('content')
    <h1>Doctors</h1>
    <a href="{{ route('admin.doctor.create') }}" class="btn btn-primary">Create Doctor</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Image</th>
            <th>Facebook</th>
            <th>Twitter</th>
            <th>Instagram</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->department }}</td>
                <td><img src="{{ asset('images/Team/' . $doctor->image) }}" alt="{{ $doctor->name }}" style="max-width: 100px;"></td>
                <td>{{ $doctor->facebook }}</td>
                <td>{{ $doctor->twitter }}</td>
                <td>{{ $doctor->instagram }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('admin.doctor.edit', ['id' => $doctor->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.doctor.delete', ['id' => $doctor->id]) }}" method="POST">
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
