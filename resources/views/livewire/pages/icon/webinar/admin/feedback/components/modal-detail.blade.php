<div class="p-4 w-100">

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
                    <p>{{$feedback->webinar->member->user->name}}</p>
                </div>
            </div>

    </div>
</div>
