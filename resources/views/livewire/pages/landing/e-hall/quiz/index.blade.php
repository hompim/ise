{{-- Main --}}
<div class="bg-black min-h-screen font-poppins">
    {{-- Hero --}}
    <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class="flex flex-row items-center gap-5">
                <h1 class="text-white text-[50px] md:text-[80px] font-bold px-6 md:px-0">ISE Trivia</h1>
            </div>
            <div class=" w-[80%] mx-auto block md:hidden">
                <img src="{{ asset('images/trivia-logo.png') }}" alt="founder-digiflux">
            </div>
            <p class="text-sm md:text-lg text-liteGray mt-4 px-6 md:px-0 leading-loose md:leading-normal">
                ISE Trivia merupakan Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Etiam eu turpis molestie,
                dictum est a, mattis tellus. Sed dignissim, metus nec 
                fringilla accumsan,risus sem sollicitudin lacus, ut interdum
                tellus elit sed risus  </p>
            <div class="relative mt-16 mx-auto text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
            <div class="absolute inset-0 ">
                <a href="#explore"
                    class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                    Explore</a>
            </div>
            <a href="#explore" class="relative btn">Let's
                Explore</a>
            </div>
        </div>

        {{-- Col 2 --}}
        <div class="hidden md:block">
            <img src="{{ asset('images/trivia-logo.svg') }}" alt="founder-digiflux">
        </div>
    </div>

    {{-- Point --}}
    <div class="mt-24 md:mt-52 flex justify-center items-center">
        <h1 class="bg-liteBlack px-4 py-2 rounded-3xl text-white text-lg">point anda: <span class="text-pink-300">40</span></h1>
    </div>

    {{-- Tabs --}}
    <div class="mt-8 md:mt-12 font-poppins pb-52">
        {{-- Question 1 --}}
        <div x-data="{ open: false }" class="md:mt-24">
            <div class="cursor-pointer" x-on:click="open = !open">
                <div
                    class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                    <div class="flex flex-row justify-between mx-auto">
                        <h1 class="w-[80%] text-base md:text-lg font-semibold">Rules</h1>
                        <div x-show="!open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                            </svg>
                        </div>
                    </div>
                    <div x-show="open" x-cloak class="pt-4" x-transition>
                        <ul class="w-[80%] md:w-[95%] text-liteGray text-sm md:text-lg list-disc ml-8">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum enim, velit, eu molestie ut dictumst urna.</li>
                            <li>Felis id et fusce tristique. Ac auctor volutpat nec velit aliquam ac. Donec ipsum sed tortor aenean egestas maecenas eget.</li>
                            <li>Turpis id pulvinar elementum commodo. Phasellus ac facilisis eu, eu congue adipiscing consequat tincidunt. Morbi et pellentesque urna etiam.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- Question 2 --}}
        <div x-data="{ open: false }" class="mt-3 md:mt-4">
            <div class="cursor-pointer" x-on:click="open = !open">
                <div
                    class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                    <div class="flex flex-row justify-between mx-auto">
                        <h1 class="w-[80%] text-base md:text-lg font-semibold">Quiz Startup</h1>
                        <div x-show="!open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                            </svg>
                        </div>
                    </div>
                    <div x-show="open" x-cloak class="pt-4" x-transition>
                        <div class="w-[95%] text-liteGray flex flex-col gap-5">
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base bg-gradient-to-r from-pink-300 to-purple-300 px-10 py-1 rounded-3xl">Start</button>
                            </div>        
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base px-4 py-1 rounded-3xl">Completed</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Question 3 --}}
        <div x-data="{ open: false }" class="mt-3 md:mt-4">
            <div class="cursor-pointer" x-on:click="open = !open">
                <div
                    class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                    <div class="flex flex-row justify-between mx-auto">
                        <h1 class="w-[80%] text-base md:text-lg font-semibold">Quiz Prestasi</h1>
                        <div x-show="!open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                            </svg>
                        </div>
                    </div>
                    <div x-show="open" x-cloak class="pt-4" x-transition>
                        <div class="w-[95%] text-liteGray flex flex-col gap-5">
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base bg-gradient-to-r from-pink-300 to-purple-300 px-10 py-1 rounded-3xl">Start</button>
                            </div>        
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base px-4 py-1 rounded-3xl">Completed</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Question 4 --}}
        <div x-data="{ open: false }" class="mt-3 md:mt-4">
            <div class="cursor-pointer" x-on:click="open = !open">
                <div
                    class="bg-liteBlack md:w-[1064px] h-max mx-4 md:mx-auto text-white px-4 md:px-10 py-2 md:py-4 items-center rounded-2xl">
                    <div class="flex flex-row justify-between mx-auto">
                        <h1 class="w-[80%] text-base md:text-lg font-semibold">Quiz Campuran</h1>
                        <div x-show="!open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                            </svg>
                        </div>
                    </div>
                    <div x-show="open" x-cloak class="pt-4" x-transition>
                        <div class="w-[95%] text-liteGray flex flex-col gap-5">
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base bg-gradient-to-r from-pink-300 to-purple-300 px-10 py-1 rounded-3xl">Start</button>
                            </div>        
                            <div class="bg-[#1E1F24] flex flex-row py-2 rounded-[20px] px-4 items-center">
                                <h1 class="mr-auto text-base md:text-lg">Quiz Reblood</h1>
                                <button class="ml-auto text-sm md:text-base px-4 py-1 rounded-3xl">Completed</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
