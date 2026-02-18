<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liberty</title>
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
    <link rel="stylesheet" href="{{asset('styles/utilities/animation.css')}}">
</head>

<body>
    <div class="body">
        <div class="box toTop">
            <h2>Welcome!</h2>
            <p class="caption">Login untuk menggunakan aplikasi</p>


            <form action="{{route('loginPost')}}" method="post">
                @csrf
                <div class="input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter Your Username">
                </div>

                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>


                <input type="submit" name="" id="" value="Login" class="input-submit">
            </form>
        </div>
    </div>
</body>

</html>
