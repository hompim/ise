<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Informasi Pembayaran</h5>
        <button type="button" title="Tutup" wire:click="closeModal()" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr/>
    <div class="px-4 mt-4">
        <div id="data_tim">
            <h5>Data Tim</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Tim</p>
                    <p>{{$icon_data->team_name}}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Ketua</p>
                    <p>{{$icon_data->leader->name}}</p>
                </div>
                <div>
                    <p class="font-bold mb- mt-2">Nama Institusi</p>
                    <p>{{$icon_data->university_name}}</p>
                </div>
            </div>
        </div>
        <div id="detail_pembayaran" class="mt-8">
            <h5>Pembayaran</h5>
            <hr/>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="font-bold mb-0 mt-2">Bukti Bayar</p>
                    <img class="object-scale-down w-50" src="{{asset('/storage/'.$icon_data->commitement_payment_path)}}"/>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Tanggal Pembayaran</p>
                    <p>{{date('d F y H:i:s',strtotime($icon_data->updated_at))}}</p>
                </div>
            </div>
        </div>
        <hr class="my-4"/>

        <div class="flex flex-row justify-end">
            <button
                onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-pembayaran.components.modal-accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'reject','id'=>$icon_data->id])}})"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" title="Tolak">
                Tolak
            </button>
            <button
                onclick="Livewire.emit('openModal', 'pages.icon.academy.admin.verifikasi-pembayaran.components.modal-accept-reject',{{json_encode(['type'=>$type,'modal_type'=>'accept','id'=>$icon_data->id])}})"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" title="Terima">
                Terima
            </button>

        </div>
    </div>
</div>
