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
                Kreasi, inovasi, cita-cita tinggi. Menjawab permasalahan sosial sekaligus menjunjung prinsip-prinsip ekonomi melalui inovasi terkini, kami tidak pernah berhenti berkreasi lewat teknologi. Lihat dan jelajahi Startup hasil cita-cita tinggi mahasiswa dan alumni Sistem Informasi ITS di sini</p>
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
            <a href="{{ route('content-startup-ehall', $a->slug) }}"
                class="my-12 transition duration-300 hover:-translate-y-2 group">
                <div class="relative">
                    <div
                        class="absolute inset-0 w-full h-max md:h-[362px] rounded-3xl transition duration-300 blur-2xl btn group-hover:opacity-100 opacity-75">
                    </div>
                    <div
                        class="bg-liteBlack w-full h-max md:h-[362px] rounded-3xl relative grid grid-cols-1 md:grid-cols-3 gap-10 pt-4 md:pt-[50px] px-7 py-10 md:py-0">
                        <div class="flex flex-col ml-0 cols-span-1 md:col-span-2 md:ml-9">
                            <h1 class="text-white font-bold text-[27px] md:text-[64px] ">{{ $a->title }}</h1>
                            <p class="mt-2 text-base font-semibold text-liteGray md:text-xl">
                                {{ $a->subtitle }}
                            </p>
                        </div>
                        <div class="cols-span-1">
                            {!! Cohensive\OEmbed\Facades\OEmbed::get($a->link_youtube)->html(['width' => 332, 'height' => 263]) !!}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
