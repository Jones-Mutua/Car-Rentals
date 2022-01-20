<x-app-layout>


</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LuxCars</title>
<link rel="stylesheet" href="/addcss/addcar.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('admin.admincss')
</head>
<body>
    <div class="container-scroller">
    @include("admin.navbar")

    <form id="msform" action="{{'/postcar'}}" method="post" enctype="multipart/form-data">
        @csrf

                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">

                                                 <h2 class="fs-title" style=" text-align: right;">Add Car</h2>


                                    </div>
                                        <label class="fieldlabels"> Brand: *</label>
                                        <input type="text" name="brand" class="form-control" placeholder="Car name">
                                        @error('brand')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Upload  Photos of your car:</label>
                                        <input type="file" name="image[]" id="" enctype="multipart/form-data"  multiple="multiple">


                                        <label class="fieldlabels">Select Model: *</label>
                                        <input type="text" name="model" class="form-control" placeholder="Enter the Model name of car">
                                        @error('model')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Mileage: *</label>
                                        <input type="text" name="mileage" placeholder="mileage" />
                                        @error('mileage')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Description: *</label>
                                        <input type="text" name="description" class="form-control" placeholder="Product details">
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Transmission *</label>
                                        <input type="text" name="transmission" class="form-control" placeholder="What features does your product have">
                                        @error('transmission')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Seats: *</label>
                                        <input type="text" name="seats" class="form-control" placeholder="vehicle number of seats">
                                        @error('seats')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Price: *</label>
                                        <input type="number" name="price" class="form-control" min="1" placeholder="car price">
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                        <label class="fieldlabels">Lugguage: *</label>
                                        <input type="number" name="luggage" class="form-control" placeholder="lugguage" min="0">
                                        @error('luggage')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                         <label class="fieldlabels">Fuel: *</label>
                                        <input type="number" name="fuel" class="form-control" placeholder="fuel type" min="0">
                                        @error('fuel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror
                                         <label class="fieldlabels">Year: *</label>
                                        <input type="number" name="year" class="form-control" placeholder="year of make" min="0">
                                        @error('year')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                         @enderror

                                        <input type="hidden" name="image" class="form-control" value="321342" min="0">

                                    </div>
                                    <input type="submit" name="submit" class="next action-button" value="Submit" />
                                   

                                </fieldset>
                            </form>
    </div>
                            @include('admin.adminscript');

</body>
</html>
