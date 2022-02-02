<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>All States</h1>
    <h2><strong>Number Of State: </strong> {{count($states)}}</h2>

    <a href="{{route('state.create')}}">Create A New State</a>

    <ul>
    @foreach($states as $state)
        <li>{{$state->name}}</li>
    @endforeach
    </ul>

    
</body>
</html>