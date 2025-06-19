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
    <title>SteamCRUD | Editar</title>
</head>
<body class="h-screen bg-[#1a293a]">
    @include('components.navbar')
    <a href="/dev/index" class="z-10 fixed bottom-10 left-10 bg-gray-800 w-48 p-4 rounded-lg border-1 border-gray-300 hover:bg-gray-900"><p class="text-white text-center">Juegos</p></a>
    <form action="{{ route('juegos.actualizar', ['id' => $juego->id]) }}" method="POST">
        @csrf
        <div class="h-full grid grid-cols-5 gap-2 p-48  mb-48 pb-2 text-white">
            <div class="col-span-2 border-1 border-white rounded-lg flex flex-col justify-center items-center text-center">
                <img src="{{asset('img/logo.png')}}" alt="logo.png" class="w-1/2 mb-10">
                <p class="text-4xl font-bold">Editar juego</p>
            </div>
            <div class="col-span-3 border-1 border-white rounded-lg flex flex-col justify-center items-center py-4 px-4">
                    <div class="flex flex-col gap-1">
                        <label for="" class="text-xl">Nombre del juego</label>
                        <input id="nombreJuego" value="{{$juego->nombre_juego}}" name="nombreJuego" type="text" class="bg-gray-900 rounded-lg p-2 text-lg">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Precio normal</label>
                                <input id="precioNormal" value="{{$juego->precio_normal}}" name="precioNormal" type="number" class="text-lg bg-gray-900 rounded-lg p-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Precio oferta</label>
                                <input value="{{$juego->precio_oferta}}" id="precioOferta" name="precioOferta" type="number" class="text-lg bg-gray-900 rounded-lg p-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label class="text-xl">Tags del juego</label>
                                <select name="tags" id="tagsJuego" class="bg-gray-900 rounded-lg p-2 text-lg">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ $juego->tags->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->valor_tag }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="tags[]" id="tagsInput" value="">
                                <div id="tagsSeleccionados" class="flex flex-wrap mt-2 gap-2"></div>
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Plataformas disponibles para el juego</label>
                                <select name="plataformas" id="plataformasJuego" class="bg-gray-900 rounded-lg p-2 text-lg">                                    <option value="3">Linux</option>
                                    <option value="1">Mac</option>
                                    <option value="2">Windows</option>
                                </select>
                                <input type="hidden" name="plataformas[]" id="plataformasInput" value="">
                                <div id="plataformasSeleccionados" class="flex flex-wrap mt-2 gap-2"></div>
                            </div>
                        </div>
                        <label for="" class="text-xl">Descripción del juego</label>
                        <textarea name="descripcionJuego" id="descripcionJuego" class="bg-gray-900 rounded-lg py-1 px-2 h-48">{{$juego->descripcion_juego}}</textarea>
                    </div>
                    <button id="button" type="submit" class="fixed bottom-10 right-10 bg-gray-800 w-48 p-4 rounded-lg border-1 border-gray-300 hover:bg-gray-900">Editar juego </button>
            </div>
        </div>
    </form>
    @include('components.footer')
    <script src="{{ asset('js/home.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const selectTag = document.getElementById('tagsJuego');
    const tagsContainer = document.getElementById('tagsSeleccionados');
    const tagsInput = document.getElementById('tagsInput');

    const selectPlatform = document.getElementById('plataformasJuego');
    const platformContainer = document.getElementById('plataformasSeleccionados');
    const platformInput = document.getElementById('plataformasInput');

    const plataformasSeleccionados = new Set();
    const tagsSeleccionados = new Set();

    const tagsData = @json($juego->tags);
    tagsData.forEach(tag => {
        tagsSeleccionados.add(String(tag.id));
        const tagElement = document.createElement('span');
        tagElement.className = 'bg-[#afdf13] text-black px-2 py-1 rounded-full text-sm flex items-center gap-1';
        tagElement.innerHTML = `
            ${tag.valor_tag}
            <button type="button" class="ml-1 font-bold text-red-600" data-id="${tag.id}">&times;</button>
        `;
        tagElement.querySelector('button').addEventListener('click', function () {
            tagsSeleccionados.delete(this.dataset.id);
            tagElement.remove();
            updateHiddenInputTag();
        });
        tagsContainer.appendChild(tagElement);
    });
    updateHiddenInputTag();

    const plataformasData = @json($juego->plataformas);
    plataformasData.forEach(p => {
        plataformasSeleccionados.add(String(p.id));
        const platformElement = document.createElement('span');
        nombre_plataforma = p.id == 1 ? "Mac": p.id == 2 ? "Windows":"Linux" 
        platformElement.className = 'bg-[#afdf13] text-black px-2 py-1 rounded-full text-sm flex items-center gap-1';
        platformElement.innerHTML = `
            ${nombre_plataforma}
            <button type="button" class="ml-1 font-bold text-red-600" data-id="${p.id}">&times;</button>
        `;
        platformElement.querySelector('button').addEventListener('click', function () {
            plataformasSeleccionados.delete(this.dataset.id);
            platformElement.remove();
            updateHiddenInputPlatform();
        });
        platformContainer.appendChild(platformElement);
    });
    updateHiddenInputPlatform();

    selectTag.addEventListener('change', () => {
        const selectedId = selectTag.value;
        const selectedText = selectTag.options[selectTag.selectedIndex].text;

        if (!selectedId || tagsSeleccionados.has(selectedId)) return;

        tagsSeleccionados.add(selectedId);
        updateHiddenInputTag();

        const tagElement = document.createElement('span');
        tagElement.className = 'bg-[#afdf13] text-black px-2 py-1 rounded-full text-sm flex items-center gap-1';
        tagElement.innerHTML = `
            ${selectedText}
            <button type="button" class="ml-1 font-bold text-red-600" data-id="${selectedId}">&times;</button>
        `;
        tagElement.querySelector('button').addEventListener('click', function () {
            tagsSeleccionados.delete(this.dataset.id);
            tagElement.remove();
            updateHiddenInputTag();
        });
        tagsContainer.appendChild(tagElement);
    });

    selectPlatform.addEventListener('change', () => {
        const selectedId = selectPlatform.value;
        const selectedText = selectPlatform.options[selectPlatform.selectedIndex].text;

        if (!selectedId || plataformasSeleccionados.has(selectedId)) return;

        plataformasSeleccionados.add(selectedId);
        updateHiddenInputPlatform();

        const platformElement = document.createElement('span');
        platformElement.className = 'bg-[#afdf13] text-black px-2 py-1 rounded-full text-sm flex items-center gap-1';
        platformElement.innerHTML = `
            ${selectedText}
            <button type="button" class="ml-1 font-bold text-red-600" data-id="${selectedId}">&times;</button>
        `;
        platformElement.querySelector('button').addEventListener('click', function () {
            plataformasSeleccionados.delete(this.dataset.id);
            platformElement.remove();
            updateHiddenInputPlatform();
        });
        platformContainer.appendChild(platformElement);
    });

    function updateHiddenInputTag() {
        tagsInput.value = Array.from(tagsSeleccionados).join(',');
    }

    function updateHiddenInputPlatform() {
        platformInput.value = Array.from(plataformasSeleccionados).join(',');
    }
});
</script>



</body>
</html>