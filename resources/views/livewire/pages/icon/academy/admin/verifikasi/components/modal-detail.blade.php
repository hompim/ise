<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Tim</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>


    <div class="px-4 mt-4">
            <div id="data_tim">
                <h5 class="text-md">Data Tim</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama Tim</p>
                        <p>{{$team_name}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Nama Institusi</p>
                        <p>{{$institute_name}}</p>
                    </div>
                    @if($type == 'Startup')
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Judul Ide Startup</p>
                        <p>{{$startup_title}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Deskripsi Ide Startup</p>
                        <p>{{$startup_idea}}</p>
                    </div>
                    @else
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Alasan Mengikuti Akademi</p>
                        <p>{{$reason_joining_academy}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Ekspetasi Mengikuti Akademi</p>
                        <p>{{$expectation_joining_academy}}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="font-bold mb-0 mt-2">Pasca Kegiatan Akademi</p>
                        <p>{{$post_academy_activity}}</p>
                    </div>
                    @endif
                </div>
            </div>

            @for ($x = 1 ; $x<=3 ; $x++)
            <div id="anggota_{{$x}}" class="mt-8">
                <h5>Anggota Tim {{$x}}</h5>
                <hr/>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <p class="font-bold mb-0 mt-2">Nama</p>
                        <p>{{ ${'member'.$x.'_name'} }}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Email</p>
                        <p>{{ ${'member'.$x.'_email'} }}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Nomor Whatsapp</p>
                        <p>{{ ${'member'.$x.'_whatsapp'} }}</p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Link Post Twibbon</p>
                        <p class="text-blue-500 truncate"><a href="{{ ${'member'.$x.'_twibbon'} }}"
                                                             target="_blank">{{ ${'member'.$x.'_twibbon'} }}</a></p>
                    </div>
                    @if($type != 'Data Science')
                    <div>
                        <p class="font-bold mb-0 mt-2">CV</p>
                        <p class="text-blue-500 truncate"><a href="{{asset('/storage/'.${'cv'.$x})}}"
                                                             target="_blank">CV Anggota {{$x}}</a></p>
                    </div>
                    @endif
                    <div>
                        <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                        @if($photo1)
                            <img class="object-scale-down w-50" src="{{asset('/storage/'.${'photo'.$x})}}"/>
                        @else
                            <p>Belum unggah</p>
                        @endif
                    </div>
                </div>
            </div>
            @endfor
    </div>
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            type="button" wire:click="$emit('closeModal')"
            class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
            Tutup
        </button>
    </div>
</div>
