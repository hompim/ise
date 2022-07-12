<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<link rel="stylesheet" href="{{ asset('css/new.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
<!-- hero section start -->
<div
    class="bg-black pt-[145px] lg:pt-[210px]  md:flex md:flex-col-reverse lg:pl-[130px] lg:flex-row  items-center md:pt-[202px] md:pl-[130px] overflow-hidden">
    <div class="flex flex-col items-start flex-1 text-white">
        <h1
            class="lg:!text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">
            IT Convention
            <br>
            <span class="text-white">Zone</span>
        </h1>
        <!-- button start -->
        <div class="relative mt-16 ml-8 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
            <div class="absolute inset-0 ">
                <a href="#explore"
                    class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins " >Let's
                    Explore</a>
            </div>
            <a href="#explore" class="relative btn">Let's
                Explore</a>
        </div>
        <!-- button end -->
    </div>
    <!-- ml-48 w-[210px] -translate-y-24 md:-translate-y-0 flex justify-center flex-1 -->
    <div
        class="-translate-y-24 md:-translate-y-0 ml-[180px] lg:ml-0  flex  flex-1 w-[210px] h-[179px] lg:!w-[691px] lg:!h-full">
        <img src="{{ asset('images/isometric-city-icon.svg') }}" class="w-full h:full">
    </div>
    
</div>
<!-- hero section end -->
<div class="bg-black pt-0 lg:pt-[124px] text-center px-[22px] lg:px-[183px]">
    <h1 class="text-xl lg:!text-4xl font-bold font-poppins text-white" id="explore">About This Zone</h1>
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
<div x-data="{ tab: 'bsl' }" class="flex-row items-center justify-center text-white bg-black ">
    <div x-show="tab === 'bsl'" class="flex justify-center">
        <div class="flex-col text-center">

            <!-- slider about this start-->
            <div class="relative ">

                <section id="slider">

                    <input type="radio" name="slider" id="radio1" class="hidden" checked>
                    <input type="radio" name="slider" id="radio2" class="hidden">


                    <input type="radio" name="slider" id="radio3" class="hidden">

                    <label for="radio1" id="slide1">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/ICON 2019(2).jpg') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">

                    </label>
                    <label for="radio2" id="slide2">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/ICON 2020.png') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                    <label for="radio3" id="slide5">
                        <div id="shadow">

                        </div>
                        <img src="{{ asset('images/dokumentasi/ICON 2021.png') }}"
                            class="rounded-2xl w-[199px] h-[146px] lg:w-[645px] lg:h-[420px] relative">
                    </label>
                </section>


            </div>

            <!-- <script type="text/javascript">
                var counter = 1;
                setInterval(function() {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 3) {
                        counter = 1;
                    }
                }, 5000);
            </script> -->
            <!-- slider about this end -->
        </div>
    </div>

    <!--Let's See The Inside-->
    <div>
        <h1 class="font-bold text-xl mt-[60px] lg:!text-4xl lg:mt-[201px] font-poppins text-center">Let's See The Inside
        </h1>
    </div>
    <!--Frame picture-->
    <div class="flex justify-center mt-[28px] mb-[71px] lg:mt-[146px]">
        <img class="relative mt-10 justify-center w-[312px] h-[247px] lg:w-[826px] lg:h-[818px] "
            src="{{ asset('images/Frame.svg') }}" alt="">
        <!--Icon kecil city-->
        <div>
            <div class="group">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[6px] lg:pl-[12px] text-[10px] font-semibold lg:text-[20px] ml-[-200px] lg:mt-[22px] lg:ml-[-530px]">
                        Startup Academy</p>
                </div>
                <button
                    class="lg:transition lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 absolute mt-[35px] lg:mt-[115px] ml-[-180px] lg:ml-[-480px]"><img
                        src="{{ asset('images/startup-academy-icon.svg') }}" alt=""></button>
            </div>
            <!-- 2 -->
            <div class="group ml-[-60px] lg:ml-[-168px]">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[6px] lg:pl-[12px] text-[10px] mt-[100px] lg:mt-80 font-semibold lg:text-[20px] ">
                        Data Science Academy</p>
                </div>
                <button
                    class="absolute lg:transition mt-[150px] lg:mt-[410px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:first-letter:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/data-science-icon.svg') }}" alt=""></button>
            </div>
            <!-- 3 -->
            <div class="group ">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[6px] lg:pl-[12px] text-[10px] ml-[-330px] mt-[90px] lg:ml-[-900px] lg:mt-64 font-semibold lg:text-[20px] ">
                        Grand Talkshow</p>
                </div>
                <button
                    class="absolute lg:transition ml-[-295px] mt-[120px] lg:ml-[-780px] lg:mt-[340px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/grand-is.svg') }}" alt=""></button>
            </div>
            <!-- 4 -->
            <div class="group ">
                <div class="lg:opacity-0 lg:group-hover:opacity-100">
                    <p
                        class=" absolute border-l-4 border-[#5B1BE1]  font-poppins pl-[6px] lg:pl-[12px] text-[10px] ml-[-220px] mt-[140px] lg:ml-[-520px] lg:mt-96 font-semibold lg:text-[20px] ">
                        E-Hall of IS</p>
                </div>
                <button
                    class="absolute lg:transition ml-[-196px] mt-[166px] lg:ml-[-520px] lg:mt-[460px] lg:duration-1000 w-[21px] h-[27px] lg:w-[57px] lg:h[72px] lg:group-hover:scale-[1.2] lg:group-hover:duration-300 "><img
                        src="{{ asset('images/hall-is.svg') }}" alt=""></button>
            </div>

        </div>
    </div>
    <!-- Startup academy slide  -->

    <div id="default-carousel" class="relative px-[77px] lg:px-0 lg:h-[446px] lg:w-[752px] mx-auto"
        data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative bg-[#191A1E] block  mx-auto rounded-2xl  h-[255px] md:h-[446px]">
            <!-- Item 1 -->
            <div class="absolute inset-0 z-20 flex flex-col items-center justify-center transition-all duration-700 ease-in-out transform translate-x-0 "
                data-carousel-item="">
                <div>
                    <img src="./images/startup-academy.svg" alt=""
                        class="w-[60px] h-[60px] md:w-[94px] lg:h-[94px] lg:mb-[-12px] mx-auto">
                    <p
                        class="md:mt-[30px] text-center font-bold font-poppins text-[12px] md:text-2xl rounded-t-full md:rounded-none">
                        Startup Academy</p>
                    <p
                        class="  lg:mx-[80.5px] mt-[8px] lg:mt-[30px] text-center text-[#B5B3BC] font-medium text-[8.5px] lg:text-lg font-poppins tracking-wide">
                        Startup Academy akan memberikan para peserta pengetahuan dasar dalam pendirian sebuah startup. Para peserta akan mendapatkan materi dan eksplorasi mandiri bersama para pakar di bidangnya. Bangun startup-mu sendiri bersama Startup Academy.</p>
                    <button
                        class=" mt-[30px] ml-[50px]  md:ml-[92px] h-[17.5px] w-[176px] lg:w-[577px] lg:h-[50px] text-[10px] md:text-2xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                        Lanjut</button>
                </div>

            </div>
            <!-- Item 2 -->
            <div class="duration-700 md:pt-[51px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <img src="./images/data-science-slide.svg" alt=""
                        class="mt-[40px] md:mt-0 w-[60px] h-[60px] md:w-[94px] md:h-[94px] md:mb-[-12px] mx-auto">
                    <p class="md:mt-[30px] text-center font-bold font-poppins text-[12px] md:text-2xl ">Data Science
                        Academy</p>
                    <p
                        class="mx-[11px] md:mx-[107px] mt-[8px] md:mt-[30px]  text-center text-[#B5B3BC] font-medium text-[8.5px] lg:text-lg font-poppins tracking-wide">
                        Data Science Academy hadir untuk menjadi langkah awal atau katalis karier peserta
                        sebagai seorang data scientist.</p>
                    <button
                        class="mt-[30px] ml-[50px] md:mt-[30px] md:ml-[92px] content-center h-[17.5px] w-[176px] lg:w-[577px] lg:h-[50px] text-[10px] lg:text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                        Lanjut</button>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="duration-700 md:pt-[51px] ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <img src="./images/hall-is-slide.svg" alt=""
                        class="mt-[40px] md:mt-0 w-[60px] h-[60px] md:w-[94px] md:h-[94px] md:mb-[-12px] mx-auto">
                    <p class="md:mt-[30px] text-center font-bold font-poppins text-[12px] md:text-2xl">E-Hall of IS</p>
                    <p
                        class="mx-[11px] md:mx-[107px] mt-[8px] md:mt-[30px]  text-center text-[#B5B3BC] font-medium text-[8.5px] lg:text-lg font-poppins tracking-wide">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vitae natoque pulvinar
                        porttitor.</p>
                    <button
                        class="mt-[30px] ml-[50px] md:mt-[30px] md:ml-[92px] content-center h-[17.5px] w-[176px] lg:w-[577px] lg:h-[50px] text-[10px] lg:text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                        Lanjut</button>
                </div>
            </div>
            <!-- item 4 -->
            <div class="duration-700 md:pt-[51px] ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <div>
                    <img src="./images/grand-talkshow-slide.svg" alt=""
                        class="mt-[40px] md:mt-0 w-[60px] h-[60px] md:w-[94px] md:h-[94px] md:mb-[-12px] mx-auto">
                    <p class="md:mt-[30px] text-center font-bold font-poppins text-[12px] md:text-2xl">Grand Talkshow
                    </p>
                    <p
                        class="mx-[11px] md:mx-[107px] mt-[8px] md:mt-[30px]  text-center text-[#B5B3BC] font-medium text-[8.5px] lg:text-lg font-poppins tracking-wide">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vitae natoque pulvinar
                        porttitor.</p>
                    <button
                        class="mt-[30px] ml-[50px] md:mt-[30px] md:ml-[92px] content-center h-[17.5px] w-[176px] lg:w-[577px] lg:h-[50px] text-[10px] lg:text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih
                        Lanjut</button>
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




    <!--Startup academy slide -->

    <!-- timeline -->
    <!-- mark kalender -->
    <div class="mt-36">
        <h1 class="mb-24 font-bold text-center text-white font-poppins text-3xl lg:!text-7xl">Mark your calender <br
                class="block md:hidden"> and <br class="hidden md:block"> follow
            the <br class="block md:hidden"><span
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
                            <time
                                class="block px-12 mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">3
                                September 2022</time>
                            <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins pb-7">E-hall of
                                IS
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
                            <time
                                class="block px-12 mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">10-18
                                September 2022
                            </time>
                            <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins">Startup Academy
                                <br> & <br>
                                Data Science Academy
                            </h3>
                        </div>
                    </li>
                    <li class="relative pb-6 sm:mb-0 w-[400px]">

                        <div class="relative flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                            </div>
                            <div class="hidden sm:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                        </div>
                        <div class="mt-10">
                            <time class="block mb-9 tracking-wide text-[20px] font-bold text-white font-poppins">19
                                November 2022</time>
                            <h3 class="text-[16px] tracking-wide font-semibold text-white font-poppins pb-7">Grand
                                Talkshow</h3>
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
<div class="bg-black pt-[81px] lg:pt-[210px] pb-[138px]">
    <img src="{{ asset('images/rectangle-footer-icon.svg') }}"
        class="w-auto h-[20px] absolute mt-[22px] lg:mt-[90px]">
    <!-- feedback input -->
    <div
        class="bg-[#191A1E] mx-auto w-[321px] h-[62px] lg:w-[866px] lg:h-[189px] rounded-2xl flex justify-center relative">
        <div class="rounded ">
            <p class=" lg:pt-[22px] text-[12px] lg:text-[26px] text-center text-white font-bold font-poppins">What do
                you want to say
                about our event?</p>
            <!-- input + button -->
            <input placeholder="Type here"
                class=" lg:mt-[32px] w-[274px] h-[20px] lg:w-[743px] lg:h-[54px] font-medium text-[10px] lg:text-[24px] pl-[23px] lg:pl-[33px] font-poppins rounded-2xl text-start">
            <button
                class=" mt-[4.7px] lg:mt-[32px] w-[53px] h-[20px] lg:w-[146px] lg:h-[54px] text-[12px] lg:text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-52px] lg:ml-[-144px] absolute font-poppins text-white transition duration-1000 opacity-75 btn blur-lg  group-hover:duration-300 group-hover:opacity-100 ">Send</button>
            <button
                class=" mt-[4.7px] lg:mt-[32px] w-[53px] h-[21px] lg:w-[146px] lg:h-[54px] text-[12px] lg:text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-52px] lg:ml-[-144px] absolute font-poppins text-white ">Send</button>

        </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
