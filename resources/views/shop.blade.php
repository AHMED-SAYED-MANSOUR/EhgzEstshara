<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('front/images/IMG_2837.PNG')}}">


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


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
                    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  </head>
  <body>


 <!-- Navbar Start -->


 @include('navbar')

<!-- Navbar End -->


<!-- BANNER starts here -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('front/images/5\ Tips\ For\ Physiotherapy\ Branding\ -\ Design\ Guide\ For\ 2024.jpeg);')}}" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <!-- <div class="row no-gutters slider-text align-items-end">
          <div   data-aos="zoom-in" class= " pb-5">
            <h1 class="mb-0 bread">Shop</h1>
          </div>
        </div> -->
      </div>
    </section>
    <!-- BANNER ends here -->
   <?php
   $offers=App\Models\offer::get();
   ?>
    <div class="text-center mt-3" data-aos="zoom-in" data-aos-duration="900"> <h1> Shop Now</h1></div>
    <div class="row">
    @foreach($offers as $offer)
      <div class="col-md-3 col-sm-6" >
          <div class="product-grid" >
              <div class="product-image">

                  <a href="#" class="image">
                  @if($offer->image != NULL)
                  <img src="{{asset('images/' . $offer->image)}}"
                  style="width:290px;height:290px">
                  @else
                      <img src="{{asset('front/images/default-150x150.png')}}"
                      style="width:90px;height:2000px">
                  </a>
                  @endif
                  <span class="product-discount-label">-23%</span>
                  <ul class="product-links">
                      <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-random"></i></a></li>
                  </ul>
                  <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
              </div>
              <div class="product-content">
                <h5 style="font-size: 18px;">{{$offer->name}}</h5>
                <div>{{$offer->price}}</div>
                  <!-- <h3 class="title" name="name"><a href="#">Women's Blouse Top</a></h3> -->
                  <!-- <div class="price" name="price">$53.55 <span>$68.88</span></div> -->
              </div>
          </div>
         @endforeach
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-grid" >

            <div class="product-image">
                <a href="#" class="image" name="photo">
                    <img src="{{asset('front/images/download.jpeg')}}">
                </a>
                <span class="product-discount-label">-23%</span>
                <ul class="product-links">
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                </ul>
                <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
            </div>
            <div class="product-content">
                <h3 class="title" name="name"><a href="#">Women's Blouse Top</a></h3>
                <div class="price" name="price">$53.55 <span>$68.88</span></div>
            </div>
        </div>

    </div>

    <div class="col-md-3 col-sm-6" >
      <div class="product-grid" >

          <div class="product-image">
              <a href="#" class="image" name="photo">
                  <img src="{{asset('front/images/download.jpeg')}}">
              </a>
              <span class="product-discount-label">-23%</span>
              <ul class="product-links">
                  <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-random"></i></a></li>
              </ul>
              <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
          </div>
          <div class="product-content">
              <h3 class="title" name="name"><a href="#">Women's Blouse Top</a></h3>
              <div class="price" name="price">$53.55 <span>$68.88</span></div>
          </div>
      </div>

  </div>

  <div class="col-md-3 col-sm-6" >

    <div class="product-grid" >

        <div class="product-image">
            <a href="#" class="image" name="photo">
                <img src="{{asset('front/images/download.jpeg')}}">
            </a>
            <span class="product-discount-label">-23%</span>
            <ul class="product-links">
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-random"></i></a></li>
            </ul>
            <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
        </div>
        <div class="product-content">
            <h3 class="title" name="name"><a href="#">Women's Blouse Top</a></h3>
            <div class="price" name="price">$53.55 <span>$68.88</span></div>
        </div>
    </div>

</div>

      <div class="col-md-3 col-sm-6">
        <div class="product-grid" >
            <div class="product-image">
                <a href="#" class="image" name="photo">
                    <img src="{{asset('front/images/download.jpeg')}}">
                </a>
                <ul class="product-links">
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                </ul>
                <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
            </div>
            <div class="product-content">
                <h3 class="title" name="name"><a href="#">Men's Jacket</a></h3>
                <div class="price" name="price">$75.55</div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6" >
      <div class="product-grid" >
          <div class="product-image">
              <a href="#" class="image" name="photo">
                  <img src="{{asset('front/images/download.jpeg')}}">
              </a>
              <ul class="product-links">
                  <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-random"></i></a></li>
              </ul>
              <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
          </div>
          <div class="product-content">
              <h3 class="title" name="name"><a href="#">Men's Jacket</a></h3>
              <div class="price" name="price">$75.55</div>
          </div>
      </div>
  </div>

  <div class="col-md-3 col-sm-6"  >
    <div class="product-grid" >
        <div class="product-image">
            <a href="#" class="image" name="photo">
                <img src="{{asset('front/images/download.jpeg')}}">
            </a>
            <ul class="product-links">
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-random"></i></a></li>
            </ul>
            <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
        </div>
        <div class="product-content">
            <h3 class="title" name="name"><a href="#">Men's Jacket</a></h3>
            <div class="price" name="price">$75.55</div>
        </div>
    </div>
</div>

<div class="col-md-3 col-sm-6" >
  <div class="product-grid">
      <div class="product-image">
          <a href="#" class="image" name="photo">
              <img src="{{asset('front/images/download.jpeg')}}">
          </a>
          <ul class="product-links">
              <li><a href="#"><i class="fa fa-search"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-random"></i></a></li>
          </ul>
          <a href="{{url('/payment')}}" class="add-to-cart">Buy Now</a>
      </div>
      <div class="product-content">
          <h3 class="title" name="name"><a href="#">Men's Jacket</a></h3>
          <div class="price" name="price">$75.55</div>
      </div>
  </div>
</div>
</div>
  </div>

  <!-- <label for="btnbox" class="btn-area">
  <span class="btn-1">Load More</span>
  <span class="btn-2">Load Less</span>
</label> -->
  <button class="load-more" id="load-more">Load More</button>
  <script>
    $(document).ready(function(){
      $(".col-md-3").slice(0,4).fadeIn();
      $(".load-more").click(function(){
        $(".col-md-3").slice(0,8).fadeIn();
        $(this).fadeOut();
      });

    });

  </script>

<!-- Footer Start -->
@include('footer')
 <!-- Footer End -->



         <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>






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
   <!-- JavaScript Libraries -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
   <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
   <script src="{{asset('front/lib/waypoints/waypoints.min.js')}}"></script>
   <script src="{{asset('front/lib/counterup/counterup.min.js')}}"></script>
   <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
   <script src="{{asset('front/lib/tempusdominus/js/moment.min.js')}}"></script>
   <script src="{{asset('front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
   <script src="{{asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <script src="{{asset('front/js/shop.js')}}"></script>
  <script src="{{asset('front/js/index.js')}}"></script>





  </body>
</html>
