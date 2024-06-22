@extends('dashboard')
@section('title')
    Create Trainer
@endsection
@section('content')
    <div class="container mt-5">
        <h1>Create Trainer</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.trainer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" >
            </div>

            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id='title' >
            </div>

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="form-group mb-3">
                <label for="facebook">Facebook</label>
                <input type="url" name="facebook" class="form-control" id="facebook">
            </div>

            <div class="form-group mb-3">
                <label for="instagram">Instagram</label>
                <input type="url" name="instagram" class="form-control" id="instagram">
            </div>

            <div class="form-group mb-3">
                <label for="twitter">Twitter</label>
                <input type="url" name="twitter" class="form-control" id="twitter">
            </div>

            <button type="submit" class="btn btn-primary">Create Trainer</button>
        </form>
    </div>
@endsection
