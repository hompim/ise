<div class="px-8 text-white">
    <h3 class="text-2xl font-weight-bold">Artikel E-hall</h3>
    <div class="card rounded-xl mt-4" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="flex">
                <button
                    wire:click="$emit('openModal', 'pages.icon.ehall.admin.article.components.modal-add-edit',{{ json_encode(['type' => 'add']) }})"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.icon.ehall.admin.article.datatable.index />
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush

@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush
