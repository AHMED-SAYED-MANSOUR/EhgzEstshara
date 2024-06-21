<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phsyiorevive</title>
    <link rel="icon" href="{{ asset('images/Icons/IMG_2837.PNG') }}">

    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css//owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css//magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <script src="{{ asset('front/js/all.js') }}"></script>
    <script src="{{ asset('front/js/js/aos.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('front/css/payment.css') }}">



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
<div class="card">
    <form action="{{ route('orders.create') }}" method="post">
        @csrf

        <div class="row">

            <div class="col">
                <h3 class="title">
                    Billing Address
                </h3>

                <div class="inputBox">
                    <label for="name">
                        Full Name:
                    </label>
                    <input type="text" id="name" placeholder="Enter your full name" required>
                </div>

                <div class="inputBox">
                    <label for="email">
                        Email:
                    </label>
                    <input type="text" id="email" placeholder="Enter email address" required>
                </div>

                <div class="inputBox">
                    <label for="address">
                        Address:
                    </label>
                    <input type="text" id="address" placeholder="Enter address" required>
                </div>

                <div class="inputBox">
                    <label for="city">
                        City:
                    </label>
                    <input type="text" id="city" placeholder="Enter city" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <label for="zip">
                            Zip Code:
                        </label>
                        <input type="number" id="zip" placeholder="123 456" required>
                    </div>

                </div>

            </div>
            <div class="col">
                <h3 class="title">Payment</h3>
                <div class="cash-on-delivery">
                    <input type="checkbox" id="cash-on-delivery">
                    <span>cash-on-delivery</span>
                </div>
                <div class="visa-card">
                    <input type="checkbox" id="visa-card" onclick="hideshow()">
                    <span>Visa-card</span>
                </div>
                <div id="visa-form">
                    <div class="inputBox">
                        <label for="cardName">
                            Name On Card:
                        </label>
                        <input type="text" id="cardName" placeholder="Enter card name" required>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">
                            Credit Card Number:
                        </label>
                        <input type="text" id="cardNum" placeholder="1111-2222-3333-4444" maxlength="19"
                               required>
                    </div>
                    <div class="inputBox">
                        <label for="">Exp Month:</label>
                        <select name="" id="">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>


                    <div class="flex">
                        <div class="inputBox">
                            <label for="">Exp Year:</label>
                            <select name="" id="">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="cvv">CVV</label>
                            <input type="number" id="cvv" placeholder="123" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit_btn">Proceed to Checkout</button>

            </div>
        </div>
    </form>
</div>



<!-- Footer Start -->
@include('footer')
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
        class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('front/js/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('front/js/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('front/js/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('front/js/js/google-map.js') }}"></script>
<script src="{{ asset('front/js/index.js') }}"></script>
<script src="{{ asset('front/js/payment.js') }}"></script>



</body>

</html>
