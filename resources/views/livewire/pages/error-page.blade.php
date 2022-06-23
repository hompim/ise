<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
</head>
<div class="flex flex-col-reverse lg:flex-row items-center bg-black h-screen md:px-72 mx:0">
    <div class="flex flex-1 flex-col items-center lg:items-start text-white font-poppins">
        <h1 class="text-8xl text-center lg:text-left">Oops!</h1>
        <p class="text-4xl text-center lg:text-left mt-4">The page you're looking for is still under construction</p>
        <button class="px-3 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full xl:mt-4 mt-6 md:mt-4 relative blur">Go Back Home</button>
        <button class="px-3 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full xl:mt-52 mt-64 md:mt-72   xl:flex  absolute">Go Back Home</button>
    </div>
    <div class="flex justify-center flex-1">
        <img src="{{ asset('images/error.svg') }}" class="w-full h:full" >
    </div>

    
</div>