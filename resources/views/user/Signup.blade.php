<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/js/all.js')}}">
    <link rel="stylesheet" href="{{asset('front/js/bootstrap.bundle.min.js')}}">
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <script src="{{asset('front/js/all.js')}}"></script>
    <link rel="stylesheet" href="{{asset('front/css/signup.css')}}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
<!-- Navbar Start -->
@include('navbar')
<!-- Navbar End -->
<script>
    setTimeout(function(){
        $('.alert').fadeOut('slow');
    }, 3000); // 3 seconds
</script>
<p class="tip"></p>
<div class="cont">
    <div class="form sign-in">
        <h2>Welcome back,</h2>
        {{-- Signin Form --}}
        <form method="POST" action="{{route('sign_in_route')}}">
            @csrf
            @if(Session::has('success'))
                <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(Session::has('failed'))
                <div style="text-align: center" class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <label>
                <span>Email</span>
                <input type="email" name="email"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password"/>
            </label>
            <label>
                <a href="#" class="forgot-pass">Forgot password?</a>
            </label>
            <button type="submit" class="submit">Sign In</button>
            <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
        </form>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h3>New here?</h3>
                <p>Sign up and discover great amount of new opportunities!</p>
            </div>
            <div class="img__text m--in">
                <h3>One of us?</h3>
                <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img__btn">
                <span id="signUpBtn" class="m--up">Sign Up</span>
                <span id="signInBtn" class="m--in">Sign In</span>
            </div>
        </div>
        {{-- SignUp Form --}}
        <form id="signup-form" method="POST" action="{{ route('sign_up_route') }}">
            @csrf
            <div class="form sign-up">
                <!-- Flash Messages -->
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2>Time to Get Recovered,</h2>
                <div class="row">
                    <div class="col-xl-4">
                        <label>Name</label>
                        <input type="text" name="name"/>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-xl-4">
                        <label>Email</label>
                        <input type="email" name="email"/>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <label>Phone</label>
                        <input type="phone" name="phone"/>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-xl-4">
                        <label>Password</label>
                        <input type="password" name="password"/>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation"/>
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-xl-4">
                        <label>Date of Birth</label>
                        <input type="date" name="DOB"/>
                        @error('DOB')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="gender">
                    Gender:
                    <select name="gender">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="submit">Sign Up</button>
                    <button type="button" class="fb-btn">Join with <span>facebook</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Footer Start -->
@include('footer')
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<script>
    document.getElementById('signUpBtn').addEventListener('click', function () {
        window.location.href = "/sign_up_route";
    });

    document.getElementById('signInBtn').addEventListener('click', function () {
        window.location.href = "/sign_in_route";
    });

</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('front/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('front/js/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('front/js/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('front/js/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('front/js/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('front/js/js/google-map.js')}}"></script>
<script src="{{asset('front/js/index.js')}}"></script>
<script src="{{asset('front/js/signup.js')}}"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Other JS files -->
<script>
    setTimeout(function(){
        $('.alert').fadeOut('slow');
    }, 3000); // 3 seconds
</script>
</body>
</html>
