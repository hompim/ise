<div>
    <h2 class="flex justify-center px-4 mt-12 mb-10 text-lg font-bold text-white md:text-2xl font-poppins">Form
        Feedback Kick-Off Webinar on ISE! 2022</h2>

        {{-- <p>
            Hi Metazen!🙋

Selamat datang di Kick Off Webinar on Information Systems Expo 2022 ✨
Sudah siap untuk mengikuti Kick Off Webinar hari ini?
Jangan lupa untuk isi presensi dulu ya!
Good Luck 😊

        </p> --}}

    <form wire:submit.prevent="feedbackSubmit" method="POST" autocomplete="off">
        @csrf
        <div class="mx-4 rounded-md shadow-sm md:mx-12 ">
            <div class="flex flex-col mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Lengkap</label>
                <input disabled wire:model="name" id="name" name="name" type="text" required
                    class="p-2 text-gray-300 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama lengkap kamu">
            </div>
            <div class="flex flex-col mt-12 mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Email</label>
                <input disabled wire:model.defer="email" id="email" name="email" type="text" required
                    class="p-2 text-gray-300  bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan email kamu">
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Bagaimana penyampaian materi Kick Off Webinar hari ini? </h5>
                <div class="flex gap-4 justify-center">
                <p class="text-white">Sangat Buruk</p>
                    <div class="flex items-center mb-2">
                        <input name="Penyampaian materi" wire:model.defer ="penyampaian_materi" type="radio" value="1"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="1" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            1</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="Penyampaian materi" wire:model.defer ="penyampaian_materi" type="radio" value="2"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="2" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            2</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="Penyampaian materi" wire:model.defer ="penyampaian_materi" type="radio" value="3"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="3" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            3</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="penyampaian_materi" wire:model.defer ="penyampaian_materi" type="radio" value="4"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="4" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            4</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="penyampaian_materi" wire:model.defer ="penyampaian_materi" type="radio" value="5"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="5" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            5</label>
                    </div>
                <p class="text-white">Sangat Baik</p>
                </div>
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Bagaimana pemahaman kamu terkait materi Kick Off Webinar hari ini? </h5>
                <div class="flex gap-4 justify-center">
                <p class="text-white">Sangat Buruk</p>
                    <div class="flex items-center mb-2">
                        <input name="pemahaman_materi" wire:model.defer ="pemahaman_materi" type="radio" value="1"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="1" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            1</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pemahaman_materi" wire:model.defer ="pemahaman_materi" type="radio" value="2"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="2" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            2</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pemahaman_materi" wire:model.defer ="pemahaman_materi" type="radio" value="3"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="3" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            3</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pemahaman_materi" wire:model.defer ="pemahaman_materi" type="radio" value="4"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="4" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            4</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pemahaman_materi" wire:model.defer ="pemahaman_materi" type="radio" value="5"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="5" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            5</label>
                    </div>
                <p class="text-white">Sangat Baik</p>
                </div>
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Bagaimana keseluruhan pelaksanaan Kick Off Webinar hari ini? </h5>
                <div class="flex gap-4 justify-center">
                <p class="text-white">Sangat Buruk</p>
                    <div class="flex items-center mb-2">
                        <input name="pelaksanaan" wire:model.defer ="pelaksanaan" type="radio" value="1"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="1" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            1</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pelaksanaan" wire:model.defer ="pelaksanaan" type="radio" value="2"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="2" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            2</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pelaksanaan" wire:model.defer ="pelaksanaan" type="radio" value="3"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="3" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            3</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pelaksanaan" wire:model.defer ="pelaksanaan" type="radio" value="4"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="4" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            4</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="pelaksanaan" wire:model.defer ="pelaksanaan" type="radio" value="5"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="5" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            5</label>
                    </div>
                <p class="text-white">Sangat Baik</p>
                </div>
            </div>
            <div class="kelas my-11">
                <h5 class="mb-4 text-lg text-white">Seberapa puas kamu dengan kinerja panitia ISE! hari ini? </h5>
                <div class="flex gap-4 justify-center">
                <p class="text-white">Sangat Buruk</p>
                    <div class="flex items-center mb-2">
                        <input name="kepuasan" wire:model.defer ="kepuasan" type="radio" value="1"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="1" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            1</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="kepuasan" wire:model.defer ="kepuasan" type="radio" value="2"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="2" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            2</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="kepuasan" wire:model.defer ="kepuasan" type="radio" value="3"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="3" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            3</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="kepuasan" wire:model.defer ="kepuasan" type="radio" value="4"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="4" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            4</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input name="kepuasan" wire:model.defer ="kepuasan" type="radio" value="5"
                            class="p-2 bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  checked:bg-purple-200 cursor-pointer">
                        <label for="5" class="!mt-0 ml-2 font-light text-white font-poppins cursor-pointer">
                            5</label>
                    </div>
                <p class="text-white">Sangat Baik</p>
                </div>
            </div>
            <div class="flex flex-col mt-12 mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Kritik</label>
                <textarea wire:model.defer="kritik" name="kritik"
                    class="p-2 text-gray-300  bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan kritik kamu"></textarea>
            </div>
            <div class="flex flex-col mt-12 mb-2 space-y-2 font-medium text-white font-poppins">
                <label for="email-address">Saran</label>
                <textarea wire:model.defer="saran" name="saran"
                    class="p-2 text-gray-300  bg-transparent rounded-md focus:border-pink-200 focus:ring-pink-200 autofill:bg-transparent"
                    placeholder="Masukkan saran kamu"></textarea>
            </div>
        </div>
        <span class="flex justify-center mt-12 mb-24">
            <div wire:loading>

                <h3 class="text-2xl text-white">Harap Tunggu</h3>

            </div>
            <button wire:loading.remove type="submit"
                class="w-64 py-2 mt-4 mb-4 text-white rounded-full bg-gradient-to-r from-pink-300 to-purple-300 item-center"
                wire:loading.attr="disabled">Kirim</button>
        </span>
    </form>

    @if ($errors->any() || $errorMessage)
        <div class="fixed px-4 py-3 text-red-900 bg-red-100 border-t-4 border-red-500 rounded-b shadow-md bottom-12 right-12"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="w-6 h-6 mr-4 text-red-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Terjadi masalah</p>
                    <ul class="font-normal">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @if ($errorMessage)
                        <p class="font-normal">{{ $errorMessage }}</p>
                    @endif
                </div>
                <button type="button" title="Hapus" wire:click="closeModal()" class="self-start"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
    @endif

</div>
