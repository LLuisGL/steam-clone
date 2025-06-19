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


<body class='antialiased bg-[#181A21]'>

    <header>
        @include('components.navbar')
    </header>
    
    <main class= 'w-full h-full'>
        <div class= "bg-[url('/img/register.jpg')] bg-no-repeat bg-cover w-full h-full flex justify-center items-center ">

            <div class='bg-[#181A21] rounded-sm flex flex-col justify-center items-center w-[400px] h-[500px] my-[70px] z-10 '>

                <div class='justify-start text-white uppercase text-3xl tracking-wide font-light w-[270px] mb-[20px] '>
                    CREA TU CUENTA
                </div>

                <form class ='flex flex-col' action="{{route('validar-registro')}}" method='POST'>
                    @csrf
                    <div class='my-[5px] flex flex-col pl-[65px]'>
                        <label for="email" class='text-[#b8b6b4]'>Dirección de correo electrónico</label>
                        <input class='w-[250px] bg-[#393c44] hover:bg-[#494c5c] rounded-sm text-white text-sm p-[2px]' type="email" name='email' id='email'
                        autocomplete="off">
                    </div>

                    <div class='my-[5px] flex flex-col pl-[65px]'>
                        <label for="username" class='text-[#b8b6b4]' >Usuario</label>
                        <input class='w-[250px] bg-[#393c44] hover:bg-[#494c5c] rounded-sm text-white text-sm p-[2px]' type="text" name='username' id='username'
                        autocomplete="off">
                    </div>

                    <div class='my-[5px] flex flex-col pl-[65px]'>
                        <label for="name" class='text-[#b8b6b4]'>Nombre</label>
                        <input class='w-[250px] bg-[#393c44] hover:bg-[#494c5c] rounded-sm text-white text-sm p-[2px]' type="text" name='name' id='name'
                            autocomplete="off">
                    </div>

                    <div class='my-[5px] flex flex-col pl-[65px]'>
                        <label for="password" class='text-[#b8b6b4]'>Contraseña</label>
                        <input class='w-[250px] bg-[#393c44] hover:bg-[#494c5c] rounded-sm text-white text-sm p-[2px]   ' type="password" name='password' id='password'>
                    </div>

                    <div class='my-[20px] flex flex-row justify-center items-center pl-[20px]'>
                        <input type="checkbox" id="Mayor" name="Mayor"/>
                        <label for="Mayor" class=' pl-[10px] text-[#b8b6b4] text-xs'>Tengo 13 años o más y acepto los términos del Acuerdo de Suscriptor a Steam.</label>
                    </div>

                    <div class=" flex justify-start h-[20px] w-[175px] my-[5px] pl-[75px] " >
                        <button type="submit"  class=" flex justify-center items-center bg-gradient-to-r from-[#06BFFF] to-[#2D73FF] w-full h-full text-white ">Crear</button>
                    </div>

                    <div class ='flex justify-center mt-[10px]'>
                        @if($errors->has('Mayor'))
                            <label class="form-error-label text-[#C15755] text-xs">{{ $errors->first('Mayor') }}</label>
                        @endif
                    </div>

                </form>
            </div>
           
        </div>
    </main>
     @include('components.footer')
</body>
</html>



<!------         
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
------>
