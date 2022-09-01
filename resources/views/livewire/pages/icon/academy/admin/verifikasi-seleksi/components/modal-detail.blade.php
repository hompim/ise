<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Jawaban Seleksi</h5>
    </div>
    <hr />
    <div class="px-4 mt-4">
        <div id="data_tim">
                <iframe src="{{ asset('storage/' . $team->jawaban_seleksi_path) }}" class="w-full" height="600px" frameborder="0">
                </iframe>
        </div>
        <hr class="my-4" />

        <div class="flex flex-row justify-end">
            <button type="button" onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-seleksi.components.modal-accept-rejectl',{{json_encode(['type' => 'accept','id'=>$team->id])}})"
                class="text-gray border-2 bg-green-500 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
                Terima
            </button>
            <button type="button" onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-seleksi.components.modal-accept-rejectl',{{json_encode(['type' => 'reject','id'=>$team->id])}})"
                class="text-gray bg-red-500 border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
                Tolak
            </button>
        </div>
    </div>
