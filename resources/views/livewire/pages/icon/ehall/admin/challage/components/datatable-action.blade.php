<div class="flex space-x-1 justify-around">
    <button
        onclick="Livewire.emit('openModal', 'pages.icon.ehall.admin.challage.components.modal-detail',{{ json_encode(['id' => $id]) }})"
        class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail">
        <i class="cil-search"></i>
    </button>
    @if ($status == 'pending')
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.ehall.admin.challage.components.modal-accept-reject',{{ json_encode(['modal_type' => 'accept', 'id' => $id]) }})"
            class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded" title="Terima">
            <i class="cil-check"></i>
        </button>
        <button
            onclick="Livewire.emit('openModal', 'pages.icon.ehall.admin.challage.components.modal-accept-reject',{{ json_encode(['modal_type' => 'reject', 'id' => $id]) }})"
            class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded" title="Tolak">
            <i class="cil-x"></i>
        </button>
    @endif
</div>
