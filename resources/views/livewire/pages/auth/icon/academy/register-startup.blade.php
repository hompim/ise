<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran Startup Academy</h1>
    </div>
    <div class="flex flex-col lg:flex-row lg:space-x-4 justify-evenly">
        {{-- step 1 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-12 h-12 rounded-full {{ $step == 1 ? 'bg-gradient-to-r from-pink-300 to-purple-300' : 'bg-white' }}">
                <p
                    class="text-xl font-semibold text-center {{ $step != 1 ? 'text-purple-200' : 'text-white' }}  font-poppins">
                    1</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi Anggota</h2>
        </div>
        {{-- step 2 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-10 h-10 {{ $step == 2 ? 'bg-gradient-to-r from-pink-300 to-purple-300' : 'bg-white' }} rounded-full ring-4 ring-purple-200">
                <p
                    class="text-xl font-semibold text-center {{ $step != 2 ? 'text-purple-200' : 'text-white' }} font-poppins">
                    2</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi Tim</h2>
        </div>
        {{-- step 3 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-10 h-10 {{ $step == 3 ? 'bg-gradient-to-r from-pink-300 to-purple-300' : 'bg-white' }} rounded-full ring-4 ring-purple-200">
                <p
                    class="text-xl font-semibold text-center {{ $step != 3 ? 'text-purple-200' : 'text-white' }} font-poppins">
                    3</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Confirmation & Submit</h2>
        </div>
    </div>
    <div class="flex justify-center">
        <form class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="registerSubmit" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- step 1 --}}
            <div class="{{ $step == 1 ? '' : 'hidden' }}">
                @for ($x = 1; $x <= 3; $x++)
                    {{-- anggota {{$x}} --}}
                    <h3
                        class="text-4xl mb-5 font-semibold text-white underline underline-offset-2 decoration-purple-200">
                        {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}
                    </h3>
                    <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_name">Nama Lengkap</label>
                        <input id="member_{{ $x }}_name" name="member_{{ $x }}_name"
                            wire:model.defer="member_{{ $x }}_name" type="text"
                            @if ($x < 3) required @endif
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nama lengkap {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_universitas">Asal Universitas</label>
                        <input id="member_{{ $x }}_universitas"
                            name="member_{{ $x }}_universitas"
                            wire:model.defer="member_{{ $x }}_universitas" type="text"
                            @if ($x < 3) required @endif
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan asal universitas {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }} (Tidak disingkat)">
                    </div>
                    <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                        <label for="ktm_{{ $x }}">Bukti Mahasiswa S1/Sederajat Aktif
                        </label>
                        <input id="ktm_{{ $x }}" name="ktm_{{ $x }}"
                            wire:model.defer="ktm_{{ $x }}" type="file"
                            @if ($x < 3) required @endif
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Bukti Mahasiswa S1/Sederajat Aktif {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}"
                            accept=".jpg,.png">
                    </div>
                    <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_whatsapp">Nomor WhatsApp (+62)</label>
                        <input id="member_{{ $x }}_whatsapp" name="member_{{ $x }}_whatsapp"
                            wire:model.defer="member_{{ $x }}_whatsapp" type="tel"
                            @if ($x < 3) required @endif
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nomor WhatsApp {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_email">Email address</label>
                        <input id="member_{{ $x }}_email" name="member_{{ $x }}_email"
                            wire:model.defer="member_{{ $x }}_email" type="email"
                            @if ($x < 3) required @endif
                            class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                            placeholder="Masukkan email aktif {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_ig">Link Akun Instagram (Tidak di-<i>private</i>)
                        </label>
                        <input id="member_{{ $x }}_ig" name="member_{{ $x }}_ig"
                            wire:model.defer="member_{{ $x }}_ig" type="text"
                            @if ($x < 3) required @endif
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Link Instagram {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_twibbon">Link Twibbon
                        </label>
                        <input id="member_{{ $x }}_twibbon" name="member_{{ $x }}_twibbon"
                            wire:model.defer="member_{{ $x }}_twibbon" type="text"
                            @if ($x < 3) required @endif
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Link Twibbon {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_linkedin">Link Linkedin
                        </label>
                        <input id="member_{{ $x }}_linkedin" name="member_{{ $x }}_linkedin"
                            wire:model.defer="member_{{ $x }}_linkedin" type="text"
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Link Linkedin {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                        <label for="member_{{ $x }}_twitter">Link Twitter
                        </label>
                        <input id="member_{{ $x }}_twitter" name="member_{{ $x }}_twitter"
                            wire:model.defer="member_{{ $x }}_twitter" type="text"
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Link Twitter {{ $x == 1 ? 'Ketua Tim' : 'Anggota ' . ($x - 1) }}">
                    </div>
                    {{-- anggota {{$x}} end --}}
                @endfor

                <div class="flex-row space-x-4 my-11 font-medium font-poppins">
                    <input type="checkbox" id="setuju_data_benar" name="setuju_data_benar"
                        wire:model.defer="setuju_data_benar"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju_data_benar"> Dengan ini kami menyatakan semua data yang
                        diisi
                        benar dan bisa dipertanggungjawabkan</label>
                </div>
                <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                    <button type="button" wire:click="identityMemberSubmit()"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
                </div>
            </div>
            {{-- step 1 end --}}


            {{-- step 2 Anggota Tim --}}
            <div class="{{ $step == 2 ? null : 'hidden' }}">
                <div class="flex flex-col my-12 space-y-2 font-medium text-white font-poppins">
                    <label for="name">Nama Tim</label>
                    <input wire:model.defer="team_name" id="name" name="team_name" type="text" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan nama tim kamu" maxlength="15">
                </div>
                <div class="flex flex-col my-12 space-y-2 font-medium text-white font-poppins">
                    <label for="judul">Judul Bisnis</label>
                    <input wire:model.defer="judul_bisnis" id="judul" name="judul_bisnis" type="text"
                        required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan judul bisnis tim kamu" maxlength="20">
                </div>
                <div class="flex flex-col my-12 space-y-2 font-medium text-white font-poppins">
                    <label for="deskripsi">Deskripsi Ide Bisnis (Maksimal dalam 300 kata)</label>
                    <textarea wire:model.defer="deskripsi" id="deskripsi" name="deskripsi"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        required rows="5" placeholder="Masukkan deskripsi bisnis tim kamu"></textarea>
                </div>

                <div class="flex-row space-x-4 my-11 font-medium font-poppins">
                    <input type="checkbox" id="setuju_ide_tim" name="setuju_ide_tim"
                        wire:model.defer="setuju_ide_tim"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju_ide_tim"> Dengan ini saya bahwa ide bisnis kami belum pernah
                        dilombakan maupun dijalankan sebelumnya</label>
                </div>
                <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                    <button type="button" wire:click="identityTeamSubmit()"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
                </div>

            </div>
            {{-- step 2 end --}}
            {{-- step 3 --}}
            <div class="{{ $step == 3 ? null : 'hidden' }}">
                <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                    <label>Pastikan semua data yang telah diisi sudah benar sebelum melakukan <i>submit</i>
                    </label>
                </div>
                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="button" wire:click="move({{ $step - 1 }})"
                        class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
                    <button type="Submit"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
                </div>
            </div>
            {{-- step 3 end --}}

        </form>
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
