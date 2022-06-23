<div class="flex flex-col justify-center gap-8 text-center bg-black">
    {{-- title header --}}
    <div>
        <h1 class="pt-48 font-bold text-center text-white text-7xl font-poppins" data-aos="fade-right"
            data-aos-easing="linear" data-aos-duration="500">
            We Bring You To <br>
            Even <span class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"
                data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="2500">Further</span>.
        </h1>
    </div>

    {{-- lets explore button --}}
    <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group" data-aos="fade-down"
        data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500">
        <div class="absolute inset-0 ">
            <a href="#"
                class="relative px-6 py-4 font-semibold text-center text-white transition duration-1000 rounded-full opacity-75 bg-gradient-to-r from-pink-300 to-purple-300 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                Explore</a>
        </div>
        <a href="#isometric-city"
            class="relative px-6 py-4 font-semibold text-center text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins ">Let's
            Explore</a>
    </div>

    {{-- isometric city --}}
    <div class="relative left-0 right-0 justify-center mx-auto mt-40 mb-20 text-center max-w-fit scroll-mt-36"
        id="isometric-city">
        <div class="absolute top-0 right-52 group" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="750"
            data-aos-once="true">
            <div
                class="pl-2 mb-12 transition duration-1000 ease-linear border-l-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-l-purple-300">
                <h4 class="text-2xl font-medium text-white text-start font-poppins">IT Convention Zone</h4>
                <ul class="text-[#B5B3BC] text-start">
                    <li>Data Science Academy</li>
                    <li>Startup Academy</li>
                    <li>E-Hall of Information System</li>
                    <li>Grand Talkshow ISE! 2022</li>
                </ul>
            </div>
            <a href="#icon">
                {{-- <img src="{{ asset('images/icon-city.svg') }}" alt="isometric-city"
                    class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300"> --}}
                <div
                    class="transition duration-1000 transform scale-[1.7] group-hover:scale-[1.8] group-hover:duration-300">
                    @livewire('components.icon-city')
                </div>
            </a>
        </div>
        <div class="absolute left-44 bottom-80 group" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="750" data-aos-once="true">
            <div
                class="pr-2 mb-12 transition duration-1000 ease-linear border-r-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-r-pink-300">
                <h4 class="text-2xl font-medium text-white text-end font-poppins">Competition Zone</h4>
                <ul class="text-[#B5B3BC] text-end">
                    <li>BIONIX Student Level</li>
                    <li>Startup College Level</li>
                </ul>
            </div>
            <a href="#bionix">
                {{-- <img src="{{ asset('images/bionix-city-animated.svg') }}" alt="isometric-city"
                    class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300"> --}}
                <div
                    class="transition duration-1000 transform scale-[1.5] group-hover:scale-[1.55] group-hover:duration-300">
                    @livewire('components.bionix-city')
                </div>
            </a>
        </div>
        <img src="{{ asset('images/isometric-city.svg') }}" alt="isometric-city">
    </div>

    {{-- Competition Zone --}}
    <div class="px-32 scroll-mt-24" id="bionix">
        <h2
            class="mb-6 text-6xl font-bold text-left text-transparent font-poppins bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text">
            Competition <span class="block mt-3 text-white">Zone</span></h2>
        <div class="flex justify-between space-x-8">
            <div class="text-white text-left w-[350px] h-[420px] pl-6 pr-8 pt-12 bg-liteBlack rounded-3xl">
                <p class="text-lg font-medium font-poppins text-liteGray mb-9 ">
                    Zona Competition merupakan ajang kompetisi inovasi bisnis dan IT yang diselenggarakan
                    untuk siswa/siswi tingkat SMA/SMK sederajat dan mahasiswa.
                    Terdapat dua kategori kompetisi, yaitu BIONIX Student Level dan BIONIX College Level.
                </p>
                <a class="text-2xl font-semibold transition duration-300 opacity-75 font-poppins hover:opacity-100"
                    href="#">Learn More
                    <img class="inline pl-5" src="{{ asset('images/chevron-left.svg') }}" alt=""></a>
            </div>
            <div class="swiper mySwiper w-[700px]">
                <div class="swiper-wrapper cursor-grab">
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl  h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                </div>
                <div class="p-6 -mr-5 rounded-full swiper-button-next bg-liteBlack"></div>
                <div class="p-6 -ml-5 rounded-full swiper-button-prev bg-liteBlack"></div>
            </div>

        </div>

    </div>


    {{-- IT Convention Zone --}}
    <div class="px-32 mt-24 scroll-mt-24" id="icon">
        <h2
            class="mb-6 text-6xl font-bold text-right text-transparent font-poppins bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text">
            IT Convention <span class="block mt-3 text-white">Zone</span></h2>
        <div class="flex justify-between space-x-8">
            <div class="swiper mySwiper w-[700px] !ml-0">
                <div class="swiper-wrapper cursor-grab">
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl  h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="flex justify-center swiper-slide">
                        <img class="w-[600px] rounded-3xl h-[420px]"
                            src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                </div>
                <div class="p-6 -mr-5 rounded-full swiper-button-next bg-liteBlack"></div>
                <div class="p-6 -ml-5 rounded-full swiper-button-prev bg-liteBlack"></div>
            </div>
            <div class="text-white text-left w-[350px] h-[420px] pl-6 pr-8 pt-12 bg-liteBlack rounded-3xl">
                <p class="text-lg font-medium font-poppins text-liteGray mb-9 ">
                    Zona IT Convention menghadirkan rangkaian acara yang bermanfaat luas dengan memamerkan dunia IT
                    serta melakukan edukasi kepada masyarakat terkait isu-isu seputar IT saat ini. Pada zona ini
                    terdapat beberapa acara, yaitu Academy, E-Hall of IS, dan juga Grand Talk Show.
                </p>
                <a class="text-2xl font-semibold transition duration-300 opacity-75 font-poppins hover:opacity-100"
                    href="/icon">Learn More
                    <img class="inline pl-5" src="{{ asset('images/chevron-left.svg') }}" alt=""></a>
            </div>
        </div>

    </div>

    {{-- IS Class --}}
    <div class="px-56 my-36">
        <h1 class="mb-24 font-bold text-white font-poppins text-7xl">What's New ?</h1>
        <div class="relative group">
            <div
                class="absolute inset-0 blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-[#e11baa] animate-tilt">
            </div>
            <div class="relative flex flex-col items-center justify-center pb-24 rounded-md bg-liteBlack px-28">
                <h3
                    class="bg-gradient-to-r from-white to-[#E11BAA] text-transparent bg-clip-text font-poppins font-bold text-6xl pt-12">
                    IS Class
                </h3>
                <img src="{{ asset('images/is-class.svg') }}"
                    class="transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300"
                    alt="is-class">
                <p class="text-lg font-medium font-poppins text-liteGray">IS Class merupakan sebuah wadah untuk
                    memperkenalkan suasana pembelajaran di Sistem Informasi ITS untuk siswa/i SMA/SMK/sederajat yang
                    ingin
                    mengetahui departemen Sistem Informasi ITS lebih lanjut</p>
                <a class="pt-6 text-2xl font-semibold text-white transition duration-300 opacity-75 font-poppins hover:opacity-100"
                    href="/bionix">Learn More <img class="inline pl-5" src="{{ asset('images/chevron-left.svg') }}"
                        alt=""></a>
            </div>
        </div>
    </div>

    {{-- timeline --}}
    <div class="my-36">
        <h1 class="mb-24 font-bold text-white font-poppins text-7xl">Mark your calender and <br> follow the <span
                class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
        </h1>
        <div class="container mx-auto">
            <ol class="items-center justify-center md:flex">
                <li class="relative mb-6 sm:mb-0">
                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Jun 2022</time>
                    <div class="flex items-center justify-center overflow-hidden">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                        </div>
                        <div class="hidden sm:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                        </div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins">BIONIX <br>
                            Student Level</h3>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Jun 2022</time>
                    <div class="relative flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                        </div>
                        <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins pb-7">IS Class</h3>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Jul 2022</time>
                    <div class="relative flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                        </div>
                        <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins">ICON <br> Academy</h3>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Sep 2022</time>
                    <div class="relative flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                        </div>
                        <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins">BIONIX <br>
                            College Level</h3>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Sep 2022</time>
                    <div class="relative flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                        </div>
                        <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins pb-7">Virtual Tour</h3>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <time class="block mb-2 text-lg font-medium text-white font-poppins">Nov 2022</time>
                    <div class="relative flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                        </div>
                        <div class="hidden sm:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                    </div>
                    <div class="mt-3">
                        <h3 class="text-lg font-semibold text-white font-poppins pb-7">Grand Talkshow</h3>
                    </div>
                </li>
            </ol>

        </div>
    </div>
    {{-- timeline end --}}

    {{-- sponsor --}}
    <div class=" pb-24">
        <h1 class="mb-24 font-bold text-white font-poppins text-7xl">Meet our sponsor</h1>
        <div class="grid grid-rows-3 gap-4 mx-32">
            <div class="grid grid-cols-2 gap-4">
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>

            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>

            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>
                <div class="w-full rounded-lg h-96 bg-zinc-800">

                </div>

            </div>
        </div>
    </div>



    {{--Sign up and Register--}}
    <div class="mx-32 mt-24 pb-24">
        <div class="rounded-md bg-liteBlack px-52 py-12">
            <h1 class="font-poppins font-bold text-white text-6xl">Join us and <span class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">get</span>  a lot of <br> advantages.</h1>
            <div class="relative left-0 right-0 px-16 justify-center mx-auto mt-24 text-center max-w-fit group">
            <div class="absolute inset-0 ">
                <a href="#"
                    class="relative px-6 py-4 font-semibold text-center text-white transition duration-1000 rounded-full opacity-75 bg-gradient-to-r from-pink-300 to-purple-300 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Sign Up</a>
            </div>
            <a href="#isometric-city"
                class=" relative px-14 py-4 font-semibold text-center text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins ">Sign Up</a>
            </div>
    
        </div>
    </div>
</div>
