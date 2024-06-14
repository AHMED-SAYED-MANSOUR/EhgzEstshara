@extends('dashboard')
@section('title')
create new offers
@endsection
@section('content')
    <!-- <h1>create new offers</h1>
     -->
    <div class="card">
      <div class="card-header">
        <a href="{{url('show-offers')}}" class="btn btn-success">Show Offers</a>
      </div>
  <div class="card-body">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
    @endforeach   
    </div>
    @endif

    <form method="post" action="{{url('save-offer')}}" enctype="multipart/form-data">
      {{csrf_field()}}
        <label>Offer Name:</label>
    
        <input type="text" name="name" placeholder="Offer Name" class="form-control mb-3 py-4"  value="{{old('name')}}">
        <label>Offer price:</label>
    
        <input type="text" name="price" placeholder="Offer price" class="form-control  mb-3 py-4">
        <label>Offer photo:</label>
    
        <input type="file" name="photo" placeholder="Offer photo" class="form-control mb-3 px-4 pt-3 pb-5">
        <div class="text-center"><input type='submit' value=submit class="btn btn-primary mt-4"></div>
    </form>
  </div>
</div>
<a href="{{url('show')}}"> show offers</a>
@endsection