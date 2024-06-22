@extends('dashboard')
@section('title')
    Edit Trainer
@endsection
@section('content')
    <div class="container mt-5">
        <h1>Edit Trainer</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.trainer.update', ['id' => $trainer->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $trainer->name }}">
            </div>

            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $trainer->title }}">
            </div>

            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ Storage::url($trainer->image) }}" alt="Trainer Image" width="100">
            </div>

            <div class="form-group mb-3">
                <label for="facebook">Facebook</label>
                <input type="url" name="facebook" class="form-control" id="facebook" value="{{ $trainer->facebook }}">
            </div>

            <div class="form-group mb-3">
                <label for="instagram">Instagram</label>
                <input type="url" name="instagram" class="form-control" id="instagram" value="{{$trainer->instagram}}">
            </div>

            <div class="form-group mb-3">
                <label for="twitter">Twitter</label>
                <input type="url" name="twitter" class="form-control" id="twitter" value="{{$trainer->twitter}}">
            </div>

            <button type="submit" class="btn btn-primary">Update Trainer</button>
        </form>
    </div>
@endsection
