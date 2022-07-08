<div>
    {{-- The Master doesn't talk, he acts. --}}
</div>


<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pendaftaran IS Class</h1>
    </div>
    <div class="flex flex-col lg:flex-row lg:space-x-4 justify-evenly">
        {{-- step 1 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div
                class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-pink-300 to-purple-300">
                <p class="text-xl font-semibold text-center text-white font-poppins">1</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Data Diri</h2>
        </div>
        {{-- step 2 --}}
        <div class="flex flex-col items-center my-8 lg:space-x-4 lg:flex-row">
            <div class="flex items-center justify-center w-10 h-10 bg-white rounded-full ring-4 ring-purple-200">
                <p class="text-xl font-semibold text-center text-purple-200 font-poppins">2</p>
            </div>
            <h2 class="font-semibold text-center text-white text-md lg:text-lg font-poppins">Informasi</h2>
        </div>
        {{-- step 3 --}}

    </div>
    <div class="flex justify-center">
        <form action="#" class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="akunSubmit" method="POST">
            @csrf
            {{-- @if ($errors->any())

            {{-- step 1 --}}
            {{-- class="{{$step == 1 ? '' : 'hidden'}}" --}}
            <div class="{{$step == 1 ? '' : 'hidden'}}" >
            <input type="hidden" name="peserta_type" value="senior" />
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap kamu" wire:model.defer="full_name" name="full_name">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Email</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan email aktif kamu" wire:model.defer="active_email" name="active_email">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nomor WhatsApp</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp kamu" wire:model.defer="whatsapp_number" name="whatsapp_number">
            </div>
            <div class="flex flex-col my-11 space-y-2 font-medium text-white font-poppins">
                <label for="name">Asal Sekolah</label>
                <input id="name"  type="text"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan asal sekolah kamu" wire:model.defer="school_origin" name="school_origin">
            </div>
            <div class="flex flex-col space-y-2  font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Upload kartu pelajar kamu
                </label>
                <div class="flex flex-row justify-start items-center">
                <button type="button" id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="inputan"  type="file"
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" wire:model.defer="student_card_file_path" name="student_card_file_path"  >
                <span class="pl-5" id="output"></span>
                </div>

                <img class="transition" id="img-preview" src="" alt="">

            </div>
            {{-- <div class="flex flex-col space-y-2  font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Upload bukti upload twibbon
                </label>
                <div class="flex flex-row justify-start items-center">
                <button type="button" id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="inputan"  type="file"
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" wire:model.defer="twibbon_proof_file_path" name="twibbon_proof_file_path"  >
                <span class="pl-5" id="output"></span>
                </div>

                <img class="transition" id="img-preview" src="" alt="">

            </div> --}}
            {{-- <div class="flex flex-col space-y-2  font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Upload bukti follow instagram ISE! <a class="text-purple-100 hover:underline"
                href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <div class="flex flex-row justify-start items-center">
                <button type="button" id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="inputan"  type="file"
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" wire:model.defer="igfollow_proof_file_path" name="igfollow_proof_file_path"  >
                <span class="pl-5" id="output"></span>
                </div>

                <img class="transition" id="img-preview" src="" alt="">

            </div> --}}
            {{-- step 1 end --}}

            {{-- step 3 --}}
            <div class="{{$step == 2 ? '' : 'hidden'}}">

            <div class="flex flex-col space-y-2 font-medium font-poppins">
                <label for="info-pendaftaran" class="text-white">Info Pendaftaran</label>
                <select id="info-pendaftaran" name="info_source"
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  text-white">
                    <option class="bg-liteBlack" disabled selected value="">Dari manakah kamu mendapatkan
                        informasi mengenai BIONIX?</option>
                    <option value="1" class="bg-liteBlack ">IG</option>
                    <option value="2" class="bg-liteBlack ">TikTok</option>
                    <option value="3" class="bg-liteBlack ">Linkedin</option>
                    <option value="4" class="bg-liteBlack ">Twitter</option>
                </select>
            </div>


            <div class="flex-row space-x-4 font-medium font-poppins">
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



        <div
        class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
        @if($step == 1)
        <button wire:click="identityTeamSubmit" type="button"
                class="relative px-24 text-xl duration-300 transform btn hover:scale-105 cursor-pointer">Next</button>



        @elseif($step == 2)

        <button type="button"
            class="relative px-24 mx-auto mb-4 text-xl text-purple-200 duration-300 transform lg:mr-4 lg:mb-0 btn-secondary hover:scale-105">Back</button>
        <button type="button"
            class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Next</button>
        </div>
        @endif

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
