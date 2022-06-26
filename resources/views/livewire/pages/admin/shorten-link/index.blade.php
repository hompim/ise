<div class="px-8">
    <h3 class="text-2xl font-weight-bold text-white">Shorten Link</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="flex">
                <button wire:click="$emit('openModal', 'pages.admin.shorten-link.components.modal-add',{{json_encode(['type'=>'add'])}})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.admin.shorten-link.datatable.index />
            @livewire('livewire-ui-modal')
        </div>
    </div>
</div>
@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush




