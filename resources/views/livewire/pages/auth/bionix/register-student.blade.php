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
            wire:submit.prevent="akunSubmit" method="POST">
            @csrf
            @if ($errors->any())
                <div class="relative px-4 py-3 mx-5 text-red-700 bg-red-100 border border-red-400 rounded md:mx-24"
                    role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           @if (!empty($errorMessage))
                <div class="relative px-4 py-3 mx-5 text-red-700 bg-red-100 border border-red-400 rounded md:mx-24"
                    role="alert">
                    <ul>
                        <li>{{ $errorMessage }}</li>
                    </ul>
                </div>
            @endif

            {{-- step 1 --}}
            <div class="{{$step == 1 ? '' : "hidden"}}">
                <input type="hidden" name="peserta_type" value="junior" />
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Tim</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama tim kamu" wire:model.defer="team_name" name="team_name">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium font-poppins">
                <label for="asal-sekolah" class="text-white">Asal Sekolahmu</label>
                <select id="asal-sekolah" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                    <option class="bg-liteBlack" disabled selected value="">Pilih
                        asal
                        sekolah
                        kamu</option>
                    <option value="1" class="bg-liteBlack ">sma 1</option>
                </select>
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium font-poppins">
                <label for="asal-domisili" class="text-white">Asal provinsi/kota/kabupaten
                    sekolahmu</label>
                <select id="asal-domisili" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white"
                    name="school_city">
                    <option class="bg-liteBlack" disabled selected value="">Pilih asal
                        provinsi/kota/kabupaten
                        sekolah
                        kamu</option>
                </select>
            </div>
            <div class="flex-flex-col">
                <h3 class="text-xl font-semibold text-white font-poppins">Region</h3>
                <h4 class="text-lg font-semibold text-[#6B7280] font-poppins">Kamu berada di <span
                        class="text-pink-300">{{ $region }}</span></h4>
            </div>
            <div class="relative left-0 right-0 justify-center mx-auto mt-24 text-center max-w-fit group">
                <button type="button"
                    wire:click = "move(2)"
                    class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
            </div>
            </div>
              {{-- step 1 end --}}


            {{-- step 2 Anggota Tim --}}
            <div class="{{$step == 2 ? null : "hidden"}}">
                {{-- anggota 1 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 1
            </h3>
            <div class="flex flex-col mb-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 1">
            </div>
            <div class="flex flex-col mb-11 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 1">
            </div>
            <div class="flex flex-col mb-11 space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="kelas mb-11">
                <h5 class="mb-4 text-lg text-white">Kelas</h5>
                <div class="flex items-center mb-2">
                    <input id="kelas10" name="kelas" type="radio" value="10" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        10</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas11" name="kelas" type="radio" value="11" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas11" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        11</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas12" name="kelas" type="radio" value="12" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas12" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        12</label>
                </div>
            </div>
            <div class="flex flex-col mb-11 space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Kartu Pelajar Anggota 1
                </label>
                <input id="kartu-pelajar1" name="kartu-pelajar1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="twibbon1">Bukti Upload Twibbon
                </label>
                <input id="twibbon1" name="twibbon1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig1" name="bukti-ig1" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            {{-- anggota 1 end --}}

            {{-- anggota 2 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 2
            </h3>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 2">
            </div>
            <div class="flex flex-col mb-2 space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 2">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 2">
            </div>
            <div class="kelas mb-11">
                <h5 class="mb-4 text-lg text-white">Kelas</h5>
                <div class="flex items-center mb-2">
                    <input id="kelas10" name="kelas" type="radio" value="10" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        10</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas11" name="kelas" type="radio" value="11" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas11" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        11</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas12" name="kelas" type="radio" value="12" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas12" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        12</label>
                </div>
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="kartu-pelajar2">Kartu Pelajar Anggota 2
                </label>
                <input id="kartu-pelajar2" name="kartu-pelajar2" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="twibbon2">Bukti Upload Twibbon
                </label>
                <input id="twibbon2" name="twibbon2" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="bukti-ig2">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig2" name="bukti-ig2" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            {{-- anggota 2 end --}}

            {{-- anggota 3 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 3
            </h3>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 3">
            </div>
            <div class="flex flex-col mb-2 space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 3">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 3">
            </div>
            <div class="kelas mb-11">
                <h5 class="mb-4 text-lg text-white">Kelas</h5>
                <div class="flex items-center mb-2">
                    <input id="kelas10" name="kelas" type="radio" value="10" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas10" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        10</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas11" name="kelas" type="radio" value="11" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas11" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        11</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="kelas12" name="kelas" type="radio" value="12" required
                        class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                    <label for="kelas12" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">Kelas
                        12</label>
                </div>
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="kartu-pelajar3">Kartu Pelajar Anggota 3
                </label>
                <input id="kartu-pelajar3" name="kartu-pelajar3" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 3">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="twibbon3">Bukti Upload Twibbon
                </label>
                <input id="twibbon3" name="twibbon3" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 mb-11 font-medium text-white font-poppins">
                <label for="bukti-ig3">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig3" name="bukti-ig3" type="file" required
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            {{-- anggota 3 end --}}
            <div
                class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                <button type="button"
                    class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
                <button type="button"
                    class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
            </div>

            </div>
                {{-- step 2 end --}}

            {{-- step 3 --}}
            <div class="{{$step == 3 ? null : "hidden"}}">
                <div class="flex flex-col space-y-2 mb-11 font-medium font-poppins">
                    <label for="info-pendaftaran" class="text-white">Info Pendaftaran</label>
                    <select id="info-pendaftaran" name="info-pendaftaran" required
                        class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                        <option class="bg-liteBlack" disabled selected value="">Dari manakah kamu mendapatkan
                            informasi mengenai BIONIX?</option>
                        <option value="1" class="bg-liteBlack ">IG</option>
                        <option value="2" class="bg-liteBlack ">TikTok</option>
                        <option value="3" class="bg-liteBlack ">Linkedin</option>
                        <option value="4" class="bg-liteBlack ">Twitter</option>
                    </select>
                </div>

                <div class="flex-row space-x-4 mb-11 font-medium font-poppins">
                    <input type="checkbox" id="setuju-kebijakan" name="setuju-kebijakan"
                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                    <label class="text-white" for="setuju-kebijakan">Saya setuju dengan kebijakan privasi serta syarat dan
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
