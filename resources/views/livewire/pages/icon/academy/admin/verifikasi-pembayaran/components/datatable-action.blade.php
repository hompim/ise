<div class="flex space-x-1 justify-around">
    <button
        onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-pembayaran.components.modal-detail',{{json_encode(['type'=>$type,'id'=>$id])}})"
        class="p-1 text-blue-300 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail">
        <i class="cil-search"></i>
    </button>
    <button
        onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-pembayaran.components.modal-accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$id])}})"
        class="p-1 text-green-300 hover:bg-green-600 hover:text-white rounded" title="Terima">
        <i class="cil-check"></i>
    </button>
    <button
        onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-pembayaran.components.modal-accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$id])}})"
        class="p-1 text-red-300 hover:bg-red-600 hover:text-white rounded" title="Tolak">
        <i class="cil-x"></i>
    </button>
</div>
