<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Ward Page</h1>

    <form action="{{ route('ward.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="lga">LGA</label>
            <select name="lga" required>
                @foreach($lgas as $lga)
                <option value="{{$lga->id}}">{{$lga->name}}</option>
                @endforeach
            </select>
        </div>

        

        <button>Submit</button>
    </form>
</body>
</html>