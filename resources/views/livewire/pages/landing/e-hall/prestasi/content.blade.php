{{-- Landing E-hall --}}
<div class="min-h-screen bg-black font-poppins">
    {{-- Hero --}}
    <div class="flex flex-row pt-24 md:pt-52 gap-48 mx-[20px] md:mx-[130px]">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                <h1 class="text-white text-[50px] md:text-[80px] font-bold">{{ $article->title }}</h1>
            </div>
            <div class=" w-[80%] mx-auto mt-8 block md:hidden">
                <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="gambar">
            </div>
            <p class="px-6 mt-4 text-sm text-center md:text-lg text-liteGray md:px-0 md:leading-normal md:text-left">
                {{ $article->subtitle }}</p>
            <div class="relative mx-auto mt-16 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
                <div class="absolute inset-0 ">
                    <a href="#explore"
                        class="relative transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins ">Let's
                        Explore</a>
                </div>
                <a href="#" class="relative btn">Let's
                    Explore</a>
            </div>
        </div>

        {{-- Col 2 --}}
        <div class="hidden md:block">
            <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="gambar">
        </div>
    </div>

    <!-- <div class="md:flex md:flex-row flex-col-reverse items-start pt-1 md:pt-[202px] md:mx-[130px] overflow-hidden">
        <div class="flex flex-col items-start flex-1 text-white mt-36">
            <div class="mx-12 ml-8 font-bold text-white md:ml-0 md:text-7xl md:text-left">
                Juara 1 GEMASTIK 2019
                <div class="text-lg font-light text-liteGray md:text-left md:pt-8">
                GEMASTIK merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,risus sem sollicitudin lacus, ut interdum tellus elit sed risus
                </div>
            </div>
            <div class="relative mt-16 ml-8 text-center md:ml-0 md:mt-24 md:mb-8 lg:px-2 max-w-fit group">
                <div class="absolute inset-0 ">
                    <a href="#"
                        class="relative transition duration-1000 opacity-75 btn lg:px-8 blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">Let's
                        Explore
                    </a>
                </div>
                <a href="#bsl" class="relative lg:px-8 btn">Let's Explore
                </a>
            </div>
</div>
    </div> -->
    <div class="flex flex-col justify-center text-5xl text-white mt-14">
        <span class="mx-auto font-bold">Article</span>
    </div>
    <div class="px-20 mt-12 text-base text-liteGray md:mx-[130px]">
        {!! $article->content !!}
    </div>
    {{-- Gallery --}}
    <div class="flex flex-col mt-6 md:my-52">
        <h1 class="mx-auto text-[27px] md:text-7xl font-bold text-white">Gallery</h1>
        <div class="swiper mySwiper w-[256px] md:w-[700px] mt-3 md:mt-12">
            <div class="swiper-wrapper cursor-grab">
                @foreach ($article->galery as $image)
                    <div class="flex items-center justify-center swiper-slide">
                        <div class="flex justify-center h-[28rem]">
                            <img class="object-cover w-full h-full rounded-3xl"
                                src="{{ asset('storage/' . $image->image_path) }}" />
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="p-0.5 md:p-6 rounded-full swiper-button-next bg-liteBlack"></div>
            <div class="p-0.5 md:p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
