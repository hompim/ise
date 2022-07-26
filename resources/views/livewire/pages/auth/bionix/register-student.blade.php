<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran Student
            Level
        </h1>
    </div>
    <div class="flex flex-col lg:flex-row lg:space-x-4 justify-evenly">
        {{-- step 1 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-12 h-12 rounded-full {{$step == 1 ? "bg-gradient-to-r from-pink-300 to-purple-300": "bg-white"}}">
                <p class="text-xl font-semibold text-center {{$step != 1 ? "text-purple-200" : "text-white"}}  font-poppins">1</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi Tim</h2>
        </div>
        {{-- step 2 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 {{$step == 2 ? "bg-gradient-to-r from-pink-300 to-purple-300": "bg-white"}} rounded-full ring-4 ring-purple-200">
                <p class="text-xl font-semibold text-center {{$step != 2 ? "text-purple-200" : "text-white"}} font-poppins">2</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Anggota Tim</h2>
        </div>
        {{-- step 3 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 {{$step == 3 ? "bg-gradient-to-r from-pink-300 to-purple-300": "bg-white"}} rounded-full ring-4 ring-purple-200">
                <p class="text-xl font-semibold text-center {{$step != 3 ? "text-purple-200" : "text-white"}} font-poppins">3</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Akun</h2>
        </div>
    </div>
    <div class="flex justify-center">
        <form  class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="akunSubmit" method="POST">
            @csrf
            {{-- step 1 --}}
            <div class="{{$step == 1 ? '' : "hidden"}}">
                <input type="hidden" name="peserta_type" value="junior" />
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Tim</label>
                <input wire:model.defer = "team_name" id="name" name="team_name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama tim kamu">
            </div>
            {{-- <div class="flex flex-col my-11 space-y-2 font-medium font-poppins">
                <label for="asal-sekolah" class="text-white">Asal Sekolahmu</label>
                <select wire:model.defer ="school_name" id="asal-sekolah" name="school_name" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                    <option class="bg-liteBlack" disabled selected value="">Pilih
                        asal
                        sekolah
                        kamu</option>
                    <option value="1" class="bg-liteBlack ">sma 1</option>
                </select>
            </div> --}}
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="name">Asal Sekolahmu</label>
                <input wire:model.defer = "school_name" id="name" name="school_name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan sekolah kamu">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium font-poppins">
                <label for="asal-domisili" class="text-white">Asal provinsi/kota/kabupaten
                    sekolahmu</label>
                <select wire:model ="school_city" name="school_city" id="asal-domisili" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white"
                    name="school_city">
                    <option class="bg-liteBlack" selected value="">Pilih asal
                        provinsi/kota/kabupaten
                        sekolah
                        kamu</option>
                        @foreach ($cities as $city )
                            <option class="bg-liteBlack text-white" value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="flex-flex-col">
                <h3 class="text-xl font-semibold text-white font-poppins">Region</h3>
                <h4 class="text-lg font-semibold text-[#6B7280] font-poppins">Kamu berada di <span
                        class="text-pink-300">Region {{ $region }}</span></h4>
            </div>
            <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                <button type="button"
                    wire:click = "identityTeamSubmit()"
                    class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
            </div>
            </div>
              {{-- step 1 end --}}


            {{-- step 2 Anggota Tim --}}
            <div class="{{$step == 2 ? null : "hidden"}}">
                {{-- anggota 1 --}}
            <h3 class="text-4xl mb-5 font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 1
            </h3>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="member_1_name" wire:model.defer ="member_1_name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 1">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="member_1_email" wire:model.defer ="member_1_email" type="email" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 1">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="member_1_whatsapp" wire:model.defer ="member_1_whatsapp" type="tel" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Kelas</h5>
                <div class="flex items-center mb-2">
                    <input id="kelas10" name="member_1_class" wire:model.defer ="member_1_class" type="radio" value="10" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        10</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas11" name="member_1_class" wire:model.defer ="member_1_class" type="radio" value="11" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas11" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        11</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas12" name="member_1_class" wire:model.defer ="member_1_class" type="radio" value="12" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas12" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        12</label>
                </div>
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Kartu Pelajar Anggota 1
                </label>
                <input id="kartu-pelajar1" name="ktm_1" wire:model.defer="ktm_1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Kartu Pelajar Anggota 1">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="twibbon1">Bukti Upload Twibbon
                </label>
                <input id="twibbon1" name="twibbon_1" wire:model.defer="twibbon_1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Twibbon Anggota 1">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig1" name="instagram_1" wire:model.defer="instagram_1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Bukti Follow Anggota 1">
            </div>
            {{-- anggota 1 end --}}

            {{-- anggota 2 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 2
            </h3>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="member_2_name" wire:model.defer ="member_2_name" type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 2">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="member_2_email" wire:model.defer ="member_2_email" type="email"
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 2">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="member_2_whatsapp" wire:model.defer ="member_2_whatsapp" type="tel"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 2">
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Kelas</h5>
                <div class="flex items-center mb-2">
                    <input id="kelas10" name="member_2_class" wire:model.defer ="member_2_class" type="radio" value="10"
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        10</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas11" name="member_2_class" wire:model.defer ="member_2_class" type="radio" value="11"
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas11" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        11</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas12" name="member_2_class" wire:model.defer ="member_2_class" type="radio" value="12"
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas12" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        12</label>
                </div>
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Kartu Pelajar
                </label>
                <input id="kartu-pelajar1" name="ktm_2" wire:model.defer="ktm_2" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Kartu Pelajar Anggota 2">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="twibbon1">Bukti Upload Twibbon
                </label>
                <input id="twibbon1" name="twibbon_2" wire:model.defer="twibbon_2" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Twibbon Anggota 2">
            </div>
            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig1" name="instagram_2" wire:model.defer="instagram_2" type="file"
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Bukti Follow Anggota 2">
            </div>
            {{-- anggota 2 end --}}
            <div
                class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                <button type="button" wire:click ="move({{$step-1}})"
                    class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
                <button type="button" wire:click = "anggotaTeamSubmit()"
                    class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
            </div>

            </div>
                {{-- step 2 end --}}

            {{-- step 3 --}}
            <div class="{{$step == 3 ? null : "hidden"}}">
                <div class="flex flex-col space-y-2 font-medium font-poppins">
                    <label for="info-pendaftaran" class="text-white">Info Pendaftaran</label>
                    <select id="info-pendaftaran" name="info-pendaftaran" name="info_source" wire:model.defer = "info_source" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                        <option class="bg-liteBlack" disabled selected value="">Dari manakah kamu mendapatkan
                            informasi mengenai BIONIX?</option>
                        <option value="1" class="bg-liteBlack ">IG</option>
                        <option value="2" class="bg-liteBlack ">TikTok</option>
                        <option value="3" class="bg-liteBlack ">Linkedin</option>
                        <option value="4" class="bg-liteBlack ">Twitter</option>
                    </select>
                </div>

                <div class="flex-row space-x-4 my-11 font-medium font-poppins">
                    <input type="checkbox" id="setuju-kebijakan" name="agree" wire:model.defer="agree"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju-kebijakan">  Saya setuju dengan kebijakan privasi serta <a href="{{route('term-condition')}}" class="text-blue-400" target="_blank">syarat dan ketentuan</a> yang berlaku</label>
                    </d>
                </div>
                <div
                    class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                    <button type="button" wire:click ="move({{$step - 1}})"
                        class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 btn-secondary hover:scale-105 lg:mb-0">Back</button>
                    <button type="Submit"
                        class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
                </div>
            </div>


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
