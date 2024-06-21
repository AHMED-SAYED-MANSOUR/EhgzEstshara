<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">

    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/contactus.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/js/aos.js')}}"></script>
    <script src="{{asset('front/js/all.js')}}"></script>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">


</head>
<body>



<!-- Navbar Start -->
@include('navbar')

<!-- Navbar End -->
@if(Session()->has('success'))
    <div class="alert alert-success" id="alert">
        <button type="button"class="close" data-dismiss="alert">x</button>
        {{session()->get('success')}}
    </div>
@endif

<section>
    <div class="box ">
        <div class="contact-form ">
            <h1 style="text-align: center">Update Information</h1>
            <form method="POST" action="{{route('update-info', ['user_id' => $user->id])}}">
                @csrf
                <div class="formBox">
                    <div class="inputbox w50 row ">
                        <input type="text" name="name" value="{{$user->name}}" class=" @error('name')is-invalid @enderror">
                        <span>Name</span>
                        @error('name')
                            <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="inputbox w50 row ">
                        <input type="email" name="email" value="{{$user->email}}"  class=" @error('email')is-invalid @enderror">
                        <span>Email Address</span>
                        @error('email')
                        <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="inputbox w50 row ">
                        <input type="text" name="phone" value="{{$user->phone}}" class=" @error('phone')is-invalid @enderror" >
                        <span>Your Phone</span>
                        @error('phone')
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

                    <div class="inputbox w100 row ">
                        <input type="date" name="DOB" value="{{$user->DOB}}" class=" @error('message')is-invalid @enderror"></input>
                        <span>DOB</span>
                        @error('message')
                            <span class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="inputbox w50 row">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="gender-selection">
                            <input type="radio" id="male" name="gender" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}>
                            <label for="female">Female</label>
                        </div>
                        @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                        <input type="hidden" name="updated_at" value="{{now()}}">
                    <div class="inputbox w50 row ">
                        <input type="submit"  value="Update" name="submit" class="show-modal">
                    </div>
            </form>
        </div>
    </div>


    <div class="contactinfo ">
        <div>
            <h2>contact info</h2>
            <ul class="info">
                <li>
                    <span> <i class="fa-solid fa-location-pin"></i></span>
                    <span>9 iran street-dokki</span>
                </li>
                <li>
                    <span> <i class="fa-regular fa-envelope"></i></span>
                    <span>phsyiorevive@gmail.com</span>
                </li>
                <li>
                    <span> <i class="fa-solid fa-phone"></i></span>
                    <span>01197035791</span>
                </li>
            </ul>
            <ul class="icons">
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </ul>
        </div>
    </div>
    <!-- </div>
    <div class="background">
        <img src="{{asset('front/images/background.jpeg')}}">
    </div>
</div> -->
    <section>
        <span class="overlay"></span>
        <div class="modal-box">
            <i class="fa-regular fa-circle-check"></i>
            <h2>Completed</h2>
            <h3>Your Message have been successfully sent.</h3>
            <div class="buttons">
                <button class="close-btn">Ok, Close</button>
            </div>
        </div>
    </section>
</section>



<!-- Footer Start -->
@include('footer')
<!-- Footer End -->



<!-- JavaScript Libraries -->
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
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

<script src="{{asset('front/js/contactus.js')}}"></script>

</body>
</html>
