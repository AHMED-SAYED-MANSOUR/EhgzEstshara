<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Add your CSS and JS files here -->
</head>
<body>

<!-- Navbar Start -->
@include('navbar')
<!-- Navbar End -->

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

<section>
    <div class="box">
        <div class="form sign-in">
            <h2>Welcome Admin</h2>

            <!-- Signin Form -->
            <form method="POST" action="{{ route('adminGO') }}">
                @csrf
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" required/>
                </label>
                <button type="submit" class="submit">Login</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer Start -->
@include('footer')
<!-- Footer End -->

<!-- Add your JS files here -->
</body>
</html>
