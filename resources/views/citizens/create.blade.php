<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Citizens Page</h1>

    <form action="{{ route('citizen.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="gender">Gender</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div>
            <label for="name">Address</label>
            <input type="text" name="address" required>
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="tel" name="phone" required>
        </div>

        
        <div>
            <label for="ward">Ward</label>
            <select name="ward" required>
                @foreach($wards as $ward)
                <option value="{{$ward->id}}">{{$ward->name}}</option>
                @endforeach
            </select>
        </div>

        

        <button>Submit</button>
    </form>
</body>
</html>