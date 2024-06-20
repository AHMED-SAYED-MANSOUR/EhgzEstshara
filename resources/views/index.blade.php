<!DOCTYPE html>
<html lang="en">
  <head>
    <title>phsyiorevive</title>
    <link rel="icon" href="{{asset('images/Icons/IMG_2837.PNG')}}">
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


      <style>
          .trainer-carousel {
              position: relative;
              overflow: hidden;
              width: 100%;
              max-width: 100%;
          }

          .trainers-wrapper {
              display: flex;
              transition: transform 0.5s ease;
          }

          .trainer-item {
              min-width: 20%; /* Each item takes 20% width for 5 items to fit in one row */
              box-sizing: border-box;
          }

          .prev-arrow,
          .next-arrow {
              position: absolute;
              top: 50%;
              transform: translateY(-50%);
              background-color: #000;
              color: #fff;
              border: none;
              padding: 10px;
              cursor: pointer;
              z-index: 1000;
          }

          .prev-arrow {
              left: 0;
          }

          .next-arrow {
              right: 0;
          }
      </style>
  </head>
  <body>



	<!-- Navbar Start -->

	@include('navbar')
	  <!-- Navbar End -->


    <div class="container mt-5">

        @if(!$user)
            <p>Hello, Guest! Please <a href="{{ url('/sign') }}">login</a>.</p>
{{--            <p>Hello, {{ $user->name }}! You are logged in.</p>--}}
        @endif

        <div class="alert alert-success" id="messageAlert" style="display: none;"></div>
    </div>

    <script>
        function showMessage(message, type) {
            var alertDiv = document.getElementById('messageAlert');
            alertDiv.textContent = message;
            alertDiv.className = 'alert alert-' + type;
            alertDiv.style.display = 'block';

            setTimeout(function() {
                alertDiv.style.display = 'none';
            }, 180000);
        }


        // Example usage
        // if($)
        // showMessage('This is an error message', 'danger');
    </script>


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
              <image src="{{asset('images/Icons/icons8-doctor-48.png')}}"></image>

              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Our expert Doctors</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('/doctors')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('images/Icons/icons8-physical-therapy-48.png')}}"></image>
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
              <image src="{{asset('images/Icons/icons8-add-to-cart-100 (1).png')}}"></image>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Our shop</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="{{url('/products')}}" class="btn-custom">Know more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
              <image src="{{asset('images/Icons/icons8-blog-64.png')}}">
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


                {{--    Trainer Section    --}}
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
          	        <span class="subheading">Team &amp; Staff</span>
                    <h2>Our Experts Trainers</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="container">
                    <div class="trainer-carousel">
                        <button class="prev-arrow" style="display: none;">←</button>
                        <div class="trainers-wrapper">
                            @foreach($trainers as $trainer)
                                <div class="trainer-item">
                                    <div class="staff bg-primary">
                                        <div class="img-wrap d-flex align-items-stretch">
                                            <div class="img align-self-stretch" style="background-image: url({{ asset('images/Trainers/' . $trainer->image) }});"></div>
                                        </div>
                                        <div class="text pt-3 px-3 pb-4 text-center">
                                            <h3>{{ $trainer->name }}</h3>
                                            <span class="position mb-2">{{ $trainer->title }}</span>
                                            <div class="faded">
                                                <ul class="ftco-social text-center">
                                                    <li class="ftco-animate"><a href="{{ $trainer->facebook }}" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-facebook"></span></a></li>
                                                    <li class="ftco-animate"><a href="{{ $trainer->instagram }}" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-instagram"></span></a></li>
                                                    <li class="ftco-animate"><a href="{{ $trainer->twitter }}" class="d-flex align-items-center justify-content-center"><span class="fa-brands fa-twitter"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="next-arrow">→</button>
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
						<img src="{{asset('images/Persons/person_1.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Kelly Holmes</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('images/Persons/person_2.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
						  obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
						  unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Rebecca Morando</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('images/Persons/person_3.jpg')}}" alt="Image" class="img-fluid">
						<p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
						  obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
						  unde.&rdquo;</p>
					  </blockquote>

					  <p class="author">&mdash; Lucas Gallone</p>
					</div>

					<div class="testimony">
					  <blockquote>
						<img src="{{asset('images/Persons/person_4.jpg')}}" alt="Image" class="img-fluid">
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
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('images/Work/work-1.jpg);')}}">
            	<a href="{{asset('images/Work/work-1.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
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
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('images/Work/work-2.jpg);')}}">
            	<a href="images/Work/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
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
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('images/Work/work-3.jpg);')}}">
            	<a href="{{asset('images/Work/work-3.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
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
            <div class="work img d-flex align-items-center" style="background-image: url({{asset('images/Work/work-4.jpg);')}}">
            	<a href="{{asset('images/Work/work-4.jpg')}}" class="icon image-popup d-flex justify-content-center align-items-center">
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
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('images/Work/work-8.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('images/Persons/person_2.jpg);')}}"></div>
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
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('images/Work/work-7.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('images/Persons/person_3.jpg);')}}"></div>
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
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('images/Work/work-4.jpg);')}}">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url({{asset('images/Persons/person_1.jpg);')}}"></div>
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
    <script>
        function showMessage(message, type) {
            // Create a new div element
            var alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-' + type;
            alertDiv.innerHTML = message;

            // Append the div to the body
            document.body.appendChild(alertDiv);

            // Automatically remove the alert after 3 seconds
            setTimeout(function() {
                alertDiv.remove();
            }, 3000);
        }

        // Example usage
        showMessage("This is a success message", 'success');
        showMessage("This is an error message", 'danger');
    </script>


    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
           <!-- Back to Top -->
           <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


            {{--    Trainer Section    --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentSlide = 0;
            const itemCount = $('.trainer-item').length;
            const itemWidth = $('.trainer-item').outerWidth(true);

            function updateArrows() {
                if (currentSlide === 0) {
                    $('.prev-arrow').hide();
                } else {
                    $('.prev-arrow').show();
                }

                if (currentSlide >= itemCount - 5) {
                    $('.next-arrow').hide();
                } else {
                    $('.next-arrow').show();
                }
            }

            updateArrows();

            $('.next-arrow').click(function() {
                if (currentSlide < itemCount - 5) {
                    currentSlide++;
                    $('.trainers-wrapper').css('transform', `translateX(-${itemWidth * currentSlide}px)`);
                    updateArrows();
                }
            });

            $('.prev-arrow').click(function() {
                if (currentSlide > 0) {
                    currentSlide--;
                    $('.trainers-wrapper').css('transform', `translateX(-${itemWidth * currentSlide}px)`);
                    updateArrows();
                }
            });
        });
    </script>

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
