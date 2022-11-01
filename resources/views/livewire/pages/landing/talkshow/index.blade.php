<link rel="stylesheet" href="{{ asset('css/new.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
<!-- hero section start -->
<div
    class="bg-black pt-[145px] lg:pt-[210px]  md:flex md:flex-col-reverse lg:pl-[130px] lg:flex-row items-center md:pt-[202px] md:pl-[130px] overflow-hidden">
    <div class="flex flex-col items-start flex-1 text-white">
        <h1
            class="lg:!text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">
            Grand <br> Talkshow
        </h1>
        <!-- button start -->
        <div class="relative mt-16 ml-8 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
            <div class="absolute inset-0 ">
                <a href="#explore"
                    class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                    Explore</a>
            </div>
            <a href="#explore" class="relative btn">Let's
                Explore</a>
        </div>
        <!-- button end -->
    </div>
    <div class="-translate-y-12 md:-translate-y-0 ml-[180px] lg:ml-0  flex  flex-1 w-[180px] lg:!w-[691px] lg:!h-full">
        <div class="relative left-0 right-0 justify-center mx-auto mb-20 text-center h-72 max-w-fit scroll-mt-36 lg:h-fit"
            id="isometric-city">
            <!-- startup icon-->
            <img src="{{ asset('images/talkshow/mic.png') }}" alt="ISE-grand-talkshow-microphone" class=h-full>
        </div>
    </div>
</div>
<!-- hero section end -->
<!-- about this zone start  -->
<div class="bg-black pt-[50px] lg:pt-[200px] pb-[85px] lg:pb-[150px] text-center px-[22px] lg:px-[183px] tracking-wide "
    id="explore">
    <h1 class="text-xl md:!text-4xl font-bold font-poppins text-white">About This Event</h1>
    <p class="mt-10 text-[14px] lg:text-lg text-[#B5B3BC] font-poppins ">
        ISE! Grand Talkshow merupakan kegiatan talkshow interaktif yang menghadirkan pembicara-pembicara terkemuka di
        bidangnya dengan berbagai topik menarik dan dikemas dengan suasana yang lebih santai dan interaktif. Pada grand
        talkshow tahun ini akan ada 3 topik yang dibahas, yaitu <span class="text-[#BCA2F3]">Business Digital as Bridge
            Between Business and Technology</span>, <span class="text-[#BCA2F3]">Spark Innovation Through Solve People’s
            Problem</span>, dan <span class="text-[#BCA2F3]">Protect Our Data and Privacy to Secure Our Digital
            Life.</span> Bergabunglah secara gratis dan dapatkan manfaatnya secara penuh!
    </p>
    <!-- guidebook and register button start-->
    <div class="flex flex-col justify-center mt-12 bg-black md:flex-row md:space-x-4 font-poppins">
        <a href="{{ route('register-talkshow') }}"
            class="py-2 my-6 text-white transition duration-300 rounded-full md:mx-0 mx-28 md:my-0 md:px-16 bg-gradient-to-r from-pink-300 to-purple-300 hover:scale-105">Register
            now!</a>
    </div>
    <!-- guidebook and register button end-->
</div>
<!-- about this zone end  -->
<div x-data="{ tab: 'bsl' }" class="flex-row items-center justify-center text-white bg-black ">
    <div x-show="tab === 'bsl'" class="flex justify-center">
        <div class="flex-col text-center">

            <!-- slider about this start-->
            <div class="relative ">

                <section id="slider">

                    <input type="radio" name="slider" id="radio1" class="hidden" checked>
                    <input type="radio" name="slider" id="radio2" class="hidden">


                    <input type="radio" name="slider" id="radio3" class="hidden">
                    <!-- slide 1 -->
                    <label for="radio1" id="slide1">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/ICON 2021(1).png') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">

                    </label>
                    <!-- slide 2 -->
                    <label for="radio2" id="slide2">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/ICON 2019(2).jpg') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                    <!-- slide 3 -->
                    <label for="radio3" id="slide5">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/talkshow-2021.jpg') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                </section>
            </div>
        </div>
    </div>
    <!-- text :other have.. start -->
    <div class="mt-[85px] lg:mt-[200px] mb-20 lg:mb-36">
        <h1 class=" font-bold text-center text-white font-poppins text-3xl lg:!text-7xl ">Our
            grand talkshow
        </h1>
        <h1 class="font-bold text-center text-white font-poppins text-3xl lg:!text-7xl translate-y-4">
            <span
                class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">topics</span>
            & speakers
        </h1>
    </div>
    <!-- text :other have.. end -->
    <!-- make card start -->
    <div
        class="flex flex-col justify-center items-center space-y-36  mb-[10px] lg:mb-[200px] sm:gap-6 sm:justify-center font-poppins text-[#B5B3BC] gap-4 lg:gap-6">
        <div class="grid grid-cols-1 px-4 lg:grid-cols-3 lg:pr-32">
            <div
                class="flex flex-col items-center justify-center mb-8 space-y-8 md:space-y-0 md:space-x-12 md:flex-row mx-14 md:mx-20 font-poppins">
                <div class="w-[280px] h-full flex flex-col">
                    <img src="{{ asset('images/talkshow/speaker-onno-w.png') }}" alt="speaker"
                        class="w-56 mx-auto md:hover:scale-105 md:duration-300">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Onno W. Purbo, Ph. D</h1>
                        <p class="text-sm md:text-base text-liteGray">Pakar Teknologi Informasi Indonesia</p>
                        <p class="text-sm md:text-base text-liteGray">Speaker</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#191A1E] lg:col-span-2 w-full h-full rounded-3xl p-12 lg:p-16">
                <div class="flex flex-col space-y-8">
                    <h4 class="text-2xl font-bold text-white lg:text-3xl">
                        Protect Our Data and Privacy to Secure Our <br>
                        Digital Life
                    </h4>
                    <p class="text-base font-medium lg:text-lg">Semakin canggihnya teknologi membuat semakin
                        mudahnya
                        data-data pribadi seseorang ditemukan. Pada talkshow kali ini juga akan memberikan
                        informasi dan
                        edukasi kepada kita tentang mengapa data pribadi dapat mudah tersebar dan bagaimana
                        seseorang
                        harus menjaga data pribadinya tersebut agar privasi tetap terjaga di era yang serba
                        digital ini.
                    </p>
                </div>
            </div>
        </div>

        {{-- 2. --}}
        <div class="grid grid-cols-1 px-4 lg:grid-cols-3 lg:pl-32">
            <div
                class="flex flex-col items-center justify-center mb-8 space-y-8 lg:hidden md:space-y-0 md:space-x-12 md:flex-row mx-14 md:mx-20 font-poppins">
                <div class="w-[280px] h-full flex flex-col">
                    <img src="{{ asset('images/talkshow/alamanda-shantika.png') }}" alt="speaker"
                        class="w-56 mx-auto md:hover:scale-105 md:duration-300">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Alamanda Shantika Santoso</h1>
                        <p class="text-sm md:text-base text-liteGray">CEO & Founder BINAR</p>
                        <p class="text-sm md:text-base text-liteGray">Speaker</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#191A1E] lg:col-span-2 w-full h-full rounded-3xl p-12 lg:p-16">
                <div class="flex flex-col space-y-8">
                    <h4 class="text-2xl font-bold text-white lg:text-3xl">
                        Spark Innovation Through Solve People’s Problem
                    </h4>
                    <p class="text-base font-medium lg:text-lg">Mencari inovasi baru memang kadang membingungkan. Akan
                        tetapi, kita bisa loh mendapatkan dan melahirkan inovasi baru dengan membuat penyelesaian dari
                        masalah yang dihadapi orang lain. Bagaimana caranya? Melalui talkshow ini akan dibahas lebih
                        dalam terkait hal tersebut mulai dari product discovery, solution developments, hingga defining
                        success.
                    </p>
                </div>
            </div>
            <div
                class="flex-col items-center justify-center hidden mb-8 space-y-8 lg:flex md:space-y-0 md:space-x-12 md:flex-row mx-14 md:mx-20 font-poppins">
                <div class="w-[280px] h-full flex flex-col">
                    <img src="{{ asset('images/talkshow/alamanda-shantika.png') }}" alt="speaker"
                        class="w-56 mx-auto md:hover:scale-105 md:duration-300">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Alamanda Shantika Santoso</h1>
                        <p class="text-sm md:text-base text-liteGray">CEO & Founder BINAR</p>
                        <p class="text-sm md:text-base text-liteGray">Speaker</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- 1. --}}
        <div class="grid grid-cols-1 px-4 lg:grid-cols-3 lg:pr-32">
            <div
                class="flex flex-col items-center justify-center mb-8 space-y-8 md:space-y-0 md:space-x-12 md:flex-row mx-14 md:mx-20 font-poppins">
                <div class="w-[280px] h-full flex flex-col">
                    <img src="{{ asset('images/unknown_man.png') }}" alt="speaker"
                        class="w-1/2 md:w-[211px] mx-auto">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Speaker</h1>
                        <p class="text-sm md:text-base text-liteGray">Grandtalkshow</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#191A1E] lg:col-span-2 w-full h-full rounded-3xl p-12 lg:p-16">
                <div class="flex flex-col space-y-8">
                    <h4 class="text-2xl font-bold text-white lg:text-3xl">
                        Business Digital as Bridge Between <br>
                        Business and Technology
                    </h4>
                    <p class="text-base font-medium lg:text-lg">Digitalisasi bisnis menggunakan media sosial tak
                        selamanya memberikan hasil yang baik sehingga menjadi tantangan tersendiri yang harus dihadapi
                        para pemilik bisnis. Topik ini diusung untuk memberikan modal pengetahuan dalam memanfaatkan
                        media sosial secara tepat dan optimal sebagai media dalam proses digitalisasi bisnis.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <!-- make card end -->

    {{-- Ini Cuma Background --}}
    <div class="py-12 bg-black min-h-screeen">
        {{-- Ini Cuma Background --}}

        {{-- Start Timeline --}}
        <div class="mt-10 font-poppins">
            <h1 class="mb-10 md:mb-24 font-bold text-white font-poppins text-[27.75px] md:text-7xl text-center">
                Mark
                your calender
                and <br> follow the
                <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
            </h1>
            <div class="container mx-auto text-center">
                <ol class="items-center justify-center lg:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">29
                            Oct</time>
                        <div class="flex items-center justify-center overflow-hidden">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                            </div>
                            <div class="hidden lg:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Open <br>
                                Registration</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">19 Nov
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Grand Talkshow<br>
                                ISE! 2022</h3>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        {{-- End Timeline --}}

        {{-- Start FAQ --}}
        <div class="hidden mt-20 md:mt-52 font-poppins">
            <h1 class="text-[27.75px] md:text-7xl font-bold text-white text-center mb-10 md:mb-24">FAQ</h1>
            {{-- Question 1 --}}
            <div x-data="{ open: false }" class="mt-10 md:mt-24">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa itu Startup Academy?
                            </h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Startup Academy adalah salah
                                satu
                                sub-event ICON pada Information Systems Expo! 2022 yang merupakan acara edukasi
                                berbentuk workshop tematik seputar dunia Startup untuk membentuk The Next
                                Startup
                                Founder dari mahasiswa di seluruh Indonesia.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 2 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Kapan acara berlangsung?
                            </h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Startup Academy adakan
                                berlangsung
                                pada hari Sabtu-Minggu, 10-11 September 2022 dan 17-18 September 2022.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 3 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana alur pendaftaran
                                Startup
                                Academy?
                            </h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Pendaftaran dapat dilakukan
                                dengan
                                membuat akun pada https://ise-its.com/icon. Khusus untuk Startup Academy,
                                peserta hanya
                                perlu membuat 1 akun atas nama Ketua Tim. Langkah-langkah pendaftaran lebih
                                lanjut dapat
                                dilihat di dokumen Guidebook pada bagian Tata Cara Pendaftaran. Setelah berhasil
                                mendaftar, tunggu hasil seleksi. Peserta yang lolos seleksi selanjutnya dapat
                                mengikuti
                                rangkaian Startup Academy Academy.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 4 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa banyak kuota tim
                                peserta
                                Startup Academy?</h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Kuota peserta Startup
                                Academy adalah
                                sebanyak: 20 tim
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 5 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana proses seleksi
                                tim?</h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Seleksi tim peserta Startup
                                Academy
                                didasarkan pada inovasi dan keunikan ide startup yang diajukan. Keputusan
                                panitia tidak
                                dapat diganggu gugat.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 6 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja syarat peserta
                                Startup
                                Academy?</h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Peserta adalah mahasiswa
                                aktif di
                                tingkat D3/D4/S1/sederajat dibuktikan dengan Kartu Tanda Mahasiswa. Jika hilang
                                atau
                                belum memiliki, peserta diperbolehkan untuk menggantinya dengan bukti lain,
                                yaitu Surat
                                Keterangan Mahasiswa Aktif atau Transkrip Akademik terbaru. Peserta adalah tim
                                dengan 3
                                anggota yang memiliki ide startup baru, belum beroperasi, dan belum dilombakan
                                dalam
                                ajang apapun sebelumnya. </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa biaya pendaftaran
                                Startup
                                Academy?</h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Biaya pendaftaran Startup
                                Academy
                                adalah gratis. Setelah lolos proses seleksi, Peserta yang lolos diharuskan
                                membayar
                                commitment fee sebesar Rp150.000. </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja yang didapatkan
                                dari ISE!
                                Academy?</h1>
                            <div x-show="!open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="open" x-cloak class="pt-4" x-transition>
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Pada Startup Academy,
                                peserta akan
                                mendapatkan bimbingan dan umpan balik dari expert di dunia Startup terkait ide
                                yang
                                dimiliki, serta materi workshop mengenai dasar-dasar Startup (termasuk recording
                                dan
                                file materi), dan tentunya sertifikat bagi seluruh peserta. </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End FAQ --}}


        {{-- Start Event Partner --}}
        <div class="hidden mt-32 mb-24 md:mt-60 font-poppins">
            <h1 class="text-[27.75px] md:text-7xl font-bold text-white text-center mb-10 md:mb-24">Our Event
                Partner
            </h1>
            <div class="px-20 py-10 mx-auto w-80 xl:w-fit h-max bg-liteBlack">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center space-y-12 xl:flex-row xl:space-y-0 xl:space-x-12">
                        <div class="w-full xl:w-[24rem] transition duration-300 hover:scale-105">
                            <a href="https://academy.tokopedia.com/" target="_blank">
                                <img src="{{ asset('images/academy-tokopedia.png') }}" alt="academy-tokopedia"
                                    class="lg:w-full">
                            </a>
                        </div>
                        <div class="w-full xl:w-[24rem] transition duration-300 hover:scale-105">
                            <a href="https://indigo.id/" target="_blank">
                                <img src="{{ asset('images/indigospace-sub-logo-red.png') }}" alt="indigo-space-sby"
                                    class="xl:w-full">
                            </a>
                        </div>
                        <div class="w-full xl:w-[24rem] transition duration-300 hover:scale-105">
                            <a href="https://www.binaracademy.com/" target="_blank">
                                <img src="{{ asset('images/binar-academy.png') }}" alt="binar-academy"
                                    class="xl:w-full">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Partner --}}

        {{-- Ini Cuma Background --}}
    </div>
    {{-- Ini Cuma Background --}}

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
