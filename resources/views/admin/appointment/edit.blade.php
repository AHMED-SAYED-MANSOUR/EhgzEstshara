@extends('dashboard')
@section('title', 'Edit Appointment')
@section('content')
    <div class="container mt-5">
        <h1>Edit Appointment</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.appointment.update', ['id' => $appointment->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $appointment->date }}">
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" class="form-control" value="{{ $appointment->time }}">
            </div>
            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" name="doctor" class="form-control" value="{{ $appointment->doctor }}">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $appointment->name }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $appointment->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $appointment->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Appointment</button>
        </form>
    </div>
@endsection
