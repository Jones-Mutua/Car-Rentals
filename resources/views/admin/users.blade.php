

 <x-app-layout>


</x-app-layout>




<!DOCTYPE html>
<html lang="en">
<head>

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

   @include("admin.admincss")
</head>
<body>
    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -160px; ">
        <table  class="styled-table">


            <thead>
            <tr>
                <th style="padding: 20px">ID</th>
                <th style="padding: 20px">Username</th>

                <th style="padding: 20px">Email</th>
                <th style="padding: 20px">Status</th>
                <th style="padding: 20px">Aprove</th>
            </tr>
            </thead>
            @foreach($user as $user)
            <tr class="active-row" >
                <td >{{$user->id}}</td>
                <td >{{$user->name}}</td>

                <td>{{$user->email}}</td>
                <td><a href="" class="btn btn-success bt-sm">Active</a></td>
                @if($user->usertype =="0")
                <td><a href="{{url('/deleteuser',$user->id)}}" class="btn btn-secondary bt-sm">Remove</a></td>
                @else
                <td ><a class="btn btn-secondary bt-sm">Not Allowed</a></td>
                @endif

            </tr>
            @endforeach
        </table>
    </div>

    </div>
    @include('admin.adminscript');

</body>
</html>
