<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        .bt1 {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
{{--<p><a class="button bt1" href="{{route('voucher.create')}}">Add voucher</a></p>--}}
<table>
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">value</th>
        <th scope="col" colspan="3">action</th>
    </tr>
    </thead>
    @foreach($voucher as $vouchers)
        <tbody>

        <tr>
            <th scope="row">{{$vouchers->id}}</th>
            <th scope="row">{{$vouchers->name}}</th>
            <th scope="row">{{$vouchers->value}}</th>
            <th><a href="{{route('voucher.edit', $vouchers)}}" class="btn-warning edit">edit</a></th>
            <th><a href="{{route('voucher.destroy', $vouchers)}}"  onclick="confirm('are you sure')">delete</a></th>
            <th><a href="{{route('voucher.detail', $vouchers)}}" >detail</a></th>
        </tr>
        </tbody>
    @endforeach
</table>

</body>
</html>
