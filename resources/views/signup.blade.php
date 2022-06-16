<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/signupReques.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></link>
    <title>Sign Up</title>
</head>
<body>
    <form method="post" styp="width: 600px; margin-left:500px">
        @csrf
        <div class= " form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <p class="help is-danger">{{ $errors->first('name') }}</p>
        <div class= " form-group">
            <label for="">Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <p class="help is-danger">{{ $errors->first('age') }}</p>
        <div class= " form-group">
            <label for="">Date</label>
            <input type="text" class="form-control" name="date">
        </div>
        <p class="help is-danger">{{ $errors->first('date') }}</p>
        <div class= " form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <p class="help is-danger">{{ $errors->first('phone') }}</p>
        <div class= " form-group">
            <label for="">Website</label>
            <input type="text" class="form-control" name="web">
        </div>
        <p class="help is-danger">{{ $errors->first('web') }}</p>
        <div class= " form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <p class="help is-danger">{{ $errors->first('address') }}</p>
        <div>
            <!-- @include('error') -->
        </div>
        <button type="submit" class="btn btn-primary" style="left:200px;">OK</button>
        <div class="display-infor">
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
</body>
</html>