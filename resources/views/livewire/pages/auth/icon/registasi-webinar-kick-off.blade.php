<div>
    <h2 class=" mt-12 mb-8 px-4 flex justify-center text-lg md:text-2xl font-bold text-white font-poppins">Form Pendaftaran
        Webinar Kick Off</h2>


    <form wire:submit.prevent="akunSubmit" method="POST"  autocomplete="off">
        @csrf
        <div class="md:mx-12 mx-4 rounded-md shadow-sm ">
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input wire:model="name" id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap kamu">
            </div>
            <div class="mt-12 flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Nomor WhatsApp</label>
                <input wire:model.defer="whatsapp" id="whatsapp" name="whatsapp" type="text" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp kamu">
            </div>
            <div class="mt-12 flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label>Upload bukti poster di IG Story</label>
                <img
                    src="{{$instagram_story ? $instagram_story->temporaryUrl():null}}"
                    class="object-fit mx-auto"
                    style="max-height:50vh">
            </img>
                <span
                    class="flex flex-row gap-4 w-32 py-2 p-2 rounded-md bg-transparent !border border-[#6B7280] hover:border-pink-200  autofill:bg-transparent mt-4 text-white item-center mb-4">
                    <img class="" src="{{ asset('images/upload.svg') }}" alt="">
                    <button type="button" onclick="document.querySelector('#story').click()" class="text-liteGray">Add File</button>
                    <input type="file" wire:model.defer="instagram_story" class="form-control-file" name="instagram_story"
                        id="story" accept=".jpg,.jpeg,.png" hidden>
                </span>


            </div>
            <div class="mt-12">
                <label for="Info Pendaftaran" class="block">
                    <span class="block mb-2 font-medium text-white">Info</span>
                    <select wire:model.defer="info_source" name="info_source" id=""
                        class="text-liteGray w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200">
                        <option value="Media Sosial ISE! 2021">Media Sosial ISE! 2021</option>
                        <option value="Media Sosial selain ISE! 2021 (info lomba, dll)">Media Sosial selain ISE!
                            2021 (info lomba, dll)
                        </option>
                        <option value="Grup WA/Line/dll">Grup WA/Line/dll</option>
                        <option value="Sekolah (guru, dll)">Sekolah (guru, dll)</option>
                        <option value="Teman/keluarga">Teman/keluarga</option>
                        <option value="Website/Aplikasi Sejuta Cita">Website/Aplikasi Sejuta Cita</option>
                    </select>
                </label>
            </div>
            <div class="flex items-center mt-12">
                <input wire:model.defer="agree" name="agree" type="checkbox"
                    class="w-4 h-4 text-pink-200 rounded cursor-pointer focus:ring-pink-200">
                <label for="remember_me" class="ml-2 block text-sm text-[#B5B3BC] font-poppins font-medium">
                    Saya setuju dengan kebijakan privasi serta <a href="{{route('term-condition')}}" class="text-blue-400" target="_blank">syarat dan ketentuan</a> yang berlaku
                </label>
            </div>
        </div>
        <span class="flex justify-center mb-24 mt-12">
            <div wire:loading>

                <h3 class="text-2xl text-white">Harap Tunggu</h3>

            </div>
            <button
            wire:loading.remove
            type="submit"
            class="w-64 py-2 bg-gradient-to-r from-pink-300 to-purple-300 rounded-full mt-4 text-white item-center mb-4"
            wire:loading.attr="disabled"
            >Kirim</button>
        </span>
    </form>

    @if($errors->any()||$errorMessage)
    <div
        class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="flex">
            <div class="py-1">
                <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                </svg>
            </div>
            <div>
                <p class="font-bold">Terjadi masalah</p>
                <ul class="font-normal">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @if($errorMessage)
                    <p class="font-normal">{{$errorMessage}}</p>
                @endif
            </div>
            <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                    class="fas fa-times"></i></button>
        </div>
    </div>
    @endif

</div>
