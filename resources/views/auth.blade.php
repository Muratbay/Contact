<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Authorization</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <br>
        <input type="email" name="email" placeholder="email"><br>
        <br>
        <input type="password" name="password" placeholder="password"><br>
        <br>
        <button type="submit">add</button>
    </form>
    <a href="{{ route('login') }}"><p>login</p></a><br>
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