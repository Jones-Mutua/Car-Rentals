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
        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding-top: 100px">

                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_client')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="">Client Name</label>
                        <input required type="text" style="color: black; " name="name" placeholder="write name">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Client expatriate</label>
                        <input required type="text" style="color: black; " name="expatriate" placeholder="number">
                    </div>


                    <div style="padding: 15px">
                        <label for="">Client message</label>
                        <input required type="text" style="color: black;" name="message" placeholder="room number">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Client photo</label>
                        <input required type="file" name="file">
                    </div>
                    <div style="padding: 15px">

                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>


        </div>
    </div>
    @include('admin.adminscript');
</body>
</html>
