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
            {{-- @if ($errors->any())
                <div class="relative px-4 py-3 mx-5 text-red-700 bg-red-100 border border-red-400 rounded md:mx-24"
                    role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            {{-- @if (!empty($errorMessage))
                <div class="relative px-4 py-3 mx-5 text-red-700 bg-red-100 border border-red-400 rounded md:mx-24"
                    role="alert">
                    <ul>
                        <li>{{ $errorMessage }}</li>
                    </ul>
                </div>
            @endif --}}

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
            {{-- <div class="flex flex-col space-y-2  font-medium text-white font-poppins">
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
  
            </div> --}}
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
            
     
            </div>
            {{-- step 1 end --}}

            {{-- step 2 Anggota Tim --}}
            {{-- anggota 1 --}}
            {{-- class="{{$step == 2 ? '' : 'hidden'}}" --}}
            <div class="{{$step == 2 ? '' : 'hidden'}}">
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 1
            </h3>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" wire:model.defer="member_1_name" name="member_1_name" type="text" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 1">
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email</label>
                <input id="email-address" name="email" type="email" 
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 1">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 1">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Upload kartu pelajar anggota 1
                </label>
                  <div class="flex flex-row justify-start items-center">
                <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="kartu-pelajar1" name="kartu-pelajar1" type="file"  
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" >
                <span class="pl-5" id="output"></span>    
                </div>  
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="twibbon1">Bukti Upload Twibbon
                </label>
                <div class="flex flex-row justify-start items-center">
                    <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                    <input  id="member_1_twibbon" name="member_1_twibbon" type="file"  
                        class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Add File" >
                    <span class="pl-5" id="output"></span>    
                    </div>  
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="bukti-ig1">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <div class="flex flex-row justify-start items-center">
                    <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                    <input  id="bukti_ig1" name="bukti_ig1" type="file"  
                        class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Add File" >
                    <span class="pl-5" id="output"></span>    
                    </div>  
            </div>
            {{-- anggota 1 end --}}

            {{-- anggota 2 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 2
            </h3>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 2">
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" 
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 2">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 2">
            </div>  
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar2">Upload kartu pelajar anggota 2
                </label>
                  <div class="flex flex-row justify-start items-center">
                <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="inputan" name="kartu-pelajar2" type="file"  
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" >
                <span class="pl-5" id="output"></span>    
                </div>  
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="twibbon2">Bukti Upload Twibbon
                </label>
                <input id="twibbon2" name="member_2_twibbon" type="file" 
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="bukti-ig2">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig2"  type="file" 
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File">
            </div>
            {{-- anggota 2 end --}}

            {{-- anggota 3 --}}
            <h3 class="text-4xl font-semibold text-white underline underline-offset-2 decoration-purple-200">Anggota 3
            </h3>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap anggota 3">
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" 
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 3">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="wa">Nomor WhatsApp</label>
                <input id="wa" name="wa" type="tel" 
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor WhatsApp anggota 3">
            </div> 
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="kartu-pelajar3">Upload kartu pelajar anggota 3
                </label>
                  <div class="flex flex-row justify-start items-center">
                <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                <input  id="kartu-pelajar3" name="kartu-pelajar3" type="file"  
                    class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File" >
                <span class="pl-5" id="output"></span>    
                </div>  
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="twibbon3">Bukti Upload Twibbon
                </label>
                <div class="flex flex-row justify-start items-center">
                    <button id="buton" class=" flex items-center py-2.5 px-5   rounded-md bg-transparent !border border-[#6B7280]  focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent" > <img class="mr-4" src="{{asset('images/upload.svg')}}" alt=""> Add File </button>
                    <input  id="twibbon3" name="twibbon3" type="file"  
                        class=" rounded-md bg-transparent !border border-[rgb(107,114,128)] hidden focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                        placeholder="Add File" >
                    <span class="pl-5" id="output"></span>    
                    </div>  
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="bukti-ig3">Bukti Follow Instagram ISE! <a class="text-purple-100 hover:underline"
                        href="https://www.instagram.com/is_expo/" target="_blank">@isexpo</a>
                </label>
                <input id="bukti-ig3"  type="file" 
                    class=" rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Add File">
            </div>
            {{-- anggota 3 end --}}
        </div>
            {{-- step 2 end --}}

            {{-- step 3 --}}
            <div class="{{$step == 3 ? '' : 'hidden'}}">
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email Anggota 1 (untuk login)</label>
                <input id="email-address" name="email" type="email" 
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email aktif anggota 3">
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <div class="relative" x-data="{ isVisible: false }">
                    <div class="absolute flex items-center h-full mt-4 ml-2 right-4">
                        <button type="button" class="block px-1 focus:outline-none"
                            @click="$dispatch('visibility'); isVisible = !isVisible;">
                            <div x-show="isVisible">
                                <svg class="w-6 h-6 stroke-[#6B7280] hover:stroke-pink-200" fill="none"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <div x-show="!isVisible">
                                <svg class="w-6 h-6 stroke-[#6B7280] hover:stroke-pink-200" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <label for="password" class="block">
                        <span class="block mb-2 font-medium text-white">Password</span>
                        <input type="password" name="password" id="password" placeholder="Masukkan password"
                            minlength="5"
                            class="w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                        {{-- <p class="invisible m-1 text-xs text-pink-700 peer-invalid:visible">less than 5 characters</p> --}}
                    </label>

                </div>
            </div>

            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <div class="relative" x-data="{ isVisible: false }">
                    <div class="absolute flex items-center h-full mt-4 ml-2 right-4">
                        <button type="button" class="block px-1 focus:outline-none"
                            @click="$dispatch('visibility'); isVisible = !isVisible;">
                            <div x-show="isVisible">
                                <svg class="w-6 h-6 stroke-[#6B7280] hover:stroke-pink-200" fill="none"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <div x-show="!isVisible">
                                <svg class="w-6 h-6 stroke-[#6B7280] hover:stroke-pink-200" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <label for="password" class="block">
                        <span class="block mb-2 font-medium text-white">Repeat Password</span>
                        <input type="password" id="password" placeholder="Ulangi Password" minlength="5"
                            class="w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                        {{-- <p class="invisible m-1 text-xs text-pink-700 peer-invalid:visible">less than 5 characters</p> --}}
                    </label>

                </div>
            </div>
        
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
    </div>
