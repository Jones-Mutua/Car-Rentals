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
            {{-- <th style="padding: 20px">Rank</th> --}}
            <th style="padding: 20px">email</th>
            <th style="padding: 20px">username</th>
            <th style="padding: 20px">subject</th>
            <th style="padding: 20px">message</th>

            <th style="padding: 20px">Aprove</th>
        </tr>
        </thead>
        @foreach($message as $message)
        <tr>
            <td>{{$message->email}}</td>
             <td >{{$message->username}}</td>
            <td >{{$message->subject}}</td>
            <td>{{$message->Message}}</td>



        </tr>
        @endforeach





</table>




        </div>

    </div>
    @include('admin.adminscript');
</body>
</html>
