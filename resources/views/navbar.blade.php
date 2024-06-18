

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
                    <a href="{{ url('/sign') }}" class="nav-item nav-link text-white">Log In</a>
                    <a href="{{ url('/sign') }}" class="nav-item nav-link text-white">Sign up</a>
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
                        <a class="popup-with-form" href="#test-form">Make an Appointment</a>
                    </div>
                </div>
            </div>

            <div class="icons">
            <!-- <input type="text"  class="search-text"placeholder="search"> -->
                <a href="#" class="icons-btn d-inline-block js-search-open">
                    <div class="fa-solid fa-magnifying-glass"></div>
                </a>
            </div>

            @auth
                <div>
                    <a href="{{ url('/cart') }}" class="icons-btn d-inline-block bag">
                        <span class="fa-solid fa-cart-shopping"></span>
                        <span class="number">2</span>
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="nav-item nav-link text-white">
                    @csrf
                    <button type="submit" class="btn btn-link text-white p-0 m-0">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

<!-- form itself end -->
    @if(Session()->has('success'))
        <div class="alert alert-success" id="alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('success')}}</div>
    @elseif(Session()->has('error'))
            <div class="alert alert-failed" id="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('error')}}</div>
    @endif
<form id="test-form" class="white-popup-block mfp-hide" method="POST" action="{{ route('Appointment') }}">
    @csrf
    <div class="popup_box">
        <div class="popup_inner">
            <h3>Make an Appointment</h3>
            <div class="row">

                <div class="col-xl-6">
                    <input type="date" name="date">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-xl-6">
                    <input type="time" name="time" >
                    @error('time')
                        <span class="text-danger">{{$message}}
                    @enderror
                </div>

                <div class="col-xl-6">
                    <select class="form-select wide" id="default-select" name="doctor" >
                        <option value="" disabled selected>Select Doctor</option>
                        <option value="Mirazul Alom">Mirazul Alom</option>
                        <option value="Monzul Alom">Monzul Alom</option>
                        <option value="Azizul Isalm">Azizul Isalm</option>
                    </select>
                    @error('doctor')
                        <span class="text-danger">{{$message}}
                    @enderror
                </div>

                <div class="col-xl-6">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name', $user->name ?? '') }}" />
                    @error('name')
                        <span class="text-danger">{{$message}}
                    @enderror
                </div>

                <div class="col-xl-6">
                    <input type="text" name="phone" placeholder="Phone no." value="{{ old('phone', $user->phone ?? '') }}">
                    @error('phone')
                        <span class="text-danger">{{$message}}
                    @enderror
                </div>

                <div class="col-xl-12">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email ?? '') }}">
                    @error('email')
                        <span class="text-danger">{{$message}}
                    @enderror
                </div>

                <div class="col-xl-12">
                    <input type="submit" class="boxed-btn3" value="confirm" name="submit">
                </div>

            </div>
        </div>
    </div>
</form>

    <!-- form itself end -->

