{{-- Main --}}
<div class="min-h-screen bg-black font-poppins">
    {{-- Hero --}}
    <div class="flex flex-row pt-24 md:pt-52 mx-[20px] md:mx-[130px] gap-20">
        {{-- Col 1 --}}
        <div class="flex flex-col flex-1">
            <div class="flex flex-row items-center gap-5 px-6 md:px-0">
                <h1 class="text-white text-[50px] md:text-[80px] font-bold mx-auto md:mx-0">Startup</h1>
            </div>
            <div class=" w-[60%] mx-auto mt-10 block md:hidden">
                <img src="{{ asset('images/startup/ehoi-startup-logo.png') }}" alt="founder-digiflux">
            </div>
            <p class="px-6 mt-4 text-sm text-center md:text-lg text-liteGray md:px-0 md:leading-normal md:text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie,
                dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,risus sem
                sollicitudin lacus, ut interdum tellus elit sed risus </p>
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
        <div class="hidden md:block">
            <img src="{{ asset('images/startup/ehoi-startup-logo.png') }}" alt="founder-digiflux">
        </div>
    </div>

    {{-- Showcase --}}
    <div class="mt-44 md:mt-52 flex flex-col mx-[20px] md:mx-[130px] pb-52 scroll-mt-36" id="explore">
        {{-- Digiflux Card --}}
        @foreach ($articles as $a)
            <a href="{{ route('content-startup-ehall', $a->slug) }}" class="transition duration-300 hover:-translate-y-2 group">
                <div class="relative">
                    <div
                        class="absolute inset-0 w-full h-max md:h-[362px] rounded-3xl transition duration-300 blur-2xl btn group-hover:opacity-100 opacity-75">
                    </div>
                    <div
                        class="bg-liteBlack w-full h-max md:h-[362px] rounded-3xl relative flex flex-col md:flex-row gap-10 pt-4 md:pt-[50px] px-7 py-10 md:py-0">
                        <div class="flex flex-col ml-0 md:ml-9">
                            <h1 class="text-white font-bold text-[27px] md:text-[64px] ">{{$a->title}}</h1>
                            <p class="mt-2 text-base font-semibold text-liteGray md:text-xl">
                                {{$a->subtitle}}
                            </p>
                        </div>
                        <div class="">
                            <iframe src="{{$a->link_youtube}}" width="332" height="263"
                                frameborder="0" allowfullscreen class=""></iframe>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
