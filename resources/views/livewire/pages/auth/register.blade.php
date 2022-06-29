<div>
    <form class="mx-10 mt-8 mb-12 space-y-6 text-lg" action="/register" method="POST">
        <h2 class="text-4xl font-bold text-white font-poppins">Sign Up</h2>
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif
        <div class="rounded-md shadow-sm ">

            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Enter your name">
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Enter your email">
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
                        <input type="password" id="password" placeholder="Enter your password" minlength="5"
                            name="password"
                            class="w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                        {{-- <p class="invisible m-1 text-xs text-pink-700 peer-invalid:visible">less than 5 characters</p> --}}
                    </label>

                </div>
            </div>
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <div class="relative" x-data="{ isVisible2: false }">
                    <div class="absolute flex items-center h-full mt-4 ml-2 right-4">
                        <button type="button" class="block px-1 focus:outline-none"
                            @click="$dispatch('visibility2'); isVisible2 = !isVisible2;">
                            <div x-show="isVisible2">
                                <svg class="w-6 h-6 stroke-[#6B7280] hover:stroke-pink-200" fill="none"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <div x-show="!isVisible2">
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
                        <input type="password" id="password" placeholder="Enter your password" minlength="5"
                            name="password_confirmation"
                            class="w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200"
                            @visibility2.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                        {{-- <p class="invisible m-1 text-xs text-pink-700 peer-invalid:visible">less than 5 characters</p> --}}
                    </label>
                </div>
                <div>
                    <label for="jenjang" class="block">
                        <span class="block mb-2 font-medium text-white">Jenjang</span>
                        <select name="jenjang" id="" class="w-full p-2 bg-transparent rounded-md focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200">
                            <option value=""></option>
                            <option value="Mahasiswa" class="">Mahasiswa</option>
                            <option value="SMA" >Siswa SMA</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>

        <div class="grid items-center justify-between grid-cols-1 md:grid-cols-2">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                    class="w-4 h-4 text-pink-200 rounded cursor-pointer focus:ring-pink-200">
                <label for="remember_me" class="ml-2 block text-sm text-[#B5B3BC] font-poppins font-medium">
                    Remember me
                </label>
            </div>

            <div class="mt-4 text-sm md:text-right md:mt-0">
                <a href="{{ route('forgot-password') }}"
                    class=" text-[#B5B3BC]  hover:opacity-100 opacity-75 font-poppins font-medium transition duration-300">
                    Forgot your password?
                </a>
            </div>
        </div>
        <button type="submit"
            class="relative flex items-center justify-center w-full px-4 py-2 font-semibold text-white transition duration-300 rounded-full opacity-75 group hover:shadow-lg bg-gradient-to-r from-pink-300 to-purple-300 font-poppins hover:opacity-100">
            Sign Up
        </button>
        <p class="text-center text-[#B5B3BC]  text-base font-poppins font-medium">Don't have an account? <a
                href="{{ route('login') }}"
                class="font-bold text-transparent transition duration-300 opacity-75 bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text hover:opacity-100">Login
                here</a></p>
    </form>
</div>
