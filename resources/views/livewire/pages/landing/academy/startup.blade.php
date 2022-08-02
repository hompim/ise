<link rel="stylesheet" href="{{ asset('css/new.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
<!-- hero section start -->
<div
    class="bg-black pt-[145px] lg:pt-[210px]  md:flex md:flex-col-reverse lg:pl-[130px] lg:flex-row  items-center md:pt-[202px] md:pl-[130px] overflow-hidden">
    <div class="flex flex-col items-start flex-1 text-white">
        <h1
            class="lg:!text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">
            Startup Academy
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
    <div
        class="-translate-y-12 md:-translate-y-0 ml-[180px] lg:ml-0  flex  flex-1 w-[180px] h-[179px] lg:!w-[691px] lg:!h-full">
        <div class="relative left-0 right-0 justify-center mx-auto mb-20 text-center max-w-fit scroll-mt-36"
            id="isometric-city">
            <!-- startup icon-->
            <img src="{{ asset('images/startup-icon.svg') }}">
        </div>
    </div>
</div>
<!-- hero section end -->
<!-- about this zone start  -->
<div class="bg-black pt-[50px] lg:pt-[200px] pb-[85px] lg:pb-[150px] text-center px-[22px] lg:px-[183px] tracking-wide "
    id="explore">
    <h1 class="text-xl md:!text-4xl font-bold font-poppins text-white">About This Zone</h1>
    <p class="mt-10 text-[14px] lg:text-lg text-[#B5B3BC] font-poppins ">
        Startup Academy merupakan rangkaian pelatihan bagi mahasiswa Indonesia yang tertarik untuk
        <a class="text-[#BCA2F3]">mewujudkan startup impiannya</a>
        dengan belajar langsung dari para expert dan memiliki kurikulum yang telah didesain secara ringkas untuk
        memberikan
        <a class="text-[#BCA2F3]">fundamental knowledge</a>
        kepada para peserta sebagai the next founder of startup.
    </p>
    <!-- guidebook and register button start-->
    <div class="flex flex-col justify-center mt-12 bg-black md:flex-row md:space-x-4 font-poppins">
        <a href="https://ise-its.com/GuidebookStartup">
            <button
                class=" md:px-3 md:mx-0 mx-16 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center"><svg
                    class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                        stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Download Guidebook</button>
        </a>
        <a href="{{ route('register-startup-academy') }}"
            class="py-2 my-6 text-white rounded-full  md:mx-0 mx-28 md:my-0 md:px-16 bg-gradient-to-r from-pink-300 to-purple-300">Register</a>
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
                        <img src="{{ asset('images/startup/1.jpg') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">

                    </label>
                    <!-- slide 2 -->
                    <label for="radio2" id="slide2">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/startup/2.JPG') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                    <!-- slide 3 -->
                    <label for="radio3" id="slide5">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/startup/3.JPG') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                </section>
            </div>
        </div>
    </div>
    <!-- text :other have.. start -->
    <div class="mt-[85px] lg:mt-[200px]">
        <h1 class="mb-[100px] font-bold text-center text-white font-poppins text-3xl lg:!text-7xl ">Others have <span
                class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">prove</span>
            it
        </h1>
    </div>
    <!-- text :other have.. end -->
    <!-- make card start -->
    <div
        class="flex flex-col sm:flex-row  mb-[10px] lg:mb-[200px] sm:gap-6 sm:justify-center font-poppins text-[#B5B3BC] gap-4 lg:gap-6 ml-12">
        <!-- 1 -->
        <div
            class=" bg-[#191A1E] px-[42px] pt-[32px] font-semibold text-[14px] lg:text-[18px] rounded-2xl w-[300px] lg:w-[380px] lg:h-[607px] ">
            <!-- profil -->
            <div class="flex flex-row gap-[11px] mb-[21px]">
                <div>
                    <img src="{{ asset('images/caroline-icon.svg') }}">
                </div>
                <div>
                    <p class="text-white">Caroline Putri K</p>
                    <p class="font-normal text-[14px] text-[#B5B3BC]">Finalis Startup Academy 2021</p>
                </div>
            </div>
            Dengan mengikuti ISE! Startup Academy, aku dapat banyak sekali ilmu tentang bagaimana cara membangun startup
            yang baik oleh
            <a class="text-[#BCA2F3]">speaker-speaker handal </a>maupun
            <a class="text-[#BCA2F3]">mentor yang berpengalaman. </a> Dari Startup Academy ini, kami mendapat kesempatan
            untuk
            <a class="text-[#BCA2F3]">berkonsultasi langsung dengan para expertise-nya </a> sehingga dari arahan yang
            diberikan, kami
            <a class="text-[#BCA2F3]">mengetahui bagaimana merealisasikan startup kami dari yang awalnya hanya sebatas
                ide saja.</a>
        </div>
        <!-- 2 -->
        <div
            class=" bg-[#191A1E] px-[42px] pt-[32px] font-semibold text-[14px] lg:text-[18px] rounded-2xl w-[300px] lg:w-[380px] lg:h-[607px] tracking-wide">
            <div class="flex flex-row gap-[11px] mb-[21px]">
                <div>
                    <img src="{{ asset('images/naufal-icon.svg') }}">
                </div>
                <div>
                    <p class="text-white">Naufal Firjatulloh F</p>
                    <p class="font-normal text-[14px] text-[#B5B3BC]">Finalis Startup Academy 2021</p>
                </div>
            </div>
            Menjadi salah satu peserta terpilih ISE! Startup Academy memberikan pengalaman yang berharga buat saya. Saya
            banyak mendapatkan insight dan pengetahuan seputar teknologi dan dunia startup. Di sini saya
            <a class="text-[#BCA2F3]">dibimbing oleh mentor-mentor yang berpengalaman untuk merealisasikan ide menjadi
                startup yang terstruktur.</a>
            Selain itu, disini aku juga bisa
            <a class="text-[#BCA2F3]">membangun koneksi dengan sesama startup enthusiast.</a> So far, jadi peserta di
            ISE! Startup Academy
            <a class="text-[#BCA2F3]">sangat worth it!</a>
        </div>
    </div>
    <!-- make card end -->
    {{-- Masukin ini Penting --}}
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    {{-- Masukin ini Penting --}}

    {{-- Ini Cuma Background --}}
    <div class="bg-black min-h-screeen py-52">
        {{-- Ini Cuma Background --}}

        {{-- Start Meet Our Superb Speakers --}}
        <div class=" font-poppins">
            <h1 class="text-[27.75px] md:text-7xl font-bold text-white text-center mb-10 md:mb-24">Meet Our <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">Superb</span>
                <br> Speakers
            </h1>
            <div
                class="flex flex-col items-center justify-center space-y-8 md:space-y-0 md:space-x-12 md:flex-row mx-14 md:mx-20 font-poppins">
                <div class="w-[280px] h-[419px] flex flex-col">
                    <img src="{{ asset('images/unknown_man.png') }}" alt="speaker"
                        class="w-1/2 md:w-[211px] mx-auto">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Speaker</h1>
                        <p class="text-sm md:text-base text-liteGray">Startup Academy</p>
                    </div>
                </div>
                <div class="w-[280px] h-[419px] flex flex-col -mt-24 md:mt-0 ">
                    <img src="{{ asset('images/unknown_woman.png') }}" alt="speaker"
                        class="w-1/2 md:w-[211px] mx-auto">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Speaker</h1>
                        <p class="text-sm md:text-base text-liteGray">Startup Academy</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Meet Our Superb Speakers --}}

        {{-- Start Timeline --}}
        <div class="mt-10 md:mt-52 font-poppins">
            <h1 class="mb-10 md:mb-24 font-bold text-white font-poppins text-[27.75px] md:text-7xl text-center">Mark
                your calender
                and <br> follow the
                <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
            </h1>
            <div class="container mx-auto text-center">
                <ol class="items-center justify-center lg:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">1
                            Agu</time>
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
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">31
                            Agu</time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Close <br> Registration</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">4 Sep
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Pengumuman Tim <br> yang lolos
                            </h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">10 - 11
                            Sep</time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Startup Academy <br>
                                Week 1 </h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">17 - 18
                            Sep</time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Startup Academy <br>
                                Week 2 </h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">18 Sep - 18 Nov
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Award Announcement <br>
                                & Voting Period</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block mb-2 px-12 text-lg font-medium text-white font-poppins">19 Nov
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Awarding Ceremony<br>
                                at ICON Grand Talkshow</h3>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        {{-- End Timeline --}}

        {{-- Start FAQ --}}
        <div class="mt-20 md:mt-52 font-poppins">
            <h1 class="text-[27.75px] md:text-7xl font-bold text-white text-center mb-10 md:mb-24">FAQ</h1>
            {{-- Question 1 --}}
            <div x-data="{ open: false }" class="mt-10 md:mt-24">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack w-fit md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa itu Startup Academy?</h1>
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Startup Academy adalah salah satu
                                sub-event ICON pada Information Systems Expo! 2022 yang merupakan acara edukasi
                                berbentuk workshop tematik seputar dunia Startup untuk membentuk The Next Startup
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Kapan acara berlangsung?</h1>
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Startup Academy adakan berlangsung
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana alur pendaftaran Startup
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Pendaftaran dapat dilakukan dengan
                                membuat akun pada https://ise-its.com/icon. Khusus untuk Startup Academy, peserta hanya
                                perlu membuat 1 akun atas nama Ketua Tim. Langkah-langkah pendaftaran lebih lanjut dapat
                                dilihat di dokumen Guidebook pada bagian Tata Cara Pendaftaran. Setelah berhasil
                                mendaftar, tunggu hasil seleksi. Peserta yang lolos seleksi selanjutnya dapat mengikuti
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa banyak kuota tim peserta
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Kuota peserta Startup Academy adalah
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana proses seleksi tim?</h1>
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Seleksi tim peserta Startup Academy
                                didasarkan pada inovasi dan keunikan ide startup yang diajukan. Keputusan panitia tidak
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja syarat peserta Startup
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Peserta adalah mahasiswa aktif di
                                tingkat D3/D4/S1/sederajat dibuktikan dengan Kartu Tanda Mahasiswa. Jika hilang atau
                                belum memiliki, peserta diperbolehkan untuk menggantinya dengan bukti lain, yaitu Surat
                                Keterangan Mahasiswa Aktif atau Transkrip Akademik terbaru. Peserta adalah tim dengan 3
                                anggota yang memiliki ide startup baru, belum beroperasi, dan belum dilombakan dalam
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa biaya pendaftaran Startup
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Biaya pendaftaran Startup Academy
                                adalah gratis. Setelah lolos proses seleksi, Peserta yang lolos diharuskan membayar
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
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja yang didapatkan dari ISE!
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Pada Startup Academy, peserta akan
                                mendapatkan bimbingan dan umpan balik dari expert di dunia Startup terkait ide yang
                                dimiliki, serta materi workshop mengenai dasar-dasar Startup (termasuk recording dan
                                file materi), dan tentunya sertifikat bagi seluruh peserta. </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End FAQ --}}


        {{-- Start Event Partner --}}
        <div class="mt-32 mb-24 md:mt-60 font-poppins">
            <h1 class="text-[27.75px] md:text-7xl font-bold text-white text-center mb-10 md:mb-24">Our Event Partner
            </h1>
            <div class="w-80 md:w-fit h-max bg-liteBlack mx-auto py-10 px-20">
                <div class="flex flex-col justify-center items-center">
                    <div class="flex flex-col md:flex-row items-center space-y-12 md:space-y-0 md:space-x-12">
                        <div class="w-full md:w-[24rem]">
                            <img src="{{ asset('images/academy-tokopedia.png') }}" alt="academy-tokopedia"
                                class="md:w-full">
                        </div>
                        <div class="w-full md:w-[24rem] transition duration-300 hover:scale-105">
                            <a href="https://indigo.id/" target="_blank">
                                <img src="{{ asset('images/indigospace-sub-logo-red.png') }}" alt="indigo-space-sby"
                                    class="md:w-full">
                            </a>
                        </div>
                        <div class="w-full md:w-[24rem]">
                            <img src="{{ asset('images/binar-academy.png') }}" alt="binar-academy"
                                class="md:w-full">
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
