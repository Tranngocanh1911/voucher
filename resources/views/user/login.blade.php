<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .loginbtn {
            background-color: #04AA6D;
            color: white;
            padding: 14px 50px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
        }
        .registerbtn {
            color: white;
            width: auto;
            padding: 10px 18px;
            background-color: #8fd19e;
        }
    </style>
</head>
<body>
<form method="post">
    @csrf
<div class="container">
    <div>
        <label for="uname"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

    </div>
<div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

</div>

<button class="loginbtn" type="submit">Login</button>
</div>
</form>
<a class="small" href="{{route('register')}}">Create an Account!</a>
</body>
</html>
