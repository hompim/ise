<div>
    <div class="p-4 shadow-md rounded-xl" x-data="{ open: false }" style="background-color: #191a1e;border:0">
        <button class="flex flex-col items-start w-full" @click="open=!open">
            <div class="flex flex-row items-center w-full justify-content-between">
                <h2 class="text-xl font-bold capitalize">{{ $type == 'video' ? 'Video' : 'Proposal' }}</h2>
                <i class="fas fa-chevron-down" x-show="!open"></i>
                <i class="fas fa-chevron-up" x-show="open"></i>
            </div>
            <div>
        </button>
        <div x-show="open">
            <hr class="my-2" />
            <h2 class="mt-4 text-lg font-bold capitalize">Deskripsi & Ketentuan</h2>
            <br>
            <div class="flex flex-col justify-center md:flex-row justify-content-end">
                {{-- <a href="https://drive.google.com/file/d/14xmmF12pqJm3Ipy-qi1g23pYtm-kAvJ1/view" target="_blank">
                    <button
                        class="px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        <i class="mr-2 fas fa-cloud-download-alt"></i>Unduh File Soal
                    </button>
                </a> --}}
                <form wire:submit.prevent="submitTask" method="post" enctype="multipart/form-data">
                    @if ($type == 'file')
                        @if (!Auth::user()->userable->bionix->submission()->where('submission_type', 'Senior Penyisihan')->first() ||
                            !Auth::user()->userable->bionix->submission()->where('submission_type', 'Senior Penyisihan')->first()->file_path ||
                            !Auth::user()->userable->bionix->submission()->where('submission_type', 'Junior Semifinal')->first() ||
                            !Auth::user()->userable->bionix->submission()->where('submission_type', 'Junior Semifinal')->first()->file_path)
                            <input type="file" wire:model.defer="fileTask" class="form-control-file" name="fileTask"
                                id="fileTask" accept=".pdf,.zip,.rar">
                        @else
                            <a href="{{ asset('storage/' .Auth::user()->userable->bionix->submission()->whereNotNull('file_path')->first()->file_path) }}"
                                target="_blank">
                                <button type="button"
                                    class="px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                    <i class="mr-2 fas fa-cloud-download-alt"></i>Unduh Jawaban
                                </button>
                            </a>
                        @endif
                    @else
                        @if (!Auth::user()->userable->bionix->submission || !Auth::user()->userable->bionix->submission->video_link)
                            <input type="text" class="text-black w-100" wire:model.defer="linkTask"
                                class="form-control-file" name="linkTask" id="linkTask"
                                placeholder="Masukkan link video">
                        @else
                            <a target="_blank"
                                href="//{{ Auth::user()->userable->bionix->submission()->whereNotNull('video_link')->first()->video_link }}">
                                <button type="button"
                                    class="px-4 py-2 mx-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
                                    title="{{ Auth::user()->userable->bionix->submission()->whereNotNull('video_link')->first()->video_link }}">
                                    <i class="mr-2 fas fa-cloud-download-alt"></i>Lihat Video
                                </button>
                            </a>
                        @endif
                    @endif
                    <button class="px-4 py-2 mx-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        <i class="mr-2 fas fa-upload"></i>Upload
                    </button>
                </form>
                <div class="flex flex-col items-end">
                    <span wire:loading wire:target="fileTask" class="mx-2">Sedang mengunggah file jawaban
                        anda.</span>
                </div>
                <div class="flex flex-col items-end">
                    <span wire:loading wire:target="submitTask" class="mx-2">Sedang menyimpan file jawaban
                        anda.</span>
                </div>
            </div>

        </div>
    </div>
</div>
