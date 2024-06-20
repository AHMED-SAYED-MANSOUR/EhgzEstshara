@extends('dashboard')
@section('title')
create new offers
@endsection
@section('content')
    <div class="card">
      <div class="card-header">
        <a href="{{url('show')}}" class="btn btn-success">Show doctors</a>
      </div>
  <div class="card-body">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
    @endforeach
    </div>
    @endif

    <form method="post" action="{{url('update-doctors')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="id" class="form-control  mb-3 py-4" value= "{{$doctors->id}}">
        <label>doctor Name:</label>

        <input type="text" name="name" placeholder="Offer Name" class="form-control mb-3 py-4"  value="{{$doctors->name}}">
        <label>doctor title:</label>

        <input type="text" name="title" placeholder="Offer price" class="form-control  mb-3 py-4" value= "{{$doctors->title}}">

        <label>doctor photo:</label>
        <br>
        @if( $doctors->image != NULL)
                <img src="{{asset('images/' . $doctors->image)}}"
                style="width:90px,height:90px">

        @endif

          <input type="text" name="original" class="form-control  mb-3 py-4" value="{{$doctors->image}}">
        <input type="file" name="photo" placeholder="Offer photo" class="form-control mb-3 px-4 pt-3 pb-5">
        <div class="text-center"><input type='submit' value="save changes" class="btn btn-success mt-4"></div>
    </form>
  </div>
</div>
@endsection
