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
            font-family: "Motiva Sans", Sans-serif;
            font-size: 12px;
        }
    </style>

    <title> Inicio de sesion </title>
</head>
<body class='antialiased' background-color= 'lightblue';>
    <main class="">
        @include('components.navbar')
    </main>
    <div  style = "background-color: #181A21;">
        <div style = "background-color: #181A21;">
            <div style = "background-color: #181A21;">
                <br>
                <form method='POST' action= "{{route('inicia-sesion')}}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label" style="color: #1999ff;" font>INICIA SESION CON TU NOMBRE DE CUENTA</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                
                    <div class="mb-3">
                        <label for="password" class="form-label" style ="color: #AFAFAF">CONTRASEÑA</label>
                        <input type="password" class="form-control" id="password" name='password'>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" style ="color: #AFAFAF" for="exampleCheck1">Recordarme</label>
                    </div>
                    
                    <div style = "background-color: #181A21;  display: flex; justify-content: center; align-items: center; height: 50px;" >
                        <button type="submit" style = "background:linear-gradient(90deg, #06BFFF 0%, #2D73FF 100%);" class="btn btn-primary">Iniciar sesion</button>
                    </div>

                    <div style = "background-color: #181A21;  display: flex; justify-content: center; align-items: center; height: 20px;">
                        @if($errors->has('login_error'))
                            <label class="form-error-label" style = "color: #C15755">{{ $errors->first('login_error') }}</label>
                        @endif
                    </div>

                    <a href="/registro" style="background-color: #181A21; color: #AFAFAF;  
                    display: flex; justify-content: center; align-items: center; height: 20px;" >No tienes cuenta todavia?</a>


                </form>
            </div>
        </div>
    </div>    
</body>
</html>