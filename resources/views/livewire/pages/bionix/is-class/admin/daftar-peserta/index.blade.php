<div class="px-8">
    <h1 class="text-2xl font-weight-bold text-white">Daftar Peserta</h1>

    <h3 class="text-xl mt-4 font-weight-bold text-white">IS Class</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.is-class.admin.daftar-peserta.datatable.index/>
            </div>
        </div>
    </div>
</div>
@push('js')
   @livewire('livewire-ui-modal')
@endpush
