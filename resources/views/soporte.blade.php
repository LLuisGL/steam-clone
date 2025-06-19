<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte de steam</title>
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
        <div class='bg-[#2A475E] w-full h-full flex justify-center flex flex-col items-center'>
            <div class='text-white font-motiva font-bold justify-start my-[10px]'>
                Soporte de Steam
            </div>
            <div class='w-[500px] h-[339px]'>
                <img src="/img/ns.jpg" class=''>
            </div>
            <div class='my-[25px]'>
                <button class= "bg-[#59BF40] text-[#d2efa9] text-sm px-4 py-1 hover:bg-[#5ba32b] transition">
                <a href="/login" class='bg-[#181A2] text-white flex justify-center items-center h-[20px]  hover:text-white'>volver</a>
                </button>
            </div>
        </div>
        @include('components.footer')
    </main>
</body>
</html>