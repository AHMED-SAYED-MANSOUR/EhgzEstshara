@extends('dashboard')
@section('title')
    Admin panel
@endsection
@section('content')
    @if(Session()->has('success'))
        <div class="alert alert-success" id="alert">
            <button type="button"class="close" data-dismiss="alert">x</button>
            {{session()->get('success')}}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="box ">
        <div class="contact-form ">
            <h1 style="text-align: center">Update Information</h1>
            <form method="POST" action="{{route('admin.update.info', ['id' => $admin->id])}}">
                @csrf
                <div class="formBox">
                    <div class="inputbox w50 row ">
                        <input type="text" name="name" value="{{$admin->name}}" class=" @error('name')is-invalid @enderror">
                        <span>Name</span>
                        @error('name')
                        <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="inputbox w50 row ">
                        <input type="email" name="email" value="{{$admin->email}}"  class=" @error('email')is-invalid @enderror">
                        <span>Email Address</span>
                        @error('email')
                        <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="inputbox w100 row ">
                        <input type="password" name="password" class=" @error('message')is-invalid @enderror"></input>
                        <span>Your Password</span>
                        @error('message')
                        <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <input type="hidden" name="updated_at" value="{{now()}}">
                    <div class="inputbox w50 row ">
                        <input type="submit"  value="Update" name="submit" class="show-modal">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
