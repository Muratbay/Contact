<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>Nomeri</td>
                <td> File </td>
                <td>Massege</td>
                <td> Delete </td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        @forelse($forms as $form)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td><img src="{{ $form->file }}" alt=""  width="50"></td>
            <td>{{ $form->massege }}</td>
            <td>Status</td>
            <td><form action="{{ route('admin.destroy',$form->id)}}" method="POST">
            @method('DELETE')    
            @csrf
            <input type="submit" value="delete">
            </form>
            </td>
            <td>Status</td>
        </tr>
        @empty
            <br>    magliwmatlar joq<br>
        @endforelse
        </tbody>

        
</body>
</html>