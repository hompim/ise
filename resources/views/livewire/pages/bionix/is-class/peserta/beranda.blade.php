<div class="mx-8">
    {{--    Header Card--}}
    <h1 class="text-3xl font-weight-bold text-white">Halo, Selamat Datang di Dashboard IS Class!</h1>
    <div class="grid md:grid-cols-2 gap-4">
        <div>
            <h3 class="text-xl font-weight-bold mt-8 text-white">Info</h3>
            <div class="grid md:grid-cols-2 gap-4">
                {{--        Nama Tim --}}
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-user text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Nama</div>
                            <div class="text-value-lg text-gray-300">{{Auth::user()->name}}</div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fa-solid fa-graduation-cap text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Kelas Is Class</div>
                            <div class="text-value-lg text-gray-300">{{Auth::user()->userable->isclass->status}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="md:mt-8 text-xl font-weight-bold text-white">Status</h3>
            <div class="grid md:grid-cols-1 gap-4">
                {{--        Status Kartu Pelajar --}}
                <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                    <div class="card-body d-flex">
                        <div class="py-1 mr-4">
                            <i class="fas fa-clipboard-list text-3xl text-purple-100"></i>
                        </div>
                        <div>
                            <div class="text-gray-400">Verifikasi Kartu Pelajar</div>
                            <div class="text-value-lg text-gray-300">{{Auth::user()->userable->isclass->profile_verif_status}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-xl font-weight-bold text-white">Pengumuman</h3>
    <div class="grid md:grid-cols-2 gap-4 mt-8">
        @forelse($announcement as $a)
            <div class="card shadow-md rounded-xl" style="background-color: #191a1e; border:0">
                <div class="card-body">
                    <h6 class="font-bold {{($a->type=='Normal'?'text-black':'text-red-500')}}">{{$a->type}}</h6>
                    <h4 class="font-bold text-xl" style="color: #FF7C74;">{{$a->title}}</h4>
                    <div class="flex flex-row align-items-center"><i class="far fa-calendar-alt"></i><p class="mb-0 ml-2 text-gray-500 font-medium">{{date('d F Y',strtotime($a->start))}}</p></div>
                    <p class="text-sm font-weight-normal mt-4">{!! $a->content !!}</p>
                </div>
            </div>
        @empty
            <p class="text-white">Tidak ada pengumuman</p>
        @endforelse
    </div>
</div>
