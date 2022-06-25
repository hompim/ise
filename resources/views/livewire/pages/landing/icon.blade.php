
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
 
<div class="bg-black pl-[130px] font-poppins">
    <div class="flex flex-col-reverse lg:flex-row  items-center pt-[202px]">
        <div class="flex flex-1 flex-col items-start text-white">
            <h1 class="text-7xl text-center lg:text-left font-bold bg-gradient-to-r bg-clip-text text-transparent from-[#CEA8FF] to-[#5B1BE1]">IT Convention</h1>
            <h1 class="text-7xl text-center lg:text-left font-bold">Zone</h1>
            <button class="px-6 py-3 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-[140px] relative xl:blur font-bold">Let's Explore</button>
            <button class="px-6 py-3 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-[284px] absolute font-bold">Let's Explore</button>
        </div>
        <div class="flex justify-center flex-1 w-[691px] h[553px]">
            <img src="{{ asset('images/isometric-city-icon.svg') }}" class="w-full h:full" >
        </div>
        
    </div> 
        <div x-data="{tab: 'bsl'}" class="text-white flex-row justify-center items-center  ">
            <div x-show="tab === 'bsl'" class="flex justify-center">
                <div class="w-3/4 flex-col mt-32 text-center p-4">
                    <div class="px-[100px] mt[124px] mb-[77px]">
                        <h1 class="font-bold text-2xl font-poppins">About This Zone</h1>
                        <p class="mt-10 text-lg font-poppins">IT Convention merupakan salah satu zona dari ISE! (Information Systems
                        Expo) yang bertujuan menghadirkan rangkaian acara yang
                        bermanfaat dengan memamerkan dunia IT serta melakukan edukasi
                        kepada masyarakat terkait isu-isu seputar IT saat ini. Terdapat
                        beberapa acara 
                        yang dihadirkan, yakni 
                        <a class="font-bold">Academy, </a> 
                        <a class="font-bold">Grand Talkshow,</a>  dan 
                        <a class="font-bold">E-Hall of IS.</a> </p>
                    </div>
                    <!-- about this -->
                    <div class="swiper mySwiper w-[700px]">
                    <div class="swiper-wrapper cursor-grab">
                        <div class="flex justify-center swiper-slide">
                            <img class="w-[600px] rounded-3xl h-[420px]"
                                src="./images/rectangle-icon.svg" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-[600px] rounded-3xl  h-[420px]"
                                src="./images/rectangle-icon.svg" />
                        </div>
                        <div class="flex justify-center swiper-slide">
                            <img class="w-[600px] rounded-3xl h-[420px]"
                                src="./images/rectangle-icon.svg" />
                        </div>
                    </div>
                    </div>
                    <!-- coba coba -->
</div> 
                    </div>
                    
                    <!--Let's See The Inside-->
                    <div>
                    <h1 class="font-bold text-4xl mt-[201px] font-poppins text-center">Let's See The Inside</h1>
                    </div>
                    <!--Frame picture-->
                    <div class="flex justify-center mb-[71px]">
                    <img class="mt-10 justify-center w-[826px] h-[818px] " src="{{ asset('images/frame.svg') }}" alt="">
                        <!--Icon kecil city-->
                        <div>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[115px] ml-[-480px]" ><img src="{{ asset('images/startup-academy-icon.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[410px] ml-[-168px]" ><img src="{{ asset('images/data-science-icon.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[340px] ml-[-780px]" ><img src="{{ asset('images/grand-is.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[460px] ml-[-520px]" ><img src="{{ asset('images/hall-is.svg') }}" alt=""></button>
                            
                        </div>
                    </div>
                    <!-- Startup academy slide  -->
                    <div class="swiper mySwiper w-[700px]">
                    <div class="swiper-wrapper cursor-grab">
                        <div class="flex justify-center swiper-slide">
                            <!-- 1 -->
                            <div class="bg-[#191A1E] mx-auto w-[752px] h-[446px] rounded-2xl flex justify-center pt-[49px]">
                            <div>
                                <img src="./images/startup-academy.svg" alt="" class="w-[94px] h-[94px] mb-[-12px] mx-auto">
                                <p class="mt-[30px] text-center font-bold font-poppins text-2xl">Startup Academy</p>
                                <p class="ml-[80.5px] mr-[80.5px] mt-[30px] text-center font-medium text-[18px] font-poppins">Startup Academy hadir untuk memberikan fundamental knowledge kepada para akademisi sebagai the next founder of startup.</p>
                                <button class=  "mt-[30px] ml-[92px] content-center w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full font-poppins">Lebih Lanjut</button>
                            </div>
                            </div>
                            <!-- 1 -->
                        </div>
                    </div>
                    <div class="p-6 -mr-5 absolute rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 -ml-5 absolute rounded-full swiper-button-prev bg-liteBlack"></div>
                    </div>
                    <!--Startup academy slide -->
                    
                    <!-- timeline -->
                    <!-- mark kalender -->
                    <div class="mt-36">
                        <h1 class="mb-24 font-bold text-white font-poppins text-7xl text-center">Mark your calender and <br> follow the <span
                                class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
                        </h1>
                        <!-- timeline -->
                        <div class="container mx-auto">
                            <ol class="items-center justify-center md:flex">
                                <li class="relative mb-6 sm:mb-0">
                                <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">Jun 2022</time>
                                <div class="flex items-center justify-center overflow-hidden">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                                    </div>
                                    <div class="hidden sm:flex w-[300px] absolute right-0 h-2 bg-[#333333]">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">BIONIX <br>
                                        Student Level</h3>
                                </div>
                                </li>
                                <!-- 2 -->
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
                    <!-- batas -->
            </div> <!--nutup bsl -->
            </div>
            </div>
</div>
<!-- feedback event -->
<div class="bg-black pt-[210px] pb-[138px]">
    <img src="{{ asset('images/rectangle-footer-icon.svg') }}" class="w-auto h-[20px] absolute mt-[90px]" >
    <!-- feedback input -->
    <div class="bg-[#191A1E] mx-auto w-[866px] h-[189px] rounded-2xl flex justify-center relative">
                    <div class="rounded ">
                        <p class="mt-[22px] text-[26px] text-center text-white font-bold font-poppins">What do you want to say about our event?</p>
                        <!-- input + button -->
                        <input placeholder="Type here" 
                        class="mt-[32px] w-[743px] h-[54px] font-medium text-[24px] pl-[33px] font-poppins rounded-2xl text-start">
                        <button class= "mt-[32px] w-[146px] h-[54px] text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-144px] xl:blur font-poppins text-white ">Send</button>
                        <button class= "mt-[32px] w-[146px] h-[54px] text-[24px] font-semibold bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-r-2xl ml-[-144px] absolute font-poppins text-white ">Send</button>
                    </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>