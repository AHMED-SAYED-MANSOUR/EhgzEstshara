<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="icon" href="{{asset('front/images/IMG_2837.PNG')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/js/all.js')}}">
    <link rel="stylesheet" href="{{asset('front/js/bootstrap.bundle.min.js')}}">
    <link rel="icon" href="{{asset('front/images/IMG_2837.PNG')}}">
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
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
            <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>


  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

 <!-- Navbar Start -->

 @include('navbar')
	  <!-- Navbar End -->

      @if(Session()->has('success'))
        <div class="alert alert-success" id="alert">
            <button type="button"class="close" data-dismiss="alert">x</button>
            {{session()->get('success')}}</div>
      @endif


    <p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
      <input type="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" />
    </label>
    <label>
    <a href="# " class="forgot-pass">Forgot password?</a>
    </label>
    <button type="button" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
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
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>








    <form id="signup-form" method="POST" action="{{ url('/Signup') }}">
    @csrf

    <div class="form sign-up">
      <h2>Time to Get Recovered,</h2>
      <div class="row">
      <div class="col-xl-4">
        <label class="text-align-center">Name</label>
        <input type="text" name="name" />
        @error('name')
        <span class="text-danger">{{$message}}
        @enderror
       </div>
      <div class="col-xl-4">
        <label>Email</label>
        <input type="email" name="email"  />
        @error('email')
        <span class="text-danger">{{$message}}
        @enderror
      </div>
         </div>
      <div class="row">
      <div class="col-xl-4">
        <label>Phone</label>
        <input type="phone" name="phone"   />
        @error('phone')
        <span class="text-danger">{{$message}}
        @enderror
        </div>

        <div class="col-xl-4">
        <label>Password</label>
        <input type="password"name="password"   />
        @error('password')
        <span class="text-danger">{{$message}}
        @enderror

      </div>
       </div>
      <div class="row">
      <div class="col-xl-4">
      <label>Confirm Password</label>
      <input type="password" name="confirm"    />
      @error('confirm')
        <span class="text-danger">{{$message}}
        @enderror

    </div>
    <div class="col-xl-4">
        <label>Date</label>
        <input type="date"name="date"  />
      </div>
</div>
     <div class="gender">Gender:
   <select name="gender"   >
  <option value=""> Select </option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
   </select>
 </div>

<div>
      <button type="submit" class="submit">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span>facebook</span></button>
    </div>
</div>
<form>
</div>
</div>







<!-- Footer Start -->
@include('footer')
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

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
