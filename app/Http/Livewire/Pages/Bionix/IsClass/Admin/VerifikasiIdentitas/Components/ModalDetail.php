<?php

namespace App\Http\Livewire\Pages\Bionix\IsClass\Admin\VerifikasiIdentitas\Components;

use Livewire\Component;
use App\Models\Bionix\IsClassData;
use LivewireUI\Modal\ModalComponent;

class ModalDetail extends ModalComponent
{
    public $is_class_peserta;

    public function render()
    {
        return view('livewire.pages.bionix.is-class.admin.daftar-peserta.components.modal-detail');
    }

    public function mount($id)
    {
        $this->is_class_peserta = IsClassData::find($id);
    }
}
