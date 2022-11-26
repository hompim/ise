<link rel="stylesheet" href="{{ asset('css/new.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>


<div class="bg-black min-h-screeen">
    <!-- hero section start -->
    <div
        class="pt-[100px] lg:pt-[210px] md:flex md:flex-col-reverse lg:pl-[130px] lg:flex-row items-center md:pt-[202px] md:pl-[130px] overflow-hidden">
        <div class="flex flex-col items-start flex-1 text-white">
            <h1
                class="lg:!text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">
                Data Science Academy
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
                <!-- datascience icon-->
                <img src="{{ asset('images/datascience-icon.png') }}" class="w-1/2 ml-14 md:ml-0 md:w-[80%]">
            </div>
        </div>
    </div>
    <!-- hero section end -->
    <!-- about this event start  -->
    <div class="bg-black pt-[50px] lg:pt-[200px] pb-[85px] lg:pb-[150px] text-center px-[22px] lg:px-[183px] tracking-wide "
        id="explore">
        <h1 class="text-xl md:!text-4xl font-bold font-poppins text-white">About This Event</h1>
        <p class="text-[14px] lg:text-lg text-[#B5B3BC] font-poppins mt-6 md:mt-10">
            Data Science Academy merupakan rangkaian
            <a class="text-[#BCA2F3]">kegiatan pelatihan</a>
            dengan belajar langsung dari para expert mentor yang bertujuan untuk meningkatkan kemampuan dan kompetensi
            peserta di
            <a class="text-[#BCA2F3]">bidang data</a>
            dengan hands-on studi kasus dan pendalaman dalam bentuk Focused Group Discussion (FGD) dan daily quiz di
            setiap harinya.
        </p>
        <!-- guidebook and register button start-->
        <div class="flex flex-col justify-center mt-12 bg-black md:flex-row md:space-x-4 font-poppins">
            <a href="https://ise-its.com/GuidebookDataScience"
                class=" md:px-3 md:mx-0 mx-16 -mt-6 md:mt-0 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center"><svg
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
                Download Guidebook</a>
            <button type="button"
                class="py-2 my-6 text-white rounded-full md:mx-0 mx-28 md:my-0 md:px-16 bg-gradient-to-r from-pink-300 to-purple-300 ">
                Register Open</button>
        </div>
        <!-- guidebook and register button end-->
    </div>
    <!-- about this event end  -->
    <div class="flex-row items-center justify-center -mt-32 text-white bg-black md:mt-0">
        <div class="flex justify-center">
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
                            <img src="{{ asset('images/data-science/1.JPG') }}"
                                class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">

                        </label>
                        <!-- slide 2 -->
                        <label for="radio2" id="slide2">
                            <div id="shadow">

                            </div>
                            <img src="{{ asset('images/data-science/4.png') }}"
                                class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                        </label>
                        <!-- slide 3 -->
                        <label for="radio3" id="slide5">
                            <div id="shadow">

                            </div>
                            <img src="{{ asset('images/data-science/3.png') }}"
                                class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                        </label>
                    </section>
                </div>
            </div>
        </div>
        <!-- text :other have.. start -->
        <div class="lg:mt-52">
            <h1 class="mb-6 md:mb-[100px] font-bold text-center text-white font-poppins text-[27.75px] lg:!text-7xl ">
                Others have <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">prove</span>
                it
            </h1>
        </div>
        <!-- text :other have.. end -->
        <div
            class="flex flex-col sm:flex-row md:mx-auto md:mb-[200px] sm:gap-6 sm:justify-center font-poppins text-[#B5B3BC] gap-4 lg:gap-6 ml-11">
            <!-- 1 -->
            <div
                class=" bg-liteBlack pt-[32px] font-semibold text-[14px] lg:text-[18px] rounded-2xl w-[300px] lg:w-[380px] h-[460px] lg:h-[531px] ">
                <!-- profil -->
                <div class="flex flex-row gap-[11px] mb-[21px] pl-6 pr-2">
                    <div>
                        <img src="{{ asset('images/bachtiar-icon.png') }}">
                    </div>
                    <div>
                        <p class="text-white">Bachtiar Rizky A</p>
                        <p class="font-normal text-[14px] text-[#B5B3BC]">Peserta Data Science Academy 2021</p>
                    </div>
                </div>
                <p class="pl-6 pr-6 md:pr-14">
                    Mengikuti Data Science Academy memberikan saya banyak insight baru.
                    <a class="text-[#BCA2F3]">Materi yang dibawakan sesuai ekspektasi saya dan diberikan oleh pemateri
                        yang ahli di bidangnya. </a>
                    Dengan bekal yang saya peroleh di ISE! Data Science Academy, saya menjadi semakin tertarik untuk
                    mempelajari lebih jauh terkait ilmu data science dengan harapan saya bisa meniti karier di bidang
                    ini di masa depan.
                </p>
            </div>
            <!-- 2 -->
            <div
                class=" bg-liteBlack pt-[32px] font-semibold text-[14px] lg:text-[18px] rounded-2xl w-[300px] lg:w-[380px] h-[400px] lg:h-[531px] tracking-wide">
                <div class="flex flex-row gap-[11px] mb-[21px] pl-6 pr-2">
                    <div>
                        <img src="{{ asset('images/kevin-icon.png') }}">
                    </div>
                    <div>
                        <p class="text-white">Kevin Putra S</p>
                        <p class="font-normal text-[14px] text-[#B5B3BC]">Peserta Data Science Academy 2021</p>
                    </div>
                </div>
                <p class="pl-6 pr-6 md:pr-14">
                    Acara ISE! Data Science Academy 2021 menurutku beneran
                    <a class="text-[#BCA2F3]"> insightful, </a>sih
                    <a class="text-[#BCA2F3]">Pematerinya ramah, selalu bantu jawab pertanyaan peserta, dan tugasnya
                        juga menarik.</a>
                    Terlepas dari adanya kekurangan yang aku pribadi rasain, ISE! Data Science Academy tahun kemarin
                    bener-bener mantaplah 👍👍
                </p>
            </div>
        </div>
        <!-- make card start -->


        {{-- Start Meet Our Superb Speakers --}}
        <div class="hidden mt-24 md:mt-52 font-poppins">
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
                        <p class="text-sm md:text-base text-liteGray">Data Science Academy</p>
                    </div>
                </div>
                <div class="w-[280px] h-[419px] flex flex-col -mt-24 md:mt-0 ">
                    <img src="{{ asset('images/unknown_woman.png') }}" alt="speaker"
                        class="w-1/2 md:w-[211px] mx-auto">
                    <div class="flex flex-col px-3 py-2 text-center text-white bg-liteBlack rounded-2xl">
                        <h1 class="text-base font-semibold md:text-xl">Speakers</h1>
                        <p class="text-sm md:text-base text-liteGray">Data Science Academy</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Meet Our Superb Speakers --}}

        {{-- Start Timeline --}}
        <div class="-mt-4 md:mt-52 font-poppins">
            <h1 class="mb-10 md:mb-24 font-bold text-white font-poppins text-[27.75px] md:text-7xl text-center">Mark
                your calender
                and <br> follow the
                <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
            </h1>
            <div class="container mx-auto text-center">
                <ol class="items-center justify-center lg:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">1 Agu - 27
                            Agu</time>
                        <div class="flex items-center justify-center overflow-hidden">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                            </div>
                            <div class="hidden lg:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                            </div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Open Regis <br>
                                & Tahap Administrasi</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">28
                            Agu - 1 Sep</time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Pengerjaan <br>
                                Soal Seleksi</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">2 Sep - 3
                            Sep
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Tahap <br> Seleksi</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">10 - 11
                            Sep</time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Data Science <br>
                                Academy Week</h3>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">17 - 18
                            Sep
                        </time>
                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden lg:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-semibold text-white font-poppins">Data Science <br>
                                Academy Week</h3>
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
            <div x-data="{ open: false }" class="md:mt-24">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa itu Data Science Academy?</h1>
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Data Science Academy adalah salah
                                satu acara pada Zona IT Convention (ICON) pada Information Systems Expo! 2022 yang
                                merupakan acara edukasi berbentuk workshop tematik seputar dunia Data Science untuk
                                mendorong awal karir sebagai seorang data scientist mahasiswa di seluruh Indonesia.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 2 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Data Science Academy adakan
                                berlangsung pada Sabtu-Minggu, 10-11 September dan 17-18 September 2022.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 3 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana alur pendaftaran Data
                                Science Academy?
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
                                membuat akun pada https://ise-its.com/icon. Langkah-langkah pendaftaran lebih lanjut
                                dapat dilihat di dokumen Guidebook pada bagian Tata Cara Pendaftaran. Setelah berhasil
                                mendaftar, dimohon untuk menunggu hasil seleksi. Peserta yang lolos seleksi selanjutnya
                                dapat mengikuti rangkaian Data Science Academy Academy.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 4 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa banyak kuota tim peserta Data
                                Science Academy?
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Kuota peserta Data Science Academy :
                                20 tim, dengan setiap tim berjumlah 3 orang.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 5 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Bagaimana seleksi tim dilakukan?
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Seleksi tim peserta Data Science
                                Academy didasarkan pada jawaban soal seleksi dan berkas. Keputusan panitia tidak dapat
                                diganggu gugat.</h1>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Question 6 --}}
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja syarat peserta Data Science
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
                                Keterangan Mahasiswa Aktif atau Transkrip Akademik terbaru. Peserta memiliki
                                ketertarikan dan pengetahuan dasar terkait data science dan pengaplikasiannya.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Berapa biaya pendaftaran Data
                                Science Academy?</h1>
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Biaya pendaftaran Data Science
                                Academy gratis. Untuk tim yang lolos tahap seleksi, tim diharuskan membayar commitment
                                fee sebesar Rp150.000. Commitment fee adalah uang yang dibayarkan peserta kepada panitia
                                Data Science Academy sebagai bentuk komitmen peserta dalam mengikuti rangkaian acara
                                Data Science Academy. Apabila tim dapat mengikuti rangkaian acara Data Science Academy
                                secara full team sampai akhir dan mengerjakan penugasan mini-project dengan baik,
                                commitment fee akan dikembalikan sepenuhnya kepada tim.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }" class="mt-3 md:mt-4">
                <div class="cursor-pointer" x-on:click="open = !open">
                    <div
                        class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                        <div class="flex flex-row justify-between mx-auto">
                            <h1 class="w-[80%] text-base md:text-lg font-semibold">Apa saja yang didapatkan dari ISE!
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
                            <h1 class="w-[80%] text-liteGray text-base md:text-lg">Pada Data Science Academy, peserta
                                akan mendapatkan bimbingan dan umpan balik dari expert di dunia Data Science, fasilitas
                                mentor, serta materi workshop mengenai dasar-dasar Data Science (termasuk recording dan
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
            <div class="px-20 py-10 mx-auto w-80 xl:w-fit h-max bg-liteBlack">
                <div
                    class="flex flex-col items-center justify-center space-y-12 xl:space-y-0 xl:space-x-12 xl:flex-row">
                    <div class="flex flex-col gap-12 xl:flex-row w-[20rem] transition duration-300 hover:scale-105">
                        <a href="https://myskill.id/" target="_blank">
                            <img src="{{ asset('images/logo-myskill.png') }}" alt="binar-academy"
                                class="w-auto xl:w-full">
                        </a>
                    </div>
                    <div class="flex flex-col gap-12 xl:flex-row w-[20rem] transition duration-300 hover:scale-105">
                        <a href="https://datascience.or.id/" target="_blank">
                            <img src="{{ asset('images/dsi.png') }}" alt="academy-tokopedia"
                                class="w-auto xl:w-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Partner --}}

    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
