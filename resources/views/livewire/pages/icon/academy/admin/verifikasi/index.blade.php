<div class="px-8">
    <h1 class="text-2xl font-weight-bold text-white">Verifikasi Administrasi</h1>

    <h3 class="text-xl mt-4 font-weight-bold text-white">Academy Data Science</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.verifikasi.table.index model="App\Models\Icon\IconAcademyDataScienceData" />
            </div>
        </div>
    </div>
    <h3 class="text-xl mt-8 font-weight-bold text-white">Academy Startup</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.icon.academy.admin.verifikasi.table.index model="App\Models\Icon\IconAcademyStartupData" />
            </div>
        </div>
    </div>
</div>
@push('js')
    @livewire('livewire-ui-modal')
@endpush
