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
    <title>SteamCRUD</title>
</head>
<body class="h-screen bg-[#1a293a]">
    @include('components.navbar')
    <a href="/dev/index" class="z-10 fixed bottom-10 left-10 bg-gray-800 w-48 p-4 rounded-lg border-1 border-gray-300 hover:bg-gray-900"><p class="text-white text-center">Juegos</p></a>
    <form id="form-principal"method="POST" action="{{ route('juegos.guardar') }}">
        @csrf
        <div class="h-full grid grid-cols-5 gap-2 px-48 pt-48 pb-2 text-white">
            <div class="col-span-2 border-1 border-white rounded-lg flex flex-col justify-center items-center text-center">
                <img src="./img/logo.png" alt="logo.png" class="w-1/2 mb-10">
                <p class="text-4xl font-bold">CRUD Oficial para STEAM</p>
                <p class="text-xl font-light">Crea, edita o elimina los juegos de nuestro catalogo!</p>
            </div>
            <div class="col-span-3 border-1 border-white rounded-lg flex flex-col justify-center items-center py-4 px-4">
                    <div class="flex flex-col gap-1">
                        <label for="" class="text-xl">Nombre del juego</label>
                        <input id="nombreJuego" name="nombreJuego" type="text" class="bg-gray-900 rounded-lg p-2 text-lg">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Precio normal</label>
                                <input id="precioNormal" name="precioNormal" type="number" class="text-lg bg-gray-900 rounded-lg p-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Precio oferta</label>
                                <input id="precioOferta" name="precioOferta" type="number" class="text-lg bg-gray-900 rounded-lg p-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Tags del juego</label>
                                <select id="tagsJuego" class="bg-gray-900 rounded-lg p-2 text-lg">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{$tag->valor_tag}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="tags[]" id="tagsInput" value="">
                                <div id="tagsSeleccionados" class="flex flex-wrap mt-2 gap-2"></div>
                            </div>
                            <div class="flex flex-col">
                                <label for="" class="text-xl">Plataformas disponibles para el juego</label>
                                <select name="plataformas" id="plataformasJuego" class="bg-gray-900 rounded-lg p-2 text-lg">
                                    <option value="3">Linux</option>
                                    <option value="1">Mac</option>
                                    <option value="2">Windows</option>
                                </select>
                                <input type="hidden" name="plataformas[]" id="plataformasInput" value="">
                                <div id="plataformasSeleccionados" class="flex flex-wrap mt-2 gap-2"></div>
                            </div>
                        </div>
                        <label for="" class="text-xl">Descripción del juego</label>
                        <textarea name="descripcionJuego" id="descripcionJuego" class="bg-gray-900 rounded-lg py-1 px-2 h-48"></textarea>
                    </div>
                    <button id="button" type="submit" class="fixed bottom-10 right-10 bg-gray-800 w-48 p-4 rounded-lg border-1 border-gray-300 hover:bg-gray-900">Crear juego </button>
            </div>
        </div>
        <div class=" px-48 pb-48 text-white">
            <div class="border-1 border-white rounded-lg flex flex-col justify-start items-center text-center h-48 px-4">
                <div class="my-3">
                    <h3 class="text-lg">Imagenes del juego</h3>
                </div>
                <div class="flex justify-start items-start w-full">
                        <input type="hidden" name="ruta_imagen" id="ruta_imagen">
                        <div id="preview-imagen" class="mr-2 flex gap-2">

                        </div>
                        <div onclick="document.getElementById('input-imagen').click()"
                            class="w-24 h-24 bg-gray-900 flex items-center justify-center opacity-80 hover:opacity-100 rounded-xl cursor-pointer">
                            <p class="text-white text-5xl">+</p>
                        </div>
                        
                        <input type="file" id="input-imagen" accept="image/*" multiple class="hidden">
                        <input type="hidden" id="rutas_imagenes" name="rutas_imagenes" value="[]">
                </div>
            </div>
        </div>
    </form>
    @include('components.footer')
    <script src="{{ asset('js/home.js') }}"></script>
    <script>
        const inputImagen = document.getElementById('input-imagen');
        const preview = document.getElementById('preview-imagen');
        const rutasInput = document.getElementById('rutas_imagenes');
        const csrfToken = '{{ csrf_token() }}';

        let rutas = [];

        inputImagen?.addEventListener('change', function () {
            const files = Array.from(this.files);
            if (!files.length) return;

            files.forEach(file => {
                const formData = new FormData();
                formData.append('imagen', file);

                fetch("{{ route('imagen.subir') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                })
                .then(async response => {
                    const contentType = response.headers.get("content-type") || "";
                    if (!response.ok || !contentType.includes("application/json")) {
                        const html = await response.text();
                    }
                    return response.json();
                })
                .then(data => {
                    const img = document.createElement('img');
                    img.src = data.url;
                    img.className = "w-24 h-24 opacity-80 hover:opacity-100 rounded-xl cursor-pointer cover";
                    preview.appendChild(img);

                    // Agregar ruta al array
                    rutas.push(data.path);
                    rutasInput.value = JSON.stringify(rutas);
                })
                .catch(error => {
                    console.error(error);
                });
            });

            this.value = '';
        });
    </script>

<script>
    const selectTag = document.getElementById('tagsJuego');
    const tagsContainer = document.getElementById('tagsSeleccionados');
    const tagsInput = document.getElementById('tagsInput');

    const selectPlatform = document.getElementById('plataformasJuego');
    const platformContainer = document.getElementById('plataformasSeleccionados');
    const platformInput = document.getElementById('plataformasInput');

    const plataformasSeleccionados = new Set();
    const tagsSeleccionados = new Set();
    

    selectTag.addEventListener('change', () => {
        const selectedId1 = selectTag.value;
        const selectedText1 = selectTag.options[selectTag.selectedIndex].text;

        if (!selectedId1 || tagsSeleccionados.has(selectedId1)) return;

        tagsSeleccionados.add(selectedId1);
        updateHiddenInputTag();

        const tagElement = document.createElement('span');
        tagElement.className = 'bg-[#afdf13] text-black px-2 py-1 rounded-full text-sm flex items-center gap-1';
        tagElement.innerHTML = `
            ${selectedText1}
            <button type="button" class="ml-1 font-bold text-red-600" data-id="${selectedId1}">&times;</button>
        `;

        tagElement.querySelector('button').addEventListener('click', function () {
            tagsSeleccionados.delete(this.dataset.id);
            tagElement.remove();
            updateHiddenInputTag();
        });

        tagsContainer.appendChild(tagElement);
    });

    function updateHiddenInputTag() {
        tagsInput.value = Array.from(tagsSeleccionados).join(',');
    }

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

    function updateHiddenInputPlatform() {
        platformInput.value = Array.from(plataformasSeleccionados).join(',');
    }
</script>


</body>
</html>