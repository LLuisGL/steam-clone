<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- -->

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <title> Inicio de sesion </title>
</head>
<body class='antialiased' background-color= 'lightblue';>
    <main class="">
        @include('components.navbar')
    </main>
    
    <div>
        <form method='POST' action= "{{route('inicia-sesion')}}">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name='password'>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            @if($errors->has('login_error'))
                <div class="alert alert-danger">
                    {{ $errors->first('login_error') }}
                </div>
            @endif

        </form>
    </div>

</body>
</html>