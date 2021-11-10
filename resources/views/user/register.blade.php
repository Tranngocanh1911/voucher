<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text], input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
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
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>
        </div>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
        </div>
        <div>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        <button type="submit" class="registerbtn">Done</button>
    </div>
</form>
</body>
</html>

