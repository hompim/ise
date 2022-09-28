<div>
    {{-- Main --}}
    <div class="min-h-screen bg-black font-poppins">
        {{-- Hero --}}
        <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px]">
            {{-- Col 1 --}}
            <div class="flex flex-col flex-1">
                <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                    <div class="w-24">
                        <img src="{{ asset('storage/' . $article->logo_image_path) }}" alt="logo" class="w-full">
                    </div>
                    <h1 class="text-white text-[50px] md:text-[80px] font-bold">{{ $article->title }}</h1>
                </div>
                <div class="block mx-auto w-72 md:hidden">
                    <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="founder"
                        class="object-cover w-full">
                </div>
                <p
                    class="pl-6 pr-6 mt-4 text-sm text-center md:text-lg text-liteGray md:pr-12 md:pl-0 md:leading-normal md:text-left">
                    {{ $article->subtitle }} </p>
                <div class="relative mx-auto mt-16 text-center md:ml-0 md:mt-24 md:mb-8 max-w-fit group">
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
            <div class="hidden my-auto ml-6 w-[28rem] md:block">
                <img src="{{ asset('storage/' . $article->title_image_path) }}" alt="founder"
                    class="object-cover w-full">
            </div>
        </div>

        {{-- Youtube Video --}}
        <div class="flex justify-center mt-32 md:mt-52 " id="explore">
            {!! Cohensive\OEmbed\Facades\OEmbed::get($article->link_youtube)->html(['width' => 1080, 'height' => 608]) !!}
        </div>

        {{-- About Digiflux --}}
        <div class="flex flex-col mt-10 md:mt-52 md:mx-[130px]">
            <h1 class="text-white text-[27px] md:text-7xl mx-auto font-bold">About {{ $article->title }}</h1>
            <div class="px-6 mx-auto mt-3 text-sm text-justify text-liteGray md:mt-12 md:text-lg md:px-32">
                {!! $article->content !!}
            </div>
        </div>

        {{-- Gallery --}}
        <div class="flex flex-col pb-24 mt-6 md:mt-52">
            <h1 class="mx-auto text-[27px] md:text-7xl font-bold text-white">Gallery</h1>
            <div class="swiper mySwiper w-48 md:w-[700px] mt-3 md:mt-12">
                <div class="swiper-wrapper cursor-grab">
                    @foreach ($article->galery as $image)
                        <div class="flex items-center justify-center swiper-slide">
                            <div class="flex items-center h-96">
                                <img class="object-contain h-full rounded-3xl"
                                    src="{{ asset('storage/' . $image->image_path) }}" alt="gallery" />
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-0.5 md:p-6 rounded-full swiper-button-next bg-liteBlack"></div>
                <div class="p-0.5 md:p-6 rounded-full swiper-button-prev bg-liteBlack"></div>
            </div>
        </div>

        <div>
            @livewire('pages.landing.e-hall.components.quiz-card', ['type_id' => 1, 'is_component' => true])
        </div>

    </div>
</div>
