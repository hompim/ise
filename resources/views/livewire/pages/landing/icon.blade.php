
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

<div class="bg-black px-[130px] font-poppins">
    <div class="flex flex-col-reverse lg:flex-row items-center pt-[202px]">
        <div class="flex flex-1 flex-col items-start text-white">
            <h1 class="text-8xl text-center lg:text-left font-bold bg-gradient-to-t bg-clip-text text-transparent from-pink-300 to-[#E499FF]">IT</h1>
            <h1 class="text-8xl text-center lg:text-left font-bold">Zone</h1>
            <button class="px-6 py-3 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-24 relative xl:blur font-bold">Let's Explore</button>
            <button class="px-6 py-3 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-[284px] absolute font-bold">Let's Explore</button>
        </div>
        <div class="flex justify-center flex-1">
            <img src="{{ asset('images/isometric-city-icon.svg') }}" class="w-full h:full" >
        </div>
        
    </div> 
        <div x-data="{tab: 'bsl'}" class="text-white flex-row justify-center items-center  ">
            <div x-show="tab === 'bsl'" class="flex justify-center">
                <div class="w-3/4 flex-col mt-32 text-center p-4">
                    <div class="px-[100px] pt-[119px]">
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
                    <div class="swiper mySwiper w-[700px] h-[430px] mt-14 font-poppins ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex-col justify-center font-poppins px-24">
                                <img class="w-[645px] rounded-t-lg h-[420px] " src="./images/rectangle-icon.svg" />
                                <div class=" rounded-b-lg text-center w-[789px] h-[305px]">
                                </div>
                            </div>
                            <div class="swiper-slide grid grid-cols-8 gap-4 px-24">
                                <div class=" h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row ">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-white font-poppins ">Info & Facts</h1>
                                            <p class="text-2xl text-liteGray font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam hic consequuntur sit harum, eius aliquid aut assumenda repellendus deleniti soluta!</p>
                                        </div>
                                        <img class="w-52 mt-20" src="{{ asset('images/sit-laptop.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-liteGray to-white h-[330px]  rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">Discount</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Potongan biaya pedaftaran BIONIX Student Level</p>
                                        </div>
                                        <img class="w-52 mt-36 -ml-28" src="{{ asset('images/cash-promo.svg') }}" alt="money promo">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-purple-100 to-purple-400 h-[330px] rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-white font-poppins">Certificate</h1>
                                        <p class="text-2xl text-[#EAEAEA] font-poppins">Daftar dan dapatkan e-certificate</p>
                                        <img class="w-32 mt-12 ml-14" src="{{ asset('images/sertif.svg') }}" alt="purple certificate">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-[#E7BAF7] to-[#F7E9FC]  h-[330px] rounded-lg col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">Course Material</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Lorem quuntur assumenda repellendus deleniti soluta!</p>
                                        </div>
                                        <img class="w-60 mt-24 " src="{{ asset('images/js-phone-thumbs.svg') }}" alt="phone thumbs">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next -mr-1 bg-liteBlack rounded-full p-6"></div>
                        <div class="swiper-button-prev -ml-1 bg-liteBlack rounded-full p-6"></div>
                    </div>
                    <!--Let's See The Inside-->
                    <div>
                    <h1 class="font-bold text-2xl mt-52 font-poppins">Let's See The Inside</h1>
                    </div>
                    <!--Frame picture-->
                    <div>
                    <img class="justify-center w-[752px] h-[446px] " src="{{ asset('images/frame.svg') }}" alt="">
                    </div>
                    <!--Startup academy slide-->
                    
                    <!--Mark calendar-->
                    <div class="text-6xl text-white font-bold mt-36 ml-12 md:w-[950px] md:mx-auto mb-12 ">
                    Mark your calender and follow the <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text">excitement</a> 
                    </div>

            </div> <!--nutup bsl -->
            </div>

        </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>