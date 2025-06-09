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

    <title>Registro</title>
</head>
<body>

    <main class="">
        @include('components.navbar')
    </main>

    <div  style = "background-color: #181A21;">
        <div style = "background-color: #181A21;">
            <div style = "background-color: #181A21;">
                <br>
                <form method='POST' action= "{{route('validar-registro')}}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #1999ff;" font>Crea tu nombre de usuario</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                
                    <div class="mb-3">
                        <label for="password" class="form-label" style ="color: #AFAFAF">CONTRASEÑA</label>
                        <input type="password" class="form-control" id="password" name='password'>
                    </div>
                    
                    <div style = "background-color: #181A21;  display: flex; justify-content: center; align-items: center; height: 50px;" >
                        <button type="submit" style = "background:linear-gradient(90deg, #06BFFF 0%, #2D73FF 100%);" class="btn btn-primary">Crear cuenta</button>
                    </div>

                </form>
            </div>
        </div>
    </div>    
</body>
</html>