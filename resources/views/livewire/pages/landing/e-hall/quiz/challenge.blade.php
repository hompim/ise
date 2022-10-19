<div class="flex flex-col pt-6 text-white bg-black font-poppins">

    <div class="block py-24 text-center">
        <h1 class="py-12 mx-auto text-4xl font-bold  lg:py-24 lg:text-7xl">ISE Challenge</h1>
        <p class="px-12 text-base font-semibold  lg:px-56 lg:text-2xl text-liteGray">
            Permainan berupa challenge untuk menyebarkan informasi seputar e–Hall of IS 2022 pada media sosial Line,
            Instagram, dan Whatsapp pemain.
        </p>
    </div>

    <div class="w-full pt-[44px]">
        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[28rem] overflow-hidden rounded-lg">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First
                        Slide</span>
                    <img src="{{ asset('images/challenge/1.png') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="challenge-1">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">Second
                        Slide</span>
                    <img src="{{ asset('images/challenge/2.png') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="challenge-2">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">Third
                        Slide</span>
                    <img src="{{ asset('images/challenge/3.png') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="challenge-3">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">Fourth
                        Slide</span>
                    <img src="{{ asset('images/challenge/4.png') }}"
                        class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="challenge-4">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 -bottom-8 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>

    <div class="mx-auto mt-32 mb-24">
        <h1 class="mb-8 text-3xl font-bold text-center lg:text-5xl">Tutorial Share</h1>
        <p class="px-12 lg:px-56 text-liteGray">
            <span class="text-2xl font-bold">Aturan:</span>
        <ul class="px-12 list-disc lg:px-56 text-liteGray">
            <li>Tiap pemain harus memiliki akun pada website ISE! 2022</li>
            <li>Poin yang didapatkan dari ISE Quest akan masuk ke dalam poin peserta di virtual play</li>
            <li>Dalam sehari pemain maksimal membagikan informasi Hall of IS sebanyak 2 kali atau 2 post. <br> Contoh:
                <ul class="pl-12 list-disc text-liteGray">
                    <li>jika peserta sudah membagikan informasi hall of is pada 1 story dan 1 post instagram maka pemain
                        tidak boleh
                        membagikannya kembali pada hari tersebut, harus menunggu 1x24 jam.</li>
                    <li> jika peserta sudah membagikan informasi hall of is pada 1 grup line dan 1 post instagram maka
                        pemain tidak boleh membagikannya kembali pada hari tersebut, harus menunggu 1x24 jam.</li>
                </ul>
            </li>
            <li>Pemain wajib menscreenshot bukti share dan di upload pada Share hall of IS.</li>
            <li>Satu form pengumpulan digunakan untuk satu bukti post. Sehingga dalam sehari maksimal mensubmit 2 form.
            </li>
            <li>Tiap post berbobot 250 poin. Sehingga dalam sehari poin maksimal yang dapat didapatkan pemain dari hall
                of IS adalah 500 poin.</li>
            <li>Jika pemain sudah mengisi form sebanyak dua kali dalam sehari maka tombol form otomatis menjadi
                disabled.</li>
            <li>Tidak ada batasan waktu dalam pengerjaan (Pokoknya selama Hall of IS dibuka).</li>
            <li>Batas terakhir technical IT adalah 7 November 2021 pukul 16.00 WIB. Pemenang akan diumumkan di media
                sosial resmi ISE melalui instagram @is_expo</li>
        </ul>
        </p>
    </div>

    <div class="mx-auto text-5xl font-bold">
        <h2 class="text-2xl">Share via</h2>
    </div>
    {{-- start share component --}}
    <div class="flex flex-col mt-12 md:flex-row" x-data="{ tab: 'ig' }">
        <div class="flex flex-row lg:flex-col space-x-4 lg:space-x-0 lg:space-y-4 ml-12 mb-24 lg:h-[625px]">
            <div class="flex flex-col items-center lg:flex-row">
                <div
                    :class="{
                        'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                            'ig',
                        'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                            'line',
                        'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'wa'
                    }">
                    <a @click.prevent="tab='ig'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/instagram.svg') }}" alt="ig"></a>
                </div>
                <div x-show="tab=='ig'" class="w-[17px] h-[18px] translate-y-4 md:translate-y-0 lg:ml-8">
                    <img src="{{ asset('images/polygon.svg') }}" alt="polygon"
                        class="transform rotate-90  md:rotate-0">
                </div>
            </div>
            <div class="flex flex-col items-center lg:flex-row">
                <div
                    :class="{
                        'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                            'line',
                        'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                            'ig',
                        'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'wa'
                    }">
                    <a @click.prevent="tab='line'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/line.svg') }}" alt="line"></a>
                </div>
                <div x-show="tab=='line'" class="w-[17px] h-[18px] lg:ml-8 translate-y-4 md:translate-y-0">
                    <img src="{{ asset('images/polygon.svg') }}" alt="polygon"
                        class="transform rotate-90 md:rotate-0">
                </div>
            </div>
            <div class="flex flex-col items-center lg:flex-row">
                <div
                    :class="{
                        'bg-gradient-to-b from-[#5B1BE1] to-[#B221E5] w-[70px] h-[70px] rounded-lg': tab ===
                            'wa',
                        'w-[70px] h-[70px] rounded-lg bg-liteBlack': tab ==
                            'ig',
                        'w-[70px] bg-liteBlack h-[70px] rounded-lg': tab == 'line'
                    }">
                    <a @click.prevent="tab='wa'" href=""><img class="w-8/12 m-auto mt-3"
                            src="{{ asset('images/whatsapp.svg') }}" alt="whatsapp"></a>
                </div>
                <div x-show="tab=='wa'" class="w-[17px] h-[18px] lg:ml-8 translate-y-4 md:translate-y-0">
                    <img src="{{ asset('images/polygon.svg') }}" alt="polygon"
                        class="transform rotate-90 md:rotate-0">
                </div>
            </div>

        </div>
        <div class="bg-liteBlack lg:ml-[100px] lg:mr-12 w-full h-max rounded-2xl flex flex-col mb-36">
            {{-- start IG --}}
            <div class="flex flex-col gap-6 px-12 space-x-4 md:flex-row lg:p-8 " x-show="tab=='ig'">
                <div class="lg:ml-10 lg:w-[400px]">
                    <div class="">
                        <img class="h-full rounded-lg img-fluid" src="{{ asset('images/challenge/1.png') }}"
                            alt="challenge-1">
                    </div>
                    <div class="mt-12 flex justify-center lg:w-[350px] h-[63px]">
                        <a class="bg-gradient-to-b lg:ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="https://drive.google.com/file/d/1LjHlHIlehFDSUitNS-7ryEbqZfLBJQs5/view?usp=sharing">DOWNLOAD
                            GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="text-xl font-bold"> Instagram</span>
                    <ul class="mt-4 list-disc text-liteGray">
                        <li>Unggah story instagram dengan konten gambar promosi E-Hall of IS yang bisa diunduh di
                            samping ini</li>
                        <li>Tag @is_expo dan 3 teman kamu</li>
                        <li>Attach https://ise-its.com/icon/hall-of-is Untuk stiker link dapat diganti menjadi
                            "E-Hall of IS"</li>
                        <li>Unggah tangkapan layar bukti promosi pada formulir di bawah ini</li>
                    </ul>
                    <br>
                    <span class="text-xl font-bold "> Caption</span>
                    <br>
                    <div class="mt-4">
                        <div class="text-liteGray">
                            <p>[GEN Z WAJIB BACA!]</p>
                            <br>
                            <p>Hi Metazen!</p>
                            <br>
                            <p>Don’t miss out, ISE! 2022 hadir untuk menjadi pijakan awal bagi masyarakat Indonesia
                                untuk
                                melangkah lebih jauh di revolusi industri 4.0 yang serba digital dengan masuk ke dalam
                                pameran virtual E-Hall of IS!</p>
                            <br>
                            <p>
                                Pameran virtual ini akan memberikan pengalaman baru yang lebih interaktif dengan
                                mengusung
                                konsep “3D Isometric”. Di dalamnya terdapat pameran karya autentik dan prestasi
                                mahasiswa
                                dan alumni Sistem Informasi Institut Sepuluh Nopember (ITS), serta quiz dan challenge
                                yang
                                dapat diakses melalui situs web ISE! 2022.
                            </p>
                            <br>
                            <p>
                                Yuk, ikuti dan menangkan bermacam hadiah yang menarik sekarang!
                            </p>

                            <a
                                href="https://ise-its.com/icon/hall-of-is/challenge">ise-its.com/icon/hall-of-is/challenge</a>
                            <p>
                                Contact us
                                ISE! 2022 WA Center: 085162852050 (chat only)
                            </p>
                            <br>
                            <p>
                                Check for more information on our social media✨
                                beacons.ai/ise2022
                            </p>
                            <br>

                            <p>
                                #ISE2022
                            </p>
                            <p>
                                #ISEMetafurther
                            </p>
                            <p>#InitiateToStepFurther</p>
                            <p>#SistemInformasi</p>
                            <p>#ITSSurabaya</p>




                        </div>
                    </div>
                </div>
            </div>
            {{-- start line --}}
            <div class="flex flex-col gap-6 px-12 space-x-4 lg:flex-row lg:p-8 " x-show="tab=='line'">
                <div class="lg:ml-10 lg:w-[400px]">
                    <div class="">
                        <img class="h-full rounded-lg img-fluid" src="{{ asset('images/challenge/1.png') }}"
                            alt="challenge-1">
                    </div>
                    <div class="mt-12 lg:w-[350px] flex justify-center h-[63px]">
                        <a class="bg-gradient-to-b lg:ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="https://drive.google.com/drive/folders/1ztO8OL5bA6hFQR15u15YW__S7Fp2Wcwn?usp=sharing">DOWNLOAD
                            GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="text-xl font-bold">Line</span>
                    <ul class="mt-4 list-disc text-liteGray">
                        <li>Bagikan gambar promosi E-Hall of IS yang bisa diunduh di samping ini ke 2 grup LINE yang
                            berisi minimal 100 anggota aktif</li>
                        <li>Sertakan salinan caption promosi di bawah iniu</li>
                    </ul>
                    <span class="text-xl font-bold "> Caption</span>
                    <br>
                    <div class="mt-4">
                        <div class="text-liteGray">
                            <p>[GEN Z WAJIB BACA!]</p>
                            <br>
                            <p>Hi Metazen!</p>
                            <br>
                            <p>Don’t miss out, ISE! 2022 hadir untuk menjadi pijakan awal bagi masyarakat Indonesia
                                untuk
                                melangkah lebih jauh di revolusi industri 4.0 yang serba digital dengan masuk ke dalam
                                pameran virtual E-Hall of IS!</p>
                            <br>
                            <p>
                                Pameran virtual ini akan memberikan pengalaman baru yang lebih interaktif dengan
                                mengusung
                                konsep “3D Isometric”. Di dalamnya terdapat pameran karya autentik dan prestasi
                                mahasiswa
                                dan alumni Sistem Informasi Institut Sepuluh Nopember (ITS), serta quiz dan challenge
                                yang
                                dapat diakses melalui situs web ISE! 2022.
                            </p>
                            <br>
                            <p>
                                Yuk, ikuti dan menangkan bermacam hadiah yang menarik sekarang!
                            </p>

                            <a
                                href="https://ise-its.com/icon/hall-of-is/challenge">ise-its.com/icon/hall-of-is/challenge</a>
                            <p>
                                Contact us
                                ISE! 2022 WA Center: 085162852050 (chat only)
                            </p>
                            <br>
                            <p>
                                Check for more information on our social media✨
                                beacons.ai/ise2022
                            </p>
                            <br>

                            <p>
                                #ISE2022
                            </p>
                            <p>
                                #ISEMetafurther
                            </p>
                            <p>#InitiateToStepFurther</p>
                            <p>#SistemInformasi</p>
                            <p>#ITSSurabaya</p>




                        </div>
                    </div>
                </div>
            </div>
            {{-- start wa --}}
            <div class="flex flex-col gap-6 px-12 lg:flex-row lg:p-8 lg:space-x-4 " x-show="tab=='wa'">
                <div class="lg:ml-10 lg:w-[400px]">
                    <div class="">
                        <img class="h-full rounded-lg img-fluid" src="{{ asset('images/challenge/1.png') }}"
                            alt="challenge-1">
                    </div>
                    <div class="mt-12 lg:w-[350px] h-[63px] flex justify-center">
                        <a class="bg-gradient-to-b lg:ml-[60px] from-[#5B1BE1] py-4 px-8 to-[#B221E5] rounded-lg "
                            href="https://drive.google.com/file/d/1LjHlHIlehFDSUitNS-7ryEbqZfLBJQs5/view?usp=sharing">DOWNLOAD
                            GAMBAR</a>
                    </div>
                </div>
                <div class="">
                    <span class="text-xl font-bold">Whatsapp</span>
                    <ul class="mt-4 list-disc text-liteGray">
                        <li>Bagikan gambar promosi E-Hall of IS yang bisa diunduh di samping ini ke 2 grup Whatsapp yang
                            berisi minimal 100 anggota aktif</li>
                        <li>Sertakan salinan caption promosi di bawah ini</li>
                    </ul>
                    <span class="text-xl font-bold "> Caption</span>
                    <br>
                    <div class="mt-4">
                        <div class="text-liteGray">
                            <p>[GEN Z WAJIB BACA!]</p>
                            <br>
                            <p>Hi Metazen!</p>
                            <br>
                            <p>Don’t miss out, ISE! 2022 hadir untuk menjadi pijakan awal bagi masyarakat Indonesia
                                untuk
                                melangkah lebih jauh di revolusi industri 4.0 yang serba digital dengan masuk ke dalam
                                pameran virtual E-Hall of IS!</p>
                            <br>
                            <p>
                                Pameran virtual ini akan memberikan pengalaman baru yang lebih interaktif dengan
                                mengusung
                                konsep “3D Isometric”. Di dalamnya terdapat pameran karya autentik dan prestasi
                                mahasiswa
                                dan alumni Sistem Informasi Institut Sepuluh Nopember (ITS), serta quiz dan challenge
                                yang
                                dapat diakses melalui situs web ISE! 2022.
                            </p>
                            <br>
                            <p>
                                Yuk, ikuti dan menangkan bermacam hadiah yang menarik sekarang!
                            </p>

                            <a
                                href="https://ise-its.com/icon/hall-of-is/challenge">ise-its.com/icon/hall-of-is/challenge</a>
                            <p>
                                Contact us
                                ISE! 2022 WA Center: 085162852050 (chat only)
                            </p>
                            <br>
                            <p>
                                Check for more information on our social media✨
                                beacons.ai/ise2022
                            </p>
                            <br>

                            <p>
                                #ISE2022
                            </p>
                            <p>
                                #ISEMetafurther
                            </p>
                            <p>#InitiateToStepFurther</p>
                            <p>#SistemInformasi</p>
                            <p>#ITSSurabaya</p>




                        </div>
                    </div>
                </div>
            </div>
            <form id="form" wire:submit.prevent="submit" method="POST">
                <div class="flex flex-col">
                    <div class="mx-auto text-xl lg:text-3xl font-bold mt-36">Upload form</div>
                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                        class="bg-[#2F2F2F] mx-24 relative mt-8 mb-20 lg:h-[300px] rounded-lg flex flex-col lg:flex-row justify-center items-center">
                        @if (Auth::check())
                            <div class="flex flex-col">
                                <input type="file" id="fileUpload" name="ss_path" wire:model="ss_path" hidden
                                    accept=".jpg,.png,.jpeg">
                                <button type="button" onclick="document.getElementById('fileUpload').click()"
                                    class="bg-gradient-to-b lg:ml-[60px] items-center flex flex-col md:flex-row mx-auto from-[#5B1BE1]  py-4 px-6 md:px-12 to-[#B221E5] rounded-lg">
                                    <img class="lg:mr-12 lg:w-[33px] lg:h-[33px] fill-white"
                                        src="{{ asset('images/download.svg') }}" alt="download">Upload hasil
                                    screenshot
                                    kamu
                                    di
                                    sini
                                </button>
                                <div class="pt-2 flex justify-center items-center">
                                    <div wire:loading wire:target="ss_path">Uploading...</div>
                                    <button
                                        class="bg-gradient-to-b lg:ml-[60px] items-center flex flex-col md:flex-row mx-auto from-[#5B1BE1]  py-4 px-6 md:px-12 to-[#B221E5] rounded-lg ">
                                        Submit
                                    </button>
                                    @error('ss_path')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if($ss_path)
                                <div class="w-36 lg:w-48">
                                    <img src="{{ $ss_path->temporaryUrl() }}" alt="preview-img" class="w-full">
                                </div>
                            @endif
                        @else
                            <a href="{{ route('login') }}"
                                class="bg-gradient-to-b lg:ml-[60px] items-center flex flex-col md:flex-row mx-auto from-[#5B1BE1]  py-4 px-6 md:px-12 to-[#B221E5] rounded-lg ">
                                Login
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('success', () => {
            Swal.fire({
                icon: 'success',
                title: 'Upload Berhasil!! Point +250',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
@endpush
