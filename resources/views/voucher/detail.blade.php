<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        {{$voucher->name}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Value: {{$voucher->value}}</h5>
        <p class="card-text">Status: {{$voucher->status}}</p>
        <p class="card-text">Description: {{$voucher->description}}</p>
        <p class="card-text">Date: {{$voucher->exp_date}}</p>

    </div>
</div>
</body>
</html>
