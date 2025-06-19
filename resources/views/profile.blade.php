<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta de usuario</title>
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
        <div class = "bg-[url('/img/editorbg.jpg')] bg-no-repeat bg-cover w-full h-full  items-startS">
            <div class ='pt-[50px] pb-[50px] items-start ml-[50px]'>
                <div class='bg-[#181A21] rounded-sm flex flex-row justify-center items-center w-[750px] h-[500px] my-[70px] z-10 '>
                    <div>Imagen</div>
                    <div class ></div>
                </div>
            </div>
        </div>
        @include('components.footer')
    </main>
</body>
</html>