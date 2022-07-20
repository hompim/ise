<div class="px-8 text-white">
    <h3 class="text-2xl font-weight-bold">Promo</h3>
    <div class="card rounded-xl mt-4" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="flex">
                <button
                    wire:click="$emit('openModal', 'pages.bionix.admin.promo.components.moda-add-edit',{{json_encode(['type'=>'add'])}})"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full self-center">
                    Add
                </button>
            </div>
            <livewire:pages.bionix.admin.verifikasi-dp.datatable.index/>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
@endpush
