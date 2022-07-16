    <div class="flex flex-col justify-center gap-8 text-center bg-black">
        {{-- title header --}}
        <div>
            <h1 class="pt-48 text-4xl font-bold text-center text-white lg:!text-7xl font-poppins" data-aos="fade-right"
                data-aos-easing="linear" data-aos-duration="500">
                We Bring You To <br>
                Even <span class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"
                    data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="2500">Further</span>
            </h1>

        </div>

        {{-- lets explore button --}}
        <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group"
            data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500">
            <div class="absolute inset-0 ">
                <a href="#isometric-city"
                    class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                    Explore</a>
            </div>
            <a href="#isometric-city" class="relative btn">Let's
                Explore</a>
        </div>

        {{-- <div class="" id="ise-2022">
        <h1 class="font-bold leading-tight text-center text-white mt-52 text-7xl font-poppins" data-aos="fade-right"
            data-aos-easing="linear" data-aos-duration="500">
            Information System Expo<br>
            <span class="pt-8 text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"
                data-aos="zoom-in-right" data-aos-easing="linear" data-aos-delay="500">2022</span>
        </h1>
        <p class="text-base font-medium font-poppins text-[#B5B3BC] px-48 pt-12">
            Information Systems Expo (ISE!) merupakan acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa Sistem
            Informasi ITS untuk memperkenalkan Departemen Sistem Informasi ITS ke masyarakat luas. Mengangkat tema
            Metafurther, ISE! 2022 akan membawamu menjadi bagian dari langkah awal Indonesia yang lebih modern dan serba
            digital.
        </p>
    </div> --}}

        {{-- isometric city --}}
        <div class="relative left-0 right-0 justify-center mx-auto mb-20 text-center mt-44 max-w-fit scroll-mt-36"
            id="isometric-city">
            <div class="absolute -top-48 lg:top-0 right-4 lg:right-52 group" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="750" data-aos-once="true">
                <div
                    class="pl-2 mb-12 transition duration-1000 ease-linear border-l-2 opacity-0 group-hover:duration-300 lg:group-hover:opacity-100 group-hover:ease-linear border-l-purple-300">
                    <h4 class="text-2xl font-medium text-white text-start font-poppins">IT
                        Convention Zone</h4>
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
                        class="transition duration-1000 transform lg:!scale-[1.7] lg:group-hover:!scale-[1.8] group-hover:duration-300">
                        @livewire('components.icon-city')
                    </div>
                </a>
            </div>
            <div class="absolute lg:!left-44 bottom-24 lg:!bottom-80 group" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="750" data-aos-once="true">
                <div
                    class="pr-2 mb-12 transition duration-1000 ease-linear border-r-2 opacity-0 group-hover:duration-300 lg:group-hover:opacity-100 group-hover:ease-linear border-r-pink-300">
                    <h4 class="text-2xl font-medium text-center text-white font-poppins">
                        Competition
                        Zone</h4>
                    <ul class="text-[#B5B3BC] text-end lg:block hidden">
                        <li>BIONIX Student Level</li>
                        <li>BIONIX College Level</li>
                    </ul>
                </div>
                <a href="#bionix">
                    {{-- <img src="{{ asset('images/bionix-city-animated.svg') }}" alt="isometric-city"
                    class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300"> --}}
                    <div
                        class="transition duration-1000 transform scale-75 lg:!scale-[1.5] lg:group-hover:!scale-[1.55] group-hover:duration-300">
                        @livewire('components.bionix-city')
                    </div>
                </a>
            </div>
            <img src="{{ asset('images/isometric-city.svg') }}" alt="isometric-city">
        </div>

        {{-- Competition Zone --}}
        <div class="lg:px-32 scroll-mt-24" id="bionix">
            <h2
                class="mb-6 text-4xl font-bold text-center text-transparent lg:text-left lg:text-6xl font-poppins bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text">
                Competition <span class="block mt-3 text-white">Zone</span></h2>
            <div class="flex flex-col-reverse justify-between space-x-0 lg:space-x-8 lg:flex-row">
                <div
                    class="text-white text-left w-[350px] h-[420px] pl-6 pr-8 pt-12 bg-liteBlack rounded-3xl mx-auto lg:mx-0 mt-4 lg:mt-0">
                    <p class="text-lg font-medium lg:text-lg font-poppins text-liteGray mb-9 ">
                        Ajang kompetisi inovasi bisnis dan IT yang diselenggarakan untuk siswa/siswi tingkat SMA/SMK
                        sederajat dan mahasiswa. Terdapat dua kategori kompetisi, yaitu BIONIX Student Level dan BIONIX
                        College Level.
                    </p>
                    <a class="text-2xl font-semibold transition duration-300 opacity-75 font-poppins hover:opacity-100"
                        href="/bionix">Learn More
                        <img class="inline pl-5" src="{{ asset('images/chevron-left.svg') }}" alt=""></a>
                </div>
                <div class="swiper mySwiper w-full lg:w-[700px]">
                    <div class="swiper-wrapper cursor-grab">
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[420px] object-cover"
                                src="{{ asset('images/dokumentasi/card-bionix-sl.png') }}" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl  h-[420px] object-cover"
                                src="{{ asset('images/dokumentasi/card-bionix-cl.png') }}" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[420px] object-cover"
                                src="{{ asset('images/dokumentasi/BIONIX 2019(2).png') }}" />
                        </div>
                    </div>
                    <div class="p-6 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>

            </div>

        </div>


        {{-- IT Convention Zone --}}
        <div class="mt-24 lg:px-32 scroll-mt-24" id="icon">
            <h2
                class="mb-6 text-4xl font-bold text-center text-transparent lg:text-6xl lg:text-right font-poppins bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text">
                IT Convention <span class="block mt-3 text-white">Zone</span></h2>
            <div class="flex flex-col justify-between space-x-0 lg:space-x-8 lg:flex-row">
                <div class="swiper mySwiper w-full lg:w-[700px] lg:!ml-0">
                    <div class="swiper-wrapper cursor-grab">
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[420px] object-cover"
                                src="{{ asset('images\dokumentasi\ICON 2019(2).jpg') }}" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[420px] object-cover"
                                src="{{ asset('images\dokumentasi\ICON 2019.jpg') }}" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[420px] object-cover"
                                src="{{ asset('images\dokumentasi\ICON 2021(1).png') }}" />
                        </div>
                    </div>
                    <div class="p-6 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>
                <div
                    class="text-white text-left w-[350px] h-fit pl-6 pr-8 py-12 bg-liteBlack rounded-3xl !mx-auto lg:!mx-0 mt-4 lg:mt-0">
                    <p class="text-lg font-medium font-poppins text-liteGray mb-9 ">
                        Menghadirkan serangkaian acara sebagai bentuk kontribusi peningkatan kesadaran masyarakat akan
                        teknologi dengan memamerkan dunia IT serta melakukan edukasi terkait isu-isu seputar IT terkini.
                        Pada zona ini terdapat beberapa acara, yaitu Academy, E-Hall of IS, dan Grand Talkshow.
                    </p>
                    <a class="text-2xl font-semibold transition duration-300 opacity-75 font-poppins hover:opacity-100"
                        href="/icon">Learn More
                        <img class="inline pl-5" src="{{ asset('images/chevron-left.svg') }}" alt=""></a>
                </div>
            </div>

        </div>

        {{-- IS Class --}}
        <div class="px-12 lg:px-56 my-36">
            <h1 class="mb-24 text-4xl font-bold text-white font-poppins lg:!text-7xl">What's New ?</h1>
            <div class="relative group">
                <div
                    class="absolute inset-0 blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-[#e11baa] animate-tilt">
                </div>
                <div
                    class="relative flex flex-col items-center justify-center px-4 pb-24 rounded-md bg-liteBlack lg:px-28">
                    <h3
                        class="bg-gradient-to-r from-white to-[#E11BAA] text-transparent bg-clip-text font-poppins font-bold text-4xl lg:text-6xl pt-12">
                        IS Class
                    </h3>
                    <img src="{{ asset('images/is-class.svg') }}"
                        class="transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300"
                        alt="is-class">
                    <p class="text-base font-medium lg:!text-lg font-poppins text-liteGray">Simulasi perkuliahan yang
                        memberikan kamu,
                        para siswa/i SMA/SMK/sederajat, pengalaman menjadi seorang mahasiswa Sistem Informasi ITS.
                        Dapatkan
                        informasi seputar keilmuan dan keprofesian, serta rasakan langsung dunia perkuliahan bersama
                        dosen-dosen terbaik di bidangnya.</p>
                    <a class="pt-6 text-2xl font-semibold text-white transition duration-300 opacity-75 font-poppins hover:opacity-100 "
                        href="/bionix">Learn More <img class="inline pl-5"
                            src="{{ asset('images/chevron-left.svg') }}" alt=""></a>
                </div>
            </div>
        </div>

        {{-- Kick Off Webinar Class --}}
        {{-- <div class="px-12 lg:px-56 my-36">
            <h1 class="mb-24 text-4xl font-bold text-white font-poppins lg:!text-7xl"><span
                    class="bg-gradient-to-r from-[#E11BAA]  to-purple-200 text-transparent bg-clip-text">Kick
                    Off
                    Webinar</span>
                ISE!
                2022</h1>
            <div class="relative group">
                <div
                    class="absolute inset-0 transition duration-1000 bg-purple-200 opacity-75 blur-lg group-hover:opacity-100 group-hover:duration-300 animate-tilt">
                </div>
                <div
                    class="relative flex flex-col items-center justify-center px-4 py-12 space-x-0 rounded-md lg:space-x-4 lg:flex-row bg-liteBlack lg:px-12">
                    <div class="lg:w-[32em] w-full">
                        <div class="flex justify-center overflow-hidden bg-[#1C1D20] rounded-t-xl">
                            <img src="{{ asset('images/Rifyal Rachmat - Data Scientist at Telkomsel - Alumni ITS.png') }}"
                                class="h-[12em] transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300 lg:h-full"
                                alt="Rifyal Rachmat - Data Scientist at Telkomsel"
                                title="Rifyal Rachmat - Data Scientist at Telkomsel">
                        </div>
                        <div class="p-2 rounded-b-xl bg-gradient-to-r from-pink-300 to-purple-300">
                            <h3 class="text-sm font-bold text-white lg:text-md">
                                Rifyal
                                Rachmat</h3>
                            <h3 class="text-sm font-semibold text-white lg:text-md font-poppins">Data Scientist at
                                Telkomsel
                            </h3>
                            <h3 class="text-sm font-semibold text-white lg:text-md font-poppins">Speaker
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4 text-center lg:text-start lg:mt-0">
                        <h3 class="mb-4 text-xl font-semibold text-white font-poppins lg:text-4xl">
                            Data Science and Data Analytics: <br> Their Role in Startup Companies
                        </h3>
                        <p class="text-sm font-medium lg:!text-lg font-poppins text-liteGray">Menjadi pembuka dari
                            seluruh
                            rangkaian kegiatan ISE! 2022, webinar ini akan memberimu wawasan baru mengenai peran penting
                            pengolahan data pada suatu startup. <br> Nantikan dan daftar segera, gratis!</p>
                        <h4
                            class="flex items-center justify-center mt-4 text-lg font-bold text-white lg:justify-start lg:text-4xl">
                            <span class="mr-4">
                                <svg width="30" height="30" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 17C0 18.7 1.3 20 3 20H17C18.7 20 20 18.7 20 17V9H0V17ZM17 2H15V1C15 0.4 14.6 0 14 0C13.4 0 13 0.4 13 1V2H7V1C7 0.4 6.6 0 6 0C5.4 0 5 0.4 5 1V2H3C1.3 2 0 3.3 0 5V7H20V5C20 3.3 18.7 2 17 2Z"
                                        fill="white" />
                                </svg>
                            </span> 16 Juli 2022
                        </h4>
                        <div
                            class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group  transition duration-300 hover:!scale-105">
                            <div class="absolute inset-0 ">
                                <a href="/dashboard/peserta/webinar/register"
                                    class="relative px-12 transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">Register
                                </a>
                            </div>
                            <a href="/dashboard/peserta/webinar/register" class="relative px-12 btn">Register</a>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        {{-- timeline --}}
        <div class="my-36">
            <h1 class="mx-12 mb-24 text-4xl font-bold text-white font-poppins lg:text-7xl lg:mx-0">Mark your calendar
                and
                <br> follow the
                <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
            </h1>
            <div class="container lg:mx-auto">
                <ol class="items-center justify-center md:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Sep 2022</time>
                        <div class="flex items-center justify-center overflow-hidden">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                            </div>
                            <div class="hidden sm:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins pb-7">E-Hall of IS
                            </h3>
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
                            <h3 class="text-lg font-semibold text-white font-poppins pb-7">Academy</h3>
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
                            <h3 class="text-lg font-semibold text-white font-poppins pb-7">IS Class</h3>
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
                                Student Level</h3>
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
                            <h3 class="text-lg font-semibold text-white font-poppins">Bionix <br> College Level</h3>
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
                            <h3 class="text-lg font-semibold text-white font-poppins">Grand <br> Talkshow</h3>
                        </div>
                    </li>
                </ol>

            </div>
        </div>
        {{-- timeline end --}}

        {{-- sponsor --}}
        <div class="pb-24 !hidden">
            <h1 class="mb-24 text-4xl font-bold text-white font-poppins lg:text-7xl">Meet our sponsor</h1>
            <div class="grid grid-rows-1 gap-4 mx-12 lg:mx-32 lg:!grid-rows-3">
                <div class="grid gap-4 lg:grid-cols-2">
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>

                </div>
                <div class="grid gap-4 lg:grid-cols-3">
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>

                </div>
                <div class="grid gap-4 lg:grid-cols-4">
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>
                    <div class="w-full rounded-lg h-96 bg-liteBlack">

                    </div>

                </div>
            </div>
        </div>



        {{-- Sign up and Register --}}
        <div class="pb-24 mx-12 lg:mx-32">
            <div class="px-4 py-12 rounded-md bg-liteBlack lg:px-52">
                <h1 class="text-4xl font-bold text-white lg:text-6xl font-poppins">Join us and <span
                        class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">get</span> a
                    lot
                    of <br> advantages.</h1>
                <div
                    class="relative left-0 right-0 justify-center mx-auto mt-24 mb-8 text-center lg:px-16 max-w-fit group">
                    <div class="absolute inset-0 ">
                        <a href="/dashboard/register"
                            class="relative transition duration-1000 opacity-75 btn lg:px-14 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Sign
                            Up</a>
                    </div>
                    <a href="/dashboard/register" class="relative lg:px-14 btn">Sign
                        Up</a>
                </div>

            </div>
        </div>
    </div>
