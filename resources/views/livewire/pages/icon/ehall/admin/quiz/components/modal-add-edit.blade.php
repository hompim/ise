<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Artikel</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
    </div>
    <hr />
    <form class="w-full max-w-full mt-4" wire:submit.prevent="submit" autocomplete="off">
        @if ($errors->any())
            <div class="p-4 mb-3 bg-red-400 border-l-4 border-red-500" role="alert">
                <p class="text-lg font-bold">Validation Error</p>
                @foreach ($errors->all() as $error)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Pertanyaan
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="question" name="question" type="text" required wire:model.defer="question">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type">
                    Tipe Pertanyaan
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <select
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="type" name="quiz_type" type="text" required wire:model="quiz_type">
                    <option>Tipe</option>
                    <option value="Pilgan">Pilihan Ganda</option>
                    <option value="ToF">True or False</option>
                    <option value="Picture">Pilih Gambar</option>
                </select>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type">
                    Categori Pertanyaan
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <select
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="type" name="quiz_type" type="text" required wire:model="quiz_category">
                    <option>Categori Quiz</option>
                    @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Opsi A
                </label>
                <small class="text-liteBlack">*untuk pilgan</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="opt_a" name="opt_a" type="text" wire:model.defer="opt_a">
                atau
                <small class="text-liteBlack">*untuk pilih gambar</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="logo" name="logo" type="file" wire:model.defer="opt_a">
                @if ($opt_a)
                    @if (!is_string($opt_a) || $opt_a_image)
                        Preview:
                        <img src="{{ $opt_a_image ? asset('storage/' . $opt_a_image) : $opt_a->temporaryUrl() }}"
                            class="object-fit mb-3">
                    @endif
                @endif
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Opsi B
                </label>
                <small class="text-liteBlack">*untuk pengisian artikel tipe prestasi, tidak perlu diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="opt_b" name="opt_a" type="text" wire:model.defer="opt_b">
                atau
                <small class="text-liteBlack">*untuk pilih gambar</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="logo" name="logo" type="file" wire:model.defer="opt_b">
                @if ($opt_b)
                    @if (!is_string($opt_a) || $opt_a_image)
                        Preview:
                        <img src="{{ $opt_b_image ? asset('storage/' . $opt_b_image) : $opt_b->temporaryUrl() }}"
                            class="object-fit mb-3">
                    @endif
                @endif
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Opsi C
                </label>
                <small class="text-liteBlack">*untuk pilgan</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="opt_c" name="opt_c" type="text" wire:model.defer="opt_c">
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Opsi D
                </label>
                <small class="text-liteBlack">*untuk pilgan</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="opt_d" name="opt_d" type="text" wire:model.defer="opt_d">
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type">
                    Jawaban
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <select
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="type" name="answer" type="text" required wire:model="answer">
                    <option>Jawaban</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="True">True</option>
                    <option value="False">False</option>
                </select>
            </div>
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="content">
                    Penjelasan
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <div class="mt-2 bg-white" wire:ignore>
                    <div name="explanation" x-data x-ref="quillEditor" x-init="quill = new Quill($refs.quillEditor, { theme: 'snow' });
                    quill.on('text-change', function() {
                        @this.set('explanation', quill.root.innerHTML);
                    });"
                        wire:model.lazy="content">
                        {!! $explanation !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-end mb-2">
            <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700"
                type="submit">
                Save
            </button>
        </div>
    </form>
</div>
