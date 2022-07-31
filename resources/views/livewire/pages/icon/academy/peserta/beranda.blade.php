
    <div class="mx-8 text-white">
        {{--    Header Card--}}
        <h1 class="text-3xl font-weight-bold">Halo, Selamat Datang di Dashboard {{Auth::user()->userable->academy_type == "App/Models/Icon/IconDataScienceData" ? "Data Science Academy" : "Startup Academy"}}!</h1>
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <h3 class="text-xl font-weight-bold mt-8">Info</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    {{--        Nama Tim --}}
                    <div class="card shadow-md rounded-xl" style="background-color: #191a1e;border: 0;">
                        <div class="card-body d-flex">
                            <div class="py-1 mr-4">
                                <i class="fas fa-users text-3xl" style="color: #675783;"></i>
                            </div>
                            <div>
                                <div class="text-gray-400">Nama Tim</div>
                                <div class="text-value-lg">{{Auth::user()->userable->academy->team_name}}</div>
                            </div>
                        </div>
                    </div>
                    {{--        Region --}}
                    <div class="card shadow-md rounded-xl" style="background-color: #191a1e;border: 0;">
                        <div class="card-body d-flex">
                            <div class="py-1 mr-4">
                                <i class="fas fa-map-marker-alt text-3xl" style="color: #70B3D0;"></i>
                            </div>
                            <div>
                                <div
                                    class="text-gray-400">Institut</div>
                                <div
                                    class="text-value-lg">{{Auth::user()->userable->academy->university_name}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="md:mt-8 text-xl font-weight-bold">Status</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    {{--Status Kartu Pelajar --}}
                    <div class="card shadow-md rounded-xl" style="background-color: #191a1e;border: 0;">
                        <div class="card-body d-flex">
                            <div class="py-1 mr-4">
                                <i class="fas fa-clipboard-list text-3xl" style="color:#00CE15 ;"></i>
                            </div>
                            <div>
                                <div class="text-gray-400">Status Academy</div>
                                <div class="text-value-lg">{{Auth::user()->userable->academy->competition_round}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="{{ $notif ? null : 'hidden' }} bg-{{ $alert_color }}-100 border-t-4 border-{{ $alert_color }}-500 rounded-b text-{{ $alert_color }}-900 px-4 py-3 shadow-md mb-5"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-{{ $alert_color }}-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>
            </div>
            <div>
                <p class="font-bold">{{ $alert_header }}</p>
                <p class="text-sm">{!! $alert_content !!}</p>
            </div>
            <div class="flex-1 flex justify-end">
                <button type="button" title="Hapus" wire:click="closeNotif()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    </div>

        <h3 class="text-xl font-weight-bold">Pengumuman</h3>
    <div class="grid md:grid-cols-2 gap-4 mt-8" >
        @forelse($announcement as $a)
            <div class="card shadow-md rounded-xl" style="background-color: #191a1e;border:0">
                <div class="card-body">
                    <h6 class="font-bold {{($a->type=='Normal'?'text-black':'text-red-500')}}">{{$a->type}}</h6>
                    <h4 class="font-bold text-xl" style="color: #FF7C74;">{{$a->title}}</h4>
                    <div class="flex flex-row align-items-center"><i class="far fa-calendar-alt"></i><p class="mb-0 ml-2 text-gray-500 font-medium">{{date('d F Y',strtotime($a->start))}}</p></div>
                    <p class="text-sm font-weight-normal mt-4">{!! $a->content !!}</p>
                </div>
            </div>
        @empty
            <p>Tidak ada pengumuman</p>
        @endforelse
    </div>
    </div>

