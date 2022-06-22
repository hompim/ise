<nav
    class="flex flex-row justify-between text-center mt-4 w-fit bg-[#191A1E] rounded-full fixed z-[9999] mx-auto left-0 right-0">
    <ul class="flex flex-row items-center px-6 py-2 space-x-8 font-semibold text-white font-poppins">
        <a href="/">
            <li
                class="@if (Route::current()->getName() == 'ise') text-transparent  from-pink-300 to-purple-300 bg-clip-text
                @else
                text-[#6B6F75] @endif hover:text-transparent bg-gradient-to-r hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text">
                Home</li>
        </a>
        <a href="/bionix">
            <li
                class="@if (Route::current()->getName() == 'bionix') text-transparent from-pink-300 to-purple-300 bg-clip-text
                @else
                text-[#6B6F75] @endif hover:text-transparent bg-gradient-to-r hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text">
                Competition</li>
        </a>
        <a href="/icon">
            <li
                class="@if (Route::current()->getName() == 'icon') text-transparent from-pink-300 to-purple-300 bg-clip-text
                @else
                text-[#6B6F75] @endif hover:text-transparent bg-gradient-to-r hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text">
                IT Convention</li>
        </a>
    </ul>
    <ul
        class="flex flex-row items-center space-x-8 sm:justify-center bg-[#191A1E]  rounded-full py-2 px-6  font-poppins font-semibold">
        <a href="/login"
            class=" transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
            <li>Log in</li>
        </a>
        <a href="/signup"
            class="transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
            <li>Sign up</li>
        </a>
    </ul>
</nav>
