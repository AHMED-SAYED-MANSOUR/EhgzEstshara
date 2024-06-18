<!DOCTYPE html>
<html lang="en">
  <head>
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('front/images/IMG_2837.PNG')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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



	<!-- Navbar Start -->

	@include('navbar')
	  <!-- Navbar End -->

    <div class="container mt-5">
        <h1 class="text-center">Welcome</h1>

        @if($user)
            <p>Hello, {{ $user->name }}! You are logged in.</p>
        @else
            <p>Hello, Guest! Please <a href="{{ url('/login') }}">login</a>.</p>
        @endif

    </div>

    <!-- BANNER starts here -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url({{asset('front/images/images/background.jpeg);')}}">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to  us</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url({{asset('front/images/images/bg_2.jpg);')}}">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">phsyiorevive care for the whole family</h1>
			            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			            <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>

 <!-- Banner ends here -->

    <section class="ftco-section" id="services">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3" >
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading" >We offer Services</span>
            <h2>Our Benefits</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('front/images/icons8-doctor-48.png')}}"></image>

              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Our expert Doctors</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('/doctors')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('front/images/icons8-physical-therapy-48.png')}}"></image>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Our Expert Trainers</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('/trainers')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('front/images/icons8-add-to-cart-100 (1).png')}}"></image>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Our shop</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('/shop')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('front/images/icons8-blog-64.png')}}">
              </div>
              <div class="media-body pl-3">
                <h3 class="heading" >Our Blogs</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('#blog')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-lymph-nodes"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">llll</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Know more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-bone"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">llll</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Know more</a></p>
              </div>
            </div>
          </div>
        </div>
    	</div> -->
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts Trainers</h2>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('front/images/images/staff-1.jpg);')}}"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Hassan Samir</h3>
								<span class="position mb-2">Trainer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('front/images/images/staff-2.jpg);')}}"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Mohamed Ahmed</h3>
								<span class="position mb-2">personal trainer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('front/images/images/staff-3.jpg);')}}"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Eslam Amr</h3>
								<span class="position mb-2">trainer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('front/images/images/staff-4.jpg);')}}"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Aly Ashraf</h3>
								<span class="position mb-2">Trainer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg ftco-animate d-flex">
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{asset('front/images/images/staff-5.jpg);')}}"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Asser Ehab</h3>
								<span class="position mb-2">Trainer</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex order-md-last">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{asset('front/images/images/about.jpg);')}}">
    					<a href="{{asset('front/images/16.05.2024_00.51.11_REC.mp4')}}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play text-light"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pr-md-5 py-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Phsyiorevive</span>
		            <h2 class="mb-4" id="aboutus">About Phsyiorevive</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		          </div>
		        </div>
						<div class="row ftco-counter pb-5" id="section-counter">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="45">0</strong>
		              </div>
		              <div class="text">
		              	<span>Years of <br>Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="2342">0</strong>
		              </div>
		              <div class="text">
		              	<span>Happy <br>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		              </div>
		              <div class="text">
		              	<span>Award <br>Winning</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<!-- FEEDBACK -->

		 <div class="site-section">
			<div class="container">

			  <div class="row justify-content-between" data-aos="fade-left">
				<div class="col-lg-6"  data-aos="fade-left" >
				  <div class="title-section">
					<h2>Happy <strong class="text-primary">Customers</strong></h2>
				  </div>
				  <div class="block-3 products-wrap">
				  <div class="owl-single no-direction owl-carousel">

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('front/images/person_1.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Kelly Holmes</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('front/images/person_2.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
						  obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
						  unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Rebecca Morando</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('front/images/person_3.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
						  obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
						  unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Lucas Gallone</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('front/images/person_4.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
						  obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
						  unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Andrew Neel</p>
					</div>

				  </div>
				</div>
				</div>
				<div class="col-lg-5"  data-aos="fade-left" >
				  <div class="title-section">
					<h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
					<div class="step-number d-flex mb-4">
					  <span>1</span>
					  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
					</div>

					<div class="step-number d-flex mb-4">
					  <span>2</span>
					  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
					</div>

					<div class="step-number d-flex mb-4">
					  <span>3</span>
					  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>


		 <!-- FEEDBACK -->

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="blog">
			<div class="container-fluid px-md-0" >
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front/images/images/work-1.jpg);')}}">
            	<a href="{{asset('front/images/-1.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa-solid fa-up-right-and-down-left-from-center text-light"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5" >
	              <div class="text w-100 mb-3 mt-4" >
	              	<h2><a href="work-single.html">Foot Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front/images/images/work-2.jpg);')}}">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa-solid fa-up-right-and-down-left-from-center text-light"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Arm Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front/images/images/work-3.jpg);')}}">
            	<a href="{{asset('front/images/images/work-3.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa-solid fa-up-right-and-down-left-from-center text-light"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Shoulder Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('front/images/images/work-4.jpg);')}}">
            	<a href="{{asset('front/images/work-4.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa-solid fa-up-right-and-down-left-from-center text-light"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">Back Pain</a></h2>
	              </div>
              </div>
            </div>
          </div>


        </div>
			</div>
		</section>

		<section class="ftco-section" id="blogs">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('front/images/images/image_1.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('front/images/images/person_2.jpg);')}}"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('front/images/images/image_2.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('front/images/images/person_3.jpg);')}}"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('front/images/images/image_3.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('front/images/images/person_1.jpg);')}}"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- Footer Start -->
@include('footer')
 <!-- Footer End -->



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
           <!-- Back to Top -->
           <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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
  </body>
</html>
