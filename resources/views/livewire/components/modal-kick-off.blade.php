    <!-- Main modal -->
    <div id="defaultModal" aria-hidden="true"
        data-modal-show="{{ Auth::check() ? (Auth::user()->userable->webinar ? 'false' : 'true') : 'true' }}"
        class="fixed top-0 bottom-0 left-0 right-0 hidden w-full mt-12 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full lg:mt-4 z-[9999]"
        data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500" data-aos-one="true">
        <div class="relative w-full h-full max-w-4xl p-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-liteBlack">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 rounded-t">
                    <h3 class="text-xl font-semibold text-white">
                        <span
                            class="font-semibold text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">Kick
                            Off Webinar</span>
                        ISE! 2022
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex flex-col justify-center p-6 space-x-4 lg:flex-row">
                    <div class="w-full">
                        <div class="flex justify-center overflow-hidden bg-[#1C1D20] rounded-t-xl">
                            <img src="{{ asset('images/Rifyal Rachmat - Data Scientist at Telkomsel - Alumni ITS.png') }}"
                                class="h-[12em] transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300 lg:h-full"
                                alt="Rifyal Rachmat - Data Scientist at Telkomsel"
                                title="Rifyal Rachmat - Data Scientist at Telkomsel">
                        </div>
                        <div class="p-2 text-center rounded-b-xl bg-gradient-to-r from-pink-300 to-purple-300">
                            <h3 class="font-bold text-white lg:text-md">
                                Rifyal
                                Rachmat</h3>
                            <h3 class="font-semibold text-white text-md font-poppins">Data Scientist at
                                Telkomsel
                            </h3>
                            <h3 class="font-semibold text-white text-md font-poppins">Speaker
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4 text-center lg:text-start lg:mt-0">
                        <h3 class="mb-4 text-lg font-semibold text-white font-poppins lg:text-4xl">
                            Data Science and Data Analytics: <br> Their Role in Startup Companies
                        </h3>
                        <p class="text-sm font-medium lg:!text-lg font-poppins text-liteGray">Menjadi pembuka dari
                            seluruh
                            rangkaian kegiatan ISE! 2022, webinar ini akan memberimu wawasan baru mengenai peran penting
                            pengolahan data pada suatu startup. <br> Nantikan dan daftar segera, gratis!</p>
                        <h4
                            class="flex items-center justify-center mt-4 text-2xl font-bold text-white lg:justify-start">
                            <span class="mr-4">
                                <svg width="30" height="30" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 17C0 18.7 1.3 20 3 20H17C18.7 20 20 18.7 20 17V9H0V17ZM17 2H15V1C15 0.4 14.6 0 14 0C13.4 0 13 0.4 13 1V2H7V1C7 0.4 6.6 0 6 0C5.4 0 5 0.4 5 1V2H3C1.3 2 0 3.3 0 5V7H20V5C20 3.3 18.7 2 17 2Z"
                                        fill="white" />
                                </svg>
                            </span> 16 Juli 2022
                        </h4>

                    </div>

                </div>
                {{-- modal footer --}}
                <div class="flex items-center p-6 space-x-2 rounded-b">
                    <div
                        class="relative left-0 right-0 justify-center mx-auto text-center max-w-fit group  transition duration-300 hover:!scale-105 mb-4">
                        <div class="absolute inset-0 ">
                            <a href="/dashboard/peserta/webinar/register"
                                class="relative px-12 transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">Register</a>
                        </div>
                        <a href="/dashboard/peserta/webinar/register" class="relative px-12 btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>