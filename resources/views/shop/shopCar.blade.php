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
            @if($items && count($items) > 0)
            <div class="grid grid-cols-3 mb-4 gap-2 w-[1000px]">
                <div class='col-span-2 flex flex-col w-[630px]'>

                    <div class= 'text-white font-motiva font-bold justify-start my-[10px]'>
                        Tu carro de la compra   
                    </div>

                    
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

                                    @if($item->juego->precio_normal == 0)
                                        <div class= 'justify-end flex flex-row'>
                                            <div class='flex flex-col'>
                                                <label class='text-[#c6d4df] mx-[2px]'>Free To Play</label>
                                            </div>
                                        </div>
                                    

                                    @elseif($item->juego->precio_normal > 1 && $item->juego->precio_oferta > 0 )
                                        <div class= 'justify-end flex flex-row'>
                                            <div class='bg-[#4c6b22] py-[3px] px-[5px] w-[70px] h-[40px] text-[#a4d007] mr-[5px] flex justify-center items-center'>
                                                {{$item->juego->getDescuento()}}%
                                            </div>

                                            <div class='flex flex-col'>
                                                <label class='text-[#626366] mx-[2px] line-through'>${{$item->juego->precio_normal}} </label>
                                                <label class='text-[#c6d4df] mx-[2px]'>${{$item->juego->precio_oferta}}</label>
                                            </div>
                                        </div>
                                    @else
                                        <div class= 'justify-end flex flex-row'>

                                            <div class='flex flex-col'>
                                                <label class='text-[#c6d4df] mx-[2px]'>${{$item->juego->precio_normal}} </label>
                                            </div>
                                        </div>

                                    @endif
                                    <div class='flex flex-row w-[387px] pt-[10px]'>
                                        <div class='bg-black opacity-25 flex  items-center justify-center text-white text-xs w-[110px] '>
                                            para mi cuenta
                                        </div>
                                        <form action="{{ route('carrito.destroy', $item->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este juego del carrito?');">
                                            @csrf
                                            @method('DELETE')
                                            <div class='ml-[200px]'>
                                                <button type="submit" class='text-white underline hover:text-[#AFAFAF] '>Eliminar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            
            @else
            <div class= 'flex flex-col justify-center items-center  '>

                <div class= 'text-white font-motiva font-bold justify-start my-[10px]'>
                        Tu carro de la compra   
                </div>

                <div class='h-[50px] w-[50px] flex justify-center items-center '>
                    <img src="/img/carro-de-la-compra.png"class="w-full h-24 object-contain ">
                </div>

                <p class='text-[#c6d4df] font-bold flex justify-center mt-[15px]'>Agrega articulos para comenzar a llenar el carrito...</p>
            </div>
            @endif
                    
                </div>
                @if($items && count($items) > 0)
                <div class='flex justify-start mt-[50px] bg-[#000000bd] p-[10px] h-[180px]'>
                    <div class ='flex flex-col'>
                        <div class='mb-[10px] flex flex-row w-[300px]'>
                            <label class='text-white'>Total estimado</label>
                            <div class= 'ml-[50px]'>
                                <label class=' text-white font-bold'>${{$total}}</label>
                            </div> 
                        </div>

                        <div class='flex justify-center text-[#ccd5e0]'>
                            <label class='text-gray'>Los impuestos de venta se calcularán durante el pago (si es aplicable)</label>
                        </div>

                        <div class='flex justify-center mt-[10px]'>
                            <form action="{{route('compra.hecha')}}" method="POST" onsubmit="return confirm('¿confirmar compra?');">
                                @csrf
                                <div class=''>
                                
                                    <button type="submit" class='bg-gradient-to-r from-[#06BFFF] to-[#2D73FF] text-white p-[5px] '>Comprar</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
        @include('components.footer')
    </main>
</body>
</html>