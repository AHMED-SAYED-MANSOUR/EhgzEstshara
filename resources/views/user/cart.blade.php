<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>phsyiorevive</title>
  <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css//magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/cart.css')}}">
	<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('front/js/js/aos.js')}}"></script>
	<script src="{{asset('front/js/all.js')}}"></script>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
	    <!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
</head>

<body>

@include('navbar')

@foreach($products as $product)
    <h1>{{$product[0]['ProductName']}}</h1>
@endforeach

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $item)
                    <tr>
                    <td >
                      <img src="{{asset('images/products images/' . $item->img)}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$item->ProductName}} </h2>
                    </td>
                    <td>{{$item->price}}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>{{$item->price}}</td>
                    <td><a href="#" class="btn btn height-auto btn-sm">X</a></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn btn-md ">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn  btn-block">Continue Shopping</button>
              </div>
            </div>
             <!-- <div class="row">
               <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn  btn-md px-4">Apply Coupon</button>
              </div>
            </div>
          </div> -->
          <div class="row cart" >
          <div class="col-md-6 ">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
</div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn  btn-md " onclick="window.location='checkout.html'">Proceed To
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- form itself end -->

    <script src="{{asset('front/js/js/jquery.min.js')}}"></script>
  <script src="{{asset('front/js/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('front/js/js/popper.min.js')}}"></script>
  <script src="{{asset('front/js/js/slick.min.js')}}"></script>
  <script src="{{asset('front/js/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/js/js/jquery.easing.1.3.js')}}"></script>
   <script src="{{asset('front/js/js/jquery-ui.js')}}"></script>
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
<script>
    var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	sitePlusMinus();
    </script>
@include('footer')

</body>
</html>
