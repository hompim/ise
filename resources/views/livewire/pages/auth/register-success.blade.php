<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    @livewireStyles

    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
</head>

<body class="bg-black">

    <div class="flex items-center justify-center min-h-screen px-12 py-12 mx-4 lg:px-10">
        <div class="relative group">
            <div
                class="absolute inset-0 blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-[#e11baa] animate-tilt">
            </div>
            <div class="flex flex-col w-screen lg:w-[56em] rounded-xl bg-liteBlack relative">
                <div class="bg-[#141414] flex flex-row justify-between max-h-48 overflow-hidden rounded-t-xl">
                    <div class="">
                        <img src="{{ asset('images/logo-ise.svg') }}" class="w-48" alt="logo-ise">
                    </div>
                    <div class="h-full">
                        <img src="{{ asset('images/isometric-city-webinar-kickoff.svg') }}" alt="logo-ise">
                    </div>
                </div>
                <div class="flex flex-col justify-center w-full my-12 space-y-12">
                    <h1 class="text-2xl font-bold text-center text-white lg:text-4xl">Registrasi Berhasil</h1>
                    <p class="px-4 text-base font-medium text-center text-white lg:text-lg lg:px-12">
                        Selamat, Anda sudah berhasil mendaftarkan diri Anda! Jangan lupa cek selalu email kamu untuk update informasi terbaru dari kami.</p>
                    <div class="flex flex-col space-y-4 lg:justify-around lg:flex-row lg:space-y-0">
                        <a href="https://wa.me/6285162852050"
                            class="block mx-auto transition duration-300 hover:scale-105" target="_blank">
                            <div class="bg-[#25D366] rounded-full w-64 px-2 py-2 flex flex-row items-center">
                                <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="whatsapp-icon" class="mx-4">
                                <p class="p-0 m-0 text-lg font-medium text-white">Narahubung</p>
                            </div>
                        </a>
                        <a href="/dashboard/login"
                            class="block mx-auto text-center transition duration-300 hover:scale-105">
                            <div
                                class="flex flex-row items-center justify-center w-64 px-4 py-4 rounded-full bg-gradient-to-r from-pink-200 to-purple-300">
                                <p class="p-0 m-0 text-lg font-medium text-white">Masuk Ke Akun Kamu</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
