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
<form method="post">
    @csrf
    <h3>Thêm mới voucher</h3>
    <?php
    $vouchers = \App\Models\Voucher::all();
    ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter voucher name">
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="value">Value</label>
        <input type="number" class="form-control" name="value" placeholder="Voucher value">
        @error('value')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <label>
        Status
        <select name="status" class="form-control">
            <option>Active</option>
            <option>Not Active</option>
        </select>
    </label>
    <div class="form-group">
        <label for="value">Expire date</label>
        <input type="date" class="form-control" name="exp_date">
    </div>
    <div class="form-group">
        <label for="value">Description</label>
        <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

