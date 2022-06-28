<div class="bg-black font-poppins">
    <div class="flex flex-col-reverse lg:flex-row items-start pt-[202px]">
        <div class="flex flex-col items-start flex-1 ml-24 text-white">
            <h1
                class="lg:text-7xl text-center lg:!text-left font-bold bg-gradient-to-t bg-clip-text text-transparent from-pink-300 to-[#E499FF]">
                Competition <br>
                <span class="text-white">Zone</span>
            </h1>
            <div class="relative mt-24 mb-8 text-center lg:px-2 max-w-fit group">
                <div class="absolute inset-0 ">
                    <a href="#bsl"
                        class="relative transition duration-1000 opacity-75 btn lg:px-8 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                        Explore
                    </a>
                </div>
                <a href="#bsl" class="relative lg:px-8 btn">Let's Explore
                </a>
            </div>
        </div>
        <div class="flex justify-center flex-1">
            <img src="{{ asset('images/isometric-city-bionix.svg') }}" class="w-full h:full">
        </div>

    </div>
    <div x-data="{ tab: 'bsl' }" class="flex-row items-center justify-center text-white ">

        <div class="flex justify-center gap-4 pt-12">
            <button :class="{ 'text-white bg-liteBlack': tab === 'bsl', 'text-[#6B6F75]': tab === 'bcl' }"
                @click.prevent="tab = 'bsl'" class="px-6 py-4 text-base rounded-full ">BIONIX Student Level</button>
            <button :class="{ 'text-white bg-liteBlack': tab === 'bcl', 'text-[#6B6F75]': tab === 'bsl' }"
                @click.prevent="tab = 'bcl'" class="px-6 py-4 text-base rounded-full">BIONIX College
                Level</button>
        </div>

        <!-- BSL Start -->
        <div x-show="tab === 'bsl'" class="flex justify-center">
            <div class="flex-col w-full p-4 mt-8 text-center">
                <div class="px-[100px] pt-24">
                    <h1 class="text-2xl font-bold font-poppins">Bionix Student Level</h1>
                    <p class="mt-10 text-lg font-poppins  text-[#B5B3BC] mx-48">Olimpiade bisnis dan IT untuk siswa/i
                        SMA/SMK
                        sederajat di seluruh Indonesia di mana para peserta akan ditantang untuk belajar dan
                        memanfaatkan kemajuan teknologi untuk terus berinovasi. Rangkaian BIONIX Student Level ini
                        terbagi menjadi dua kegiatan, yaitu IS Class dan Competition.
                    </p>
                </div>
                <h1 class="text-white font-poppins font-bold text-[64px] mt-[211px]">IS Class</h1>
                <div class="swiper mySwiper w-[980px] mt-14 font-poppins ">
                    <div class="swiper-wrapper">
                        <div class="flex-col justify-center swiper-slide font-poppins">
                            <div class="overflow-hidden h-[24rem]">
                                <img class="object-cover rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" />
                            </div>
                            <div class="bg-liteBlack rounded-b-lg text-center h-[305px]">
                                <p class="items-center px-24 pt-10 text-lg text-center font-poppins">Konsep terbaru dari
                                    BIONIX Student Level yang ditujukan untuk memberikan pengalaman seputar keilmuan,
                                    kehidupan perkuliahan, dan keprofesian dari Departemen Sistem Informasi ITS dalam
                                    bentuk simulasi perkuliahan dengan beberapa materi sesuai dengan kurikulum dan
                                    disampaikan oleh dosen Sistem Informasi ITS selama masa belajar mengajar
                                    berlangsung.</p>
                                <button
                                    class="px-10 py-2 mt-10 rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins">Register</button>
                            </div>
                        </div>
                        <div class="grid grid-cols-8 gap-4 swiper-slide">
                            <div class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
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
                    <div class="p-6 -mr-1 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 -ml-1 rounded-full swiper-button-prev bg-liteBlack"></div>
                </div>

                <h1 class="text-white font-poppins font-bold text-[64px] mt-[100px]">Competition</h1>
                <div class="swiper mySwiper w-[980px] mt-14 font-poppins">
                    <div class="swiper-wrapper">
                        <div class="flex-col justify-center swiper-slide font-poppins ">
                            <div class="h-[24rem] overflow-hidden">
                                <img class="object-cover w-full rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" />
                            </div>
                            <div class="bg-liteBlack rounded-b-lg text-center w-full h-[305px]">
                                <p class="items-center pt-10 text-lg text-center">Lorem ipsum dolor, sit amet
                                    consectetur adipisicing elit. Cupiditate, sunt? Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Culpa reiciendis, exercitationem modi, laudantium
                                    labore amet quasi explicabo earum odit deserunt repellat mollitia distinctio
                                    incidunt vero.</p>
                                <button
                                    class="px-10 py-2 mt-10 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                            </div>
                        </div>
                        <div class="grid grid-cols-8 gap-4 swiper-slide">
                            <div class="bg-liteBlack h-[330px] rounded-2xl col-span-5 px-6 py-8 text-start">
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-white font-poppins">Info & Facts</h1>
                                        <p class="text-2xl text-liteGray font-poppins">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Ullam hic consequuntur sit harum, eius aliquid
                                            aut assumenda repellendus deleniti soluta!</p>
                                    </div>
                                    <img class="w-48 mt-32" src="{{ asset('images/mail-star.svg') }}" alt="mail star">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-purple-100 to-purple-400 h-[330px] rounded-lg col-span-3 px-6 py-8 text-start">
                                <div class="flex flex-col">
                                    <h1 class="text-2xl font-bold text-white font-poppins">Certificate</h1>
                                    <p class="text-2xl text-[#EAEAEA] font-poppins">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit.</p>
                                    <img class="w-32 mt-8 ml-14" src="{{ asset('images/sertif.svg') }}"
                                        alt="purple certificate">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-liteGray to-white h-[330px]  rounded-lg col-span-3 px-6 py-8 text-start">
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-black font-poppins">Discount</h1>
                                        <p class="text-2xl text-[#555555] font-poppins">Lorem quuntur assumenda
                                            repellendus deleniti soluta!</p>
                                    </div>
                                    <img class="mt-32 -mr-8 w-52" src="{{ asset('images/love-folder.svg') }}"
                                        alt="love folder">
                                </div>
                            </div>
                            <div
                                class="bg-gradient-to-r from-[#BBBAF7] to-[#E9F4FC]  h-[330px] rounded-lg col-span-5 px-6 py-8 text-start">
                                <div class="flex flex-row">
                                    <div class="flex flex-col">
                                        <h1 class="text-2xl font-bold text-black font-poppins">Course Material</h1>
                                        <p class="text-2xl text-[#555555] font-poppins">Lorem quuntur assumenda
                                            repellendus deleniti soluta!</p>
                                    </div>
                                    <img class="mt-20 mr-4 w-52" src="{{ asset('images/thumbs-folder.svg') }}"
                                        alt="thumbs folder">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 -mr-1 rounded-full swiper-button-next bg-liteBlack"></div>
                    <div class="p-6 -ml-1 rounded-full swiper-button-prev bg-liteBlack"></div>



                </div>
                <div class="text-6xl text-white font-bold mt-36 md:w-[537px] md:mx-auto ">
                    Join and earn <a
                        class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> fantastic
                    </a> prizes
                </div>

                <div class="relative font-poppins">
                    <img class="left-0 right-0 mx-auto" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="absolute text-2xl transform -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2">Total
                        Prizes</h1>
                    <h1 class="absolute mt-4 text-3xl font-bold transform -translate-x-1/2 top-3/4 left-1/2 ">Up to Rp
                        10.000.000</h1>
                </div>

                <!-- Timeline Start -->
                <div class="my-36">
                    <h1 class="mb-24 font-bold text-white font-poppins text-7xl">Mark your calender and <br> follow the
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
            <div class="flex-col w-3/4 p-4 text-center font-poppins">
                <div class="px-[100px] pt-24">
                    <h1 class="text-2xl font-bold ">Bionix College Level</h1>
                    <p class="text-lg mt-10  text-[#B5B3BC] text-center">Hadir dengan konsep startup business plan yang
                        akan mengasah skill kreativitas dan problem solving mahasiswa Indonesia dalam mengatasi
                        permasalahan yang ada melalui sebuah ide bisnis kreatif di bidang startup dengan memanfaatkan
                        kemajuan teknologi</p>
                </div>
                <div class="flex flex-row justify-center mt-12 space-x-4 font-poppins">
                    <button
                        class="px-3 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center  justify-center"><svg
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
                        class="px-16 py-1 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">Register</button>
                </div>
                <div class="text-6xl text-white font-bold mt-[220px] md:w-[600px] md:mx-auto">
                    Many <a class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> benefit
                    </a> that you can get.
                </div>

                <div class="mx-auto w-[980px] mt-36  grid grid-cols-6 gap-4">
                    <div class="bg-gradient-to-r from-purple-75 to-purple-300 h-[330px] rounded-2xl col-span-2  ">
                        <div class="flex flex-col mx-4 text-2xl text-left pr-18">

                            <a class="mt-8 text-2xl font-bold">Certificate</a>

                            <a class="mr-16 ">Daftar dan dapatkan e-certificate</a>

                            <img class="mx-auto mt-16 w-30" src="{{ asset('images/sertif.svg') }}"
                                alt="purple certificate">

                        </div>
                    </div>
                    <div class="bg-liteBlack h-[330px]  rounded-2xl col-span-4 ">
                        <div class="flex flex-row mx-4 text-2xl text-left pr-18">
                            <div class="flex flex-col">
                                <a class="mt-[49px] text-2xl font-bold">Incubation</a>

                                <a class="text-liteGray w-[272px]">Kesempatan inkubasi dengan perusahaan inkubator yang
                                    bekerja sama dengan ISE!2022</a>
                            </div>
                            <img class="pt-[121px] ml-[80px]" src="{{ asset('images/workInDesk.png') }}"
                                alt="purple certificate">

                        </div>
                    </div>
                    <div class=" bg-gradient-to-t from-pink-300 to-purple-300  h-[330px] rounded-2xl col-span-6">
                        <div class="flex flex-row mx-4 text-2xl text-left pr-18">
                            <div class="flex flex-col ml-8 ">
                                <a class="mt-[49px] text-2xl font-bold">Mentoring</a>

                                <a class="text-liteGray w-[501px] h-[114] mt-2">terkait ide bisnis yang dikembangkan
                                    bersama dengan pemateri yang kompeten pada bidang bisnis dan teknologi informasi</a>
                            </div>
                            <img class="pt-[63px] ml-[70px]" src="{{ asset('images/present.svg') }}"
                                alt="purple certificate">

                        </div>
                    </div>

                


                </div>

                <div class="text-6xl text-white font-bold mt-36 md:w-[537px] md:mx-auto ">
                    Join and earn <a
                        class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"> fantastic
                    </a> prizes
                </div>
                
                <div class="relative font-poppins">
                    <img class="left-0 right-0 mx-auto" src="{{ asset('images/trophy.svg') }}" alt="">
                    <h1 class="absolute text-2xl transform -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2">Total
                        Prizes</h1>
                    <h1 class="absolute mt-4 text-3xl font-bold transform -translate-x-1/2 top-3/4 left-1/2 ">Up to Rp
                        10.000.000</h1>
                </div>


                <!-- Timeline Start -->
                <div class="my-36">
                    <h1 class="mb-24 font-bold text-white font-poppins text-7xl">Mark your calender and <br> follow the
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
