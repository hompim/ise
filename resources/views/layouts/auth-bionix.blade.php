<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
</head>

<body class="bg-black">

    <div class="flex items-center justify-center min-h-screen px-10 py-12 ">
        <div class="relative group">
            <div
                class="absolute inset-0 blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-[#e11baa] animate-tilt">
            </div>
            <div class="flex flex-col w-[56em] rounded-xl bg-liteBlack relative">
                <div class="bg-[#141414] flex flex-row justify-between max-h-48 overflow-hidden rounded-t-xl">
                    <div class="">
                        <img src="{{ asset('images/logo-ise.svg') }}" class="w-48" alt="logo-ise">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/isometric-city-bionix.svg') }}" class="w-[26em]" alt="logo-ise">
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
