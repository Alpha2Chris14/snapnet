<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>All Users</h1>
    <h2><strong>Number Of Users: </strong> {{count($users)}}</h2>

    <ul>
    @foreach($users as $user)
        <li>{{$user->name}}</li>
    @endforeach
    </ul>

    
</body>
</html>