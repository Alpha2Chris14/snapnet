<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>All Citizens</h1>
    <h2><strong>Number Of Citizens: </strong> {{count($citizens)}}</h2>

    <a href="{{route('citizen.create')}}">Create A New Citizen</a>

    <ul>
    @foreach($citizens as $citizen)
        <li>{{$citizen->name}}  |  <a href="{{route('filter',$citizen->ward->id)}}">{{$citizen->ward->name}}</a> | <a href="{{route('filterlocal',$citizen->ward->lga->id)}}"> {{$citizen->ward->lga->name}}</a> | <a href="{{route('filterState',$citizen->ward->lga->state->id)}}"> {{$citizen->ward->lga->state->name}}</a></li>
    @endforeach
    </ul>

    
</body>
</html>