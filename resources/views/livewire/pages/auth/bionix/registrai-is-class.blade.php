<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran IS Class</h1>
    </div>
    <div class="flex justify-center">
        <form class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="akunSubmit" method="POST">
            @csrf
            {{-- @if ($errors->any())

            {{-- step 1 --}}
            <input type="hidden" name="peserta_type" value="senior" />
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap kamu" wire:model.defer="namalengkap" name="namalengkap">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Email</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan email aktif kamu" wire:model.defer="email" name="email">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nomor WhatsApp</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp kamu" wire:model.defer="whatsapp" name="whatsapp">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Asal Sekolah</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan asal sekolah kamu" wire:model.defer="sekolah" name="sekolah">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Kartu Pelajar
                </label>
                <input id="kartu-pelajar1" name="ktm" wire:model.defer="ktm" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Kartu Pelajar Anggota 2">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="twibbon1">Bukti Upload Twibbon
                </label>
                <input id="twibbon1" name="twibbon" wire:model.defer="twibbon" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Twibbon Anggota 2">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig1" name="instagram" wire:model.defer="instagram" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Bukti Follow Anggota 2">
            </div>

            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                    <label for="name">Kelas yang ingin kamu ikuti</label>
                    <div class="flex items-center mb-2">
                        <input id="kelas10" name="status" wire:model.defer ="status" type="radio" value="online"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                            Online</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="kelas10" name="status" wire:model.defer ="status" type="radio" value="offline"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                            Offline</label>
                    </div>
            </div>
                <div class="flex flex-col space-y-2 my-11 font-medium font-poppins">
                    <label for="info-pendaftaran" class="text-white">Info Pendaftaran</label>
                    <select wire:model.defer="info_pendaftaran" name="info_pendaftaran" id=""
                        class="w-full p-2 bg-transparent rounded-md text-liteGray focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200">
                        <option value="Media Sosial ISE! 2022" class="bg-liteBlack">Media Sosial ISE! 2022</option>
                        <option value="Media Sosial selain ISE! 2022 (info lomba, dll)" class="bg-liteBlack">Media
                            Sosial selain ISE!
                            2022 (info lomba, dll)
                        </option>
                        <option value="Grup WA/Line/dll" class="bg-liteBlack">Grup WA/Line/dll</option>
                        <option value="Sekolah (guru, dll)" class="bg-liteBlack">Sekolah (guru, dll)</option>
                        <option value="Teman/keluarga" class="bg-liteBlack">Teman/keluarga</option>
                        <option value="Website/Aplikasi Sejuta Cita" class="bg-liteBlack">Website/Aplikasi Sejuta Cita
                        </option>
                    </select>
                </div>

                <div class="flex-row my-11 space-x-4 font-medium font-poppins">
                    <input wire:model.defer="agree" type="checkbox" id="setuju-kebijakan" name="setuju-kebijakan"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju-kebijakan">Saya setuju dengan kebijakan privasi serta syarat dan
                        ketentuan yang
                        berlaku</label>
                </div>

                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="Submit"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
                </div>
            {{-- step 1 end --}}

            {{-- step 3 --}}
        </form>


        <script>
            const output = document.getElementById('output');
            const filepicker = document.getElementById('inputan');
            const buton = document.getElementById('buton');
            let image = document.getElementById('img-preview');


            buton.addEventListener('click', () => {
                filepicker.click();
            })

            filepicker.addEventListener('change', (event) => {
            const files = event.target.files;
            output.textContent = '';

            for (const file of files) {
            output.textContent = file.name;
            image.src = URL.createObjectURL(file);
            }


            })
        </script>

        @if ($errors->any() || $errorMessage)
        <div class="fixed px-4 py-3 text-red-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md bottom-12 right-12"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <ul class="font-normal">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @if ($errorMessage)
                        <p class="font-normal">{{ $errorMessage }}</p>
                    @endif
                </div>
                <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    @endif

    </div>
