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
        return view('livewire.pages.bionix.is-class.admin.verifikasi-identitas.components.modal-detail');
    }

    public function mount($id)
    {
        $this->is_class_peserta = IsClassData::find($id);
    }

    public static function modalMaxWidth(): string
    {
        return '3xl';
    }
}
