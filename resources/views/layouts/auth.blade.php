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

<body>

    <div class=" min-h-screen flex items-center justify-center py-12 px-10 bg-black">
        <div
            class="max-w-4xl w-full bg-[#191a1e] rounded-lg overflow-hidden  grid grid-cols-1 md:grid-cols-2 space-y-8">
            <div class="bg-[#141414]">
                <h1 class="text-white font-poppins text-3xl font-bold px-6 pt-4">Information<br>Systems Expo</h1>
                <h1
                    class="text-transparent bg-gradient-to-r from-pink-300 px-6 to-purple-300 bg-clip-text font-poppins text-3xl font-bold">
                    2022</h1>
                <div class="relative left-0 right-0 justify-center mx-auto mt-36 text-center max-w-2xl hidden lg:block"
                    id="isometric-city">
                    <div class="absolute bottom-20 right-1 group">
                        <div
                            class="pl-2 transition duration-1000 ease-linear border-l-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-l-purple-300">
                            <h4 class="text-lg font-medium text-white text-start font-poppins">IT Convention Zone</h4>
                            <ul class="text-[#B5B3BC] text-base text-start">
                                <li>Data Science Academy</li>
                                <li>Startup Academy</li>
                                <li>E-Hall of Information System</li>
                                <li>Grand Talkshow ISE! 2022</li>
                            </ul>
                        </div>
                        <a href="/icon">
                            <img src="{{ asset('images/icon-city.svg') }}" alt="isometric-city"
                                class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300 w-32 text-end justify-end items-end">
                        </a>
                    </div>
                    <div class="absolute left-2 bottom-32 group">
                        <div
                            class="pr-2 transition duration-1000 ease-linear border-r-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-r-pink-300">
                            <h4 class="text-lg font-medium text-white text-end font-poppins">Competition Zone</h4>
                            <ul class="text-[#B5B3BC] text-base text-end">
                                <li>BIONIX Student Level</li>
                                <li>Startup College Level</li>
                            </ul>
                        </div>
                        <a href="/icon" class="flex text-end justify-end items-end">
                            <img src="{{ asset('images/bionix-city.svg') }}" alt="isometric-city"
                                class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300 w-24">
                        </a>
                    </div>
                    <img src="{{ asset('images/isometric-city.svg') }}" alt="isometric-city">
                </div>

            </div>
            {{ $slot }}
        </div>

    </div>

    <script src="../../../node_modules/flowbite"></script>
</body>

</html>
