<!DOCTYPE html>
<html lang="en">

<head>
    <title>LuxCars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="home">Lux<span>Cars</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="/cars" class="nav-link">Cars</a></li>

                    <li class="nav-item active"><a href="/" class="nav-link">Contact</a></li>
                    <li>
                        <x-app-layout>

                        </x-app-layout>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-4">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Address:</span> 198 West 21th Street, Yatta 721 New Matuu NY 10016</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-mobile-phone"></span>
                                </div>
                                <p><span>Phone:</span> <a href="tel://1234567920">+ 254 2355 98</a></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">luxcars@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 block-9 mb-md-5">



                     @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>
                        {{session()->get('message')}}


                    </div>

                    @endif
                    <form method="POST" action="{{url('contactus')}}" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" required name="username" class="form-control" placeholder="Your Name">
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" required name="email" class="form-control" placeholder="Your Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" required name="subject" class="form-control" placeholder="Subject">
                            @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">

                            <textarea  required name="Send Message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                            {{-- @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Send Message" value="Send Message"
                                class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>


    @include('footer');



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
