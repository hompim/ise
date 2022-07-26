<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Bukti Pembayaran</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">
        <a href="{{asset("storage/$bionix_data->payment_proof")}}" target="_blank">
            <img src="{{asset("storage/$bionix_data->payment_proof")}}" class="w-100 object-cover" alt="">
        </a>

    </div>
    <hr class="my-4"/>

    <div class="flex flex-row justify-end">
        <button
            onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-dp.components.modal-accept-reject',{{json_encode(['modal_type'=>'reject','id'=>$bionix_data->id])}})"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
            Tolak
        </button>
        <button
            onclick="Livewire.emit('openModal', 'pages.bionix.admin.verifikasi-dp.components.modal-accept-reject',{{json_encode(['modal_type'=>'accept','id'=>$bionix_data->id])}})"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
            Terima
        </button>
    </div>
</div>
