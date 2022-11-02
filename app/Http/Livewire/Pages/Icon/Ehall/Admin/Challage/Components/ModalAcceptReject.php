<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Challage\Components;

use App\Models\Icon\EhallChallage;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAcceptReject extends ModalComponent
{
    public $type;
    public $challage;

    public function mount($challenge_id, $modal_type)
    {
        $this->type = $modal_type;
        $this->challage = EhallChallage::find($challenge_id);
    }

    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.challage.components.modal-accept-reject');
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->challage->update([
                'is_accepted' => 'rejected',
            ]);
        } elseif ($this->type == 'accept') {
            $this->challage->update([
                'is_accepted' => 'accepted',
            ]);

            $this->challage->member->increment('hois_point', 250);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }
}
