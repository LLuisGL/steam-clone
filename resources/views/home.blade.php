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
    
    <title>Apple</title>
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
    
</body>
</html>