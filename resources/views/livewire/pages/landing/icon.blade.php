
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
            <img src="{{ asset('images/isometric-city-bionix.svg') }}" class="w-full h:full" >
        </div>
        
    </div> 
        <div x-data="{tab: 'bsl'}" class="text-white flex-row justify-center items-center  ">

            <div class="justify-center flex pt-72 gap-4">
                <button href="#" @click.prevent="tab = 'bsl'" class="px-3 py-2 bg-[#1F1F1F] rounded-full text-base">BIONIX Student Level</button>
                <button href="#" @click.prevent="tab = 'bcl'" class="px-3 py-2 bg-[#1F1F1F] rounded-full text-base"  >BIONIX College Level</button>
            </div>

            <div x-show="tab === 'bsl'" class="flex justify-center">
                <div class="w-3/4 flex-col mt-32 text-center p-4">
                    <div class="px-[100px] pt-[119px]">
                        <h1 class="font-bold text-2xl font-poppins">Bionix Student Level</h1>
                        <p class="mt-10 text-lg font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ex, culpa nihil fuga sequi ab. Iusto accusamus eos minima libero, soluta culpa quidem quam corrupti iure quae ratione earum in ipsam. Possimus consequatur ea omnis, maiores quas minus aspernatur cumque maxime sint debitis veniam provident dolores molestiae quia rerum nostrum ex officiis corrupti voluptatem porro? Cum, blanditiis! Iusto ex omnis maiores quae magnam eaque, aut alias, ab, deleniti exercitationem consequatur.</p>
                    </div>
                    <h1 class="text-white font-poppins font-bold text-[64px] mt-[211px]">IS Class</h1>
                    <div class="swiper mySwiper w-[980px] mt-14 font-poppins ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex-col justify-center font-poppins px-24">
                                <img class="w-[980px] rounded-t-lg h-[355px] " src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                <div class="bg-liteBlack rounded-b-lg text-center w-[789px] h-[305px]">
                                    <p class="pt-10 px-24 text-center text-lg items-center font-poppins">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, sunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa reiciendis, exercitationem modi, laudantium labore amet quasi explicabo earum odit deserunt repellat mollitia distinctio incidunt.</p>
                                    <button class="px-10 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-10 font-poppins">Register</button>
                                </div>
                            </div>
                            <div class="swiper-slide grid grid-cols-8 gap-4 px-24">
                                <div class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
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

                    <h1 class="text-white font-poppins font-bold text-[64px] mt-[100px]">Competition</h1>
                    <div class="swiper mySwiper w-[980px] mt-14 font-poppins">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide flex-col justify-center font-poppins px-24 ">
                                <img class="w-[980px] rounded-t-lg h-[355px]" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                <div class="bg-liteBlack rounded-b-lg text-center w-[789px] h-[305px]">
                                    <p class="pt-10 px-24 text-center text-lg items-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, sunt? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa reiciendis, exercitationem modi, laudantium labore amet quasi explicabo earum odit deserunt repellat mollitia distinctio incidunt vero.</p>
                                    <button class="px-10 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-10">Register</button>
                                </div>
                            </div>
                            <div class="swiper-slide grid grid-cols-8 gap-4 px-24">
                                <div class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-white font-poppins">Info & Facts</h1>
                                            <p class="text-2xl text-liteGray font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam hic consequuntur sit harum, eius aliquid aut assumenda repellendus deleniti soluta!</p>
                                        </div>
                                        <img class="w-48 mt-32" src="{{ asset('images/mail-star.svg') }}" alt="mail star">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-purple-100 to-purple-400 h-[330px] rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-white font-poppins">Certificate</h1>
                                        <p class="text-2xl text-[#EAEAEA] font-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <img class="w-32 mt-8 ml-14" src="{{ asset('images/sertif.svg') }}" alt="purple certificate">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-liteGray to-white h-[330px]  rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">Discount</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Lorem quuntur assumenda repellendus deleniti soluta!</p>
                                        </div>
                                        <img class="w-52 mt-32 -mr-8" src="{{ asset('images/love-folder.svg') }}" alt="love folder">
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-[#BBBAF7] to-[#E9F4FC]  h-[330px] rounded-lg col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">Course Material</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Lorem quuntur assumenda repellendus deleniti soluta!</p>
                                        </div>
                                        <img class="w-52 mt-20 mr-4" src="{{ asset('images/thumbs-folder.svg') }}" alt="thumbs folder">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next -mr-1 bg-liteBlack rounded-full p-6"></div>
                        <div class="swiper-button-prev -ml-1 bg-liteBlack rounded-full p-6"></div>

                        

                    </div>
                    <div class="text-6xl text-white font-bold mt-36 md:w-[537px] md:mx-auto ">
                    Join and earn <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text"> fantastic </a> prizes
                </div>

                <div class="font-poppins relative">
                    <img class="ml-44 w-3/4" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="text-2xl ml-6 absolute top-3/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Total Prizes</h1>
                    <h1 class="text-3xl ml-6 mt-4 absolute top-3/4 left-1/2 transform -translate-x-1/2 font-bold ">Up to Rp 10.000.000</h1>
                </div>

                <div class="text-6xl text-white font-bold ml-12 mt-36 md:w-[950px] md:mx-auto mb-12 ">
                Mark your calender and follow the <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text">excitement</a> 
                </div>

                </div>
            </div>

            <div x-show="tab === 'bcl'" class="flex justify-center">
            <div class="w-3/4 flex-col mt-32 text-center p-4 font-poppins">
                <h1 class="text-2xl text-bold ">Bionix College Level</h1>
                <p class="text-lg mt-2  text-[#B5B3BC] text-center md:px-[246px]">Hadir dengan konsep startup business plan yang akan mengasah skill kreativitas dan problem solving mahasiswa Indonesia dalam mengatasi permasalahan yang ada melalui sebuah ide bisnis kreatif di bidang startup dengan memanfaatkan kemajuan teknologi</p>
                <div class="flex flex-row justify-center space-x-4 mt-12 font-poppins">
                    <button class="px-3 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center  justify-center"><svg class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502" stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Download Guidebook</button>
                    <button class="px-16 py-1 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full">Register</button>
                </div>
                <div class="text-6xl text-white font-bold mt-[220px] md:w-[600px] md:mx-auto">
                    Many <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text"> benefit </a> that you can get.
                </div>

                <div class="ml-28 w-[980px] mt-36  grid grid-cols-6 gap-4">
                    <div class="bg-gradient-to-r from-purple-75 to-purple-300 h-[330px] rounded-2xl col-span-2  ">
                        <div class="text-2xl mx-4 pr-18  flex flex-col text-left">

                            <a class="mt-8 text-2xl font-bold">Certificate</a>

                            <a class="mr-16 ">Daftar dan dapatkan e-certificate</a>

                            <img class="w-30 mt-16 mx-auto" src="{{ asset('images/sertif.svg') }}" alt="purple certificate">

                        </div>
                    </div>
                    <div class="bg-liteBlack h-[330px]  rounded-2xl col-span-4 ">
                        <div class="text-2xl mx-4 pr-18  flex flex-row text-left">
                              <div class="flex flex-col">  
                            <a class="mt-[49px] text-2xl font-bold">Incubation</a>

                            <a class="text-liteGray w-[272px]">Kesempatan inkubasi dengan perusahaan inkubator yang bekerja sama dengan ISE!2022</a>
                            </div>
                            <img class="pt-[121px] ml-[80px]" src="{{ asset('images/workInDesk.png') }}" alt="purple certificate">

                        </div>
                    </div>
                    <div class=" bg-gradient-to-t from-pink-300 to-purple-300  h-[330px] rounded-2xl col-span-6">
                    <div class="text-2xl mx-4 pr-18  flex flex-row text-left">
                              <div class="flex flex-col ml-8 ">  
                            <a class="mt-[49px] text-2xl font-bold">Mentoring</a>

                            <a class="text-liteGray w-[501px] h-[114] mt-2">terkait ide bisnis yang dikembangkan bersama dengan pemateri yang kompeten pada bidang bisnis dan teknologi informasi</a>
                            </div>
                            <img class="pt-[63px] ml-[70px]" src="{{ asset('images/present.svg') }}" alt="purple certificate">

                        </div>
                    </div>

                   
                </div>
                <div class="text-6xl text-white font-bold md:w-[537px] mt-24 mb-12 md:mx-auto ">
                    Join and earn <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text"> fantastic </a> prizes
                </div>

                <div class="font-poppins relative ">
                    <img class="ml-44 w-3/4" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="text-2xl ml-6 absolute top-3/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2">Total Prizes</h1>
                    <h1 class="text-3xl ml-6 mt-4 absolute top-3/4 left-1/2 transform -translate-x-1/2 font-bold ">Up to Rp 10.000.000</h1>
                </div>

                <div class="text-6xl text-white font-bold mt-36 ml-12 md:w-[950px] md:mx-auto mb-12 ">
                Mark your calender and follow the <a class="bg-gradient-to-r from-pink-300 to-purple-300 text-transparent bg-clip-text">excitement</a> 
                </div>

            </div> <!--nutup bsl -->
            </div>

        </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>