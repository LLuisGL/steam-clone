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
            textarea {
                resize: none;
            }
        }
    </style>
    <link rel="shortcut icon" href="./img/steam_icon.png" />
    <title>SteamCRUD | Index</title>
</head>
<body>
    @include('components.navbar')
    <div class="h-screen bg-[#1a293a] flex flex-col gap-4 justify-center items-center">
        <h1 class="text-4xl text-white">Juegos en el catalogo</h1>
        <div class="flex flex-col w-1/2 gap-4">
            @foreach($juegos as $juego)
                <div class="grid grid-cols-8 h-20">
                    <div class="col-span-2 h-full bg-[#203647]">
                        <img src="{{asset('storage/' . $juego->imagenes->first()->url)}}" alt="{{$juego->imagenes->first()->url}}" class="w-full h-24 object-cover">
                    </div>
                    <div class="col-span-6 grid grid-cols-5 h-full bg-[#203647] text-white">
                        @php
                            $precio_oferta = $juego->precio_oferta > 0;
                        @endphp

                        <div class="col-span-{{ $precio_oferta ? 3 : 4 }} pl-2 pt-2 flex flex-col justify-center">
                            <p>{{$juego->nombre_juego}}</p>
                            <div class="flex flex-row gap-1">
                                @foreach($juego->plataformas as $plataforma)
                                    <img src="{{ asset('img/platforms/' . $plataforma->url_imagen) }}" class="opacity-50" alt="{{$plataforma->url_imagen}}">
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
                                <p class="text-[#afdf13] font-bold bg-[#4c6b22] text-center px-2">{{$juego->getDescuento()}}%</p>
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
                    <form action="{{ route('juegos.eliminar', $juego->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_juego" value="{{ $juego->id }}">
                        <button type="submit" class="bg-red-600 text-[#d2efa9] text-sm px-4 py-1 hover:bg-red-700 transition">
                            Eliminar
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    @include('components.footer')
</body>
</html>