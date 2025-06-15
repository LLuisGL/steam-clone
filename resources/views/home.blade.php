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
    <link rel="shortcut icon" href="./img/steam_icon.png" />
    <title>Bienvenido a Steam</title>
</head>
<body class='antialiased bg-[#1a293a]'>
    @include('components.navbar')
    <header class="relative ">
        <img src="./img/home/header.png" alt="">
        <div class="flex absolute pl-[10px] inset-x-0 top-0 text-white justify-between items-center bg-gradient-to-r from-[#466d9b] to-[#192d76] p-[2px] opacity-90 mx-[450px] my-6">
            <div class="flex gap-4">
                <a href="" class="text-xs font-semibold">Tu tienda</a>
                <a href="" class="text-xs font-semibold">Nuevos y destacable</a>
                <a href="" class="text-xs font-semibold">Categorías</a>
                <a href="" class="text-xs font-semibold">Tienda de puntos</a>
                <a href="" class="text-xs font-semibold">Noticias</a>
                <a href="" class="text-xs font-semibold">Laboratorio</a>
            </div>
            <div>
                <input class="bg-[#316282] p-1 rounded-lg text-xs text-[#18375a]" type="text" placeholder="buscar">
            </div>
        </div>
    </header>
    <div class="grid grid-cols-8">
        <div></div>
        <div>
            <div class="bg-blue-100 h-10xl flex flex-col gap-8 mt-10">
                <div class="flex flex-col">
                    <img src="" alt="">
                    <p>Tarjeta de regalo de steam</p>
                    
                </div>
                <div class="flex flex-col">
                    <p>Recomendados</p>
                    <a href="">Amigods</a>
                    <a href="">Mentores</a>
                    <a href="">Etiquetas</a>
                </div>
                <div class="flex flex-col">
                    <p>Explorar categorias</p>
                    <a href="">Lo más vendido</a>
                    <a href="">Novedades</a>
                    <a href="">Próximamente</a>
                    <a href="">Promociones</a>
                    <a href="">Títulos de RV</a>
                    <a href="">Compatibles con controles</a>
                    <a href="">Perfecto para Deck</a>
                </div>
                <div class="flex flex-col">
                    <p>Explorar por genero</p>
                    <a href="">Free to Play</a>
                    <a href="">Acceso anticipado</a>
                    <a href="">Acción</a>
                    <a href="">Aventura</a>
                    <a href="">Carreras</a>
                    <a href="">Casuales</a>
                    <a href="">Deportes</a>
                    <a href="">Estrategia</a>
                    <a href="">Indie</a>
                    <a href="">Multijugador masivo</a>
                    <a href="">Rol</a>
                    <a href="">Simuladores</a>
                </div>
            </div>
        </div>
        <div class="col-span-4">
            <div class="mt-4">
                <p class="uppercase text-white text-sm">Destacados y recomendados</p>
                <div class="h-[350px] flex">
                    <div class="w-2/3 h-full bg-red-100 drop-shadow-2xl">
                        imagen juego
                    </div>
                    <div class="flex flex-col justify-center w-1/3 h-full bg-red-200 pr-2 ">
                        <p class="ml-4">TItulo</p>
                        <div class="grid grid-cols-2 h-1/2 gap-2">
                            <div class="bg-red-100">
                                imagen 1
                            </div>
                            <div class="bg-red-200">
                                imagen 2
                            </div>
                            <div class="bg-red-300">
                                imagen 3
                            </div>
                            <div class="bg-red-400">
                                imagen 4
                            </div>
                        </div>
                        <p>Ya disponible</p>
                        <div class="flex ml-4 justify-between">
                            <p class="text-xs">precio</p>
                            <p >icono</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 mb-8 bg-green-100 w-full h-48">

            </div>
            <div class="h-96 mb-8">
                <div class="h-full grid grid-cols-3 gap-2">
                    <div class="bg-red-100">

                    </div>
                    <div class="bg-blue-100">

                    </div>
                    <div class="grid grid-rows-2 gap-2">
                        <div class="bg-red-100">

                        </div>
                        <div class="bg-blue-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>

    </div>
</body>
</html>