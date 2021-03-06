{{-- @extends('views.cars') --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LuxCars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Lux<span>Cars</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="/cars" class="nav-link">Cars</a></li>

	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="/myOrder" class="nav-link">myOrder</a></li>
              <li>

                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li>
                            <x-app-layout>

                            </x-app-layout>
                        </li>
                    @else
                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-black-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
              </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/images/car-4.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                  <h1 class="mb-4"> Rent A Car Very Fast &amp; Easy </h1>
                  <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                  {{-- <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center"> --}}
                      {{-- <div class="icon d-flex align-items-center justify-content-center">
                          <span class="ion-ios-play"></span>
                      </div> --}}
                      <div class="heading-title ml-5">
                          <span>Easy steps for renting a car</span>
                      </div>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- @section('content') --}}
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form
                               method="POST"
                                action="{{ url('orders') }}"
                                class="request-form ftco-animate bg-primary">
		          		@csrf



                                <h2>Make your trip</h2>

                                <div class="form-group">
			    					<label for=""
                                     value="{{ __('id') }}"
                                     >{{ $car[0]->id}}</label>
			    					<input readonly type="text" name="id"  class="form-control" placeholder="" value="{{ $car[0]->id}}">
			    				</div>

                                <div class="form-group">
			    					<label for="email"
                                     value="{{ __('email') }}"
                                     class="label">Email</label>
			    					<input required type="text" name="email" class="form-control" placeholder="luxcars@gmail.com">
			    				</div>

			    				<div class="form-group">
			    					<label for="pick-up location"
                                     value="{{ __('pick_up_location') }}"
                                     class="label">Pick-up location</label>
			    					<input type="text" required name="pick_up_location" class="form-control" placeholder="City, Airport, Station, etc">
			    				</div>
			    				<div class="form-group">
			    					<label for="days"
                                     value="{{ __('days') }}"
                                      class="label">Days</label>
			    					<input type="number" required name="days" class="form-control" placeholder="Days to rent car">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="pick-up date"
                             value="{{ __('pick_up_date') }}"
                              class="label">Pick-up-date</label>
			                <input type="text" required class="form-control" name="pick_up_date" id="book_pick_date" placeholder="Date">
			              </div>
			              <div class="form-group ml-2">
			                <label for="return date"
                             value="{{ __('return_date') }}"
                              class="label">Drop-off date</label>
			                <input type="text" required class="form-control" name="return_date" id="book_off_date" placeholder="Date">
			              </div>
		              </div>
		              <div class="form-group">
		                <label for="pickup time"
                         value="{{ __('pick_up_time') }}"
                          class="label">Pick-up time</label>
		                <input type="text" class="form-control" name="pick_up_time" id="time_pick" placeholder="Time">
		              </div>
			            <div class="form-group">
			              <input type="submit" href="/myOrder" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
				                </div>
					            </div>
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>
					          </div>
					        </div>
					        <p><a href="/myOrder" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
    {{-- @endsection --}}
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/jquery.timepicker.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
