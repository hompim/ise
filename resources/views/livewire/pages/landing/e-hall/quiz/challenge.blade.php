<div class="pt-6 md:pt-[556px] text-white font-poppins flex flex-col bg-black">

    <div class="text-5xl font-bold mx-auto">Tutorial Share</div>
    <div class="w-full pt-[44px]">
        <img class="object-fill h-screen w-screen"
            src="https://jete.id/wp-content/uploads/2021/10/Wallpaper-Windows-XP.jpg" alt="">
    </div>
    <div class="font-bold text-5xl mt-32 mx-auto">Share Via
    </div>
    {{-- start share component --}}
    <div class="flex mt-12 flex-row" x-data="{ tab: 'ig' }">
        <div class="flex flex-col space-y-4 ml-12 h-[625px]">
            <div class="flex items-center flex-row">
                <div
                    :class="{ 'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                        'ig', 'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                        'line', 'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'wa' }">
                    <a @click.prevent="tab='ig'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/instagram.svg') }}" alt=""></a>
                </div>
                <div x-show="tab=='ig'" class="w-[17px] h-[18px] ml-8 ">
                    <img src="{{ asset('images/polygon.svg') }}" alt="">
                </div>
            </div>
            <div class="flex items-center flex-row">
                <div
                    :class="{ 'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                        'line', 'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                        'ig', 'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'wa' }">
                    <a @click.prevent="tab='line'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/line.svg') }}" alt=""></a>
                </div>
                <div x-show="tab=='line'" class="w-[17px] h-[18px] ml-8 ">
                    <img src="{{ asset('images/polygon.svg') }}" alt="">
                </div>
            </div>
            <div class="flex items-center flex-row">
                <div
                    :class="{ 'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                        'wa', 'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                        'ig', 'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'line' }">
                    <a @click.prevent="tab='wa'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/whatsapp.svg') }}" alt=""></a>
                </div>
                <div x-show="tab=='wa'" class="w-[17px] h-[18px] ml-8 ">
                    <img src="{{ asset('images/polygon.svg') }}" alt="">
                </div>
            </div>

        </div>
        <div class="bg-liteBlack ml-[100px] mr-12 w-full h-max rounded-2xl flex flex-col ">
            {{-- start IG --}}
            <div class=" p-8 flex space-x-4 gap-6 flex-row" x-show="tab=='ig'">
                <div class="ml-10 w-[400px]">
                    <div class="">
                        <img class="w-[480px] h-[543px] rounded-lg"
                            src="https://telset.id/wp-content/uploads/2018/11/Kevin-Systrom.jpg" alt="">
                    </div>
                    <div class="mt-12 w-[350px] h-[63px]">
                        <a class="bg-gradient-to-b ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="#">DOWNLOAD
                            GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="font-bold text-xl "> Caption</span>
                    <br>
                    <div class="mt-4">
                        Ini InstaGram
                    </div>
                </div>
            </div>
            {{-- start line --}}
            <div class=" p-8 flex space-x-4 gap-6 flex-row" x-show="tab=='line'">
                <div class="ml-10 w-[400px]">
                    <div class="">
                        <img class="w-[480px] h-[543px] rounded-lg"
                            src="https://telset.id/wp-content/uploads/2018/11/Kevin-Systrom.jpg" alt="">
                    </div>
                    <div class="mt-12 w-[350px] h-[63px]">
                        <a class="bg-gradient-to-b ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="#">DOWNLOAD
                            GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="font-bold text-xl "> Caption</span>
                    <br>
                    <div class="mt-4">
                        Ini Line
                    </div>
                </div>
            </div>
            {{-- start wa --}}
            <div class=" p-8 flex space-x-4 gap-6 flex-row" x-show="tab=='wa'">
                <div class="ml-10 w-[400px]">
                    <div class="">
                        <img class="w-[480px] h-[543px] rounded-lg"
                            src="https://telset.id/wp-content/uploads/2018/11/Kevin-Systrom.jpg" alt="">
                    </div>
                    <div class="mt-12 w-[350px] h-[63px]">
                        <a class="bg-gradient-to-b ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="#">DOWNLOAD GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="font-bold text-xl "> Caption</span>
                    <br>
                    <div class="mt-4">
                        Ini WhatsApp
                    </div>
                    <div class="tracking-wide ">

                    </div>

                </div>
            </div>
            <div class="flex flex-col">
                <div class="mt-36 text-3xl font-bold mx-auto">Upload form</div>
                <div class="bg-[#2F2F2F] mx-24 relative mt-8 mb-20 h-[300px] rounded-lg">
                <div class="flex flex-row absolute bottom-[140px] left-[280px]">
                <a class="bg-gradient-to-b ml-[60px] items-center flex flex-row mx-auto from-[#5B1BE1]  py-4 px-12 to-[#B221E5] rounded-lg "
                    href="#"><img class="mr-12 w-[33px] h-[33px] fill-white" src="{{ asset('images/download.svg') }}" alt="">Upload hasil screenshot kamu di sini  </a>

            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
