@extends('dashboard')
@section('title')
    Admin panel
@endsection

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@elseif(Session()->has('failed'))
    <div class="alert alert-failed" id="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('failed')}}
    </div>
@endif

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @elseif (Session()->has('failed'))
            <div class="alert alert-failed" id="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ Session()->get('failed') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Welcome Admin</div>

                    <div class="card-body">
                        <!-- Signin Form -->
                        <form method="POST" action="{{ route('adminGO') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required/>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
