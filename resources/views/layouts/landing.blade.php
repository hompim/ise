<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('desc', 'ISE! merupakan singkatan dari Information Systems Expo yang merupakan event tahunan yang diselenggarakan oleh Departemen Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya dalam rangka memperkenalkan Departemen Sistem Informasi ITS kepada masyarakat luas')">
    <meta name="keywords" content="@yield('keywords', 'ISE, Sistem Informasi ITS, Sistem Informasi, ITS, Olimpiade, Bisnis, TIK, Teknologi, Pameran IT, Konser')">
    <meta name="author" content="WebDev ISE! 2022">
    <meta property="og:title" content="ISE! | Information System Expo! 2022">
    <meta property="og:description" content="@yield('desc', 'ISE! merupakan singkatan dari Information Systems Expo yang merupakan event tahunan yang diselenggarakan oleh Departemen Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya dalam rangka memperkenalkan Departemen Sistem Informasi ITS kepada masyarakat luas')"">
    <meta property="og:image" content="{{ asset('images/logo-only.png') }}">
    <title>ISE! | Information System Expo! 2022</title>
    <!-- linknya -->
    <link rel="icon" href="{{ asset('images/logo-only.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-only.png') }}" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">

    @stack('css')
</head>

<body class="w-full h-full m-0">
    <div itemprop="image" itemscope="itemscope" itemtype="http://schema.org/ImageObject">
        <meta content="{{ asset('images/isometric-city.png') }}" itemprop="url" />
    </div>

    @livewire('components.navbar')

    {{ $slot }}

    @livewire('components.footer')

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper(".mySwiper", {
            // on: {
            //     init: function () {
            //     const index_currentSlide = this.realIndex;
            //     const currentSlide = this.slides[index_currentSlide];
            //     currentSlide.classList.remove("blur-md");
            //     currentSlide.classList.add("blur-none");
            //     }
            // },
            effect: "coverflow",
            centeredSlides: true,
            spaceBetween: -100,
            loop: true,
            slidesPerView: "auto",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
        });
    </script>
    <script>
        // const swiper = new Swiper(".mySwiperIcon .swiper", {
        //     //
        //     // on: {
        //     //     init: function () {
        //     //     const index_currentSlide = this.realIndex;
        //     //     const currentSlide = this.slides[index_currentSlide];
        //     //     currentSlide.classList.remove("blur-md");
        //     //     currentSlide.classList.add("blur-none");
        //     //     }
        //     // },
        //     effect: "coverflow",
        //     centeredSlides: true,
        //     spaceBetween: -300,
        //     loop: true,
        //     slidesPerView: "auto",
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        //     autoplay: {
        //         delay: 750,
        //     },
        //     coverflowEffect: {
        //         rotate: 0,
        //         stretch: 0,
        //         depth: 100,
        //         modifier: 2,
        //         slideShadows: false,
        //     },
        // });
    </script>
    <!-- Aos JS -->
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
    @stack('js')
</body>

</html>
