<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>LuxCars</title>
    <link rel="stylesheet" href="/addcss/card.css">
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <main id="cart" style="max-width:960px">
        <div class="back"><a href="/cars">&#11178; Rent</a></div>
        <h1>Your Rental Car</h1>
        <div class="container-fluid">
            @foreach ($cars as $order )
            <div class="row align-items-start">
                <div class="col-12 col-sm-8 items">
                    <!--1-->


                    <div class="cartItem row align-items-start">
                        <div class="col-3 mb-2">
                            <img class="w-100" src="Products/Photos/{{$order->images}}"
                                {{-- src="https://badux.co/smc/codepen/birdcage-posters.jpg" alt="art image" --}}
                                >
                        </div>
                        <div class="col-5 mb-2">
                            <h6 class="">
                                {{ $order->brand }}
                                </h6>
                            <p class="pl-1 mb-0">
                                {{ $order->seats }}
                                <span>seat</span>
                                </p>
                            <p class="pl-1 mb-0">
                                {{ $order->pick_up_location }}
                                </p>
                                {{-- <p class="pl-1 mb-0">
                                    {{ $order->pick_up_location }}
                                    </p> --}}
                        </div>
                        <div class="col-2">
                            <p class="cartItemQuantity p-1 text-center">
                                {{ $order->days }}
                                 <span>days</span>
                                </p>
                        </div>
                        <div class="col-2">
                            <p id="cartItem1Price">
                                <span>$</span>
                                {{ $order->price }}
                                </p>
                        </div>
                    </div>


                    <hr>
                    <div>
                        <p href="{{url('/cancelorder',$order->id)}}" class="btn btn-secondary">pedding</p>
                    </div>
                    {{-- --}}
                    <hr>
                    <!--2-->
                    <div>
                        <button href="{{url('/cancelorder',$order->id)}}" class="btn btn-secondary">Cancel Order</button>
                    </div>
                    {{-- --}}
                    <hr>
                </div>
                <div class="col-12 col-sm-4 p-3 proceed form">
                    <div class="row m-0">
                        <div class="col-sm-8 p-0">
                            <h6>Subtotal
                                {{-- {{ $order->price }} --}}
                            </h6>
                        </div>
                        <div class="col-sm-4 p-0">
                            <p id="subtotal">
                                <span>$</span>
                                {{ $order->price }}
                            </p>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-sm-8 p-0 ">
                            <h6>Tax</h6>
                        </div>
                        <div class="col-sm-4 p-0">
                            <p id="tax">$0.00
                                {{-- {{ $order->price }} --}}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row mx-0 mb-2">
                        <div class="col-sm-8 p-0 d-inline">
                            <h5>Total</h5>
                        </div>
                        <div class="col-sm-4 p-0">
                            <p id="total">
                                <span>$</span>
                                {{ $order->price }}
                                </p>
                        </div>
                    </div>
                    <a href="#"><button id="btn-checkout" class="shopnow"><span>Pay on Delivery</span></button></a>
                </div>
            </div>
            <hr>

            @endforeach
        </div>
        </div>
    </main>
    <footer class="container">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <main class="card">
        <figure class="card-img-holder">
            <img src="https://order-summary-hamii.netlify.app/images/illustration-hero.svg"
                alt="Illustration of a person listening to music.">
        </figure>
        <div class="card-body">
            <h1 class="title">My Order Summary</h1>
            <p class="content">You have successfully ordered </p>
            <div class="plan-box">
                <div class="plan-box-left">
                    <img src="https://order-summary-hamii.netlify.app/images/icon-music.svg" alt="Icon music">
                    <div class="plan-details">
                        <h2>Total Price</h2>
                        <p>$59.99/day</p>
                    </div>
                </div>
                <div class="plan-box-right">
                    <a class="plan-link" href="#">Change</a>
                </div>
            </div>
        </div>
        <div class="button-holder">
            <button class="btn payment-btn">Pay on Delivery</button>
            <button class="btn cancel-btn">Cancel Order</button>
        </div> --}}
    </main>


</body>

</html>
