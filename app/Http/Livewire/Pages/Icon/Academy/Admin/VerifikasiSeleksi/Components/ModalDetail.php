<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiSeleksi\Components;

use App\Models\Icon\IconAcademyDataScienceData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $team;

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi-seleksi.components.modal-detail');
    }

    public function mount($id){
        $this->team= IconAcademyDataScienceData::find($id);
    }
}
