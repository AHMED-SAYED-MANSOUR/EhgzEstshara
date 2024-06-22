

<nav class="navbar navbar-expand-lg navbar-light sticky-top p-0">
    <div class="navbar-brand d-flex align-items-center">
        <img class="logo" src="{{asset('front/images/7BB51B43-7353-4482-8614-39087B8CBA3B.png')}}" />
        <h1>phsyiorevive</h1>
    </div>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{ url('/') }}" class="nav-item nav-link text-white">Home</a>

                @guest
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Sign in</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/sign') }}" class="dropdown-item">User Login</a>
                            <a href="{{ url('/admin/login') }}" class="dropdown-item">Admin Login</a>
                        </div>
                    </div>
                @endguest

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="{{ url('/trainers') }}" class="dropdown-item">Our Trainers</a>
                        <a href="{{ url('/doctors') }}" class="dropdown-item active">Our Doctors</a>
                        <a href="{{ url('/products') }}" class="dropdown-item">Products</a>
                        <a href="{{ url('/#aboutus') }}" class="dropdown-item">About Us</a>
                        <a href="{{ url('/#services') }}" class="dropdown-item">Services</a>
                    </div>
                </div>
                    <a href="{{ url('/contactus') }}" class="nav-item nav-link text-white">Contact</a>
            </div>

            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                <div class="Appointment">
                    <div class="book_btn d-none d-lg-block">
                        <a class="popup-with-form" href="#appointment-form">Make an Appointment</a>
                    </div>
                </div>
            </div>

            <div class="icons">
                <a href="#" class="icons-btn d-inline-block js-search-open">
                    <div class="fa-solid fa-magnifying-glass"></div>
                </a>
                <form id="search-form" action="{{ route('search') }}" method="GET" style="display: none;">
                    <input type="text" name="query" class="search-text" placeholder="Search" required>
                    <button type="submit" class="search-button">Search</button>
                </form>
            </div>

            @auth
                <div>
                    <div>

                        <a href="{{ route('cart.index') }}" class="icons-btn d-inline-block bag">
                            <span class="fa-solid fa-cart-shopping">{{$count}}</span>
                            <span id="cartItemCount" class="number">{{$count}}</span>
                        </a>
                    </div>
                </div>
                <a href="{{ route('edit-info') }}" class="icons-btn d-inline-block">
                    <span class="fa-solid fa-user text-white" style="font-size: 1.5rem;"></span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="nav-item nav-link text-white">
                    @csrf
                    <button type="submit" class="btn btn-link text-white p-0 m-0">Logout</button>
                </form>


            @endauth
        </div>
    </nav>

<form id="appointment-form" style="text-align: center" class="white-popup-block mfp-hide" method="POST" action="{{ route('Appointment') }}">
    @csrf
    <div class="popup_box">
        <div class="popup_inner">
            <h3>Make an Appointment</h3>
            <div id="form-messages"></div>
            <!-- The error messages here -->
            <div class="row">

                <div class="col-xl-6">
                    <input type="date" name="date">
                    <span class="text-danger" id="date-error">
                        <!-- error spans here -->
                    </span>
                </div>

                <div class="col-xl-6">
                    <input type="time" name="time">
                    <span class="text-danger" id="time-error"></span>
                </div>

                <div class="col-xl-6">
                    <select class="form-select wide" id="default-select" name="doctor">
                        <option value="" disabled selected>Select Doctor</option>
                        <option value="Mirazul Alom">Mirazul Alom</option>
                        <option value="Monzul Alom">Monzul Alom</option>
                        <option value="Azizul Isalm">Azizul Isalm</option>
                    </select>
                    <span class="text-danger" id="doctor-error"></span>
                </div>

                <div class="col-xl-6">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name', $user->name ?? '') }}">
                    <span class="text-danger" id="name-error"></span>
                </div>

                <div class="col-xl-6">
                    <input type="text" name="phone" placeholder="Phone no." value="{{ old('phone', $user->phone ?? '') }}">
                    <span class="text-danger" id="phone-error"></span>
                </div>

                <div class="col-xl-12">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email ?? '') }}">
                    <span class="text-danger" id="email-error"></span>
                </div>

                <div class="col-xl-12">
                    <input type="submit" class="boxed-btn3" value="confirm" name="submit">
                </div>

            </div>
        </div>
    </div>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/cart/items/count')
            .then(response => response.json())
            .then(data => {
                document.getElementById('cartItemCount').textContent = data.count;
            });
    });
</script>

<script>
    document.querySelector('.js-search-open').addEventListener('click', function(event) {
        event.preventDefault();
        var searchForm = document.getElementById('search-form');
        if (searchForm.style.display === 'none') {
            searchForm.style.display = 'block';
        } else {
            searchForm.style.display = 'none';
        }
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#appointment-form').on('submit', function(event) {
            event.preventDefault();

            // Clear previous error messages
            $('.text-danger').text('');

            $.ajax({
                url: "{{ route('Appointment') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success case
                    $('#form-messages').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#appointment-form')[0].reset(); // Reset the form if needed
                },
                error: function(xhr) {
                    // Handle error case
                    if (xhr.status === 422) { // Laravel validation error
                        var errors = xhr.responseJSON.errors;
                        if (errors.date) {
                            $('#date-error').text(errors.date[0]);
                        }
                        if (errors.time) {
                            $('#time-error').text(errors.time[0]);
                        }
                        if (errors.doctor) {
                            $('#doctor-error').text(errors.doctor[0]);
                        }
                        if (errors.name) {
                            $('#name-error').text(errors.name[0]);
                        }
                        if (errors.phone) {
                            $('#phone-error').text(errors.phone[0]);
                        }
                        if (errors.email) {
                            $('#email-error').text(errors.email[0]);
                        }
                    } else {
                        $('#form-messages').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    }
                }
            });
        });
    });



</script>

