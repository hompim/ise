<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE! 2022</title>

    <link rel="icon" href="{{ asset('images/logo-only-small.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-only-small.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-only-small.png') }}" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-black">

    {{ $slot }}


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
</body>

</html>
