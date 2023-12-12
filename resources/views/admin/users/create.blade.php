<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Create</title>
</head>
<body>
    <form action="{{ route('user-create-action') }}" method="post">
        @if($message = Session::get('message'))
            <p>
                {{ session('message') }}
            </p>
        @endif
        @csrf
        <input type="text" name="name" placeholder="name" required><br>
        <input type="text" name="username" placeholder="username" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <select name="role_user">
            <option value="0" hidden>--SELECT USER ROLE--</option>
            <option value="0">Staff</option>
            <option value="1">Super Admin</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
