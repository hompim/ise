<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<link rel="stylesheet" href="{{ asset('css/new.css') }}">


    <div class="bg-black md:flex md:flex-col-reverse pl-[130px] lg:flex-row  items-center md:pt-[202px] md:pl-[130px] overflow-hidden">
        <div class="flex flex-col items-start flex-1 text-white">
            <h1
                class="lg:!text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">
                IT Convention
                <br>
                <span class="text-white">Zone</span>
            </h1>
            <!-- button start -->
            <div class="relative mt-16 ml-8 md:ml-0 md:mt-24 md:mb-8 text-center max-w-fit group" >
            <div class="absolute inset-0 ">
                <a href="#isometric-city"
                    class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                    Explore</a>
            </div>
            <a href="#isometric-city" class="relative btn">Let's
                Explore</a>
    </div>
            <!-- button end -->
        </div>
        <div class="flex justify-center flex-1 w-[691px] h[553px]">
            <img src="{{ asset('images/isometric-city-icon.svg') }}" class="w-full h:full">
        </div>

    </div>
    <div x-data="{ tab: 'bsl' }" class=" bg-black flex-row items-center justify-center text-white ">
        <div x-show="tab === 'bsl'" class="flex justify-center">
            <div class="flex-col w-3/4 p-4 mt-32 text-center">
                <div class="px-[100px] mt[124px] mb-[77px]">
                    <h1 class=" lg:text-2xl font-bold font-poppins">About This Zone</h1>
                    <p class="mt-10 text-lg text-[#B5B3BC] font-poppins">
                        <a class="text-white font-semiboldbold">IT Convention</a> merupakan salah satu zona dari ISE!
                        (Information Systems
                        Expo) yang bertujuan menghadirkan rangkaian acara yang
                        bermanfaat dengan memamerkan dunia IT serta melakukan edukasi
                        kepada masyarakat terkait isu-isu seputar IT saat ini. Terdapat
                        beberapa acara
                        yang dihadirkan, yakni
                        <a class="text-white font-semiboldbold">Academy, </a>
                        <a class="text-white font-semiboldbold">Grand Talkshow,</a> dan
                        <a class="text-white font-semiboldbold">E-Hall of IS.</a>
                    </p>
                </div>
                <!-- slider about this start-->
                <div class="relative ">
                
                <section id="slider" >
                    
                    <input type="radio" name="slider" id="s1" class="hidden" checked >
                    <input type="radio" name="slider" id="s2" class="hidden">
                    
                    
                    <input type="radio" name="slider" id="s5" class="hidden">

                    <label for="s1" id="slide1">
                    <div id="shadow">
                    
                    </div>
                        <img src="{{ asset('images/rectangle-icon.svg') }}" class="w-[645px] h-[420px] relative">
                        
                    </label>
                    <label for="s2" id="slide2">
                    <div id="shadow">
                    
                    </div>
                        <img src="{{ asset('images/rectangle-icon.svg') }}" class="w-[645px] h-[420px] relative">
                    </label>
                    <label for="s5" id="slide5">
                    <div id="shadow">
                    
                    </div>
                        <img src="{{ asset('images/rectangle-icon.svg') }}" class="w-[645px] h-[420px] relative">
                    </label>
                    </section>
                    

                    </div>
                <!-- slider about this end -->
            </div>
        </div>

        <!--Let's See The Inside-->
        <div>
            <h1 class="font-bold text-4xl mt-[201px] font-poppins text-center">Let's See The Inside</h1>
        </div>
        <!--Frame picture-->
        <div class="flex justify-center mb-[71px] mt-[146px]">
            <img class="relative mt-10 justify-center w-[826px] h-[818px] " src="{{ asset('images/Frame.svg') }}"
                alt="">
            <!--Icon kecil city-->
            <div>
                <div class="group">
                    <div class="opacity-0 group-hover:opacity-100">
                        <p
                            class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[12px] font-semibold text-[20px] mt-[22px] ml-[-530px]">
                            Startup Academy</p>
                    </div>
                    <button
                        class="transition duration-1000 w-[57px] h[72px] group-hover:scale-[1.8] group-hover:duration-300 absolute mt-[115px] ml-[-480px]"><img
                            src="{{ asset('images/startup-academy-icon.svg') }}" alt=""></button>
                </div>
                <!-- 2 -->
                <div class="group ml-[-168px]">
                    <div class="opacity-0 group-hover:opacity-100">
                        <p
                            class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[12px] mt-80 font-semibold text-[20px] ">
                            Data Science Academy</p>
                    </div>
                    <button
                        class="absolute transition mt-[410px] duration-1000 w-[57px] h[72px] group-hover:scale-[1.8] group-hover:duration-300 "><img
                            src="{{ asset('images/data-science-icon.svg') }}" alt=""></button>
                </div>
                <!-- 3 -->
                <div class="group ">
                    <div class="opacity-0 group-hover:opacity-100">
                        <p
                            class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[12px] ml-[-900px] mt-64 font-semibold text-[20px] ">
                            Grand Talkshow</p>
                    </div>
                    <button
                        class="absolute transition ml-[-780px] mt-[340px] duration-1000 w-[57px] h[72px] group-hover:scale-[1.8] group-hover:duration-300 "><img
                            src="{{ asset('images/grand-is.svg') }}" alt=""></button>
                </div>
                <!-- 4 -->
                <div class="group ">
                    <div class="opacity-0 group-hover:opacity-100">
                        <p
                            class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[12px] ml-[-520px] mt-96 font-semibold text-[20px] ">
                            E-Hall of IS</p>
                    </div>
                    <button
                        class="absolute transition ml-[-520px] mt-[460px] duration-1000 w-[57px] h[72px] group-hover:scale-[1.8] group-hover:duration-300 "><img
                            src="{{ asset('images/hall-is.svg') }}" alt=""></button>
                </div>

            </div>
        </div>
        <!-- Startup academy slide  -->
        
<div id="default-carousel" class="relative h-[446px] w-[752px] mx-auto" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative bg-[#191A1E] block  mx-auto rounded-2xl h-[446px]">
         <!-- Item 1 -->
        <div class="duration-700 flex flex-col justify-center items-center ease-in-out transition-all absolute inset-0 transform translate-x-0 z-20 " data-carousel-item="">
        <div >
                            <img src="./images/startup-academy.svg" alt=""
                                class="sm:w-[94px] h-[94px] mb-[-12px] mx-auto">
                            <p class="mt-[30px] text-center font-bold font-poppins text-2xl">Startup Academy</p>
                            <p
                                class="ml-[80.5px] mr-[80.5px] mt-[30px] text-center text-[#B5B3BC] font-medium text-lg font-poppins tracking-wide">
                                Startup Academy hadir untuk memberikan fundamental knowledge kepada para akademisi
                                sebagai the next founder of startup.</p>
                            <button
                                class="mt-[30px] ml-[92px] content-center w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                                Lanjut</button>
                        </div>
            
        </div>
        <!-- Item 2 -->
        <div class="duration-700 pt-[51px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
        <div>
                            <img src="./images/data-science-slide.svg" alt=""
                                class="sm:w-[94px] h-[94px] mb-[-12px] mx-auto">
                            <p class="mt-[30px] text-center font-bold font-poppins text-2xl">Data Science Academy</p>
                            <p
                                class="ml-[107px] mr-[107px] mt-[30px] text-center text-[#B5B3BC] font-medium text-lg font-poppins tracking-wide">
                                Data Science Academy hadir untuk menjadi langkah awal atau katalis karier peserta
                                sebagai seorang data scientist.</p>
                            <button
                                class="mt-[30px] ml-[92px] content-center w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                                Lanjut</button>
                        </div>
        </div>
        <!-- Item 3 -->
        <div class="duration-700 pt-[51px] ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
        <div>
                            <img src="./images/hall-is-slide.svg" alt=""
                                class="w-[94px] h-[94px] mb-[-12px] mx-auto">
                            <p class="mt-[30px] text-center font-bold font-poppins text-2xl">E-Hall of IS</p>
                            <p
                                class="ml-[80.5px] mr-[80.5px] mt-[30px] text-center text-[#B5B3BC] font-medium text-lg font-poppins tracking-wide">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vitae natoque pulvinar
                                porttitor.</p>
                            <button
                                class="mt-[30px] ml-[92px] content-center w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                                Lanjut</button>
                        </div>
        </div>
        <!-- item 4 -->
        <div class="duration-700 pt-[51px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
        <div>
                            <img src="./images/grand-talkshow-slide.svg" alt=""
                                class="sm:w-[94px] h-[94px] mb-[-12px] mx-auto">
                            <p class="mt-[30px] text-center font-bold font-poppins text-2xl">Grand Talkshow</p>
                            <p
                                class="ml-[107px] mr-[107px] mt-[30px] text-center text-[#B5B3BC] font-medium text-lg font-poppins tracking-wide">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vitae natoque pulvinar
                                porttitor.</p>
                            <button
                                class="mt-[30px] ml-[92px] content-center w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                                Lanjut</button>
                        </div>
        </div>
    </div>
    
    <!-- Slider indicators -->
    
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div>

               
                
                        
        <!--Startup academy slide -->

        <!-- timeline -->
        <!-- mark kalender -->
        <div class="mt-36">
            <h1 class="mb-24 font-bold text-center text-white font-poppins text-7xl">Mark your calender and <br> follow
                the <span
                    class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
            </h1>
            <!-- timeline -->
            {{-- <div class="mx-auto ">
                            <ol class="items-center justify-center md:flex " >
                                <li class="relative mb-6 sm:mb-0">
                                <div class="flex items-center w-[500px] justify-center overflow-hidden">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                                    </div>
                                    <div class="hidden sm:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Jun 2022</time>
                                    <h3 class="text-lg font-semibold text-white font-poppins">E-Hall of IS</h3>
                                </div>
                                </li>
                                <!-- 2 -->
                                <li class="relative mb-6 sm:mb-0">
                                    <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Sep 2022</time>
                                    <div class="relative flex items-center w-[500px]">
                                        <div
                                            class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                        </div>
                                        <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="text-lg font-semibold text-white font-poppins pb-7">E-hall of IS</h3>
                                    </div>
                                </li>
                                <li class="relative mb-6 sm:mb-0">
                                    <time class="block mb-2 text-lg font-medium text-white font-poppins">Nov 2022</time>
                                    <div class="relative flex items-center w-[500px]">
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
                    </div> --}}
            {{-- timeline --}}
            <div class="my">
                <div class="container mx-auto">
                    <ol class="items-start justify-center text-center md:flex">
                        <li class="relative mb-6 sm:mb-0 w-[400px]">

                            <div class="flex items-center justify-center overflow-hidden">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                                </div>
                                <div class="hidden sm:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                                </div>
                            </div>
                            <div class="mt-10">
                                <time class="block px-12 mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">3 September 2022</time>
                                <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins pb-7">E-hall of IS
                            </div>
                        </li>

                        <li class="relative mb-6 sm:mb-0 w-[400px]">

                            <div class="relative flex items-center">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                </div>
                                <div class="hidden sm:flex absolute w-full h-2 bg-[#333333]"></div>
                            </div>
                            <div class="mt-10">
                                <time class="block px-12 mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">10-18 September 2022
                                </time>
                                <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins">Startup Academy <br> & <br>
                                    Data Science Academy</h3>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0 w-[400px]">

                            <div class="relative flex items-center">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                </div>
                                <div class="hidden sm:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                            </div>
                            <div class="mt-10">
                                <time class="block mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">19 November 2022</time>
                                <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins pb-7">Grand Talkshow</h3>
                            </div>
                        </li>
                    </ol>

                </div>
            </div>
            {{-- timeline end --}}
            <!-- batas -->
        </div>
        <!--nutup bsl -->
    </div>
</div>

<!-- feedback event -->
<div class="bg-black pt-[210px] pb-[138px]">
    <img src="{{ asset('images/rectangle-footer-icon.svg') }}" class="w-auto h-[20px] absolute mt-[90px]">
    <!-- feedback input -->
    <div class="bg-[#191A1E] mx-auto w-[866px] h-[189px] rounded-2xl flex justify-center relative">
        <div class="rounded ">
            <p class="mt-[22px] text-[26px] text-center text-white font-bold font-poppins">What do you want to say
                about our event?</p>
            <!-- input + button -->
            <input placeholder="Type here"
                class="mt-[32px] w-[743px] h-[54px] font-medium text-[24px] pl-[33px] font-poppins rounded-2xl text-start">
            <button
                class="mt-[32px] w-[146px] h-[54px] text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-144px] xl:blur font-poppins text-white ">Send</button>
            <button
                class="mt-[32px] w-[146px] h-[54px] text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-144px] absolute font-poppins text-white ">Send</button>
        </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
