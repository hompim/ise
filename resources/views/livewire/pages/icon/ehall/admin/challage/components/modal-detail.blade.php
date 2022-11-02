<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Bukti Upload</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr />
    <div class="px-4 mt-4">
        <a href="{{ asset("storage/$challenge->ss_path") }}" target="_blank">
            <img src="{{ asset("storage/$challenge->ss_path") }}" class="w-100 object-cover" alt="">
        </a>

    </div>
    <hr class="my-4" />

    @if($challenge->is_accepted == 'pending')
    <div class="flex flex-row justify-end">
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.ehall.admin.challage.components.modal-accept-reject',{{ json_encode(['modal_type' => 'reject', 'challenge_id' => $challenge->id]) }})"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
            Tolak
        </button>
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.ehall.admin.challage.components.modal-accept-reject',{{ json_encode(['modal_type' => 'accept', 'challenge_id' => $challenge->id]) }})"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
            Terima
        </button>
    </div>
    @endif
</div>
