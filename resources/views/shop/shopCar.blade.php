<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro de compra</title>
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

    <main class ="w-full h-full">
        <div class='bg-[#2A475E] w-full h-full flex justify-center'>
            <div class="grid grid-cols-6 mb-4 gap-2">
                <div class='col-span-4 flex flex-col'>
                    <div class= 'text-white font-motiva font-bold justify-start'>
                        Tu carro de la compra   
                    </div>

                    @if($items && count($items) > 0)
                        @foreach($items as $item)
                            <div class='bg-[#00000075] grid grid-cols-3 gap-2 p-[15px] w-[615px] mt-[20px]'>
                                <div class=''>
                                    <img src="/img/{{$item->juego->id}}/{{$item->juego->imagenes->first()->url}}"class="w-full h-24 object-cover">
                                </div>
                                <div class='col-span-2 flex flex-col justify-start'>
                                    <div class= 'text-white font-motiva font-bold justify-start'>
                                        {{$item->juego->nombre_juego}}
                                    </div>

                                    <div class= 'justify-star flex flex-row'>
                                        @foreach($item->juego->plataformas as $plataforma)
                                            <img src="/img/platforms/{{$plataforma->url_imagen}}" class="opacity-50 pr-[5px]">
                                        @endforeach
                                    </div>

                                    <div class= 'justify-end flex flex-row'>
                                        <div class='bg-[#4c6b22] py-[3px] px-[5px] w-[50px] text-[#a4d007] mr-[5px] flex justify-center items-center'>
                                            {{$item->juego->getDescuento()}}%
                                        </div>

                                        <div>
                                            <label class='text-[#626366] '>${{$item->juego->precio_normal}}</label>
                                        </div>  
                                    </div>

                                    <div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                            
                    @else
                        <p>Tu carrito está vacío.</p>
                    @endif

                    </div>
                </div>
            </div>

        </div>
       
        
        @include('components.footer')
    </main>
</body>
</html>{{ $item->juego->nombre_juego }} - ${{ $item->juego->precio_normal }}