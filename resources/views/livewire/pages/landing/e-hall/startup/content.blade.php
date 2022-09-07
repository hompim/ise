<div>
    {{-- Main --}}
    <div class="bg-black min-h-screen font-poppins">
        {{-- Hero --}}
        <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
            {{-- Col 1 --}}
            <div class="flex flex-col flex-1">
                <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                    <img src="{{ asset('storage/' . $article->logo_image_path) }}" alt="digilux-logo">
                    <h1 class="text-white text-[50px] md:text-[80px] font-bold">{{ $article->title }}</h1>
                </div>
                <div class=" w-[80%] mx-auto block md:hidden">
                    <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="founder-digiflux">
                </div>
                <p
                    class="text-sm md:text-lg text-liteGray mt-4 px-6 md:px-0 md:leading-normal text-center md:text-left">
                    {{ $article->subtitle }} </p>
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
                <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="founder-digiflux">
            </div>
        </div>

        {{-- Youtube Video --}}
        <div class="mt-32 md:mt-52 flex justify-center ">
            <iframe src="{{ $article->link_youtube }}" width="1080" height="720" frameborder="0" allowfullscreen
                class="rounded-2xl hidden md:flex"></iframe>
        </div>

        {{-- About Digiflux --}}
        <div class="mt-10 md:mt-52 flex flex-col">
            <h1 class="text-white text-[27px] md:text-7xl mx-auto font-bold">About {{ $article->title }}</h1>
            <div class="mt-3 md:mt-12 text-liteGray text-sm md:text-lg mx-auto px-6 md:px-32 text-justify">
                {!! $article->content !!}
            </div>
        </div>

        {{-- Gallery --}}
        <div class="mt-6 md:mt-52 flex flex-col">
            <h1 class="mx-auto text-[27px] md:text-7xl font-bold text-white">Gallery</h1>
            <div class="swiper mySwiper w-[256px] md:w-[700px] mt-3 md:mt-12">
                <div class="swiper-wrapper cursor-grab">
                    @foreach ($article->galery as $image)
                        <div class="flex justify-center swiper-slide">
                            <img class="w-full rounded-3xl h-[151px] md:h-[420px] object-cover"
                                src="{{ asset('storage/'.$image->image_path) }}" />
                        </div>
                    @endforeach
                </div>
                <div class="p-0.5 md:p-6 rounded-full swiper-button-next bg-liteBlack"></div>
                <div class="p-0.5 md:p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
            </div>
        </div>



    </div>
</div>
