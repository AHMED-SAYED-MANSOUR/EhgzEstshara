@extends('dashboard')
@section('title')
Create New Doctor
@endsection

@section('content')
    <h1>Create Doctor</h1>
    <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" id="department" name="department" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" step="0.01" class="form-control" id="facebook" name="facebook" required>
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter" required>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
