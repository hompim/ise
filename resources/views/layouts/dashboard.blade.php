<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo-only-small.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-only-small.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-only-small.png') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
    <link rel="stylesheet" href="https://pagecdn.io/lib/font-awesome/5.10.0-11/css/all.min.css"
        integrity="sha256-p9TTWD+813MlLaxMXMbTA7wN/ArzGyW/L7c5+KkjOkM=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CoreUI CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('/css/dashboard/style.css') }}">

    <style>
        body {
            font-family: 'Hind', sans-serif !important;
        }
    </style>
    @stack('css')
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @if (!config('app.debug'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJ59B1X1XZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-DJ59B1X1XZ');
        </script>
    @endif
</head>

<body class="font-sans antialiased c-app">
    <div class="fixed top-0 left-0 z-50 block w-full h-full bg-white opacity-75" wire:loading.delay>
        <span class="relative block w-0 h-0 mx-auto my-0 text-green-500 opacity-75 top-1/2" style="
    top: 50%;
">
            <i class="fas fa-circle-notch fa-spin fa-5x"></i>
        </span>
    </div>
    @livewire('components.sidebar')
    <div class="c-wrapper c-fixed-components">
        @livewire('components.header')

        <!-- Page Content -->
        <main class="c-main container-fluid" style="background-color: #121316">
            {{ $slot }}
        </main>
    </div>



    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.bundle.min.js"></script>
    <!-- Alpine v2 -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}



    <!-- Alpine v3 -->
    <script src="{{ asset('js/alpine.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @livewireScripts

    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}
    @stack('js')
    <script>
        Livewire.on('downloadUrl', (res) => {
            window.open(res)
        })
    </script>
</body>

</html>
