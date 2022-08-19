<!-- pembahasan quiz -->
<div class="pt-6 md:pt-52 flex flex-col bg-black">
    {{-- Start Quiz Block --}}
    <div class=" mb-[145px] bg-liteBlack mx-6 md:mx-28 rounded-2xl flex flex-col p-11 h-max">
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
                <div class="flex flex-row mt-10 mx-auto gap-4 md:gap-[108px] pl-0">
                    <div class="w-[177px] h-[159px] bg-[#B221E5] rounded-lg ">
                        <!-- pic1 -->
                        <div class="text-white text-[32px] text-center pt-[55px]">
                            pic1
                        </div>
                        <!-- pic1 -->
                    </div>
                    <div class="w-[177px] h-[159px] bg-[#B221E5] rounded-lg ">
                        <!-- pic1 -->
                        <div class="text-white text-[32px] text-center pt-[55px]">
                            pic1
                        </div>
                        <!-- pic1 -->
                    </div>
                    <div class="w-[177px] h-[159px] bg-[#B221E5] rounded-lg ">
                        <!-- pic1 -->
                        <div class="text-white text-[32px] text-center pt-[55px]">
                            pic1
                        </div>
                        <!-- pic1 -->
                    </div>
                </div>
                <!-- end: make cards row 1 -->

                <!-- start: make cards row 2 -->
                <div class="flex flex-row mt-10 mx-auto gap-4 md:gap-[76px]">
                    <div class="w-[207.8px] h-[263px] bg-[#2F2F2F] rounded-lg ">
                        <!-- pic1 -->
                        <div class=" bg-black w-[176px] h-[158px] mx-auto mt-[19px] rounded-lg pt-[59px]">
                            <div class="text-[#B5B3BC] text-center text-[32px]">
                                blank
                            </div>
                        </div>
                        <!-- pic1 -->
                        <!-- button start -->
                        <div class="w-[176px] h-[46.8px] bg-[#B5B3BC] mx-auto mt-[18px] rounded-lg text-white text-[28px] text-center">Lorem</div>
                        <!-- button start -->
                    </div>
                    <div class="w-[207.8px] h-[263px] bg-[#2F2F2F] rounded-lg ">
                        <!-- pic1 -->
                        <div class=" bg-black w-[176px] h-[158px] mx-auto mt-[19px] rounded-lg pt-[59px]">
                            <div class="text-[#B5B3BC] text-center text-[32px]">
                                blank
                            </div>
                        </div>
                        <!-- pic1 -->
                        <!-- button start -->
                        <div class="w-[176px] h-[46.8px] bg-[#B5B3BC] mx-auto mt-[18px] rounded-lg text-white text-[28px] text-center">Lorem</div>
                        <!-- button start -->
                    </div>
                    <div class="w-[207.8px] h-[263px] bg-[#2F2F2F] rounded-lg ">
                        <!-- pic1 -->
                        <div class=" bg-black w-[176px] h-[158px] mx-auto mt-[19px] rounded-lg pt-[59px]">
                            <div class="text-[#B5B3BC] text-center text-[32px]">
                                blank
                            </div>
                        </div>
                        <!-- pic1 -->
                        <!-- button start -->
                        <div class="w-[176px] h-[46.8px] bg-[#B5B3BC] mx-auto mt-[18px] rounded-lg text-white text-[28px] text-center">Lorem</div>
                        <!-- button start -->
                    </div>
                </div>
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
            <div class="flex flex-col ml-auto">
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

    </div>
</div>

