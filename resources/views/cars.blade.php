<!DOCTYPE html>
<html lang="en">

<head>
    <title>LuxCars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/addcss/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
            <a class="navbar-brand" href="index.html">Lux<span>Cars</span></a>
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
                    <li class="nav-item active"><a href="/" class="nav-link">Cars</a></li>

                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/myOrder" class="nav-link">myOrder</a></li>
                    <li>

                        <x-app-layout>

                        </x-app-layout>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/car-2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Choose Your Car</h1>
                </div>
            </div>
        </div>
    </section>


    @section('content')
    <div class="page pt-20555">
        <!--For Row containing all card-->
        <div class="row">
            <!--Card 1-->
            @foreach($cars as $car)
            @csrf
            @method('PUT')
            <div class="col-sm p-3 pb-4 m-1 sm:m3-3 rounded-md flex flex-col items-center">
                <div class="card card-cascade card-ecommerce flex flex-col wider shadow mb-5 ">
                    <!--Card image-->
                    <div class="view view-cascade overlay text-center"> <img class="card-img-top"
                            src="Products/Photos/{{$car->images}}" alt=""> <a>
                            <div class="mask rgba-white-slight"></div>
                        </a> </div>
                    <!--Card Body-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Card Title-->
                        <h4 class="card-title"><strong><a href=""> {{ $car->brand }}</a></strong></h4>
                        <!-- Card Description-->
                        <p class="card-text"> {{ $car->seats }}<span> /seats</span> </p>
                        <p class="price"><span>$</span>{{$car->price}}<span>/day</span></p> <!-- Card Rating-->
                        <ul class="row rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <!--Card footer-->
                        <div class="card-footer">
                            {{-- <p class="d-flex mb-0 d-block"><a href="/cart" class="btn btn-primary py-2 mr-1">Book
                                    now</a> <a href="car-page" class="btn btn-secondary py-2 ml-1">Details</a></p> --}}
                            <button class="mb-0 btn btn-primary"> <a href="/cart/{{ $car->id }}">Rent Now</a> </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>





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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
