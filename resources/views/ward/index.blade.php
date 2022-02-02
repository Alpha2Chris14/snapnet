<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>All Wards</h1>
    <h2><strong>Number Of Ward: </strong> {{count($wards)}}</h2>

    <a href="{{route('ward.create')}}">Create A New Ward</a>

    <ul>
    @foreach($wards as $ward)
        <li>{{$ward->name}}</li>
    @endforeach
    </ul>

    
</body>
</html>