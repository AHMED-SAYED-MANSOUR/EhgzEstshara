<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/shop.css')}}">
    <script src="{{asset('front/js/all.js')}}" ></script>
    <script src="{{asset('front/js/js/aos.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front/css/team.css')}}" rel="stylesheet">

    <!-- Include necessary CSS and JS here -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .fixed-size
        {
            width: 336px;
            height: 373px;
            object-fit: cover; /* Ensures the image covers the container without distortion */
        }
        .pagination
        {
            justify-content: center;
        }
        .page-item.active .page-link
        {
            background-color: #007bff;
            border-color: #007bff;
        }
        .filters
        {
            margin-right: 20px;
        }

        .price-range-container
        {
            margin: 20px 0;
        }
        .price-range-container p {
            text-align: center;
        }

    </style>
</head>

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

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-align: center">Our Products</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Filters Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <!-- Filters Section Start -->
            <div class="col-lg-3">
                <form id="filterForm">
                    <!-- Category Filters -->
                    <div>
                        <h4>Categories</h4>
                        @foreach($categories as $category)
                            <div>
                                <input type="checkbox" name="category[]" value="{{ $category }}" {{ in_array($category, request('category', [])) ? 'checked' : '' }}> {{ $category->category }}
                            </div>
                        @endforeach
                    </div>
                    <hr>

                    <!-- Price Range Filter -->
                    <div>
                        <h4>Price Range</h4>
                        <div id="priceRange" class="price-range-container"></div>
                        <p>Price: <span id="priceRangeValue">0 - 10000</span><button type="submit" class="btn btn-primary mt-2">Go</button></p>
                        <input type="hidden" id="minPrice" name="min_price" value="0">
                        <input type="hidden" id="maxPrice" name="max_price" value="10000">
                    </div>
                    <hr>

                    <!-- Brand Filter -->
                    <div>
                        <h4>Brand</h4>
                        @foreach($brands as $brand)
                            @if(!is_null($brand->Brand))
                                <div>
                                    <input type="checkbox" name="Brand[]" value="{{ $brand->Brand }}" {{ in_array($brand->Brand, request('Brand', [])) ? 'checked' : '' }}> {{ $brand->Brand }}
                                </div>
                            @endif
                        @endforeach
                        @if($brands->contains(function ($brand) { return is_null($brand->Brand); }))
                            <div>
                                <input type="checkbox" name="Brand[]" value="other" {{ in_array('other', request('Brand', [])) ? 'checked' : '' }}> Other
                            </div>
                        @endif
                    </div>
                    <hr>

                    <!-- Material Filter -->
                    <div>
                        <h4>Material</h4>
                        @foreach($materials as $material)
                            @if(!is_null($material->Material))
                                <div>
                                    <input type="checkbox" name="Material[]" value="{{ $material }}" {{ in_array($material, request('Material', [])) ? 'checked' : '' }}> {{ $material->Material }}
                                </div>
                            @endif
                        @endforeach
                        @if($materials->contains(function ($material) { return is_null($material->Material); }))
                            <div>
                                <input type="checkbox" name="Material[]" value="other" {{ in_array('other', request('Material', [])) ? 'checked' : '' }}> Other
                            </div>
                        @endif
                    </div>
                    <hr>

                    <!-- Color Filter -->
                    <div>
                        <h4>Color</h4>
                        @foreach($colors as $color)
                            @if(!is_null($color->Color))
                                <div>
                                    <input type="checkbox" name="Color[]" value="{{ $color }}" {{ in_array($color, request('Color', [])) ? 'checked' : '' }}> {{ $color->Color }}
                                </div>
                            @endif
                        @endforeach
                        @if($colors->contains(function ($color) { return is_null($color->Color); }))
                            <div>
                                <input type="checkbox" name="Color[]" value="other" {{ in_array('other', request('Color', [])) ? 'checked' : '' }}> Other
                            </div>
                        @endif
                    </div>
                    <hr>

                    <!-- Sort By Filter -->
                    <div>
                        <select name="sort_by" class="form-control">
                            <option value="">Sort By</option>
                            <option value="newest" {{ request('sort_by') == 'newest' ? 'selected' : '' }}>Newest</option>
                            <option value="oldest" {{ request('sort_by') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                        </select>
                    </div>
                    <hr>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                </form>
            </div>
            <!-- Filters Section End -->

            <!-- Products Listing Start -->
            <div class="col-lg-9">
                <div id="products-list">
                        @include('partials.products', ['products' => $products])
                    </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                        @if ($products->onFirstPage())
                            <span class="btn btn-secondary disabled">First</span>
                        @else
                            <a href="{{ $products->url(1) }}" class="btn btn-primary">First</a>
                        @endif

                        @if ($products->currentPage() > 3)
                            <span class="btn btn-secondary disabled">...</span>
                        @endif

                        @for ($i = max($products->currentPage() - 2, 1); $i <= min(max($products->currentPage() - 2, 1) + 4, $products->lastPage()); $i++)
                            @if ($i == $products->currentPage())
                                <span class="btn btn-primary disabled">{{ $i }}</span>
                            @else
                                <a href="{{ $products->url($i) }}" class="btn btn-primary">{{ $i }}</a>
                            @endif
                        @endfor

                        @if ($products->currentPage() < $products->lastPage() - 2)
                            <span class="btn btn-secondary disabled">...</span>
                        @endif

                        @if ($products->hasMorePages())
                            <a href="{{ $products->url($products->lastPage()) }}" class="btn btn-primary">Last</a>
                        @else
                            <span class="btn btn-secondary disabled">Last</span>
                        @endif
                    </div>
            </div>
            </div>
            <!-- Products Listing End -->
        </div>
    </div>
</div>
<!-- Filters Section End -->


<!-- Footer Start -->
@include('footer')
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- AJAX Filter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"></script>
<script>
    var priceSlider = document.getElementById('priceRange');
    noUiSlider.create(priceSlider, {
        start: [0, 10000],
        connect: true,
        range: {
            'min': 0,
            'max': 10000
        },
        step: 100,
        tooltips: [true, true],
        format: {
            to: function (value) {
                return Math.round(value) + ' EGP';
            },
            from: function (value) {
                return Number(value.replace(' EGP', ''));
            }
        }
    });

    var priceRangeValue = document.getElementById('priceRangeValue');
    var minPrice = document.getElementById('minPrice');
    var maxPrice = document.getElementById('maxPrice');

    priceSlider.noUiSlider.on('update', function (values, handle) {
        priceRangeValue.innerHTML = values[0].replace(' EGP', '') + ' EGP - ' + values[1].replace(' EGP', '') + ' EGP';
        minPrice.value = values[0].replace(' EGP', '');
        maxPrice.value = values[1].replace(' EGP', '');
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


<!-- Template Javascript -->
<script src="{{asset('front/js/team.js')}}"></script>

</body>

</html>
