{{-- Main --}}
<div class="bg-black min-h-screen font-poppins">
    {{-- Hero --}}
    <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class=" w-[80%] mx-auto block md:hidden mt-[120px] md:mt-0">
                <img src="{{ asset('images/prestasi-logo.svg') }}" alt="prestasi-logo">
            </div>
            <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                <h1 class="text-white text-[50px] md:text-[80px] mx-auto md:mx-0 font-bold">Prestasi</h1>
            </div>
            <p class="text-sm md:text-lg text-liteGray mt-4 md:leading-normal text-left md:text-left">
                Prestasi merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie,
                dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,risus sem sollicitudin lacus,
                ut interdum tellus elit sed risus </p>
            <div class="relative mt-16 mx-auto text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
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
        <div class="hidden md:block md:px-0 md:w-[416px]">
            <img src="{{ asset('images/prestasi-logo.svg') }}" alt="prestasi-logo">
        </div>
    </div>

    <!-- content 1-->
    <div class="px-[20px] md:px-[130px] pt-[210px] pb-[120px] bg-black flex flex-col md:flex-row gap-[20px] md:gap-[120px]"
        id="explore">
        <!-- start : prestasi 1 -->
        <div class="md:w-[680px] md:h-[1260px] bg-[#191A1E] flex flex-col rounded-3xl">
            <img src="{{ asset('images/prestasi-1.svg') }}" class="w-full">
            <div class="px-[27.95px]">
                <h1 class="text-white font-bold text-[26px] my-[27px]">Lorem ipsum</h1>
                <p class="text-[#B5B3BC] text-justify md:text-lg leading-[28px] font-normal tracking-normal">dolor sit
                    amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed dignissim,
                    metus nec fringilla orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                    molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem
                    sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet
                    feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus
                    ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis
                    convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
            </div>
            <a href="{{ route('content-prestasi-ehall') }}">
                <button
                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold md:text-[20px] mx-auto md:mt-[150px] transition duration-300 hover:-translate-y-2">
                    Read more
                    <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                </button>
            </a>
        </div>
        <!-- end : prestasi 1 -->

        <!-- make column flex-->
        <div class="  flex flex-row md:flex-col gap-[20px] md:gap-[120px]">
            <!-- start : prestasi 2 -->
            <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
                <img src="{{ asset('images/prestasi-2.svg') }}" class="w-full">
                <div class="px-[15px]">
                    <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                        Lorem ipsum
                    </h1>
                    <p class="text-[18px] text-[#B5B3BC]">
                        dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus.
                        Sed dignissim, metus nec fringilla
                    </p>
                </div>
                <a href="{{ route('content-prestasi-ehall') }}">
                    <button
                        class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                        Read more
                        <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                    </button>
                </a>
            </div>
            <!-- end : prestasi 2 -->
            <!-- start : prestasi 3 -->
            <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
                <img src="{{ asset('images/prestasi-3.svg') }}" class="w-full">
                <div class="px-[15px]">
                    <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                        Lorem ipsum
                    </h1>
                    <p class="text-[18px] text-[#B5B3BC]">
                        dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus.
                        Sed dignissim, metus nec fringilla
                    </p>
                </div>
                <a href="{{ route('content-prestasi-ehall') }}">
                    <button
                        class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                        Read more
                        <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                    </button>
                </a>
            </div>
        </div>
        <!-- end : prestasi 3 -->
    </div>
</div>

<!-- content 2-->
<div class="px-[20px] md:px-[130px] bg-black flex flex-col-reverse md:flex-row gap-[20px] md:gap-[120px]">
    <div class="  flex flex-row md:flex-col gap-[20px] md:gap-[120px]">
        <!-- start : prestasi 2 -->
        <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
            <img src="{{ asset('images/prestasi-2.svg') }}" class="w-full">
            <div class="px-[15px]">
                <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                    Lorem ipsum
                </h1>
                <p class="text-[18px] text-[#B5B3BC]">
                    dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed
                    dignissim, metus nec fringilla
                </p>
            </div>
            <a href="{{ route('content-prestasi-ehall') }}">
                <button
                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                    Read more
                    <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                </button>
            </a>
        </div>
        <!-- end : prestasi 2 -->
        <!-- start : prestasi 3 -->
        <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
            <img src="{{ asset('images/prestasi-3.svg') }}" class="w-full">
            <div class="px-[15px]">
                <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                    Lorem ipsum
                </h1>
                <p class="text-[18px] text-[#B5B3BC]">
                    dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed
                    dignissim, metus nec fringilla
                </p>
            </div>
            <a href="{{ route('content-prestasi-ehall') }}">
                <button
                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                    Read more
                    <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                </button>
            </a>
        </div>
    </div>
    <!-- end : prestasi 3 -->
    <!-- start : prestasi 1 -->
    <div class="md:w-[680px] md:h-[1260px] bg-[#191A1E] flex flex-col rounded-3xl">
        <img src="{{ asset('images/prestasi-1.svg') }}" class="w-full">
        <div class="px-[27.95px]">
            <h1 class="text-white font-bold text-[26px] my-[27px]">Lorem ipsum</h1>
            <p class="text-[#B5B3BC] text-justify md:text-lg leading-[28px] font-normal tracking-normal">dolor sit amet,
                consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed dignissim, metus nec
                fringilla orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est
                a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus
                enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor
                urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in
                elementum tellus.</p>
        </div>
        <a href="{{ route('content-prestasi-ehall') }}">
            <button
                class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold md:text-[20px] mx-auto md:mt-[150px]  transition duration-300 hover:-translate-y-2">
                Read more
                <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
            </button>
        </a>
    </div>
    <!-- end : prestasi 1 -->
    <!-- make column flex-->


</div>

<!-- content 3-->
<div class="px-[20px] md:px-[130px] pt-[126px] pb-[120px] bg-black flex flex-col md:flex-row gap-[20px] md:gap-[120px]"
    id="explore">
    <!-- start : prestasi 1 -->
    <div class="md:w-[680px] md:h-[1260px] bg-[#191A1E] flex flex-col rounded-3xl">
        <img src="{{ asset('images/prestasi-1.svg') }}" class="w-full">
        <div class="px-[27.95px]">
            <h1 class="text-white font-bold text-[26px] my-[27px]">Lorem ipsum</h1>
            <p class="text-[#B5B3BC] text-justify md:text-lg leading-[28px] font-normal tracking-normal">dolor sit amet,
                consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed dignissim, metus nec
                fringilla orem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est
                a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum
                tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus
                enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor
                urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in
                elementum tellus.</p>
        </div>
        <a href="{{ route('content-prestasi-ehall') }}">
            <button
                class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold md:text-[20px] mx-auto mt-[150px]  transition duration-300 hover:-translate-y-2">
                Read more
                <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
            </button>
        </a>
    </div>
    <!-- end : prestasi 1 -->

    <!-- make column flex-->
    <div class="  flex flex-row md:flex-col gap-[20px] md:gap-[120px]">
        <!-- start : prestasi 2 -->
        <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
            <img src="{{ asset('images/prestasi-2.svg') }}" class="w-full">
            <div class="px-[15px]">
                <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                    Lorem ipsum
                </h1>
                <p class="text-[18px] text-[#B5B3BC]">
                    dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed
                    dignissim, metus nec fringilla
                </p>
            </div>
            <a href="{{ route('content-prestasi-ehall') }}">
                <button
                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                    Read more
                    <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                </button>
            </a>
        </div>
        <!-- end : prestasi 2 -->
        <!-- start : prestasi 3 -->
        <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
            <img src="{{ asset('images/prestasi-3.svg') }}" class="w-full">
            <div class="px-[15px]">
                <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                    Lorem ipsum
                </h1>
                <p class="text-[18px] text-[#B5B3BC]">
                    dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed
                    dignissim, metus nec fringilla
                </p>
            </div>
            <a href="{{ route('content-prestasi-ehall') }}">
                <button
                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                    Read more
                    <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
                </button>
            </a>
        </div>
    </div>
    <!-- end : prestasi 3 -->
</div>
</div>

<!-- content 4 -->
<div class="px-[20px] md:px-[130px] bg-black pb-[66px] ">
    <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl mx-auto md:mx-0">
        <img src="{{ asset('images/prestasi-3.svg') }}" class="w-full">
        <div class="px-[15px]">
            <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                Lorem ipsum
            </h1>
            <p class="text-[18px] text-[#B5B3BC]">
                dolor sit amet, consecte adipis cing elit. Etiam eu turpis lestie, dictum esta, mattis tellus. Sed
                dignissim, metus nec fringilla
            </p>
        </div>
        <a href="{{ route('content-prestasi-ehall') }}">
            <button
                class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                Read more
                <img src="{{ asset('images/vector-logo.svg') }}" class="my-auto">
            </button>
        </a>
    </div>
</div>


<!-- List prestasi -->
<div class="bg-black pb-[217px]">
    <h1 class="font-bold text-3xl  md:text-5xl text-white font-poppins text-center pb-[76px]">List Prestasi
    </h1>
    <!-- coba coba -->
    <div id="default-carousel" class="relative px-[77px] lg:px-0 lg:h-[446px] lg:w-[752px] mx-auto "
        data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative bg-[#191A1E] block  mx-auto rounded-2xl  h-[255px] md:h-[446px]">
            <!-- Item 1 -->
            <div class="absolute inset-0 z-20 flex flex-col items-center justify-center transition-all duration-700 ease-in-out transform translate-x-0"
                data-carousel-item="">
                <div>
                    <h1
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#5B1BE1] to-[#B221E5] font-bold text-xl md:text-3xl w-[60px] md:h-[60px] md:w-[94px] lg:h-[30px] mx-auto">
                        2022</h1>
                    <div class="px-[13px] md:px-[75px] pt-[10px] text-[8px] md:text-[20px]">
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="duration-700 md:pt-[41px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <div>
                        <h1
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#5B1BE1] to-[#B221E5] font-bold text-xl md:text-3xl w-[60px] md:h-[60px] md:w-[94px] lg:h-[30px] mx-auto pt-10 md:pt-0">
                            2021</h1>
                        <div class="px-[18px] md:px-[75px] pt-[10px] text-[8px] md:text-[20px]">
                            <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                                Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                            </p>
                            <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                                Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                            </p>
                            <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                                Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="duration-700 md:pt-[51px] ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <h1
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#5B1BE1] to-[#B221E5] font-bold md:text-3xl w-[60px] md:h-[60px] md:w-[94px] lg:h-[30px] mx-auto pt-10 md:pt-0">
                        2020</h1>
                    <div class="px-[18px] md:px-[75px] pt-[10px] text-[8px] md:text-[20px]">
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                    </div>
                </div>
            </div>
            <!-- item 4 -->
            <div class="duration-700 md:pt-[51px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <h1
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#5B1BE1] to-[#B221E5] font-bold md:text-3xl w-[60px] md:h-[60px] md:w-[94px] lg:h-[30px] mx-auto pt-10 md:pt-0">
                        2019</h1>
                    <div class="px-[18px] md:px-[75px] pt-[10px] text-[8px] md:text-[20px]">
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                        <p class="text-white pb-0 pt-[15px] md:pt-[37px] font-semibold ">
                            Juara 1 Lorem ipsum dolor consecte adipis cing elit. Etiam eu turpis lesti
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev="">
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next="">
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    <!-- coba coba -->
</div>

<!-- carousel prestasi -->
