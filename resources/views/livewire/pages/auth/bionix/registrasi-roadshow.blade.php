<div class="flex flex-col space-y-4">
    <div class="my-8">
        <h1 class="text-2xl font-bold text-center text-white font-poppins">Form Pembayaran DP Bionix Student Level
            Level
        </h1>
    </div>
    <div class="flex justify-center">
        <form action="#" class="flex flex-col justify-center w-full px-4 mb-8 space-y-8 lg:mx-20"
            wire:submit.prevent="dpSubmit" method="POST">
            @csrf

            <div class="mt-4 text-white">
                <h5 class="text-center font-normal text-xl">Silahkan melakukan transfer DP ke rekening
                    bank
                    berikut
                    : </h5>
                <center><img
                        src="{{ asset('images/global/' . \App\Models\Setting::where('name', 'bionix_bank_name')->first()->value . '.png') }}"
                        alt="Logo Bank" class="object-scale-down md:h-1/2 h-14 max-w-xs" /></center>
                <h4 class="text-center text-2xl">
                    {{ \App\Models\Setting::where('name', 'bionix_bank_norek')->first()->value }}</h4>
                <h4 class="text-center text-2xl">
                    a.n. {{ \App\Models\Setting::where('name', 'bionix_bank_owner')->first()->value }}</h4>
                <h4 class="text-center text-sm"><b>Harap diperhatikan bahwa diwajibkan untuk menggunakan akun ISE yang
                        sama untuk membayar DP dan mendaftar BIONIX Student Level</b></h4>
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama</label>
                <input id="name" name="name" type="text" disabled required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama kamu" wire:model.defer="name">
            </div>

            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Asal Sekolah</label>
                <input id="name" name="school" type="text" disabled required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan asal sekolah kamu" wire:model.defer="school">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Metode Pembayaran (Bank(sertakan nama bank, ex:Bank BRI)/Gopay/OVO/Dll)</label>
                <input id="name" name="bank_no" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan asal metode pembayaran kamu" wire:model.defer="bank_name">
            </div>

            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nama Akun pembayaran</label>
                <input id="name" name="account_name" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nama akun pembayaran kamu" wire:model.defer="account_name">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nomer Akun pembayaran (Rek. Bank atau Nomer HP untuk Gopay/OVO)</label>
                <input id="name" name="account_no" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nomor akun pembayaran kamu" wire:model.defer="account_no">
            </div>
            <div class="flex flex-col space-y-2 font-medium text-white font-poppins">
                <label for="name">Nominal DP</label>
                <input id="name" name="nominal" type="text" required
                    class="p-2 rounded-md bg-transparent !border border-[#6B7280] focus-visible:!border-pink-200 focus:!border-pink-200 focus:!ring-pink-200  autofill:bg-transparent"
                    placeholder="Masukkan nominal DP" wire:model.defer="nominal">
            </div>

            <div class="flex flex-col space-y-2 my-11 font-medium text-white font-poppins">
                <label for="kartu-pelajar1">Upload bukti pembayaran
                </label>

                <div class="flex flex-col justify-start items-center">
                    <img src="{{ $payment_proof ? $payment_proof->temporaryUrl() : null }}" class="mx-auto object-fit"
                        style="max-height:50vh">
                    <span
                        class="flex flex-row gap-4 w-32 py-2 p-2 rounded-md bg-transparent !border border-[#6B7280] hover:border-pink-200  autofill:bg-transparent mt-4 text-white item-center mb-4">
                        <img class="" src="{{ asset('images/upload.svg') }}" alt="">
                        <button type="button" onclick="document.querySelector('#payment').click()"
                            class="text-liteGray">Add
                            File</button>
                        <input type="file" wire:model.defer="payment_proof" class="form-control-file"
                            name="payment_proof" id="payment" accept=".jpg,.jpeg,.png" hidden>
                </div>
            </div>

            <div class="flex-row my-11 space-x-4 font-medium font-poppins">
                <input wire:model.defer="agree" type="checkbox" id="setuju-kebijakan" name="setuju-kebijakan"
                    class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                <label class="text-white" for="setuju-kebijakan">  Saya setuju dengan kebijakan privasi serta <a href="{{route('term-condition')}}" class="text-blue-400" target="_blank">syarat dan ketentuan</a> yang berlaku</label>
            </div>
            <div
                class="relative left-0 right-0 flex flex-col justify-center mx-auto mt-24 text-center lg:flex-row max-w-fit group">
                <button type="Submit"
                    class="relative px-24 text-xl duration-300 transform btn hover:scale-105">Submit</button>
            </div>

        </form>
    </div>

