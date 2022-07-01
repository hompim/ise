<nav class="flex flex-wrap max-w-screen-xl justify-between text-center lg:mt-4 lg:w-fit bg-[#191A1E] lg:rounded-full fixed z-[9999] mx-auto left-0 right-0 shadow-lg shadow-liteBlack"
    @if (Route::current()->getName() == 'ise') data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500" data-aos-one="true" @endif
    x-data="{ open: false }">

    <div class="flex items-center pl-12 lg:!hidden">
        <button x-on:click="open = !open" class="flex items-center space-x-2 text-purple-200 focus:outline-none">
            <div class="relative flex items-center justify-center w-6">
                <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                    class="absolute w-full h-[2px] transition transform bg-current"></span>

                <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'"
                    class="absolute w-full h-[2px] transition transform bg-current"></span>

                <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                    class="absolute w-full h-[2px] transition transform bg-current"></span>
            </div>
        </button>
    </div>
    <ul class="flex flex-col px-6 py-8 mt-[3.25em] space-y-4 font-semibold text-white lg:!space-y-0 lg:mt-0 text-start lg:items-center lg:space-x-8 lg:flex-row font-poppins absolute lg:translate-x-0 bg-liteBlack lg:static transform transition duration-300 rounded-br-lg lg:rounded-full lg:!py-2"
        :class="{ 'translate-x-0': open, '-translate-x-72': !open }">
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

    @auth
        <ul class="flex flex-row relative items-center space-x-8 sm:justify-center bg-[#191A1E]  rounded-full py-3 lg:py-2 sm:px-6 px-0  font-poppins font-semibold"
            x-data="{ open: false }" @click.away="open = false">
            <button type="button" @click="open = !open"
                class="py-2 px-6 text-[#6B6F75] flex flex-row items-center space-x-4 bg-gradient-to-r hover:text-transparent  hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text">
                <svg width="16" height="19" viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.25 10C13.8467 10 14.419 10.2371 14.841 10.659C15.2629 11.081 15.5 11.6533 15.5 12.25V13C15.5 15.9565 12.71 19 8 19C3.29 19 0.5 15.9565 0.5 13V12.25C0.5 11.6533 0.737053 11.081 1.15901 10.659C1.58097 10.2371 2.15326 10 2.75 10H13.25ZM8 0.25C9.09402 0.25 10.1432 0.684597 10.9168 1.45818C11.6904 2.23177 12.125 3.28098 12.125 4.375C12.125 5.46902 11.6904 6.51823 10.9168 7.29182C10.1432 8.0654 9.09402 8.5 8 8.5C6.90598 8.5 5.85677 8.0654 5.08318 7.29182C4.3096 6.51823 3.875 5.46902 3.875 4.375C3.875 3.28098 4.3096 2.23177 5.08318 1.45818C5.85677 0.684597 6.90598
                        0.25 8 0.25Z"
                        fill="url(#paint0_linear_1017_5048)" />
                    <defs>
                        <linearGradient id="paint0_linear_1017_5048" x1="15.5" y1="9.625" x2="0.5"
                            y2="9.625" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#5B1BE1" />
                            <stop offset="1" stop-color="#B221E5" />
                        </linearGradient>
                    </defs>
                </svg>

                <li>{{ Auth::user()->email }}</li>
                <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" class="transition-transform duration-200 transform"
                    width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.5L5.54167 6.83333L11.0833 0.5H0Z"
                        fill="#B5B3BC" />
                </svg>

            </button>

            <ul class="absolute py-4 pl-4 pr-12 left-24 mt-44 rounded-xl bg-liteBlack" x-show="open"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95">
                <a href="/dashboard">
                    <li
                        class="mb-3 text-[#6B6F75] hover:text-transparent bg-gradient-to-r hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text text-start">
                        Dashboard</li>
                </a>
                <li
                    class="text-[#6B6F75]
                    hover:text-transparent bg-gradient-to-r hover:from-pink-300 hover:to-purple-300 hover:bg-clip-text
                    text-start">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                $('#logout').submit();">
                        Log out
                        <form action="{{ route('logout') }}" method="POST" id="logout"> @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </ul>
    @endauth
    @guest
        <ul
            class="flex flex-row items-center space-x-4 sm:justify-center bg-[#191A1E]  rounded-full py-3 lg:py-2 px-6  font-poppins font-semibold">
            <a href="/dashboard/login"
                class=" transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
                <li>Log in</li>
            </a>
            <a href="/dashboard/register"
                class="transition duration-150 ease-linear px-8 py-2 border border-[#6B6F75] text-[#6B6F75] hover:text-white rounded-full bg-gradient-to-r hover:from-pink-300 hover:to-purple-300">
                <li>Sign up</li>
            </a>
        </ul>
    @endguest
</nav>
