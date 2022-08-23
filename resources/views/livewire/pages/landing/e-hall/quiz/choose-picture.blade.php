<!-- pembahasan quiz -->
<div class="pt-6 md:pt-52 flex flex-col bg-black">
    {{-- Start Quiz Block --}}
    <div class=" mt-32 md:mt-0 mb-[145px] bg-liteBlack mx-6 md:mx-28 h-max rounded-2xl flex flex-col p-[24px] md:p-11">
        <h1 class="text-white text-lg md:text-2xl mx-auto">Quiz (nama startup)</h1>
        <div class="flex flex-col md:flex-row mt-4 gap-14">
            {{-- Left Part --}}
            <div class="flex flex-col">
                <h2 class="text-white">
                    <span class="underline text-2xl underline-offset-4 decoration-purple-300 ">Quiz 2</span>
                    <span class="text-lg ">
                        <span class="text-[#B221E5]">+10</span>
                        <span>Point</span></span>
                </h2>
                <p class="text-sm md:text-lg text-white mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                    est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.
                </p>
                <!-- start: make cards row 1 -->
                <div class="md:flex md:flex-row mt-[46px] mx-auto gap-[50px] md:gap-[74px] pl-0">
                    <div class="flex flex-col">
                        <div class="relative group">
                            <div
                                class="absolute w-[177px] h-[159px] blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] animate-tilt">
                            </div>
                            <div class ="relative w-[177px] h-[159px] bg-[#B5B3BC] text-white text-[20px] text-center pt-[56px] rounded-lg">pic1</div>

                            <div class="w-[177px] h-[46.8px] mt-[12px] bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] rounded-lg ">
                                <!-- pic1 -->
                                <div class="text-white text-[28px] text-center pt-[2px]">
                                    A
                                </div>
                                <!-- pic1 -->
                            </div>

                        </div>
                    </div>

                    <div class="flex flex-col mt-[46px] md:mt-0">
                        <div class="w-[177px] h-[159px] bg-[#B5B3BC] rounded-lg ">
                            <!-- pic2 -->
                            <div class="text-white text-[20px] text-center pt-[56px]">
                                pic2
                            </div>
                            <!-- pic2 -->

                        </div>

                        <div class="w-[177px] h-[46.8px] mt-[12px] bg-[#2F2F2F] rounded-lg ">
                            <!-- pic1 -->
                            <div class="text-white text-[28px] text-center pt-[2px]">
                                B
                            </div>
                            <!-- pic1 -->
                        </div>
                    </div>


                </div>
                <!-- end: make cards row 1 -->

                <!-- start: make cards row 2 -->

                <!-- end: make cards row 2 -->
                <div class="md:flex flex-row gap-7 mt-[36px] hidden">
                    <button class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-[#2F2F2F] w-[58px] h-[58px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Right Part --}}
            <div class="flex flex-col mx-auto">
                <div class="grid grid-cols-2 gap-4 md:px-0 px-12">
                    <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] mx-auto text-white text-2xl font-bold rounded-lg">1</button>
                    <div class="relative group">
                        <div
                            class="absolute w-[56px] md:w-[75px] h-[56px] md:h-[75px] blur-lg opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-300 bg-gradient-to-r from-[#B221E5] to-[#5B1BE1] animate-tilt">
                        </div>
                        <button class ="relative w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] text-white text-2xl font-bold rounded-lg">2</button>
                    </div>
                    {{-- <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">2</button> --}}
                    <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">3</button>
                    <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">4</button>
                </div>
                <button class="mx-auto text-white md:text-xl rounded-lg col-span-2 btn px-8 md:px-10 py-2 mt-8 md:mt-100 font-semibold">Submit</button>
                <div class="flex flex-row gap-7 mx-auto mt-12 md:hidden">
                    <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="bg-[#2F2F2F] w-[35px] h-[35px] text-white items-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>


        </div>

        <!-- start: pembahasan-->
        <div class="divide-y-[1px] mt-[55px] divide-white">
            <h1 class="text-white"></h1>
            <h1 class="text-white pt-[29px] text-[14px] md:text-[20px] ">Jawaban :
                <br><span class="text-[#B5B3BC] font-bold text-[18px] md:text-[24px]">A. Lorem Ipsum</span>
                <br><span class="text-white text-[14px] md:text-[20px] ">Pembahasan :</span>
                <br><span class="text-[#B5B3BC] text-[14px] md:text-[20px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,  mattis tellus. Sed
                    dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas
                    eget condimentum velit, sit amet feugiat lectus. Class aptent taciti  sociosqu ad litora torquent per conubia nostra
                </span>
            </h1>
        </div>
        <!-- end: pembahasan-->
    </div>
</div>

