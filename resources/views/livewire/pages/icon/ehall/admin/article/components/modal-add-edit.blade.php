<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Artikel</h5>
        <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i class="cil-x"></i></button>
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
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Judul
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="title" name="title" type="text" required wire:model.defer="title">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="type">
                    Tipe
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="type" name="type" type="text" required wire:model.defer="article_type">
                    <option value="Startup">Startup</option>
                    <option value="Prestasi">Prestasi</option>
                </select>
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Link Youtube
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="link_youtube" name="link_youtube" type="text" required wire:model.defer="link_youtube">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Logo
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="logo" name="logo" type="file" wire:model.defer="logo">
            </div>
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Gambar Judul
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="title_image" name="title_image" type="file" wire:model.defer="title_image">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="subtitle">
                    Sub Judul
                </label>
                <textarea
                    class="appearance-none block w-full bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="subtitle" name="subtitle" type="text" required wire:model.defer="subtitle"></textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content">
                    Konten
                </label>
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
                    <div class="col-3 card me-1 mb-1">
                        <img src="{{ $image->temporaryUrl() }}">
                    </div>
                @endforeach
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Galery(can handle multiple image)</label>
            <input type="file" class="form-control" wire:model="images" multiple>
            <div wire:loading wire:target="images">Uploading...</div>
        </div>
        <div class="flex flex-wrap mb-2 justify-end">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Save
            </button>
        </div>
    </form>
</div>
