<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email"><br>
        <br>
        <input type="password" name="password" placeholder="password"><br>
        <br>
        <button type="submit">login</button><br>
        <br>
    </form>
    <a href="{{ route('auth') }}"><p>sign up</p></a><br>
    <br>
    @if ($errors->any())
    <div style="text-align: center" class="alert alert-danger">
        <ul >
        @foreach ($errors->all() as $error)
        <li style="text-align: center">{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
</body>
</html>