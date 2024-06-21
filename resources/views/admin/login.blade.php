<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

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
    <div class="box ">
        <div class="form sign-in">
            <h2>Welcome Admin</h2>

            {{-- Signin Form --}}
            <form method="POST" action="{{route('adminGO')}}">
                @csrf
                <label>
                    <span>Email</span>
                    <input type="email" name="email"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password"/>
                </label>
                <button type="submit" class="submit">Login</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer Start -->
@include('footer')
<!-- Footer End -->



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

</body>
</html>
