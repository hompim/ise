<div class="px-8">
    <h1 class="text-2xl font-weight-bold text-white">Verifikasi pembayaran</h1>

    <h3 class="text-xl font-weight-bold mt-4 text-white ">BIONIX Student</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.verifikasi-pembayaran.datatables.index model="App\Models\Bionix\TeamJuniorData" />
            </div>
        </div>
    </div>

    <h3 class="text-xl font-weight-bold mt-8 text-white">BIONIX College</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.admin.verifikasi-pembayaran.datatables.index model="App\Models\Bionix\TeamSeniorData" />
            </div>
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
