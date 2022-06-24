
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
                    <div class="mySwiperIcon">
                    <div class="mySwiper swiper w-[700px] h-[430px] mt-14 font-poppins ">
                    <div class="swiper-wrapper w-[750px]">
                    <!--1 -->
                    <div class="swiper-slide z-50  border-none flex flex-row justify-center font-poppins ">
                        <img class=" rounded-t-lg bg-[#5B1BE1] w-[545px] relative xl:blur " src="./images/rectangle-icon.svg" />
                        <img class=" rounded-t-lg w-[545px] absolute" src="./images/rectangle-icon.svg" />
                    </div>
                    <!--1 -->
                    </div>
                    <div class="swiper-slide z-50 border-none flex flex-row justify-center font-poppins  ">
                            <img class=" rounded-t-lg  w-[545px]" src="./images/rectangle-icon.svg" />
                        </div>
                    <!--1 -->
                    <div class="swiper-slide z-50  border-none flex flex-row justify-center font-poppins ">
                        <img class=" rounded-t-lg w-[545px] " src="./images/rectangle-icon.svg" />
                    </div>
                    
                    </div>
                    
                    </div>
</div>
                    </div>
                    
                    <!--Let's See The Inside-->
                    <div>
                    <h1 class="font-bold text-4xl mt-52 font-poppins text-center">Let's See The Inside</h1>
                    </div>
                    <!--Frame picture-->
                    <div class="flex justify-center">
                    <img class="mt-10 justify-center w-[826px] h-[818px] " src="{{ asset('images/frame.svg') }}" alt="">
                        <!--Icon kecil city-->
                        <div>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[115px] ml-[-480px]" ><img src="{{ asset('images/startup-academy-icon.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[410px] ml-[-168px]" ><img src="{{ asset('images/data-science-icon.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[340px] ml-[-780px]" ><img src="{{ asset('images/grand-is.svg') }}" alt=""></button>
                            <button type="button" class="w-[57px] h[72px] absolute mt-[460px] ml-[-520px]" ><img src="{{ asset('images/hall-is.svg') }}" alt=""></button>
                            
                        </div>
                    </div>
                    <!--Startup academy slide-->
                    <div class="bg-[#191A1E] mx-0 mt-[71px] w-[752px] h-[446px] rounded-2xl flex justify-center pt-[49px] ">
                    <div class="rounded ">
                            <img src="./images/startup-academy.svg" alt="" class="w-[94px] h-[94px] ml-[334px]">
                            <p class="mt-[30px] font-bold font-poppins text-2xl">Startup Academy</p>
                            <p class="ml-[80.5px] mr-[80.5px] mt-[30px] text-lg font-poppins">Startup Academy hadir untuk memberikan fundamental knowledge kepada para akademisi sebagai the next founder of startup.</p>
                            <button class=  "mt-[30px] w-[577px] h-[50px] text-xl font-semibold bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-10 font-poppins">Lebih Lanjut</button>
                        </div>
                    </div>
            </div> <!--nutup bsl -->
            </div>

        </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>