<div class="px-4">
    <h3 class="text-xl text-white font-weight-bold">Daftar Acara</h3>
    <p class="text-white">Berikut adalah daftar acara yang bisa anda ikuti</p>
    <div class="mt-8 swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @forelse($events as $e)
                <div class="card shadow-md rounded-xl swiper-slide"
                    style=" background-color: #191a1e; height: 100%; border:0">
                    <div class="card-body flex flex-col h-full justify-between">
                        <div>
                            <h4 class="font-bold text-xl" style="color: rgb(178,33,229)">{{ $e->title }}</h4>
                            <div class="flex flex-row md:align-items-center"><i class="far fa-calendar-alt"></i>
                                <p class="mb-0 ml-2 text-white font-medium">
                                    @if ($e->start_date || $e->end_date)
                                        Registrasi
                                        : {{ date('d F Y', strtotime($e->start_date)) }}
                                    @else
                                        Coming Soon
                                    @endif
                            </div>
                            <p class="text-sm font-weight-normal text-white my-4">{{ $e->description }}</p>
                        </div>
                        <div>
                            @if ($e->regis_link && $e->start_date)
                                @if (date('Y-m-d') >= date('Y-m-d', strtotime($e->start_date)) &&
                                    date('Y-m-d') < date('Y-m-d', strtotime($e->end_date)))
                                    <a href="{{ route("$e->regis_link") }}" type="button" target="_blank"
                                        style="background: rgb(178,33,229)"
                                        class="text-white w-full p-2 font-bold rounded text-center hover:no-underline">Daftar
                                    </a>
                                @elseif(date('Y-m-d') > date('Y-m-d', strtotime($e->end_date)))
                                    <p class="text-center font-bold text-white">
                                        Pendaftaran ditutup
                                    </p>
                                @elseif(date('Y-m-d') < date('Y-m-d', strtotime($e->start_date)))
                                    <p class="text-center font-bold text-white">
                                        Pendaftaran belum dibuka
                                    </p>
                                @endif
                            @else
                                <p class="text-center font-bold text-white">
                                    Pendaftaran belum dibuka
                                </p>
                            @endif
                            <a href="{{ "/$e->landing_link" }}" type="button" target="_blank"
                                style="color: rgb(178,33,229)"
                                class="w-full p-2 font-bold mt-2 text-center no-underline">{{ $e['title'] == 'Virtual Play' ? 'Mainkan Sekarang' : 'Selengkapnya' }}</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada acara yang dapat diikuti.</p>
            @endforelse
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination mt-10" style="bottom: auto !important;position: relative !important;"></div>
    </div>

    @if (Auth::user()->userable->jenjang == 'SMA')
    <div class="mt-8 mb-8 swiper-container">
        <h3 class="text-xl text-white font-weight-bold">Form Lainnya</h3>
        <p class="text-white mb-3">Link form untuk keperluan lain.</p>
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="card shadow-md rounded-xl swiper-slide"
                style=" background-color: #191a1e; height: 100%; border:0">
                <div class="card-body flex flex-col h-full justify-between">
                    <div>
                        <h4 class="font-bold text-xl" style="color: rgb(178,33,229)">Pembayaran DP Bionix Student Level
                        </h4>
                        <p class="text-sm font-weight-normal text-white my-4">
                            Form pembayaran DP untuk peserta bionix student level yang telah melakukan roadshow ISE! di
                            sekolah masing - masing.
                            <b>Pembayaran DP hanya valid pada hari dilaksanakannya roadshow</b>
                        </p>
                    </div>
                    <div>
                        @if(Auth::user()->userable->roadshow_school)
                        <a href="{{route('pembayaran-roadshow')}}"
                        style="background: rgb(178,33,229)"
                            class="text-white w-full p-2 font-bold rounded text-center hover:no-underline">
                            Form Pembayaran DP
                        </a>
                        @else
                        <button onclick="Livewire.emit('openModal', 'pages.auth.bionix.registrasi-bionix-schol')"
                        style="background: rgb(178,33,229)"
                            class="text-white w-full p-2 font-bold rounded text-center hover:no-underline">
                            Form Pembayaran DP
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination mt-10" style="bottom: auto !important;position: relative !important;"></div>
        </div>
    </div>
    @endif



        {{-- <h3 class="text-xl font-weight-bold mt-12">Agenda</h3>

    <p>Berikut adalah <span id="event-count"></span> agenda terdekat anda.</p> --}}
        {{-- <div class="card p-8 mt-8"> --}}
        {{-- <div id="calendar"></div> --}}
        {{-- </div> --}}
        {{-- <div class="grid md:grid-cols-2 gap-4 mt-4">
        @php $x=0; @endphp
        @foreach ($event_countdowns as $e)
            @if (strpos($e['who_can_join'], Auth::user()->userable->jenjang) !== false && (($e['for_event'] == 'bionix' && Auth::user()->userable->bionix_id) || ($e['for_event'] == 'startup_academy' && Auth::user()->userable->academy_type == 'Startup Academy') || ($e['for_event'] == 'data_science_academy' && Auth::user()->userable->academy_type == 'Data Science Academy') || $e['for_event'] == 'none') && date('Y-m-d H:i:s', strtotime($e['deadline'])) >= \Carbon\Carbon::now())
                <livewire:pages.dashboard-global.home.countdown :data="$e"/>
                @php $x+=1; @endphp
                @if ($x >= 6)
                    @break
                @endif
            @endif
        @endforeach
    </div>
</div> --}}
        @if ($errors->any() || $errorMessage)
            <div class="fixed px-4 py-3 text-red-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md bottom-12 right-12"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Terjadi masalah</p>
                        <ul class="font-normal">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @if ($errorMessage)
                            <p class="font-normal">{{ $errorMessage }}</p>
                        @endif
                    </div>
                    <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                            class="fas fa-times"></i></button>
                </div>
            </div>
        @endif

        @push('css')
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        @endpush

        @push('js')
            @livewire('livewire-ui-modal')
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    const swiper = new Swiper('.swiper-container', {

                        pagination: {
                            el: ".swiper-pagination",
                        },
                        slidesPerView: 1,
                        spaceBetween: 40,
                        autoHeight: true,
                        loop: @if (sizeof($events) > 3)
                            true
                        @else
                            false
                        @endif ,
                        autoplay: {
                            delay: 45000
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 2
                            },
                            1440: {
                                slidesPerView: 3
                            }
                        }
                    })
                });
            </script>
        @endpush
