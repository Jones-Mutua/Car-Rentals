<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>

    <style>

        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
        }
        nav{
            height: 80px;
            width: 100%;
            background: whitesmoke;
        }
        label.logo {
            font-size: 35px;
            font-weight: bold;
            color: plum;
            padding: 0 100px;
            line-height: 80px;
        }
        nav ul{
            float: right;
            margin-right: 40px
        }
        nav li {
            display: inline-block;
            margin: 0 8px;
            line-height: 80px;
            cursor: pointer;
            

        }

         nav  a{
            /* color: powderblue; */
            /* font-size: 18px; */
            /* text-transform: uppercase; */
            /* border: 1px  solid transparent; */
            padding: 7px 10px;
            border-radius: 3px;
        } 

         /* a.active, a:hover{
            border: 1px solid yellowgreen;
            transition: .5s;
        }  */

        nav #icon{
            color: wheat;
            font-size: 30px;
            line-height: 40px;
            margin-right: 40px;
            float: right;
            margin-right: 40px;
            cursor: pointer;
        }
        @media (max-width: 1048px) {
            label.logo{
                font-size: 32px;
                padding-left: 60px;

            }
            nav ul{
                margin-right: 20px;

            }
            nav a {
                font-size: 17px;

            }
        }
        @media (max-width: 900px) {
            nav #icon{
                display: block;

            }
            nav ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: teal;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;

                
            }
            nav li{
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }
            nav a {
                font-size: 20px;

            }
            a.active, a:hover{
                border: none;
                color: rebeccapurple;
            }
            nav ul.show{
                left: 0;
            }
        }

        </style>
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        <label class="logo">LuxCars</label>
        <ul>
        
            <li><a class="active" href="/home"></a>Home</li>
            <li><a href="/about"></a>About</li>
            <li><a href="/rentals"></a>Rentals</li>
            <li><a href="/register"></a>Register</li>
            <li><a href="/login"></a>Login</li>
        </ul>
        <label id="icon">
            <i class="fas fa-b"></i>
        </label>
        
        </nav>
    @yield('content')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</body>
</html>