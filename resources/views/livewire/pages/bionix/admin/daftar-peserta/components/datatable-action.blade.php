<div class="flex space-x-1 justify-around">
    <button
        onclick="Livewire.emit('openModal', 'pages.bionix.admin.daftar-peserta.components.moda-detail',{{json_encode(['type'=>$type,'id'=>$id])}})"
        class="p-1 text-blue-400 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail">
        <i class="cil-search"></i>
    </button>
    <button
        onclick="Livewire.emit('openModal', 'pages.bionix.admin.daftar-peserta.components.modal-edit',{{json_encode(['type'=>$type,'id'=>$id])}})"
        class="p-1 text-green-400 hover:bg-green-600 hover:text-white rounded" title="Edit">
        <i class="cil-pencil"></i>
    </button>
</div>
