    <!-- Main modal -->
    <div id="defaultModal" aria-hidden="true"
        data-modal-show="{{ Auth::check() ? (Auth::user()->userable->hois_point > 0 || Auth::user()->userable->talkshow ? 'false' : 'true') : 'true' }}"
        class="fixed top-0 bottom-0 left-0 right-0 hidden w-full mt-12 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full lg:mt-4 z-[9999]"
        data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="2500" data-aos-one="true">
        <div class="relative w-full h-full max-w-4xl p-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-liteBlack">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 rounded-t">
                    <h3 class="text-xl font-semibold text-white">
                        <span
                            class="font-semibold text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">ISE!
                            Grand Talkshow</span> & <span
                            class="font-semibold text-transparent bg-gradient-to-r from-pink-300 to-purple-300 bg-clip-text">ISE!
                            Trivia
                        </span>
                        2022
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
                <div class="carousel-landing" id="carousel-landing">
                    <div id="default-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-screen overflow-hidden rounded-lg lg:h-[36rem]">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span
                                    class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800 hidden">First
                                    Slide</span>
                                <!-- Modal body -->
                                <div class="flex flex-col justify-center p-6 space-x-4 lg:flex-row">
                                    <div class="w-full">
                                        <div class="flex justify-center overflow-hidden bg-[#1C1D20] rounded-t-xl">
                                            <img src="{{ asset('images/talkshow/poster.png') }}"
                                                class="h-[12em] transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300 lg:h-full"
                                                alt="bcl-regist-poster" title="Grand Prize ISE! Trivia 2022">
                                        </div>
                                        <div
                                            class="p-2 text-center rounded-b-xl bg-gradient-to-r from-pink-300 to-purple-300">
                                            <h3 class="font-bold text-white lg:text-md">
                                                ISE! Grand Talkshow</h3>
                                            <h3 class="font-semibold text-white text-md font-poppins">Speakers
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mt-4 text-center lg:text-start lg:mt-0">
                                        <h3 class="mb-4 text-lg font-semibold text-white font-poppins lg:text-4xl">
                                            ISE! Grand Talkshow 2022
                                        </h3>
                                        <p class="text-sm font-medium lg:!text-lg font-poppins text-liteGray">Hi,
                                            Metazen! 👋🏻<br><br>
                                            Registrasi untuk Grand Talkshow udah dibuka nih😆❗️ <br>
                                            Keuntungan yang akan
                                            kamu dapatkan tentunya banyak nih Metazen! Grand Talkshow kali ini
                                            diadakan
                                            secara GRATIS dan tidak dipungut biaya apapun😱 <br><br>
                                            <span class="lg:inline-block hidden">
                                                Dengan mengangkat tema yang relate dengan masa kini, para pembicara yang
                                                diundang pun sudah berpengalaman dan kompeten di bidangnya
                                                masing-masing.
                                                <br><br>
                                            </span>

                                            Yuk segera daftarkan dirimu pada link dibawah ini ya 🤩
                                        </p>
                                    </div>
                                </div>
                                {{-- modal footer --}}
                                <div class="flex items-center p-6 space-x-2 rounded-b">
                                    <div
                                        class="relative left-0 right-0 justify-center mx-auto text-center max-w-fit group  transition duration-300 hover:!scale-105 mb-4">
                                        <div class="absolute inset-0 ">
                                            <a href="/dashboard/peserta/webinar/register"
                                                class="relative px-12 transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">Free
                                                Register Here!</a>
                                        </div>
                                        <a href="{{ route('register-talkshow') }}" class="relative px-12 btn">Free
                                            Register
                                            Here!</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span
                                    class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800 hidden">First
                                    Slide</span>
                                <!-- Modal body -->
                                <div class="flex flex-col justify-center p-6 space-x-4 lg:flex-row">
                                    <div class="w-full">
                                        <div class="flex justify-center overflow-hidden bg-[#1C1D20] rounded-t-xl">
                                            <img src="{{ asset('images/trivia/grand-prizes.png') }}"
                                                class="h-[12em] transition duration-1000 ease-linear hover:transform hover:scale-105 hover:duration-300 lg:h-full"
                                                alt="bcl-regist-poster" title="Grand Prize ISE! Trivia 2022">
                                        </div>
                                        <div
                                            class="p-2 text-center rounded-b-xl bg-gradient-to-r from-pink-300 to-purple-300">
                                            <h3 class="font-bold text-white lg:text-md">
                                                ISE! Trivia</h3>
                                            <h3 class="font-semibold text-white text-md font-poppins">Grand Prizes
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flex flex-col mt-4 text-center lg:text-start lg:mt-0">
                                        <h3 class="mb-4 text-lg font-semibold text-white font-poppins lg:text-4xl">
                                            ISE! Trivia 2022
                                        </h3>
                                        <p class="text-sm font-medium lg:!text-lg font-poppins text-liteGray">Hi,
                                            Metazen!<br><br>

                                            Siapa yang sudah ikutan mencoba Quiz ISE! Trivia?<br><br>
                                            Buat kalian yang belum, yuk cobain sekarang! Kalian bisa dapat hadiah-hadiah
                                            menarik cuman
                                            dari menjawab beberapa pertanyaan seputar ISE!<br><br>

                                            Yuk, Langsung cusss!!
                                        </p>
                                    </div>
                                </div>
                                {{-- modal footer --}}
                                <div class="flex items-center p-6 space-x-2 rounded-b">
                                    <div
                                        class="relative left-0 right-0 justify-center mx-auto text-center max-w-fit group  transition duration-300 hover:!scale-105 mb-4">
                                        <div class="absolute inset-0 ">
                                            <a href="/dashboard/peserta/webinar/register"
                                                class="relative px-12 transition duration-1000 opacity-75 btn blur-lg group-hover:duration-300 group-hover:opacity-100 font-poppins">To
                                                ISE! Trivia</a>
                                        </div>
                                        <a href="{{ route('quiz-ehall') }}" class="relative px-12 btn">To ISE! Trivia
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-0 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
