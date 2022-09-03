<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiPembayaran\Components;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $icon_data;
    public $type;

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi-pembayaran.components.modal-detail');
    }
     public function mount($id, $type){
        $this->icon_data = $type == 'Startup' ? IconAcademyStartupData::find($id) : IconAcademyDataScienceData::find($id);
        $this->type = $type;
     }

}
