<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

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
        <h1 class="text-8xl text-center lg:text-left">@yield('code')</h1>
        <p class="text-4xl text-center lg:text-left mt-4">@yield('message')</p>
        <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
            <button class="text-white font-bold uppercase tracking-wide py-3 px-8 hover:shadow-md rounded-lg mt-8" style="background: linear-gradient(270.02deg, #4CCCED 0%, #507EC5 64.04%, #1F4D95 99.96%); font-family: 'Hind';">
                {{ __('Back To Home') }}
            </button>
        </a>
    </div>
    <div class="flex justify-center flex-1">
        <img src="{{ asset('images/error.svg') }}" class="w-full h:full" >
    </div>


</div>
