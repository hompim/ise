<div class="flex flex-col justify-center gap-8 text-center bg-black">
    {{-- title header --}}
    <div>
        <h1 class="pt-48 font-bold text-center text-white text-7xl font-poppins" data-aos="fade-right"
            data-aos-easing="linear" data-aos-duration="500">
            We Bring You To <br>
            Even <span class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text"
                data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="2500">Further</span>.
        </h1>
    </div>

    {{-- lets explore button --}}
    <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group" data-aos="fade-down"
        data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500">
        <div class="absolute inset-0 ">
            <a href="#"
                class="relative px-6 py-4 font-semibold text-center text-white transition duration-1000 rounded-full opacity-75 bg-gradient-to-r from-pink-300 to-purple-300 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                Explore</a>
        </div>
        <a href="#isometric-city"
            class="relative px-6 py-4 font-semibold text-center text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins ">Let's
            Explore</a>
    </div>

    {{-- isometric city --}}
    <div class="relative left-0 right-0 justify-center mx-auto mt-40 text-center max-w-fit" id="isometric-city">
        <div class="absolute bottom-48 right-40 group" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="750">
            <div
                class="pl-2 transition duration-1000 ease-linear border-l-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-l-purple-300">
                <h4 class="text-2xl font-medium text-white text-start font-poppins">IT Convention Zone</h4>
                <ul class="text-[#B5B3BC] text-start">
                    <li>Data Science Academy</li>
                    <li>Startup Academy</li>
                    <li>E-Hall of Information System</li>
                    <li>Grand Talkshow ISE! 2022</li>
                </ul>
            </div>
            <a href="/icon">
                <img src="{{ asset('images/icon-city.svg') }}" alt="isometric-city"
                    class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300">
            </a>
        </div>
        <div class="absolute left-40 bottom-72 group" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="750">
            <div
                class="pr-2 transition duration-1000 ease-linear border-r-2 opacity-0 group-hover:duration-300 group-hover:opacity-100 group-hover:ease-linear border-r-pink-300">
                <h4 class="text-2xl font-medium text-white text-end font-poppins">Competition Zone</h4>
                <ul class="text-[#B5B3BC] text-end">
                    <li>BIONIX Student Level</li>
                    <li>Startup College Level</li>
                </ul>
            </div>
            <a href="/icon">
                <img src="{{ asset('images/bionix-city.svg') }}" alt="isometric-city"
                    class="transition duration-1000 transform group-hover:scale-105 group-hover:duration-300">
            </a>
        </div>
        <img src="{{ asset('images/isometric-city.svg') }}" alt="isometric-city">
    </div>

    {{--Competetion Zone--}}
    <div class="px-32 ">
        <h2 class="font-poppins font-bold text-6xl text-left text-transparent  bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text mb-6">Competition <span class="block mt-3 text-white">Zone</span></h2>
        <div class="flex justify-between space-x-8">
            <div class="text-white text-left w-[350px] h-[420px] pl-6 pr-8 pt-12 bg-liteBlack rounded-3xl">
                <p class="font-poppins text-lg font-medium text-liteGray mb-9 ">
                    Zona Competition merupakan ajang kompetisi inovasi bisnis dan IT yang diselenggarakan 
                    untuk siswa/siswi tingkat SMA/SMK sederajat dan mahasiswa. 
                    Terdapat dua kategori kompetisi, yaitu BIONIX Student Level dan BIONIX College Level.
                </p>
                <a class="font-poppins font-semibold text-2xl" href="">Learn More <img class="inline pl-5" src="{{asset('images/chevron-left.svg')}}" alt=""></a> 
            </div> 
            <div class="swiper mySwiper w-[700px]">
                <div class="swiper-wrapper">
                  <div class="swiper-slide flex justify-center">
                    <img class="w-[600px] rounded-3xl h-[420px]" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                  </div>
                  <div class="swiper-slide flex justify-center">
                    <img class="w-[600px] rounded-3xl  h-[420px]" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                  </div>
                  <div class="swiper-slide flex justify-center"> 
                    <img class="w-[600px] rounded-3xl h-[420px]" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                  </div>
                </div>
                <div class="swiper-button-next -mr-5 bg-liteBlack rounded-full p-6"></div>
                <div class="swiper-button-prev -ml-5 bg-liteBlack rounded-full p-6"></div>
            </div>
            
        </div>
        
    </div>


    {{--IT Convention Zone--}}
    <div class="px-32 mt-24">
        <h2 class="font-poppins font-bold text-6xl text-right text-transparent  bg-gradient-to-r from-pink-75 to-pink-300 bg-clip-text mb-6">IT Convention <span class="block mt-3 text-white">Zone</span></h2>
        <div class="flex justify-between space-x-8">
            <div class="swiper mySwiper w-[700px]">
                <div class="swiper-wrapper">
                  <div class="swiper-slide flex justify-center">
                    <img class="w-[600px] rounded-3xl h-[420px]" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                  </div>
                  <div class="swiper-slide flex justify-center">
                    <img class="w-[600px] rounded-3xl  h-[420px]" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                  </div>
                  <div class="swiper-slide flex justify-center"> 
                    <img class="w-[600px] rounded-3xl h-[420px]" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                  </div>
                </div>
                <div class="swiper-button-next -mr-5 bg-liteBlack rounded-full p-6"></div>
                <div class="swiper-button-prev -ml-5 bg-liteBlack rounded-full p-6"></div>
            </div>
            <div class="text-white text-left w-[350px] h-[420px] pl-6 pr-8 pt-12 bg-liteBlack rounded-3xl">
                <p class="font-poppins text-lg font-medium text-liteGray mb-9 ">
                    Zona IT Convention menghadirkan rangkaian acara yang bermanfaat luas dengan memamerkan dunia IT serta melakukan edukasi kepada masyarakat terkait isu-isu seputar IT saat ini. Pada zona ini terdapat beberapa acara, yaitu Academy, E-Hall of IS, dan juga Grand Talk Show.
                </p>
                <a class="font-poppins font-semibold text-2xl" href="">Learn More <img class="inline pl-5" src="{{asset('images/chevron-left.svg')}}" alt=""></a> 
            </div> 
        </div>
        
    </div>

    {{--IS Class--}}
    <div class="mt-36 px-56">
        <h1 class="font-poppins font-bold text-7xl text-white">What’s New ?</h1>
        <div class="flex flex-col justify-center items-center bg-liteBlack px-28">
            <h3 style=
            "background: linear-gradient(273.74deg, #E11BAA 14.81%, #FFFFFF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;" 
            class="font-poppins font-bold text-6xl">
            IS Class
            </h3>
            <img src="{{asset('images/is-class.svg')}}" alt="">
            <p class="font-poppins text-lg font-medium text-liteGray">IS Class merupakan sebuah wadah untuk memperkenalkan suasana pembelajaran di Sistem Informasi ITS untuk siswa/i SMA/SMK/sederajat yang ingin mengetahui departemen Sistem Informasi ITS lebih lanjut</p>
            <a class="font-poppins font-semibold text-2xl text-white" href="">Learn More <img class="inline pl-5" src="{{asset('images/chevron-left.svg')}}" alt=""></a> 
        </div>
    </div>

</div>
