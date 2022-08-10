{{-- Main --}}
<div class="bg-black min-h-screen font-poppins">
    {{-- Hero --}}
    <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class="flex flex-row items-center gap-5">
                <img src="{{ asset('images/startup/digiflux-logo.svg') }}" alt="digilux-logo">
                <h1 class="text-white text-[50px] md:text-[80px] font-bold">Digiflux</h1>
            </div>
            <div class=" w-[80%] mx-auto block md:hidden">
                <img src="{{ asset('images/startup/digiflux-founder.png') }}" alt="founder-digiflux">
            </div>
            <p class="text-sm md:text-lg text-liteGray mt-4 px-6 md:px-0">Aplikasi Untuk menjembatani Influencer dan Pelaku Usaha Lorem ipsum  
                dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie,
                dictum est a, mattis tellus.Sed dignissim, metus nec fringilla accumsan,
                risus sem sollicitudin lacus, ut interdum 
                tellus elit sed risus. </p>
            <div class="relative mt-16 ml-8 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
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
            <img src="{{ asset('images/startup/digiflux-founder.png') }}" alt="founder-digiflux">
        </div>
    </div>

    {{-- Youtube Video --}}
    <div class="mt-32 md:mt-52 flex justify-center ">
        <iframe src="https://www.youtube.com/embed/oHg5SJYRHA" width="1080" height="720" frameborder="0" allowfullscreen class="rounded-2xl hidden md:flex"></iframe>
        <iframe src="https://www.youtube.com/embed/oHg5SJYRHA" width="235" height="156" frameborder="0" allowfullscreen class="rounded-2xl flex md:hidden"></iframe>
    </div>

    {{-- About Digiflux --}}
    <div class="mt-10 md:mt-52 flex flex-col">
        <h1 class="text-white text-[27px] md:text-7xl mx-auto font-bold">About Digiflux</h1>
        <div class="mt-3 md:mt-12 text-liteGray text-sm md:text-lg mx-auto px-6 md:px-32 text-justify">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, 
                dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem 
                sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, 
                sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. 
                Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem.
                Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>
            <p class="indent-14"> Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut 
                vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean
                feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a,
                blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat
                turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum
                ullamcorper quis venenatis nisi. Proin vitae facilisis nisi, ac posuere leo.</p>
            <p class="indent-14"> Nam pulvinar blandit velit, id condimentum diam faucibus at. Aliquam lacus nisi, sollicitudin
                at nisi nec, fermentum congue felis. Quisque mauris dolor, fringilla sed tincidunt ac, finibus non odio.
                Sed vitae mauris nec ante pretium finibus. Donec nisl neque, pharetra ac elit eu, faucibus aliquam ligula.
                Nullam dictum, tellus tincidunt tempor laoreet, nibh elit sollicitudin felis, eget feugiat sapien diam nec nisl.
                Aenean gravida turpis nisi, consequat dictum risus dapibus a. Duis felis ante, varius in neque eu,
                tempor suscipit sem. Maecenas ullamcorper gravida sem sit amet cursus. Etiam pulvinar purus vitae justo
                pharetra consequat. Mauris id mi ut arcu feugiat maximus. Mauris consequat tellus id tempus aliquet.</p>
        </div>
    </div>

    {{-- Gallery --}}
    <div class="mt-6 md:mt-52 flex flex-col">
        <h1 class="mx-auto text-[27px] md:text-7xl font-bold text-white">Gallery</h1>
        <div class="swiper mySwiper w-[256px] md:w-[700px] mt-3 md:mt-12">
            <div class="swiper-wrapper cursor-grab">
                <div class="flex justify-center swiper-slide">
                    <img class="w-full rounded-3xl h-[151px] md:h-[420px] object-cover"
                        src="{{ asset('images/startup/1.jpg') }}" />
                </div>
                <div class="flex justify-center swiper-slide">
                    <img class="w-full rounded-3xl  h-[151px] md:h-[420px] object-cover"
                        src="{{ asset('images/startup/2.JPG') }}" />
                </div>
                <div class="flex justify-center swiper-slide">
                    <img class="w-full rounded-3xl h-[151px] md:h-[420px] object-cover"
                        src="{{ asset('images/startup/3.JPG') }}" />
                </div>
            </div>
            <div class="p-0.5 md:p-6 rounded-full swiper-button-next bg-liteBlack"></div>
            <div class="p-0.5 md:p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
        </div>
    </div>

    {{-- Quiz --}}
    <div class="mt-6 md:mt-52 flex flex-col">
        <h1 class="mx-auto text-[27px] md:text-7xl font-bold text-white">Quiz</h1>
        {{-- Start Quiz Block --}}
        <div class="mt-10 mb-[145px] bg-liteBlack mx-6 md:mx-28 h-max rounded-2xl flex flex-col p-11">
            <h1 class="text-white text-lg md:text-2xl mx-auto">Quiz (nama startup)</h1>
            <div class="flex flex-col md:flex-row mt-4 gap-14">
                {{-- Left Part --}}
                <div class="flex flex-col">
                    <h2 class="text-white text-lg md:text-2xl underline underline-offset-4 decoration-purple-300">Quiz 2</h2>
                    <p class="text-sm md:text-lg text-liteGray mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.
                    </p>
                    <div class="flex flex-row mt-10 mx-auto gap-8 md:gap-14">
                        <button class="bg-[#19AC66] w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">True</button>
                        <button class="bg-[#DE4343] w-[109px] md:w-[171px] h-[37px] md:h-[58px] rounded-lg text-white text-sm md:text-xl">False</button>
                    </div>
                    <div class="md:flex flex-row gap-7 mt-32 hidden">
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
                        <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">1</button>
                        <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">2</button>
                        <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">3</button>
                        <button class="w-[56px] md:w-[75px] h-[56px] md:h-[75px] bg-[#2F2F2F] mx-auto text-white text-2xl font-bold rounded-lg">4</button>
                    </div>
                    <button class="mx-auto text-white md:text-xl rounded-lg col-span-2 btn px-8 md:px-10 py-2 mt-8 md:mt-40 font-semibold">Submit</button>
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

















































</div>
