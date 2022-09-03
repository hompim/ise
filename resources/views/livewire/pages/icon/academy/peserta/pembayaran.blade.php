    <div class="px-8">
        <div
            class="bg-{{$alert_color}}-100 border-t-4 border-{{$alert_color}}-500 rounded-b text-{{$alert_color}}-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-{{$alert_color}}-500 mr-4"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">{{$alert_header}}</p>
                    <p class="text-sm">{!! $alert_content !!}</p>
                </div>
            </div>
        </div>

        @if($errors->any())
            <div class="bg-red-400 border-l-4 border-red-500 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Validation Error</p>
                @foreach ($errors->all() as $error)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        @endif
        <h3 class="text-xl font-weight-bold my-4">Pembayaran</h3>
        <div class="grid md:grid-cols-2 gap-4 pb-8">
            <div class="card rounded-xl mb-0">
                <div class="card-body pb-0">
                    <div class="flex flex-col justify-center items-center">
                        <div class="my-8">
                            <div class="flex flex-col justify-center">
                                @if(Auth::user()->userable->academy->commitement_payment_status!='Belum Bayar')
                                    <h5 class="text-center font-normal text-xl">Harap lakukan transfer uang ke rekening
                                        bank
                                        berikut
                                        : </h5>
                                    <center><img
                                            src="{{asset('images/global/'.\App\Models\Setting::where('name','bionix_bank_name')->first()->value.'.png')}}"
                                            alt="Logo Bank"
                                            class="object-scale-down md:h-1/2 h-14 max-w-xs"/></center>
                                    <h4 class="text-center text-2xl">{{\App\Models\Setting::where('name','bionix_bank_norek')->first()->value}}</h4>
                                    <h4 class="text-center text-2xl">
                                        a.n. {{\App\Models\Setting::where('name','bionix_bank_owner')->first()->value}}</h4>
                                @endif
                                <h5 class="text-center font-normal text-xl mt-4">Jumlah yang harus dibayar : </h5>
                                <h1 class="text-center text-4xl font-bold">{{"Rp " . number_format(150000,2,',','.')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-xl">
                <div class="card-body">
                    <div class="justify-center flex">
                            <div class="mt-3 flex flex-col">
                                <center><label
                                        class="text-lg font-weight-bold block tracking-wide text-gray-700 mb-2"
                                        for="bukti_transfer">
                                        Bukti Transfer
                                    </label>
                                </center>
                                <img
                                    src="{{$image?$image->temporaryUrl():((Auth::user()->userable->academy->commitement_payment_path&&(Auth::user()->userable->academy->commitement_payment_status=='Terverifikasi'||Auth::user()->userable->academy->commitement_payment_status=='Tahap Verifikasi'))?asset('storage/'.Auth::user()->userable->academy->commitement_payment_path):asset('/img/global/placeholder-image.png'))}}"
                                    class="object-fit mx-auto 2xl:max-h-80" alt="Bukti Transfer"
                                    id="bukti_transfer_preview">
                                @if(Auth::user()->userable->academy->commitement_payment_status=='Belum Unggah'||Auth::user()->userable->academy->commitement_payment_status=='Ditolak')
                                    <form wire:submit.prevent="save" class="flex-col flex items-center">
                                        <label
                                            class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-2">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i>Unggah File <input type="file"
                                                                                                           class="form-control-file"
                                                                                                           id="bukti_transfer"
                                                                                                           accept=".jpg,.jpeg,.png"
                                                                                                           hidden
                                                                                                           wire:model="image"/>
                                        </label>
                                        <button type="submit" class="btn btn-success mt-2 font-bold"><i class="fas fa-save"></i>
                                            Kirim Bukti Bayar
                                        </button>
                                    </form>
                                @endif
                            </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
        <div wire:loading.delay wire:target="image"
             class="fixed bottom-12 right-12 bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
             role="alert" style="color:rgba(30, 58, 138, var(--tw-text-opacity))">
            <div class="flex">
                <div class="py-1">
                    <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Sedang mengunggah</p>
                    <p class="text-sm">Harap tunggu sesaat.</p>
                </div>
            </div>
        </div>
        @if(session('error'))
            <div
                class="fixed bottom-12 right-12 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Terjadi masalah</p>
                        <p class="text-sm">{{session('error')}}</p>
                    </div>
                    <button type="button" title="Hapus" wire:click="closeMessage()" class="self-start"><i
                            class="cil-x"></i></button>
                </div>
            </div>
        @endif
    </div>
