<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Verifikasi\Components;

use Livewire\Component;
use App\Mail\LolosAcademyEmail;
use App\Mail\TidakLolosAcademyEmail;
use Illuminate\Support\Facades\Mail;
use LivewireUI\Modal\ModalComponent;
use App\Models\Icon\IconAcademyStartupData;
use App\Models\Icon\IconAcademyDataScienceData;

class ModalAcceptReject extends ModalComponent
{

    public $type;
    public $icon_type;
    public $icon_data;
    public $comment = '';
    public $data_science = 'data-science';
    public $startup = 'startup';
    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->icon_type = $type;
        $this->icon_data = ($type == 'Startup' ? IconAcademyStartupData::find($id) : IconAcademyDataScienceData::find($id));
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->icon_data->update([
                'competition_round' => 'Rejected',
            ]);
            Mail::to($this->icon_data->leader->email)->send(new TidakLolosAcademyEmail($this->icon_data->leader->name));
        } elseif ($this->type == 'accept') {
            if ($this->icon_type == 'Startup') {
                $this->icon_data->update([
                    'competition_round' => 'Pending'
                ]);
                Mail::to($this->icon_data->leader->email)->send(new LolosAcademyEmail($this->icon_data->leader->name));
            } else {
                $this->icon_data->update([
                    'competition_round' => 'Seleksi'
                ]);
            }
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi.components.modal-accept-reject');
    }
}
