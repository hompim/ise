<div class="p-4">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Detail Peserta</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama</p>
                    <p>{{$webinar->member->user->name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Email</p>
                    <p>{{$webinar->member->user->email}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Whatsapp</p>
                    <p>{{$webinar->member->user->whatsapp}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Instagram Story</p>
                       <a href="{{asset('/storage/'.$webinar->instagram_story_path)}}" target="_blank" rel="noopener noreferrer">
                        <img class="object-scale-down w-100" src="{{asset('/storage/'.$webinar->instagram_story_path)}}"/>
                    </a>
                </div>
            </div>

    </div>
</div>
