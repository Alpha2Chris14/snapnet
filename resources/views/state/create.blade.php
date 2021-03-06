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
    <h1>Create A New State</h1>
    
    <form action="{{ route('state.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Please Enter State Name" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button>Submit</button>
    </form>
</body>
</html>