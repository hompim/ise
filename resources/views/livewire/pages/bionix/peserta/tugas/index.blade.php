<div class="px-8 text-white">
    <h3 class="text-xl font-weight-bold my-4">Tugas</h3>
    <div class="grid grid-cols-1 gap-6 mt-4 mb-4">
        @if (Auth::user()->userable->bionix->invoice_id)
            <div>
                <div class="p-4 rounded-xl shadow-md" x-data="{ open: false }" style="background-color: #191a1e;border:0">
                    <button class="w-full flex flex-col items-start" @click="open=!open">
                        <div class="flex flex-row items-center w-full justify-content-between">
                            <h2 class="font-bold text-xl  capitalize">Bonus Soal Tryout</h2>
                            <i class="fas fa-chevron-down" x-show="!open"></i>
                            <i class="fas fa-chevron-up" x-show="open"></i>
                        </div>
                        <div>
                    </button>
                    <div x-show="open">
                        <hr class="my-2" />
                        <h2 class="font-bold text-lg mt-4  capitalize">Deskripsi & Ketentuan</h2>
                        <br>
                        <div class="justify-center md:flex-row flex flex-col justify-content-end">
                            <a href="https://drive.google.com/file/d/14xmmF12pqJm3Ipy-qi1g23pYtm-kAvJ1/view" target="_blank">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                                    <i class="fas fa-cloud-download-alt mr-2"></i>Unduh File Soal
                                </button>
                            </a>

                            <input type="file" wire:model.defer="fileTask" class="form-control-file" name="fileTask"
                                id="fileTask" accept=".pdf,.zip,.rar" hidden>

                        </div>
                        <div class="flex flex-col items-end">
                            <span wire:loading wire:target="fileTask" class="mx-2">Sedang mengunggah file jawaban
                                anda.</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @livewire('pages.bionix.peserta.tugas.task-card', ['type' => 'file'])
        @livewire('pages.bionix.peserta.tugas.task-card', ['type' => 'video'])
    </div>
    <div wire:loading.delay wire:target="fileTask"
        class="fixed bottom-12 right-12 bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
        role="alert" style="color:rgba(30, 58, 138, var(--tw-text-opacity))">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>
            </div>
            <div>
                <p class="font-bold">Sedang mengunggah</p>
                <p class="text-sm">Harap tunggu sesaat.</p>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <p class="text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
    @if ($message)
        <div class="fixed bottom-12 right-12 bg-{{ $messageType }}-100 border-t-4 border-{{ $messageType }}-500 rounded-b text-{{ $messageType }}-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-{{ $messageType }}-500 mr-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">
                        {{ $messageType == 'green' ? 'Sukses' : ($messageType == 'blue' ? 'Informasi' : 'Terjadi Masalah') }}
                    </p>
                    <p class="text-sm">{{ $message }}</p>
                </div>
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                        class="cil-x"></i></button>
            </div>
        </div>
    @endif
</div>
