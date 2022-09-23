<!DOCTYPE html>
<html lang="en" class="h-screen">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
</head>

<body class="h-screen bg-purple-900 bg-no-repeat bg-cover">
    <main class="flex flex-col items-center justify-center h-screen text-center">
        <div class="relative">
            <div class="absolute inset-0">
                <h1 class="relative text-2xl font-bold text-blue-300 font-poppins lg:text-6xl md:text-4xl blur">
                    This page will come very soon
                </h1>
                <h2 class="relative text-sm font-bold text-blue-300 font-poppins blur top-6 md:top-12">
                    Meanwhile, have a look at these..
                </h2>
            </div>
            <h1 class="relative text-2xl font-bold text-white font-poppins lg:text-6xl md:text-4xl">
                This page will come very soon
            </h1>
            <h2 class="relative text-sm font-bold text-white top-6 md:top-12 font-poppins">
                Meanwhile, have a look at these..
            </h2>
        </div>
        <div class="flex flex-col">
            <a href="{{ url()->previous() }}"
                class="absolute flex px-2 py-[0.4rem] space-x-4 text-base font-semibold text-blue-100 transition -translate-x-40 border-4 border-blue-100 rounded-lg bottom-40 md:bottom-48 md:text-xl font-poppins hover:scale-105 ">
                <img src="{{ asset('images/coming-soon/chevron-right-white.svg') }}" alt="chevron-right"
                    class="transform rotate-180" />Back</a>
            <a href="https://www.instagram.com/is_expo/"
                class="absolute flex px-2 py-1 space-x-4 text-base font-semibold text-purple-900 transition -translate-x-12 bg-blue-100 rounded-lg md:text-lg bottom-40 md:bottom-48 font-poppins hover:scale-105 hover:bg-purple-50">
                <img src="{{ asset('images/coming-soon/instagram.svg') }}" alt="instagram" />
                <span class="flex items-center">Instagram ISE!</span>
                <img src="{{ asset('images/coming-soon/chevron-right.svg') }}" alt="chevron-right" />
            </a>
        </div>
    </main>
</body>

</html>
