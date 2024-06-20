@extends('dashboard')
@section('title')
create new offers
@endsection
@section('content')
    <!-- <h1>create new offers</h1>
     -->
    <div class="card">
      <div class="card-header">
        <a href="{{url('show-trainers')}}" class="btn btn-success">Show Trainers</a>
      </div>
  <div class="card-body">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
    @endforeach
    </div>
    @endif

    <form method="post" action="{{url('save')}}" enctype="multipart/form-data">
      {{csrf_field()}}
        <label>Trainer Name:</label>

        <input type="text" name="name" placeholder="Trainer Name" class="form-control mb-3 py-4"  value="{{old('name')}}">
        <label>Trainer title:</label>

        <input type="text" name="title" placeholder="Trainer Title" class="form-control  mb-3 py-4">
        <label>Trainer photo:</label>

        <input type="file" name="photo" placeholder="Trainer photo" class="form-control mb-3 px-4 pt-3 pb-5">
        <div class="text-center"><input type='submit' value=submit class="btn btn-primary mt-4"></div>
    </form>
  </div>
</div>

@endsection
