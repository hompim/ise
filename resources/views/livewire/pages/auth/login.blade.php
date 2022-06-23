<div>
    {{-- The best athlete wants his opponent at his best. --}}

    {{-- For testing dashboard, Hapus/Komen aja kalo pengen implemen desain login --}}
    {{-- <form action="{{route('login')}}" method="POST">
        @csrf
        email
        <input type="email">
        Password
        <input type="password">
        <input type="submit" value="Submit">
    </form> --}}
    <form class="mt-8 space-y-6 mx-10 mb-12 text-lg" action="/login" method="POST">
        <h2 class="text-4xl text-white font-poppins font-bold">Login</h2>
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif
        <div class="rounded-md shadow-sm -space-y-px">

            <div class="mb-2 space-y-2 flex flex-col text-white font-poppins font-medium">
                <label for="email-address">Email address</label>
                <input id="email-address" name="email" type="email" required
                    class="p-2 rounded-md bg-transparent focus:border-pink-200 focus:ring-pink-200  autofill:bg-transparent"
                    placeholder="Enter your email">
            </div>
            <div class="mb-2 space-y-2 flex flex-col text-white font-poppins font-medium">
                <div class="relative" x-data="{ isVisible: false }">
                    <div class="absolute flex right-4 mt-4 items-center ml-2 h-full">
                        <button type="button" class="px-1 block focus:outline-none"
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
                        <input type="password" name="password" id="password" placeholder="Enter your password" minlength="5"
                            class="p-2 rounded-md w-full bg-transparent focus:outline-none autofill:bg-transparent focus:border-pink-200 focus:ring-pink-200"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                        {{-- <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible">less than 5 characters</p> --}}
                    </label>

                </div>
            </div>
            {{-- <input id="password" name="password" type="password" required class="p-2 rounded-md bg-transparent"
                placeholder="Enter your password"> --}}
        </div>

        <div class="grid items-center justify-between grid-cols-1 md:grid-cols-2">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                    class="h-4 w-4 text-pink-200 focus:ring-pink-200 rounded  cursor-pointer">
                <label for="remember_me" class="ml-2 block text-sm text-[#B5B3BC] font-poppins font-medium">
                    Remember me
                </label>
            </div>

            <div class="text-sm md:text-right mt-4 md:mt-0">
                <a href="{{ route('forgot-password') }}"
                    class=" text-[#B5B3BC]  hover:opacity-100 opacity-75 font-poppins font-medium transition duration-300">
                    Forgot your password?
                </a>
            </div>
        </div>
        <button type="submit"
            class="items-center group relative w-full hover:shadow-lg flex justify-center py-2 px-4 text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 font-poppins font-semibold opacity-75 hover:opacity-100 transition duration-300">
            Login
        </button>
        <p class="text-center text-[#B5B3BC]  text-base font-poppins font-medium">Don't have an account? <a
                href="{{ route('register') }}"
                class="text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text opacity-75 hover:opacity-100 font-bold transition duration-300">Sign
                up here</a></p>
    </form>

</div>
