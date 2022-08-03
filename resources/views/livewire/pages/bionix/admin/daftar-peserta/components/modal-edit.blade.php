<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Data Peserta</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr />
    <form class="mt-4 w-full max-w-full" wire:submit.prevent="submit" autocomplete="off">
        @if ($errors->any())
            <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Validation Error</p>
                @foreach ($errors->all() as $error)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-payer">
                    Nama Anggota 1
                </label>
                <input name="anggota_1"
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="anggota_1" type="text" required wire:model.defer="anggota_1" required>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-payer">
                    Email Anggota 1
                </label>
                <input name="anggota_1_email"
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="anggota_1" disabled type="email" required wire:model.defer="anggota_1_email" required>
            </div>
            @if (($type == 'student' && $this->bionix_data->member_id) ||
                ($type == 'college' && $this->bionix_data->member1_id))
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-creator">
                        Nama Anggota 2
                    </label>
                    <input name="anggota_2"
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="anggota_1" type="text" required wire:model.defer="anggota_2" required>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-creator">
                        Email Anggota 2
                    </label>
                    <input name="anggota_2_email"
                        class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="anggota_2_email" type="email" required wire:model.defer="anggota_2_email" required>
                </div>
            @endif
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            @if ($type == 'college' && $this->bionix_data->member2_id)
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-bank">
                        Nama Anggota 3
                    </label>
                    <input
                        class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="anggota_3" type="text" required wire:model.defer="anggota_3" required>
                </div>
            @endif
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-owner">
                    Nama Institusi
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="nama_institusi" type="text" required wire:model.defer="nama_institusi" required>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>
</div>
