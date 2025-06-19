<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jsStyles.css') }}">
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
    <div class="h-full grid grid-cols-8">
        <div></div>
        <div>
            <div class="h-10xl flex flex-col gap-8 mt-10">
                <div class="flex flex-col">
                    <img src="" alt="">
                    <p class="text-[#86bde8]" >Tarjeta de regalo de steam</p>
                    
                </div>
                <div class="flex flex-col">
                    <p class="text-[#536f86]" >Recomendados</p>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Amigods</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Mentores</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Etiquetas</a>
                </div>
                <div class="flex flex-col">
                    <p class="text-[#536f86]" >Explorar categorias</p>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Lo más vendido</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Novedades</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Próximamente</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Promociones</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Títulos de RV</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Compatibles con controles</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Perfecto para Deck</a>
                </div>
                <div class="flex flex-col">
                    <p class="text-[#536f86]" >Explorar por genero</p>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Free to Play</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Acceso anticipado</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Acción</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Aventura</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Carreras</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Casuales</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Deportes</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Estrategia</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Indie</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Multijugador masivo</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Rol</a>
                    <a class="text-[#7a8b9d] hover:text-[#86bde8]" href="">Simuladores</a>
                </div>
            </div>
        </div>
        <div class="col-span-4">
            <div class="mt-4">
                <p class="uppercase text-white text-sm mb-2">Destacados y recomendados</p>
                <div class="h-[350px] flex">
                    <div class="drop-shadow-2xl relative w-full h-full overflow-hidden">
                        <img id="img_replace" src="" alt="" class="absolute inset-0 w-full h-full object-cover pointer-events-none fade-img ">    
                        <img id="img_main" src="/img/{{$informacion[0]->id}}/{{$img_principal[0]->url}}" alt="{{$img_principal[0]->url}}" class="fade-img absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col justify-center w-1/3 h-full bg-[#0f1922] pr-2 ">
                        <p class="ml-2 text-white text-2xl mt-4 h-2/3 justify-center items-center">{{$informacion[0]->nombre_juego}}</p>
                        <div class="grid grid-cols-2 h-1/2 gap-2">
                            <div class="bg-red-100">
                                <img id="img_1" src="/img/{{$informacion[0]->id}}/{{$imgs_secundarias[0]->url}}" alt="{{$imgs_secundarias[0]->url}}" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-red-200">
                                <img id="img_2" src="/img/{{$informacion[0]->id}}/{{$imgs_secundarias[1]->url}}" alt="{{$imgs_secundarias[1]->url}}" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-red-300">
                                <img id="img_3" src="/img/{{$informacion[0]->id}}/{{$imgs_secundarias[2]->url}}" alt="{{$imgs_secundarias[2]->url}}" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-red-400">
                                <img id="img_4" src="/img/{{$informacion[0]->id}}/{{$imgs_secundarias[3]->url}}" alt="{{$imgs_secundarias[3]->url}}" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <p class="text-white ml-2 pt-2">Ya disponible</p>
                        <div class="flex ml-2 h-full justify-between items-end mb-2">
                            @php
                                $precio_oferta = number_format($informacion[0]->precio_oferta,2);
                                $precio_normal = number_format($informacion[0]->precio_normal,2);
                            @endphp
                            @if($informacion[0]->precio_oferta > 0)
                                <p class="text-right text-white text-xs line-through">${{$precio_normal}}</p>    
                                <p class="text-right text-[#afdf13]">${{$precio_oferta}}</p>
                            @elseif($informacion[0]->precio_normal == 0)
                                <p class="text-right text-white">Free to play</p>    
                            @else
                                <p class="text-right text-white">${{$precio_normal}}</p>    
                            @endif
                            <div class="flex flex-row gap-2">
                                @foreach($plataformas as $plataforma)
                                    <img src="/img/platforms/{{$plataforma->url_imagen}}" alt="{{$plataforma->url_imagen}}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 mb-8 bg-green-100 w-full h-36">
                <img src="/img/home/takeunder_desktop_latam.jpg" alt="">
            </div>
            <!-- 
            ---------STAND BY----------
            <div class="h-96 mb-8">
                <div class="h-full grid grid-cols-3 gap-2">
                    <div class="bg-red-100">
                        <div class="h-2/3 bg-blue-200">

                        </div>
                        <div class="h-1/3 bg-blue-100">

                        </div>
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
            -->
            <div class="grid grid-cols-8 mb-4">
                <div class="flex flex-col col-span-6 gap-4">
                    @foreach($juegos as $juego)
                        <div class="grid grid-cols-8 h-20">
                            <div class="col-span-2 h-full bg-[#203647]">
                                <img src="/img/{{$juego->id}}/{{$juego->imagenes->first()->url}}" alt="{{$juego->imagenes->first()->url}}" class="w-full h-24 object-cover">
                            </div>
                            <div class="col-span-6 grid grid-cols-5 h-full bg-[#203647] text-white">
                                @php
                                    $precio_oferta = $juego->precio_oferta > 0;
                                @endphp

                                <div class="col-span-{{ $precio_oferta ? 3 : 4 }} pl-2 pt-2 flex flex-col justify-center">
                                    <p>{{$juego->nombre_juego}}</p>
                                    <div class="flex flex-row gap-1">
                                        @foreach($juego->plataformas as $plataforma)
                                            <img src="/img/platforms/{{$plataforma->url_imagen}}" class="opacity-50" alt="{{$plataforma->url_imagen}}">
                                        @endforeach
                                    </div>
                                    <div class="flex gap-1">
                                        @foreach($juego->tags as $tag)
                                            <p class="text-gray-400 text-sm">{{$tag->valor_tag}},</p>
                                        @endforeach
                                    </div>
                                    
                                </div>
                                @if($juego->precio_oferta > 0)
                                    <div class="flex h-full items-center justify-center ">
                                        <p class="text-[#afdf13] font-bold bg-[#4c6b22] text-center px-2">- {{$juego->getDescuento()}}%</p>
                                    </div>
                                @endif
                                <div class="text-m flex flex-col justify-evenly pr-2">
                                    <div class="h-1"></div>
                                    <div>
                                        @php
                                            $precio_oferta = number_format($juego->precio_oferta,2);
                                            $precio_normal = number_format($juego->precio_normal,2);
                                        @endphp
                                        @if($juego->precio_oferta > 0)
                                            <p class="text-right text-gray-600 text-xs line-through">${{$precio_normal}}</p>    
                                            <p class="text-right text-[#afdf13]">${{$precio_oferta}}</p>
                                        @elseif($juego->precio_normal == 0)
                                            <p class="text-right">Free to play</p>    
                                        @else
                                            <p class="text-right">${{$precio_normal}}</p>    
                                        @endif
                                        
                                    </div>
                                    <p class="text-gray-400 text-xs uppercase text-right">{{ \Carbon\Carbon::parse($juego->created_at)->locale('es')->translatedFormat('d M Y') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end  mt-[5px]">
                            <form action="{{ route('carrito.agregar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_juego" value="{{ $juego->id }}">
                                <button type="submit" class="bg-[#59BF40] text-[#d2efa9] text-sm px-4 py-1 hover:bg-[#5ba32b] transition">
                                    Añadir al carrito
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
                <div class="col-span-2">
                    hola
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>