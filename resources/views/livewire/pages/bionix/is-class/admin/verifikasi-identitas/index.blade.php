<div class="px-8">
    <h1 class="text-2xl font-weight-bold text-white">Verifikasi Identitas</h1>

    <h3 class="text-xl font-weight-bold mt-4 text-white">IS Class</h3>
    <div class="card rounded-xl p-2" style="background-color: #191a1e; border:0">
        <div class="card-body">
            <div class="">
                <livewire:pages.bionix.is-class.admin.verifikasi-identitas.datatable.index/>
            </div>
        </div>
    </div>
</div>
@push('js')
   @livewire('livewire-ui-modal')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush
