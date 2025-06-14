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
            font-family: "Opens Sans", Sans-serif;

        }
    </style>

    <title> Inicio de sesion </title>
</head>
<body class='antialiased' background-color= 'lightblue';>
    
    <header>
        @include('components.navbar')
    </header>

    <main class ="w-screen h-screen">
        <div  class = "bg-[url('/img/steamFondo.jpeg')] bg-no-repeat bg-cover w-full h-full  items-center">

            <div class ='pt-[80px] pb-[150px] items-center flex flex-col'>

                <div class='flex flex-col gap-2 my-2 mx-4 pr-[320px] pb-[20px]'>
                    <div class= 'text-[#FFFFFF] font-motiva text-3xl font-extrabold'>
                    Inicio de sesión
                    </div>
                </div>

                <div class = "bg-[#181A21] rounded-[4px] p-[24px_32px] flex-1 min-w-[636px]">
                    <form method='POST' action= "{{route('inicia-sesion')}}">
                        @csrf
                        
                        <div class = "flex flex-col" >
                            <label for="name" class="form-label text-[#1999ff] font-motiva font-medium ">INICIA SESIÓN CON TU NOMBRE DE CUENTA</label>
                            <input 
                                type="text" 
                                class="bg-[#393c44] border border-[#393c44] hover:brightness-125 text-white px-3 py-2 rounded outline-none focus:bg-[#393c44] focus:border-[#393c44] focus:brightness-125 transition duration-200"
                                id="name" name="name" value="{{old('name')}}"
                                />
                        </div>
                    
                        <div class= "flex flex-col pt-[10px]">
                            <label for="password" class="form-label" style ="color: #AFAFAF">CONTRASEÑA</label>
                            <input 
                                type="password" 
                                class="bg-[#393c44] border border-[#393c44] hover:brightness-125 text-white px-3 py-2 rounded outline-none focus:bg-[#393c44] focus:border-[#393c44] focus:brightness-125 transition duration-200"
                                id="password" name='password'
                            />
                        </div>

                        <div class="flex flex-row  pt-[10px]">
                            <input type="checkbox" class="form-check-input bg-[#393c44] " id="exampleCheck1">
                            <label class="form-check-label pl-[5px] text-[#AFAFAF]" for="exampleCheck1">Recordarme</label>
                        </div>
                        
                        <div class="bg-[#181A21] flex justify-center items-center h-[50px]" >
                            <button type="submit"  class="bg-gradient-to-r from-[#06BFFF] to-[#2D73FF] text-white font-semibold  w-[270px] h-[40px]">Iniciar sesion</button>
                        </div>

                        <div class="bg-[#181A21] flex justify-center items-center h-[50px]">
                            @if($errors->has('login_error'))
                                <label class="form-error-label text-[#C15755]">{{ $errors->first('login_error') }}</label>
                            @endif
                        </div>

                        <a href="/registro" class="bg-[#181A2] text-[#AFAFAF] flex justify-center items-center h-[20px] underline hover:text-white" >No tienes cuenta todavia?</a>


                    </form>
                </div>
            </div>
        </div>
    </main> 
    
    <footer>
        <div class= 'bg-[#181A21] text-[#AFAFAF] h-[290px]'>
            este es el pie de pagina
        </div>
    </footer>

</body>
</html>