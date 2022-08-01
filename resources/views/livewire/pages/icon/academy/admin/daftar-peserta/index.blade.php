<div class="px-8">
    <h1 class="text-2xl font-weight-bold text-white">Daftar Peserta</h1>

    <h3 class="text-xl mt-4 font-weight-bold text-white">Academy Data Science</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            {{-- <div class="">
                <livewire:pages.bionix.admin.daftar-peserta.datatables.index model="App\Models\Bionix\TeamJuniorData" />
            </div> --}}
        </div>
    </div>
    <h3 class="text-xl mt-8 font-weight-bold text-white">Academy Startup</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            {{-- <div class="">
                <livewire:pages.bionix.admin.daftar-peserta.datatables.index model="App\Models\Bionix\TeamSeniorData" />
            </div> --}}
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
@endpush