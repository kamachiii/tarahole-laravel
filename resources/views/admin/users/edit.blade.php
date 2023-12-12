<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Edit</title>
</head>
<body>
    <form action="{{ route('user-update', ['id' => $user['id']]) }}" method="post">
        @if($message = Session::get('message'))
            {{ $message }}
        @endif
        @csrf
        <h3>Update {{ $user['name'] }}</h3>
        <input type="text" name="name" placeholder="Input name..." value="{{ $user['name'] }}" required>
        <input type="text" name="username" placeholder="Input Username..." value="{{ $user['username'] }}" required>
        <input type="email" name="email" placeholder="Input email..." value="{{ $user['email'] }}" required>
        <select name="role_user">
            <option value="0">Staff</option>
            <option value="1" @if($user['role_user'] == 1) selected @endif>Super Admin</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
