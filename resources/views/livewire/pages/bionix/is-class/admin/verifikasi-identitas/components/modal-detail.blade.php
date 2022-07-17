<div class="p-4 w-100">

    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Verifikasi Peserta</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr />
    <div class="">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <p class="font-bold mb-0 mt-2">Nama</p>
                <p>{{ $is_class_peserta->member->user->name }}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">Sekolah</p>
                <p>{{ $is_class_peserta->school_name }}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">Whatsapp</p>
                <p>{{ $is_class_peserta->member->user->whatsapp }}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">Email</p>
                <p>{{ $is_class_peserta->member->user->email }}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">Kelas</p>
                <p>{{ $is_class_peserta->status }}</p>
            </div>
            <div>
                <p class="font-bold mb-0 mt-2">Kartu Identitas</p>
                <a href="{{ asset("storage/$is_class_peserta->identity_card_path") }}" target="_blank"
                    rel="noopener noreferrer">
                    <img class="object-scale-down w-100"
                        src="{{ asset("storage/$is_class_peserta->identity_card_path") }}" />
                </a>
            </div>
        </div>


    </div>
    <hr class="my-4" />
    <div class="flex flex-row justify-end">
        <button
        onclick="Livewire.emit('openModal', 'pages.bionix.is-class.admin.verifikasi-identitas.components.modal-accept-reject',{{json_encode(['id'=>$is_class_peserta->id , 'modal_type' => 'reject'])}})"
        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
            Tolak
        </button>
        <button
        onclick="Livewire.emit('openModal', 'pages.bionix.is-class.admin.verifikasi-identitas.components.modal-accept-reject',{{json_encode(['id'=>$is_class_peserta->id , 'modal_type' => 'accept'])}})"
        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
            Terima
        </button>
    </div>
</div>
