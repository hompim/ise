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
                <h4 class="text-2xl font-medium text-white text-end font-poppins">IT Convention Zone</h4>
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
</div>
