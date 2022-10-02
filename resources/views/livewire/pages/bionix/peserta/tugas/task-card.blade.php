<div>
    <div class="p-4 rounded-xl shadow-md" x-data="{ open: false }" style="background-color: #191a1e;border:0">
        <button class="w-full flex flex-col items-start" @click="open=!open">
            <div class="flex flex-row items-center w-full justify-content-between">
                <h2 class="font-bold text-xl  capitalize">{{ $type == 'video' ? 'Video' : 'Proposal' }}</h2>
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
                {{-- <a href="https://drive.google.com/file/d/14xmmF12pqJm3Ipy-qi1g23pYtm-kAvJ1/view" target="_blank">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                        <i class="fas fa-cloud-download-alt mr-2"></i>Unduh File Soal
                    </button>
                </a> --}}
                @if ($type == 'file')
                    @if (!Auth::user()->userable->bionix->submission()->where('submission_type', 'Senior Penyisihan')->first() || !Auth::user()->userable->bionix->submission()->where('submission_type', 'Senior Penyisihan')->first()->file_path)
                        <input type="file" wire:model.defer="fileTask" class="form-control-file" name="fileTask"
                            id="fileTask" accept=".pdf,.zip,.rar">
                    @else
                        <a href="{{ asset('storage/' . Auth::user()->userable->bionix->submission()->where('submission_type', 'Senior Penyisihan')->first()->file_path) }}"
                            target="_blank">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                                <i class="fas fa-cloud-download-alt mr-2"></i>Unduh Jawaban
                            </button>
                        </a>
                    @endif
                @else
                    @if (!Auth::user()->userable->bionix->submission || !Auth::user()->userable->bionix->submission->video_link)
                        <input type="text" class="text-black w-100" wire:model.defer="linkTask"
                            class="form-control-file" name="linkTask" id="linkTask" placeholder="Masukkan link video">
                    @else
                        <a target="_blank" href="//{{ Auth::user()->userable->bionix->submission->video_link }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                                <i class="fas fa-cloud-download-alt mr-2"></i>Lihat Video
                            </button>
                        </a>
                    @endif
                @endif
                <button wire:click="submitTask"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                    <i class="fas fa-cloud-upload-alt mr-2"></i>Submit</button>
            </div>
            <div class="flex flex-col items-end">
                <span wire:loading wire:target="fileTask" class="mx-2">Sedang mengunggah file jawaban
                    anda.</span>
            </div>
        </div>
    </div>
</div>
