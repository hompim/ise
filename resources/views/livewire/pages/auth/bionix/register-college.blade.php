<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran College
            Level
        </h1>
    </div>
    <div class="flex flex-col lg:flex-row lg:space-x-4 justify-evenly">
        {{-- step 1 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">
                <p class="text-xl font-semibold text-center text-white font-poppins">1</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi Tim</h2>
        </div>
        {{-- step 2 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full ring-4 ring-purple-200">
                <p class="text-xl font-semibold text-center text-purple-200 font-poppins">2</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Anggota Tim</h2>
        </div>
        {{-- step 3 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full ring-4 ring-purple-200">
                <p class="text-xl font-semibold text-center text-purple-200 font-poppins">3</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Akun</h2>
        </div>
    </div>
    <div class="flex justify-center">
        <form action="#" class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="akunSubmit" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- step 1 --}}
            <div class="{{ $step == 1 ? '' : 'hidden' }}">
                <input type="hidden" name="peserta_type" value="senior" />
                <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                    <label for="name">Nama Tim</label>
                    <input id="name" type="text"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan nama tim kamu" wire:model.defer="team_name" name="team_name">
                </div>
                <div class="flex flex-col space-y-2 font-medium my-11 font-poppins">
                    <label for="asal-domisili" class="text-white">Asal Daerah</label>
                    <select wire:model="city" name="city" id="asal-domisili" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white"
                        name="city">
                        <option class="bg-liteBlack" selected value="">Pilih asal daerah</option>
                        @foreach ($cities as $city)
                            <option class="text-white bg-liteBlack" value="{{ $city->id }}">{{ $city->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="name">Judul Ide</label>
                    <input id="name" type="text"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan nama tim kamu" wire:model.defer="judul_ide_bisnis"
                        name="judul_ide_bisnis">
                </div>
                {{-- <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="bmc">Upload dile BMC (<=2Mb, .pdf) </label>
                            <input id="bmc" wire:model.defer="bmc" name="bmc" type="file" required
                                class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                                placeholder="File BMC" accept="application/pdf">
                </div> --}}
                <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                    <button type="button" wire:click="identityTeamSubmit()"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
                </div>

            </div>
            {{-- step 1 end --}}

            {{-- step 2 Anggota Tim --}}
            {{-- anggota 1 --}}
            {{-- class="{{$step == 2 ? '' : 'hidden'}}" --}}
            <div class="{{ $step == 2 ? '' : 'hidden' }}">
                @for ($x = 1; $x <= 5; $x++)
                    <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">
                        Anggota {{ $x }} {{ $x == 4 || $x == 5 ? '(Opsional)' : null }}
                    </h3>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" wire:model.defer="member_{{ $x }}_name"
                            name="member_{{ $x }}_name" type="text"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nama lengkap anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="email-address">Email</label>
                        <input id="email-address" wire:model.defer="member_{{ $x }}_email"
                            name="member_{{ $x }}_email" type="email"
                            class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                            placeholder="Masukkan email aktif anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Nomor WhatsApp</label>
                        <input id="wa" type="text" wire:model.defer="member_{{ $x }}_whatsapp"
                            name="member_{{ $x }}_whatsapp"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nomor WhatsApp anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Asal Institusi</label>
                        <input id="wa" wire:model.defer="member_{{ $x }}_university"
                            name="member_{{ $x }}_university"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan Asal Institusi anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Jurusan</label>
                        <input id="wa" wire:model.defer="member_{{ $x }}_major"
                            name="member_{{ $x }}_university"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan jurusan anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Tahun Angkatan</label>
                        <input id="wa" wire:model.defer="member_{{ $x }}_year"
                            name="member_{{ $x }}_university"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan tahun angkatan anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Akun Instagram</label>
                        <input wire:model.defer="member_{{ $x }}_instagram"
                            name="member_{{ $x }}_instagram"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan akun instagram anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="wa">Link Twibbon</label>
                        <input wire:model.defer="member_{{ $x }}_twibbon"
                            name="member_{{ $x }}_twibbon"
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan link twibbon anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="ktm_{{ $x }}">Bukti Mahasiswa S1/Sederajat Aktif
                        </label>
                        <input wire:model.defer="member_{{ $x }}_ktm"
                            name="member_{{ $x }}_ktm" type="file"
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Bukti Mahasiswa S1/Sederajat Aktif Anggota {{ $x }}"
                            accept=".jpg,.png">
                    </div>
                    {{-- <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                        <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                                href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                        </label>
                        <div class="flex flex-row items-center justify-start">
                            <button id="buton"
                                class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent">
                                <img class="mr-4" src="{{ asset('images/upload.svg') }}" alt=""> Add File
                            </button>
                            <input id="inputan" name="kartu-pelajar1" type="file"
                                class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                                placeholder="Masukkan nomor WhatsApp anggota 1">
                            <span class="pl-5" id="output"></span>
                        </div>
                    </div> --}}
                @endfor
                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="button" wire:click="move({{ $step - 1 }})"
                        class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
                    <button type="button" wire:click="anggotaTeamSubmit()"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
                </div>
            </div>
            {{-- step 2 end --}}

            {{-- step 3 --}}
            <div class="{{ $step == 3 ? '' : 'hidden' }}">
                <div class="flex flex-col space-y-2 font-medium font-poppins">
                    <label for="info-pendaftaran" class="text-white">Info Pendaftaran</label>
                    <select id="info-pendaftaran" name="info_source" wire:model.defer="info_source"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                        <option class="bg-liteBlack" disabled selected value="">Dari manakah kamu
                            mendapatkan
                            informasi mengenai BIONIX?</option>
                        <option value="1" class="bg-liteBlack ">IG</option>
                        <option value="2" class="bg-liteBlack ">TikTok</option>
                        <option value="3" class="bg-liteBlack ">Linkedin</option>
                        <option value="4" class="bg-liteBlack ">Twitter</option>
                    </select>
                </div>


                <div class="flex-row space-x-4 font-medium font-poppins">
                    <input type="checkbox" id="setuju-kebijakan" name="setuju-kebijakan" wire:model.defer="agree"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju-kebijakan">Saya setuju dengan kebijakan privasi serta
                        syarat
                        dan
                        ketentuan yang
                        berlaku</label>
                    </d>
                </div>

                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="button"
                        class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 btn-secondary hover:scale-105 lg:mb-0">Back</button>
                    <button type="Submit"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
                </div>
            </div>
        </form>
    </div>
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
                <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start">
                    <p class="text-sm text-white">Tutup</p></i>
                </button>
            </div>
        </div>
    @endif
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
</div>
