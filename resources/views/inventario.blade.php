<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis juegos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jsStyles.css') }}">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- -->
    <link rel="shortcut icon" href="./img/steam_icon.png" />
</head>

<body class='antialiased bg-[#181A21]'>
    <header>
        @include('components.navbar')
    </header>

    <main>
        <div class="flex justify-center items-center flex-col m-[10px] p-4">
            <h1 class="text-2xl font-bold text-center text-white mb-6">Mis Juegos</h1>

            @if($juegos->isEmpty())
                <p class="text-center text-gray-400">No has comprado ningún juego aún.</p>
            @else
                <div class="flex flex-col w-fit">
                    @foreach($juegos as $juego)
                        <div class="bg-[#203647] text-white p-4 rounded shadow-md flex flex-row items-center mb-[10px]">
                            
                            <div class="w-32 h-20 mr-[20px]">
                                <img src="{{asset('storage/' . $juego->imagenes->first()->url)}}" 
                                    alt="{{ $juego->nombre_juego }}" 
                                    class="w-full h-full object-cover rounded">
                            </div>

                            <div class="flex-1 w-fit ml-[20px]">        
                                <h2 class="text-lg font-semibold">{{ $juego->nombre_juego }}</h2>
                                @if($juego->precio_oferta > 0)
                                    <p class="text-[#afdf13]">${{ number_format($juego->precio_oferta, 2) }}</p>
                                @elseif($juego->precio_normal == 0)
                                    <p class="text-gray-300">Free to Play</p>
                                @else
                                    <p>${{ number_format($juego->precio_normal, 2) }}</p>
                                @endif
                            </div>

                            <div class='ml-[25px]'>
                                <button class="bg-[#59BF40] text-[#d2efa9] text-sm px-4 py-1 hover:bg-[#5ba32b] transition">
                                    Jugar
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
            @include('components.footer')
    </main>
</body>
</html>