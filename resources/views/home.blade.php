<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .button {
            background-color: #7abaff;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #7abaff;
        }

        .button1:hover {
            background-color: #7abaff;
            color: white;
        }
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: right;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <a href="#default" class="logo">Chí Linh Company</a>
    <div class="header-right">
        <button class="button button1"><a style="background-color: #7abaff" href="{{route('voucher.list')}}">Voucher</a></button>
    </div>
    <span class="header-right">
        @guest
        @if (Route::has('login'))
        <a href="{{route('login')}}">Login</a>
            @endif
        @else
            <p>Hello, {{Auth::user()->name}}</p>
        <a href="{{route('user.logout')}}">Logout</a>
        @endguest
    </span>
</div>
</body>
</html>

