<x-app-layout>


</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lux-Cars</title>
    @include("admin.admincss")
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9rem;
            min-width: 400px;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even) {
            background-color: rgb(184, 191, 214);
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>

</head>
<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div style="position: relative; top: 60px; right: -160px;">
<table class="styled-table">
    <thead>
        <tr>
            <th style="padding: 20px">ID</th>
            <th style="padding: 20px">Brand</th>
            <th style="padding: 20px">image </th>
            <th style="padding: 20px">Model</th>
            <th style="padding: 20px">Mileage </th>
            <th style="padding: 20px">Description </th>
            <th style="padding: 20px">Transmission</th>
            <th style="padding: 20px">Seats</th>
            <th style="padding: 20px">Price</th>
            <th style="padding: 20px">Lugguage</th>
            <th style="padding: 20px">Fuel</th>
            <th style="padding: 20px">Year</th>
            <th style="padding: 20px">Booked</th>
            <th style="padding: 20px">Status</th>
            <th style="padding: 20px">Action</th>
        </tr>
        </thead>
        @foreach ($car as $car)


        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->brand}}</td>
             <td >{{$car->images}}</td>
            <td >{{$car->model}}</td>
            <td>{{$car->mileage}}</td>
            <td >{{$car->description}}</td>
                <td >{{$car->transmission}}</td>
                <td >{{$car->seats}}</td>
                <td >{{$car->price}}</td>
                <td >{{$car->luggage}}</td>
                <td >{{$car->fuel}}</td>
                <td >{{$car->year}}</td>
                <td ><a href="{{route('Booked', $car->id)}}"class="btn btn-secondary bt-sm">{{$car->booked}}</a></td>
                <td><a href="{{url('/editcar',$car->id)}}" class="btn btn-primary bt-sm" >Edit</a></td>
                <td ><a href="{{url('/deletecar',$car->id)}}" class="btn btn-danger bt-sm">Delete</a></td>


        </tr>
        @endforeach





</table>




        </div>

    </div>
    @include('admin.adminscript');
</body>
</html>
