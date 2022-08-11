<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran Data Science Academy</h1>
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
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi Tim</h2>
        </div>
        {{-- step 2 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-10 h-10 {{ $step == 2 ? 'bg-gradient-to-r from-pink-300 to-purple-300' : 'bg-white' }} rounded-full ring-4 ring-purple-200">
                <p
                    class="text-xl font-semibold text-center {{ $step != 2 ? 'text-purple-200' : 'text-white' }} font-poppins">
                    2</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Anggota Tim</h2>
        </div>
    </div>
    <div class="flex justify-center">
        <form class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20" wire:submit.prevent="akunSubmit"
            method="POST" enctype="multipart/form-data">
            @csrf
            {{-- step 1 --}}
            <div class="{{ $step == 1 ? '' : 'hidden' }}">
                <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                    <label for="name">Nama Tim</label>
                    <input wire:model.defer="team_name" id="name" name="team_name" type="text" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan nama tim kamu">
                </div>
                <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="institution_name">Asal Institusi/Universitas</label>
                    <input wire:model.defer="institution_name" id="institution_name" name="institution_name"
                        type="text" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Masukkan institusi kamu">
                </div>
                <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="alasan">Apa alasan tim Anda mengikuti Data Science Academy</label>
                    <textarea wire:model.defer="alasan" id="alasan" name="alasan"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        required rows="5" placeholder="Masukkan apa alasan tim Anda" onkeyup="countWords(this.value,'alasan_error')"></textarea>
                    <small class="font-normal text-red-400" id="alasan_error" style="display: none">Tidak boleh
                        lebih dari 300 kata.</small><br />
                </div>
                <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="harapkan">Apa yang tim Anda harapkan dari Data Science Academy</label>
                    <textarea wire:model.defer="harapkan" id="harapkan" name="harapkan"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        required rows="5" placeholder="Masukkan apa yang tim Anda harapkan"
                        onkeyup="countWords(this.value,'harapkan_error')"></textarea>
                    <small class="font-normal text-red-400" id="harapkan_error" style="display: none">Tidak boleh
                        lebih dari 300 kata.</small><br />
                </div>
                <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                    <label for="lakukan">Apa yang akan tim Anda lakukan pasca Data Science Academy</label>
                    <textarea wire:model.defer="lakukan" id="lakukan" name="lakukan"
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        required rows="5" placeholder="Masukkan apa yang akan tim Anda lakukan"
                        onkeyup="countWords(this.value,'lakukan_error')"></textarea>
                    <small class="font-normal text-red-400" id="lakukan_error" style="display: none">Tidak boleh
                        lebih dari 300 kata.</small><br />
                </div>
                <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                    <button type="button" wire:click="identityTeamSubmit()"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
                </div>
            </div>
            {{-- step 1 end --}}


            {{-- step 2 Anggota Tim --}}
            <div class="{{ $step == 2 ? null : 'hidden' }}">

                @for ($x = 1; $x <= 3; $x++)
                    {{-- anggota {{$x}} --}}
                    <h3
                        class="mb-5 text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">
                        Anggota {{ $x }}
                    </h3>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="member_{{ $x }}_name">Nama Lengkap</label>
                        <input id="member_{{ $x }}_name" name="member_{{ $x }}_name"
                            wire:model.defer="member_{{ $x }}_name" type="text"
                            required
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nama lengkap anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="member_{{ $x }}_email">Email address</label>
                        <input id="member_{{ $x }}_email" name="member_{{ $x }}_email"
                            wire:model.defer="member_{{ $x }}_email" type="email"
                            required
                            class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                            placeholder="Masukkan email aktif anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="member_{{ $x }}_whatsapp">Nomor WhatsApp</label>
                        <input id="member_{{ $x }}_whatsapp" name="member_{{ $x }}_whatsapp"
                            wire:model.defer="member_{{ $x }}_whatsapp" type="tel"
                            required
                            class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Masukkan nomor WhatsApp anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="ktm_{{ $x }}">Bukti Mahasiswa S1/Sederajat Aktif
                        </label>
                        <input id="ktm_{{ $x }}" name="ktm_{{ $x }}"
                            wire:model.defer="ktm_{{ $x }}" type="file"
                            required
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Bukti Mahasiswa S1/Sederajat Aktif Anggota {{ $x }}"
                            accept=".jpg,.png">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="member_{{ $x }}_ig">Username Instagram
                        </label>
                        <input id="member_{{ $x }}_ig" name="member_{{ $x }}_ig"
                            wire:model.defer="member_{{ $x }}_ig" type="text"
                            required
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Username Instagram Anggota {{ $x }}">
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="member_{{ $x }}_twibbon">Link Twibbon
                        </label>
                        <input id="member_{{ $x }}_twibbon" name="member_{{ $x }}_twibbon"
                            wire:model.defer="member_{{ $x }}_twibbon" type="text"
                            required
                            class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                            placeholder="Link Twibbon Anggota {{ $x }}">
                        <small>Petunjuk twibbon dapat diunduh lewat link berikut: <a class="text-blue-400"
                                href="https://ise-its.com/PetunjukTwibbonAcademy"
                                target="_blank">ise-its.com/PetunjukTwibbonAcademy</a></small>
                    </div>
                    <div class="flex flex-col space-y-2 font-medium text-white my-11 font-poppins">
                        <label for="cv_{{ $x }}">Curriculum Vitae (<=3Mb, .pdf) </label>
                                <input id="cv_{{ $x }}" name="cv_{{ $x }}"
                                    wire:model.defer="cv_{{ $x }}" type="file"
                                    required
                                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                                    placeholder="Curriculum Vitae Anggota {{ $x }}"
                                    accept="application/pdf">
                    </div>
                    {{-- anggota {{$x}} end --}}
                @endfor

                <div class="flex-row space-x-4 font-medium my-11 font-poppins">
                    <input type="checkbox" id="setuju-kebijakan" name="agree" wire:model.defer="agree"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju-kebijakan"> Saya setuju dengan kebijakan privasi serta <a
                            href="{{ route('term-condition') }}" class="text-blue-400" target="_blank">syarat dan
                            ketentuan</a> yang berlaku</label>
                </div>
                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="button" wire:click="move({{ $step - 1 }})"
                        class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
                    <button type="Submit"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
                </div>

            </div>
            {{-- step 2 end --}}

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

    @push('js')
        <script>
            function countWords(val, id_error) {
                let words = val.split(" ")
                if (words.length > 300) {
                    document.getElementById(id_error).style.display = "block"
                } else {
                    document.getElementById(id_error).style.display = "none"
                }
            }
        </script>
    @endpush
