

<nav class='flex justify-center w-screen bg-[#171d25] py-2'>
    <div class='flex flex-row justify-center gap-24 items-center w-2/3'>
        <a href="/">
            <img src="./img/logo.png" alt="logo.png" class="w-40">
        </a>
        @guest
        <div class="flex gap-4" >
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Tienda</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Comunidad</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Acerca De</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Soporte</a>
        </div>
        @endGuest

        @auth
        <div class="flex gap-4" >
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Tienda</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Comunidad</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>{{auth()->user()->username}}</a>
            <a href="" class='text-white font-medium text-m font-sans uppercase'>soporte</a>
            @if(session('es_admin'))
            <a href="" class='text-white font-medium text-m font-sans uppercase'>Dev</a>
            @endif
        </div>
        @endauth
        <div class="flex justify-center items-stat  gap-2">

            @guest
            <a href="" class="flex bg-[#5c7e10] items-center px-1 text-white text-xs h-6">
                Instalar Steam
            </a>   
            <a href="/login" class="flex text-gray-200 items-center text-xs h-6">iniciar sesión</a>
            @endGuest
                
            @auth
                <div class="relative inline-block text-left">
                    <a href="" class="flex bg-[#5c7e10] items-center px-1 text-white text-xs h-6">
                        Instalar Steam
                    </a>

                    <div id='dropDownMenu' class="absolute left-1 z-10 mt-2 w-48 origin-top-left bg-[#3D4450] hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="#" class="block px-4 py-2 text-xs text-[#dcdedf]" role="menuitem" tabindex="-1" id="menu-item-0">Configuracion de cuenta</a>
                            <a href="/logout" class="block px-4 py-2 text-xs text-[#dcdedf]" role="menuitem" tabindex="-1" id="menu-item-1">Cerrar Sesión...</a>
                        </div>
                    </div>   

                </div>
                <div class="relative inline-block text-left">
                    <div>   
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.0 bg-[#171d25]  pt-[5px] text-xs text-white" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        {{auth()->user()->username}}
                        </button>
                    </div>
                </div>

            @endauth

            <p class="h-24 text-white text-xs mt-1"> | </p>
            <a href="" class="flex items-center text-gray-200 text-xs h-6">
                Idioma
            </a>
        </div>
    </div>
</nav>

<script>
  const button = document.getElementById('menu-button');
  const menu = document.getElementById('dropDownMenu');

  button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>