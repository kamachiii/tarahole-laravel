<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Login</title>
</head>
<body>
    <form action="{{ route('loginAction') }}" method="post">
        @if($message = Session::get('message'))
            {{ $message }}
        @endif
        @csrf
        <h3>Login</h3>
        <input type="text" name="username" placeholder="Input your Username..." required>
        <input type="password" name="password" placeholder="Input your Password..." required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
