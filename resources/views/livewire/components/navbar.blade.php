<nav class="flex flex-row justify-between text-center mt-4 w-fit bg-[#191A1E] rounded-full fixed z-[9999] mx-auto left-0 right-0 shadow-lg shadow-liteBlack"
    @if (Route::current()->getName() == 'ise') data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500" data-aos-one="true" @endif>
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

    {{-- sebelum login --}}
    <ul
        class="flex flex-row items-center space-x-4 sm:justify-center bg-[#191A1E]  rounded-full py-2 px-6  font-poppins font-semibold">
        <a href="/dashboard/login"
            class=" transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
            <li>Log in</li>
        </a>
        <a href="/dashboard/register"
            class="transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
            <li>Sign up</li>
        </a>
    </ul>
    {{-- sebelum login end --}}

    {{-- setelah login (masih di hidden) --}}
    <ul
        class="hidden flex-row items-center space-x-8 sm:justify-center bg-[#191A1E]  rounded-full py-2 px-6  font-poppins font-semibold">
        <button type="button"
            class="py-2 px-6 text-[#6B6F75] flex flex-row space-x-4 bg-gradient-to-r hover:text-transparent  hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text">
            <svg width="16" height="19" viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.25 10C13.8467 10 14.419 10.2371 14.841 10.659C15.2629 11.081 15.5 11.6533 15.5 12.25V13C15.5 15.9565 12.71 19 8 19C3.29 19 0.5 15.9565 0.5 13V12.25C0.5 11.6533 0.737053 11.081 1.15901 10.659C1.58097 10.2371 2.15326 10 2.75 10H13.25ZM8 0.25C9.09402 0.25 10.1432 0.684597 10.9168 1.45818C11.6904 2.23177 12.125 3.28098 12.125 4.375C12.125 5.46902 11.6904 6.51823 10.9168 7.29182C10.1432 8.0654 9.09402 8.5 8 8.5C6.90598 8.5 5.85677 8.0654 5.08318 7.29182C4.3096 6.51823 3.875 5.46902 3.875 4.375C3.875 3.28098 4.3096 2.23177 5.08318 1.45818C5.85677 0.684597 6.90598 0.25 8 0.25Z"
                    fill="url(#paint0_linear_1017_5048)" />
                <defs>
                    <linearGradient id="paint0_linear_1017_5048" x1="15.5" y1="9.625" x2="0.5"
                        y2="9.625" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5B1BE1" />
                        <stop offset="1" stop-color="#B221E5" />
                    </linearGradient>
                </defs>
            </svg>

            <li>user@gmail.com</li>
        </button>
    </ul>
    {{-- setelah login end --}}

</nav>
