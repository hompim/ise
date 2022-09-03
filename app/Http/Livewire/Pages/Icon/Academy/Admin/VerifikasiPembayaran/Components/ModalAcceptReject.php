<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiPembayaran\Components;

use App\Models\Icon\IconAcademyDataScienceData;
use App\Models\Icon\IconAcademyStartupData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAcceptReject extends ModalComponent
{
    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi-pembayaran.components.modal-accept-reject');
    }

    public $type;
    public $icon_data;
    public $comment = '';
    public $data_science = 'data-science';
    public $startup = 'startup';
    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->icon_data = ($type == 'Startup' ? IconAcademyStartupData::find($id) : IconAcademyDataScienceData::find($id));
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->icon_data->update([
                'commitement_payment_status' => 'Ditolak',
            ]);
        } elseif ($this->type == 'accept') {
            $this->icon_data->update([
                'commitement_payment_status' => 'Terverifikasi',
                'competition_round' => 'Penyisihan',
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }
}
