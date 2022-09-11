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
                    Judul
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="title" name="title" type="text" required wire:model.defer="title">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type">
                    Tipe
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <select
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="type" name="article_type" type="text" required wire:model.defer="article_type">
                    <option>Tipe Artikel</option>
                    <option value="Startup">Startup</option>
                    <option value="Prestasi">Prestasi</option>
                </select>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Link Youtube
                </label>
                <small class="text-liteBlack">*untuk pengisian artikel tipe prestasi, tidak perlu diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="link_youtube" name="link_youtube" type="text" wire:model.defer="link_youtube">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Logo
                </label>
                <small class="text-liteBlack">*untuk pengisian artikel tipe prestasi, tidak perlu diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="logo" name="logo" type="file" wire:model.defer="logo">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Gambar Founder/Prestasi
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <input
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="title_image" name="title_image" type="file" wire:model.defer="title_image">
            </div>
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="subtitle">
                    Sub Judul
                </label>
                <small class="text-liteBlack">*maximum character 256 & wajib diisi</small>
                <textarea
                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-white border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                    id="subtitle" name="subtitle" type="text" required wire:model.defer="subtitle" maxlength="256"></textarea>
            </div>
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="content">
                    Konten Text
                </label>
                <small class="text-liteBlack">*wajib diisi</small>
                <div class="mt-2 bg-white" wire:ignore>
                    <div name="content" x-data x-ref="quillEditor" x-init="quill = new Quill($refs.quillEditor, { theme: 'snow' });
                    quill.on('text-change', function() {
                        @this.set('content', quill.root.innerHTML);
                    });" wire:model.lazy="content">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
        @if ($images)
            Photo Preview: (Foto pertama mungkin tidak terlihat, tetapi tetap terupload)
            <div class="row">
                @foreach ($images as $image)
                    <div class="mb-1 col-3 card me-1">
                        <img
                            src="{{$image instanceOf \Livewire\TemporaryUploadedFile ? $image->temporaryUrl() : asset('storage/' . $image->image_path)}}">
                    </div>
                @endforeach
                <button wire:click="deleteImage" class="bg-purple-400 py-2 px-4 rounded-sm" type="button">Delete Images</button>
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Galery(can handle multiple image)</label>
            <small class="text-liteBlack">*wajib diisi</small>
            @if (!$images)
                <input type="file" class="form-control" wire:model="images" multiple>
            @endif
            <div wire:loading wire:target="images">Uploading...</div>
        </div>
        <div class="flex flex-wrap justify-end mb-2">
            <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700" type="submit">
                Save
            </button>
        </div>
    </form>
</div>
