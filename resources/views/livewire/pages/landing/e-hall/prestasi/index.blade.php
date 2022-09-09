<div>
{{-- Main --}}
<div class="min-h-screen bg-black font-poppins">
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
            <p class="mt-4 text-sm text-left md:text-lg text-liteGray md:leading-normal md:text-left">
                Prestasi merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                molestie,
                dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,risus sem sollicitudin
                lacus,
                ut interdum tellus elit sed risus </p>
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
        <div class="hidden md:block md:px-0 md:w-[416px]">
            <img src="{{ asset('images/prestasi-logo.svg') }}" alt="prestasi-logo">
        </div>
    </div>

    <!-- content 1-->
    {{-- @foreach ($articles as $a)
        {{ $a->title }}
    @endforeach --}}
    @foreach ($articles as $index => $article)
        @if ($index % 2 == 0)
            <div class="px-[20px] md:px-[130px] pt-[210px] pb-[120px] bg-black flex flex-col md:flex-row gap-[20px] md:gap-[120px]"
                id="explore">
                {{-- card besar --}}
                <div>
                    <!-- start : prestasi 1 -->
                    <div class="md:w-[680px] md:h-[1260px] bg-[#191A1E] flex flex-col rounded-3xl">
                        <div class="w-full rounded-t-xl">
                            <img src="{{asset('storage/' . $article[0]->title_image_path) }}" class="w-full">
                        </div>
                        <div class="flex flex-col justify-between h-full">
                            <div class="px-[27.95px]">
                                <h1 class="text-white font-bold text-[26px] my-[27px]">{{ $article[0]->title }}</h1>
                                <p
                                    class="text-[#B5B3BC] text-justify md:text-lg leading-[28px] font-normal tracking-normal">
                                    {{ $article[0]->subtitle }}
                                </p>
                            </div>
                            <a href="{{ route('content-prestasi-ehall', $article[0]->slug) }}">
                                <button
                                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold md:text-[20px] mx-auto mb-12 transition duration-300 hover:-translate-y-2">
                                    Read more
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- end : prestasi 1 -->
                </div>
                    <!-- make column flex-->
                    <div class="flex flex-col gap-[20px] md:gap-[120px]">
                        @foreach ($article as $key => $a)
                            @if ($key == 0)
                                @continue
                            @else
                                {{-- card kecil --}}
                                <!-- start : prestasi 2 -->
                                <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
                                    <img src="{{ asset('storage/'.$a->title_image_path) }}" class="w-full">
                                    <div class="px-[15px]">
                                        <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                                            {{ $a->title }}
                                        </h1>
                                        <p class="text-[18px] text-[#B5B3BC]">
                                            {{ substr($a->subtitle, 0, 96) . '...' }}
                                        </p>
                                    </div>
                                    <a href="{{ route('content-prestasi-ehall', $a->slug) }}">
                                        <button
                                            class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                                            Read more
                                        </button>
                                    </a>
                                </div>
                                <!-- end : prestasi 2 -->
                            @endif
                        @endforeach
                    </div>
            </div>
        @else
            <div class="px-[20px] md:px-[130px] pt-[120px] pb-[120px] bg-black flex flex-col md:flex-row-reverse gap-[20px] md:gap-[120px]"
                id="explore">

                {{-- card besar --}}
                <div>
                    <!-- start : prestasi 1 -->
                    <div class="md:w-[680px] md:h-[1260px] bg-[#191A1E] flex flex-col rounded-3xl">
                        <div class="w-full rounded-t-xl">
                            <img src="{{ asset('storage/' . $article[0]->title_image_path)}}" class="w-full">
                        </div>
                        <div class="flex flex-col justify-between h-full">
                            <div class="px-[27.95px]">
                                <h1 class="text-white font-bold text-[26px] my-[27px]">{{ $article[0]->title }}</h1>
                                <p
                                    class="text-[#B5B3BC] text-justify md:text-lg leading-[28px] font-normal tracking-normal">
                                    {{ $article[0]->subtitle }}
                                </p>
                            </div>
                            <a href="{{ route('content-prestasi-ehall', $article[0]->slug) }}">
                                <button
                                    class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold md:text-[20px] mx-auto mb-12 transition duration-300 hover:-translate-y-2">
                                    Read more
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- end : prestasi 1 -->
                </div>
                    <!-- make column flex-->
                    <div class="flex flex-col gap-[20px] md:gap-[120px]">
                        @foreach ($article as $key => $a)
                            @if ($key == 0)
                                @continue
                            @else
                                {{-- card kecil --}}
                                <!-- start : prestasi 2 -->
                                <div class="md:w-[380px] h-[570px] bg-[#191A1E] rounded-3xl">
                                    <img src="{{ asset('storage/' . $a->title_image_path) }}" class="w-full">
                                    <div class="px-[15px]">
                                        <h1 class="font-bold text-[26px] text-white pt-[19px] pb-[17px]">
                                            {{ $a->title }}
                                        </h1>
                                        <p class="text-[18px] text-[#B5B3BC]">
                                            {{ substr($a->subtitle, 0, 96) . '...' }}
                                        </p>
                                    </div>
                                    <a href="{{ route('content-prestasi-ehall', $a->slug) }}">
                                        <button
                                            class="text-white px-[23px] py-[18px] bg-[#2F2F2F] rounded-2xl flex flex-row gap-[10px] md:w-[180px] font-semibold  md:text-[20px] mx-auto md:mt-[20px]  transition duration-300 hover:-translate-y-2">
                                            Read more
                                        </button>
                                    </a>
                                </div>
                                <!-- end : prestasi 2 -->
                            @endif
                        @endforeach
                    </div>
            </div>
        @endif
    @endforeach
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    <!-- coba coba -->
</div>

<!-- carousel prestasi -->
</div>
