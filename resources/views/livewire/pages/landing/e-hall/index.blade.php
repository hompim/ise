@section('title', 'E-Hall of IS')
<!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" /> -->
{{-- Landing E-hall --}}
<div class="bg-black font-poppins">
    <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                <h1 class="text-white text-[40px] md:mx-0 mx-auto md:text-[80px] font-bold">E - Hall of IS</h1>
            </div>
            <div class=" w-[80%] mx-auto block md:hidden">
                <img src="{{ asset('images/index-ehoi.svg') }}" alt="">
            </div>
            <p
                class="mx-12 mt-4 text-sm text-center md:text-lg text-liteGray md:pr-48 md:mx-0 md:leading-normal md:text-left">
                Pameran e-Hall of IS diselenggarakan secara digital, menggunakan platform website ISE 2022, dan
                disajikan dalam bentuk video profil, artikel, dan permainan berupa quiz dan challenge </p>
            <div class="relative mx-auto mt-16 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
                <div class="absolute inset-0 ">
                    <a href="#explore"
                        class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                        Explore</a>
                </div>
                <a href="#explore" class="relative btn">Let's
                    Explore</a>
            </div>
        </div>

        {{-- Col 2 --}}
        <div class="hidden md:block">
            <img src="{{ asset('images/index-ehoi.svg') }}" alt="">
        </div>
    </div>
    <div class="flex flex-col justify-center mt-24 text-3xl text-white md:text-5xl">
        <span class="mx-auto font-bold">Let's See The Inside</span>

    </div>
    <div class="flex  text-white justify-center mt-[28px] mb-[71px] lg:mt-12" id="explore">
        <img class="relative mt-10 justify-center w-[312px] h-[247px] lg:w-[826px] lg:h-[818px] "
            src="{{ asset('images/ehoi-buildings.svg') }}" alt="">
        <!--Icon kecil city-->
        <div>
            <div class="group">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <a href="{{ route('coming-soon') }}"
                        class=" absolute border-l-4 border-[#E11BAA] font-poppins pl-[3px] lg:pl-[12px] text-[10px] font-semibold lg:text-[20px] ml-[-144px] mt-[24px] lg:mt-[70px] lg:ml-[-380px]">
                        ISE Trivia</a>
                </div>
                <a href="{{ route('coming-soon') }}"
                    class="lg:transition lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 absolute mt-[45px] lg:mt-[120px] ml-[-136px] lg:ml-[-362px]"><img
                        src="{{ asset('images/icon-brain.png') }}" alt=""></a>
            </div>
            <!-- Challenge! -->
            <div class="group ml-[-120px] lg:ml-[-168px]">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <a href="{{ route('coming-soon') }}"
                        class=" absolute border-l-4 border-[#E11BAA] font-poppins pl-[6px] lg:pl-[12px] text-[10px] ml-[39px] mt-[116px] lg:ml-[-20px] lg:mt-80 font-semibold lg:text-[20px] -translate-x-4 lg:-translate-x-12">
                        Challenge</a>
                </div>
                <a href="{{ route('coming-soon') }}"
                    class="absolute lg:transition mt-[134px] ml-[39px] lg:ml-[-48px] lg:mt-[360px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:first-letter:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/icon-joystick.png') }}" alt=""></a>
            </div>
            <!-- 3 -->
            <div class="group ">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#E11BAA] font-poppins pl-[6px] lg:pl-[12px] text-[10px] ml-[-208px] mt-[108px] lg:ml-[-540px] lg:mt-[300px] font-semibold lg:text-[20px] ">
                        Prestasi</p>
                </div>
                <a href="{{ route('home-prestasi-ehall') }}"
                    class="absolute lg:transition ml-[-201px] mt-[124px] lg:ml-[-530px] lg:mt-[340px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/icon-trophy.png') }}" alt=""></a>
            </div>
            <!-- 4 -->
            <div class="group ">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#E11BAA]  font-poppins pl-[6px] lg:pl-[12px] text-[10px] ml-[-160px] mt-[124px] lg:ml-[-400px] lg:mt-[358px] font-semibold lg:text-[20px] ">
                        Startup</p>
                </div>
                <a href="{{ route('home-startup-ehall') }}"
                    class="absolute lg:transition ml-[-144px] mt-[144px] lg:ml-[-380px] lg:mt-[400px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/icon-startup.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center text-5xl text-white md:pb-48">
        <span class="mx-auto font-bold">About E-Hall of IS</span>
        <div id="default-carousel" class="relative " data-carousel="static">
            <!-- Carousel wrapper p1 -->
            <div class="relative h-[500px] overflow-hidden md:w-3/4 md:mt-24 mx-auto rounded-md">
                <!-- Item 1 -->
                <div class="absolute inset-0 z-20 transition-all duration-700 ease-in-out transform translate-x-0"
                    data-carousel-item="">
                    <img src="{{ asset('images/e-hall/2.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform translate-x-full"
                    data-carousel-item="">
                    <img src="{{ asset('images/e-hall/1.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full"
                    data-carousel-item="">
                    <img src="{{ asset('images/e-hall/3.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full"
                    data-carousel-item="">
                    <img src="{{ asset('images/e-hall/4.png') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="absolute inset-0 z-10 transition-all duration-700 ease-in-out transform -translate-x-full"
                    data-carousel-item="">
                    <img src="{{ asset('images/e-hall/5.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute left-0 z-30 flex items-center justify-center h-full cursor-pointer md:top-12 bottom-2 md:px-24 group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-liteBlack dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute right-0 z-30 flex items-center justify-center h-full cursor-pointer md:top-12 bottom-2 md:px-24 group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-liteBlack dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="mx-4 text-lg text-center text-liteGray md:mt-24 md:mx-16">
            E-Hall of IS merupakan zona berisikan pameran virtual karya-karya autentik mahasiswa dan alumni Sistem
            Informasi Institut Teknologi Sepuluh Nopember (ITS) dengan reputasi gemilang, baik ranah nasional maupun
            internasional. Zona ini memiliki dua tujuan utama. Pertama, memperkenalkan karya Sistem Informasi ITS ke
            khalayak umum. Kedua, mengedukasi dan menyebarkan awareness seputar teknologi.
        </div>
    </div>
    {{-- <div class="flex flex-col justify-center pb-12 mx-auto text-xl text-white md:text-5xl md:pb-24 md:w-full md:mt-24"> --}}
    <div
        class="flex-col justify-center hidden pb-12 mx-auto text-xl text-white md:text-5xl md:pb-24 md:w-full md:mt-24">
        <span class="mx-auto font-bold">Leaderboard ISE Trivia</span>
        <div class="flex flex-row mx-auto mt-4">
            <div class="relative flex flex-col justify-between w-24 text-center md:w-full font">
                <div class="flex justify-center h-full pt-8 mx-auto rounded-full md:w-36 md:pt-80">
                    <img class="md:w-[120px] w-[40px] md:h-[120px] h-[40px] rounded-full"
                        src="https://htmlcolorcodes.com/assets/images/colors/grass-green-color-solid-background-1920x1080.png"
                        alt="">
                </div>
                <div class="mb-4 font-bold md:mb-8">
                    Player 2
                </div>
                <div>
                    <img class="w-full" src="{{ asset('images/2nd-ehoi.svg') }}" alt="">
                </div>
                <div class="absolute text-base -translate-x-1/2 md:bottom-16 bottom-4 md:text-3xl left-1/2">
                    <p> <span class="font-bold">3003</span> <br> Points</p>
                </div>
            </div>
            <div class="relative flex flex-col justify-between w-24 text-center md:w-full">
                <div class="flex justify-center h-full mx-auto rounded-full md:w-36 md:pt-48">
                    <img class="md:w-[120px] w-[40px] md:h-[120px] h-[40px] rounded-full"
                        src="https://htmlcolorcodes.com/assets/images/colors/grass-green-color-solid-background-1920x1080.png"
                        alt="">
                </div>
                <div class="mb-2 md:mb-10">
                    <div class="font-bold ">
                        Player 1
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/1st-ehoi.svg') }}" alt="">
                </div>
                <div class="absolute text-base -translate-x-1/2 md:bottom-16 bottom-4 md:text-3xl left-1/2">
                    <p> <span class="font-bold">1361</span> <br> Points</p>
                </div>
            </div>
            <div class="relative flex flex-col justify-between w-24 text-center md:w-full">
                <div class="flex justify-center h-full pt-16 mx-auto rounded-full md:w-36 md:pt-96">
                    <img class="md:w-[120px] w-[40px] md:h-[120px] h-[40px] rounded-full"
                        src="https://htmlcolorcodes.com/assets/images/colors/grass-green-color-solid-background-1920x1080.png"
                        alt="">
                </div>
                <div class="mb-0 ml-1 font-bold md:mb-8 md:ml-0">
                    Player 3
                </div>
                <div>
                    <img class="mt-3" src="{{ asset('images/3rd-ehoi.svg') }}" alt="">
                </div>
                <div class="absolute text-base -translate-x-1/2 md:bottom-16 bottom-4 md:text-3xl left-1/2">
                    <p> <span class="font-bold">2002</span> <br> Points</p>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}
</div>
<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
