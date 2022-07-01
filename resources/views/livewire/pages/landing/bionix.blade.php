<div class="bg-black font-poppins">
    <div class="md:flex md:flex-col-reverse lg:flex-row items-start pt-1 md:pt-[202px] md:pl-[130px] overflow-hidden">
        <div class="flex flex-col items-start flex-1 text-white mt-36">
            <h1
                class="lg:text-7xl ml-8 md:ml-0 text-5xl md:text-center lg:!text-left font-bold bg-gradient-to-t bg-clip-text text-transparent from-pink-300 to-[#E499FF]">
                Competition <br>
                <span class="text-white">Zone</span>
            </h1>
            <div class="relative mt-16 ml-8 md:ml-0 md:mt-24 md:mb-8 text-center lg:px-2 max-w-fit group">
                <div class="absolute inset-0 ">
                    <a href="#bsl"
                        class="relative transition duration-1000 opacity-75 btn lg:px-8 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">Let's
                        Explore
                    </a>
                </div>
                <a href="#bsl" class="relative lg:px-8 btn">Let's Explore
                </a>
            </div>
        </div>
        <div class="ml-48 w-[210px] -translate-y-24 md:-translate-y-0 flex justify-center flex-1">
            <img src="{{ asset('images/isometric-city-bionix.svg') }}" class="w-full h:full">
        </div>

    </div>
    <div x-data="{ tab: 'bsl' }" class="flex-row items-center justify-center text-white ">

        <div class="flex justify-center gap-4 md:pt-12 px-[37px] md:px-0">
            <button :class="{ 'text-white bg-liteBlack': tab === 'bsl', 'text-[#6B6F75]': tab === 'bcl' }"
                @click.prevent="tab = 'bsl'" class="px-4 py-3 md:px-6 text-xs md:py-4 md:text-base rounded-full ">BIONIX Student Level</button>
            <button :class="{ 'text-white bg-liteBlack': tab === 'bcl', 'text-[#6B6F75]': tab === 'bsl' }"
                @click.prevent="tab = 'bcl'" class="px-4 py-3 md:px-6 text-xs md:py-4 md:text-base rounded-full">BIONIX College
                Level</button>
        </div>

        <!-- BSL Start -->
        <div x-show="tab === 'bsl'" class="flex justify-center">
            <!-- bsl explanation start -->
            <div class="flex-col px-5 md:w-3/4 md:p-4 text-center font-poppins">
                <div class="md:px-[10px] md:pt-24 pt-[43.5px]">
                    <h1 class="md:text-2xl text-[19.25px] font-bold font-poppins">Bionix Student Level</h1>
                    <p class="md:mt-10 mt-[12px] md:text-lg font-poppins text-center text-[#B5B3BC] md:mx-48 mx-8 text-[14.6px]">Olimpiade bisnis dan IT 
                        untuk siswa/i SMA/SMK seluruh Indonesia dan kompetisi inovasi bisnis dengan memanfaatkan kemajuan 
                        teknologi  dalam  bentuk business plan
                    </p>
                </div>
            <!-- bsl explanation end -->

            <!-- IS class start pc-->
                <h1 class="text-white font-poppins font-bold text-[28px] md:text-[64px] pt-[65px] md:mt-[211px]">IS Class</h1>
                <div class="swiper mySwiper w-[980px] mt-14 font-poppins h-[695px] hidden md:block">
                    <div class="swiper-wrapper">
                        <!-- first carousel -->
                        <div class="flex-col justify-center swiper-slide font-poppins">
                            <div class="overflow-hidden h-[24rem]">
                                <img class="object-cover rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" />
                            </div>
                            <div class="bg-liteBlack rounded-b-lg text-center h-[399px]">
                                <p class="items-center px-24 pt-10 text-lg text-center font-poppins text-[#B5B3BC]">Konsep terbaru dari
                                    BIONIX Student Level yang ditujukan untuk memberikan pengalaman seputar keilmuan,
                                    kehidupan perkuliahan, dan keprofesian dari Departemen Sistem Informasi ITS dalam
                                    bentuk simulasi perkuliahan dengan beberapa materi sesuai dengan kurikulum dan
                                    disampaikan oleh dosen Sistem Informasi ITS selama masa belajar mengajar
                                    berlangsung.</p>
                                <div class="flex flex-row justify-center mt-12 space-x-4 font-poppins text-base items-center">
                                    <div>
                                        <button 
                                            class="px-3 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center mx-auto">
                                            <svg
                                                class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                                                    stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Download Guidebook</button>
                                    </div>
                                    <div>
                                        <button class="px-16 py-2 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- second carousel -->
                        <div class="grid grid-cols-8 gap-4 swiper-slide">
                            <div 
                                class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
                                <div class="flex flex-row ">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-white font-poppins ">Info & Facts</h1>
                                        <p class="text-2xl text-liteGray font-poppins">Kesempatan memperoleh info dan
                                            fakta menarik tentang Departemen Sistem Informasi ITS</p>
                                    </div>
                                    <img class="mt-20 w-52" src="{{ asset('images/sit-laptop.png') }}" alt="">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-liteGray to-white h-[330px]  rounded-lg col-span-3 px-6 py-8 text-start">
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-black font-poppins">Discount</h1>
                                        <p class="text-2xl text-[#555555] font-poppins">Potongan biaya pedaftaran BIONIX
                                            Student Level</p>
                                    </div>
                                    <img class="w-52 mt-36 -ml-28" src="{{ asset('images/cash-promo.svg') }}"
                                        alt="money promo">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-purple-100 to-purple-400 h-[330px] rounded-lg col-span-3 px-6 py-8 text-start">
                                <div class="flex flex-col">
                                    <h1 class="text-2xl font-bold text-white font-poppins">Certificate</h1>
                                    <p class="text-2xl text-[#EAEAEA] font-poppins">Daftar dan dapatkan e-certificate
                                    </p>
                                    <img class="w-32 mt-12 ml-14" src="{{ asset('images/sertif.svg') }}"
                                        alt="purple certificate">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-[#E7BAF7] to-[#F7E9FC]  h-[330px] rounded-lg col-span-5 px-6 py-8 text-start">
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-black font-poppins">Course Material</h1>
                                        <p class="text-2xl text-[#555555] font-poppins">Materi perkuliahan dasar
                                            Departemen Sistem Informasi ITS</p>
                                    </div>
                                    <img class="mt-24 w-60 " src="{{ asset('images/js-phone-thumbs.svg') }}"
                                        alt="phone thumbs">
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Carousel Button -->
                    <div class="p-6 -mr-1 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 -ml-1 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>
            <!-- IS classs pc end -->

            <!-- IS class mobile start -->
                <div class="swiper mySwiper mt-[22px] font-poppins w-[316px] h-[534px] md:hidden block">
                    <div class="swiper-wrapper">
                        <!-- first carousel -->
                        <div class="flex-col justify-center swiper-slide font-poppins">
                            <div class="overflow-hidden h-[137px]">
                                <img class="object-cover rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" />
                            </div>
                            <div class="bg-liteBlack rounded-b-lg text-center h-[399px]">
                                <p class="items-center px-[40px] pt-[18px] text-sm text-center font-poppins text-[#B5B3BC]">Konsep terbaru dari
                                    BIONIX Student Level yang ditujukan untuk memberikan pengalaman seputar keilmuan,
                                    kehidupan perkuliahan, dan keprofesian dari Departemen Sistem Informasi ITS dalam
                                    bentuk simulasi perkuliahan dengan beberapa materi sesuai dengan kurikulum dan
                                    disampaikan oleh dosen Sistem Informasi ITS selama masa belajar mengajar
                                    berlangsung.</p>
                                <div class="flex flex-col-reverse justify-center mt-[27px] gap-3 font-poppins text-[12px] items-center">
                                    <div>
                                        <button 
                                            class="py-1/2 px-4 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center mx-auto">
                                            <svg
                                                class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                                                    stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Download Guidebook</button>
                                    </div>
                                    <div>
                                        <button class="px-8 py-1.5 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- second carousel if mobile -->
                        <div class="swiper-slide bg-liteBlack h-[292px] rounded-2xl text-start p-4">
                            <div class="flex flex-row">
                                <div class="flex flex-col">
                                    <h1 class="text-[14.6px] md:text-2xl font-bold text-white font-poppins">Info & Facts</h1>
                                    <p class="text-[14.6px] md:text-2xl text-liteGray font-poppins">Kesempatan memperoleh info dan
                                        fakta menarik tentang Departemen Sistem Informasi ITS</p>
                                </div>
                                <img class="mt-20 w-52" src="{{ asset('images/sit-laptop.png') }}" alt="">
                            </div>
                        </div>

                        <!-- third carousel if mobile -->

                        <!-- fourth carousel if mobile -->

                        <!-- fifth carousel if mobile -->

                    </div>
                <!-- Carousel Button -->
                    <div class="p-1 md:p-6 -mr-1 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-1 md:p-6 -ml-1 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>
                


                <!-- Start Competition -->
                <h1 class="text-white font-poppins font-bold text-[28px] md:text-[64px] pt-[32px] md:pt-[65px] md:mt-[211px]">Competition</h1>
                <div class="swiper mySwiper md:w-[980px] md:mt-14 mt-[22px] font-poppins w-[316px] md:h-[695px] h-[534px]">
                    <div class="swiper-wrapper">
                        <!-- first carousel -->
                        <div class="flex-col justify-center swiper-slide font-poppins">
                            <div class="overflow-hidden md:h-[24rem] h-[137px]">
                                <img class="object-cover rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" />
                            </div>
                            <div class="bg-liteBlack rounded-b-lg text-center h-[399px]">
                                <p class="items-center px-[40px] md:px-24 pt-[18px] md:pt-10 md:text-lg text-sm text-center font-poppins text-[#B5B3BC]">
                                    Rangkaian kompetisi berupa seleksi olimpiade tingkat nasional yang 
                                    terbagi dalam beberapa region di Indonesia berdasarkan empat bidang keilmuan sistem informasi yaitu teknologi 
                                    informasi, pemrograman, logika matematika, dan manajemen bisnis serta Semifinal Proposal dan Video Business Plan, 
                                    Final Presentasi Bisnis, dan terakhir Awarding Night.</p>
                                <div class="flex flex-col-reverse md:flex-row justify-center md:mt-12 mt-[27px] md:space-x-4 gap-3 font-poppins md:text-base text-[12px] items-center">
                                    <div>
                                        <button 
                                            class="md:px-3 md:py-1 py-1/2 px-4 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center mx-auto">
                                            <svg
                                                class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                                                    stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Download Guidebook</button>
                                    </div>
                                    <div>
                                        <button class="md:px-16 px-8 md:py-2 py-1.5 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- second carousel -->
                        <div class="hidden md:block">
                            <div class="grid grid-cols-8 gap-4 swiper-slide">
                                <div class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-white font-poppins">Free Pass</h1>
                                            <p class="text-2xl text-liteGray font-poppins">Dapatkan Free Pass Departemen 
                                            Sistem Informasi ITS</p>
                                        </div>
                                        <img class="w-48 mt-32" src="{{ asset('images/mail-star.svg') }}" alt="mail star">
                                    </div>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-purple-100 to-purple-400 h-[330px] rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-white font-poppins">E-Certificate</h1>
                                        <p class="text-2xl text-[#EAEAEA] font-poppins">Daftar dan dapatkan
                                        e-certificate</p>
                                        <img class="w-32 mt-8 ml-14" src="{{ asset('images/sertif.svg') }}"
                                            alt="purple certificate">
                                    </div>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-liteGray to-white h-[330px]  rounded-lg col-span-3 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">1 Try Out Pack</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Dapatkan 
                                            1 paket TRY OUT bagi peserta yang mendaftar saat roadshow</p>
                                        </div>
                                        <img class="mt-32 -mr-8 w-52" src="{{ asset('images/love-folder.svg') }}"
                                            alt="love folder">
                                    </div>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-[#BBBAF7] to-[#E9F4FC]  h-[330px] rounded-lg col-span-5 px-6 py-8 text-start">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col">
                                            <h1 class="text-2xl font-bold text-black font-poppins">2 Try Out Packs</h1>
                                            <p class="text-2xl text-[#555555] font-poppins">Kesempatan memperoleh
                                            2 paket Try Out Olimpiade beserta pembahasan</p>
                                        </div>
                                        <img class="mt-20 mr-4 w-52" src="{{ asset('images/thumbs-folder.svg') }}"
                                            alt="thumbs folder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Carousel button -->
                    <div class="p-1 md:p-6 -mr-1 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-1 md:p-6 -ml-1 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>
                <!-- End Competition -->

                <!-- Start prizes -->
                <div class="text-4xl md:text-6xl text-white font-bold mt-36 md:w-[537px] md:mx-auto">
                    Join and earn <a
                        class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> fantastic
                    </a> prizes
                </div>

                <div class="relative font-poppins">
                    <img class="left-0 right-0 mx-auto w-full h-full" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="absolute md:text-2xl text-xs transform -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2">Total
                        Prizes</h1>
                    <h1 class="absolute mt-4 w-64 md:w-96 text-xl md:text-3xl font-bold transform -translate-x-1/2 top-3/4 left-1/2">Up to Rp
                        10.000.000</h1>
                </div>
                <!-- End Prizes -->

                <!-- Timeline Start -->
                <div class="my-36">
                    <h1 class="mb-24 font-bold text-white font-poppins text-5xl md:text-7xl">Mark your calender and <br> follow the
                        <span
                            class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
                    </h1>
                    <div class="container mx-auto">
                        <ol class="items-center justify-center lg:flex">
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">16 Jul - 14
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
                                        IS Class</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">27 - 28
                                    Agu</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins pb-7">IS Class</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">16 Jul - 11
                                    Sep
                                </time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Open Regis <br> BSL</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">3 & 12
                                    Sep</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Tryout <br>
                                        1 & 2</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">17 & 24
                                    Sep</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Penyisihan <br> 1 &
                                        2</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-6 mb-2 text-lg font-medium text-white font-poppins">01 Oct - 20
                                    Oct</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins pb-7">Semifinal</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block mb-2 text-lg font-medium text-white font-poppins">12 Nov 2022
                                </time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Final & <br>
                                        Awarding</h3>
                                </div>
                            </li>
                        </ol>

                    </div>
                    <!-- Timeline End -->
                </div>

            </div>
        </div>
        <!-- BSL End -->

        <!-- BCL Start -->
        <div x-show="tab === 'bcl'" class="flex justify-center">
            <div class="flex-col px-5 md:w-3/4 md:p-4  text-center font-poppins">
                <div class="md:px-[100px]  pt-24">
                    <h1 class="text-2xl font-bold ">Bionix College Level</h1>
                    <p class="text-lg mt-10  text-[#B5B3BC] text-center">Hadir dengan konsep startup business plan yang
                        akan mengasah skill kreativitas dan problem solving mahasiswa Indonesia dalam mengatasi
                        permasalahan yang ada melalui sebuah ide bisnis kreatif di bidang startup dengan memanfaatkan
                        kemajuan teknologi</p>
                </div>
                <div class="flex flex-col md:flex-row justify-center mt-12 md:space-x-4 font-poppins">
                    <button
                        class="md:px-3 md:mx-0 mx-16 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center"><svg
                            class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                                stroke="#B221E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Download Guidebook</button>
                    <button
                        class="my-6 py-2 md:mx-0 mx-28 md:my-0 md:px-16 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                </div>
                <div class="text-4xl md:text-6xl text-white font-bold mt-16 md:mt-[220px] md:w-[600px] md:mx-auto">
                    Many <a class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> benefit
                    </a> that you can get.
                </div>

                <div class="mx-auto md:w-[980px] mt-16 md:mt-36 flex flex-col gap-8 md:grid md:grid-cols-6 md:gap-4">
                    <div class="bg-gradient-to-r from-purple-75 to-purple-300 md:h-[330px] rounded-2xl col-span-2  ">
                        <div class="flex flex-col md:my-0 my-8 mx-4 md:mx-4 text-2xl text-left pr-18">

                            <a class="md:mt-8 my-2 text-lg md:text-2xl font-bold">E-certificate</a>
                           

                            <a class="md:mr-16 text-sm text-[#EAEAEA] md:text-base">Daftar dan dapatkan e-certificate</a>

                            <img class="mx-auto w-20 mt-10 mr-28 md:mx-[80px] md:my-16 md:w-28" src="{{ asset('images/sertif.svg') }}"
                                alt="purple certificate">

                        </div>
                    </div>
                    <div class="bg-liteBlack md:h-[330px] md:py-0 py-5 rounded-2xl col-span-4 ">
                        <div class="flex flex-col md:flex-row mx-4 text-2xl text-left pr-18">
                            <div class="flex flex-col">
                                <a class="md:mt-[49px] text-lg md:text-2xl font-bold">Incubation</a>

                                <a class="text-liteGray md:text-base md:mr-0 mr-12 text-sm md:w-[272px]">Kesempatan inkubasi dengan perusahaan inkubator yang
                                    bekerja sama dengan ISE!2022</a>
                            </div>
                            <img class="md:block hidden md:pt-[121px] ml-[80px]" src="{{ asset('images/workInDesk.png') }}"
                                alt="purple certificate">
                            <img class="md:hidden block w-[250px] h-[250px] ml-16" src="{{ asset('images/m_workInDesk.png') }}"
                                alt="purple certificate">

                        </div>
                    </div>
                    <div class=" bg-gradient-to-t from-pink-300 to-purple-300 md:py-0 py-5 md:h-[330px] rounded-2xl col-span-6">
                        <div class="flex flex-col md:flex-row mx-4 text-2xl text-left md:pr-18">
                            <div class="flex flex-col md:ml-8 ">
                                <a class="md:mt-[49px] text-lg md:text-2xl text-[#FFFFFF] font-bold">Mentoring</a>

                                <a class="text-liteGray text-sm md:text-base md:w-[501px] md:h-[114] mt-2">terkait ide bisnis yang dikembangkan
                                    bersama dengan pemateri yang kompeten pada bidang bisnis dan teknologi informasi</a>
                            </div>
                            <img class="md:block hidden md:pt-[63px] md:ml-[70px]" src="{{ asset('images/present.svg') }}"
                                alt="purple certificate">
                            <img class="md:hidden block w-[300px] h-[300px] ml-4" src="{{ asset('images/m_present.svg') }}"
                                alt="purple certificate">

                        </div>
                    </div>

                


                </div>

                <div class="text-4xl md:text-6xl text-white font-bold mt-36 md:w-[537px] md:mx-auto ">
                    Join and earn <a
                        class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> fantastic
                    </a> prizes
                </div>
                
                <div class="relative font-poppins">
                    <img class="left-0 right-0 mx-auto" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="absolute md:text-2xl text-xs transform -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2">Total
                        Prizes</h1>
                    <h1 class="absolute mt-4 w-64 md:w-96 text-xl md:text-3xl font-bold transform -translate-x-1/2 top-3/4 left-1/2 ">Up to Rp
                        10.000.000</h1>
                </div>


                <!-- Timeline Start -->
                <div class="my-36">
                    <h1 class="mb-24 font-bold text-white font-poppins text-5xl md:text-7xl">Mark your calender and <br> follow the
                        <span
                            class="text-transparent bg-gradient bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">excitement</span>
                    </h1>
                    <div class="container mx-auto">
                        <ol class="items-center justify-center lg:flex">
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">21 Aug - 21
                                    Sep</time>
                                <div class="flex items-center justify-center overflow-hidden">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 shrink-0">
                                    </div>
                                    <div class="hidden lg:flex w-1/2 absolute right-0 h-2 bg-[#333333]">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Pendaftaran
                                    </h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">21 Sep - 10
                                    Oct</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Semifinal</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">22 Oct - 10
                                    Nov</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Mentoring</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block px-12 mb-2 text-lg font-medium text-white font-poppins">13 Nov
                                </time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-full h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Final</h3>
                                </div>
                            </li>
                            <li class="relative mb-6 sm:mb-0">
                                <time class="block mb-2 text-lg font-medium text-white font-poppins">19 Nov</time>
                                <div class="relative flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 mx-auto rounded-full bg-gradient-to-r from-pink-300 to-purple-300 dark:bg-blue-900 dark:ring-gray-900">
                                    </div>
                                    <div class="hidden lg:flex absolute w-1/2 left-0 h-2 bg-[#333333]"></div>
                                </div>
                                <div class="mt-3">
                                    <h3 class="text-lg font-semibold text-white font-poppins">Awarding</h3>
                                </div>
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- Timeline End -->

            </div>
            <!--nutup BCL -->
        </div>

    </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
