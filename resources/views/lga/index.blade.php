<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>All Lga</h1>
    <h2><strong>Number Of Lga: </strong> {{count($lgas)}}</h2>

    <a href="{{route('lga.create')}}">Create A New Lga</a>

    <ul>
    @foreach($lgas as $lga)
        <li>{{$lga->name}}</li>
    @endforeach
    </ul>

    
</body>
</html>