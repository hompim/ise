    <!-- Main modal -->
    <div id="defaultModal" aria-hidden="true" data-modal-show="{{ Auth::check() ? 'false' : 'true' }}"
        class="fixed top-0 bottom-0 left-0 right-0 hidden w-full mt-12 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full lg:mt-4 z-[9999]"
        data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500" data-aos-one="true">
        <div class="relative w-full h-full max-w-4xl p-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-liteBlack">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 rounded-t">
                    <h3 class="text-xl font-semibold text-white">
                        <span
                            class="font-semibold text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">Bionix
                            College Level</span>
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
                            <img src="{{ asset('images/bionix/bcl-2.png') }}"
                                class="h-[12em] transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300 lg:h-full"
                                alt="bcl-regist-poster" title="Bionix College Level Free Registration!">
                        </div>
                        <div class="p-2 text-center rounded-b-xl bg-gradient-to-r from-pink-300 to-purple-300">
                            <h3 class="font-bold text-white lg:text-md">
                                Open</h3>
                            <h3 class="font-semibold text-white text-md font-poppins">Free Registration
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4 text-center lg:text-start lg:mt-0">
                        <h3 class="mb-4 text-lg font-semibold text-white font-poppins lg:text-4xl">
                            Bionix College Level 2022
                        </h3>
                        <p class="text-sm font-medium lg:!text-lg font-poppins text-liteGray">Hadir dengan konsep
                            startup
                            business plan yang
                            akan mengasah skill kreativitas dan problem solving mahasiswa Indonesia dalam mengatasi
                            permasalahan yang ada melalui sebuah ide bisnis kreatif di bidang startup dengan
                            memanfaatkan
                            kemajuan teknologi.
                            <a href="https://drive.google.com/file/d/1KUtFKWdUwKZBS9-A5ImEYOhhvLLonXjk/view"
                                target="_blank"
                                class=" md:px-3 md:mx-0 mx-16 py-1 font-poppins bg-[#261A45] text-pink-300 rounded-full flex flex-row items-center justify-center mt-4"><svg
                                    class="pr-2" width="31" height="32" viewBox="0 0 31 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5034 13.8623L15.4998 18.8506L20.4961 13.8623" stroke="#B221E5"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.5 5.54492V18.847" stroke="#B221E5" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M26.92 16.9502V25.5015C26.92 25.7535 26.8198 25.9952 26.6413 26.1734C26.4628 26.3516 26.2208 26.4517 25.9684 26.4517H5.03128C4.77887 26.4517 4.53681 26.3516 4.35833 26.1734C4.17986 25.9952 4.07959 25.7535 4.07959 25.5015V16.9502"
                                        stroke="#B221E5" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Download Guidebook</a>
                            <br>
                            Daftar segera!
                            <br>
                            Pendaftaran akan ditutup tanggal:
                        </p>
                        <h4
                            class="flex items-center justify-center mt-4 text-2xl font-bold text-white lg:justify-start">
                            <span class="mr-4">
                                <svg width="30" height="30" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 17C0 18.7 1.3 20 3 20H17C18.7 20 20 18.7 20 17V9H0V17ZM17 2H15V1C15 0.4 14.6 0 14 0C13.4 0 13 0.4 13 1V2H7V1C7 0.4 6.6 0 6 0C5.4 0 5 0.4 5 1V2H3C1.3 2 0 3.3 0 5V7H20V5C20 3.3 18.7 2 17 2Z"
                                        fill="white" />
                                </svg>
                            </span> 21 September 2022
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
                        <a href="{{ route('register-college') }}" class="relative px-12 btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
