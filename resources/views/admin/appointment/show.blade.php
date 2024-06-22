@extends('dashboard')
@section('title', 'Appointments')
@section('content')
    <div class="container mt-5">
        <h1>Appointments</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Doctor</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>
                        <a href="{{ route('admin.appointment.edit', $appointment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.appointment.delete', $appointment->id) }}" method="POST" style="display:inline;">
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
