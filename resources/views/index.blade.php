<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contacts forms</h1>
    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">add a message</label><br>
        <input type="text" name="message"><br>
        <br>
        <label for="">file</label><br>
        <input type="file" name="file"><br>
        <br>
        <button type="submit">create</button><br>
        <br>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
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