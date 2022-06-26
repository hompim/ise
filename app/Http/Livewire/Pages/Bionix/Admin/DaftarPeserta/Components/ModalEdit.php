<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\DaftarPeserta\Components;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use LivewireUI\Modal\ModalComponent;

class ModalEdit extends ModalComponent
{

    public $bionix_data;
    public $anggota_1;
    public $anggota_2;
    public $anggota_3;
    public $nama_institusi;
    public $type;

    public function mount($id, $type)
    {
        $this->type = $type;
        $this->bionix_data = $this->type == ' student' ? TeamJuniorData::find($id) : TeamSeniorData::find($id);
        $this->anggota_1 = $this->bionix_data->leader->name;
        $this->anggota_2 = $this->type == ' student' ? ($this->bionix_data->member_id ? $this->bionix_data->member->name : null) : ($this->bionix_data->member1_id ? $this->bionix_data->member_1->name : null);
        $this->anggota_3 = $this->type == ' student' ? null : ($this->bionix_data->member2_id ? $this->bionix_data->member_2->name : null);
        $this->nama_institusi = $this->type == ' student' ? $this->bionix_data->school_name : $this->bionix_data->university_name;
    }

    public function submit()
    {
        if ($this->type == 'student') {
            $this->validate([
                'anggota_1' => 'required|string',
                'nama_institusi' => 'required|string'
            ]);
            if ($this->bionix_data->member_id) {
                $this->validate([
                    'anggota_2' => 'required|string'
                ]);
                $this->bionix_data->member->name = $this->anggota_2;
                $this->bionix_data->member->save();
            }
            $this->bionix_data->leader->name = $this->anggota_1;
            $this->bionix_data->leader->save();
            $this->bionix_data->school_name = $this->nama_institusi;
            $this->bionix_data->save();

        } elseif ($this->type == 'college') {
            $this->validate([
                'anggota_1' => 'required|string',
                'nama_institusi' => 'required|string'
            ]);
            if ($this->bionix_data->member1_id) {
                $this->validate([
                    'anggota_2' => 'required|string'
                ]);
                $this->bionix_data->member_1->name = $this->anggota_2;
                $this->bionix_data->member_1->save();
            }
            if ($this->bionix_data->member2_id) {
                $this->validate([
                    'anggota_3' => 'required|string'
                ]);
                $this->bionix_data->member_2->name = $this->anggota_3;
                $this->bionix_data->member_2->save();
            }
            $this->bionix_data->leader->name = $this->anggota_1;
            $this->bionix_data->leader->save();
            $this->bionix_data->university_name = $this->nama_institusi;
            $this->bionix_data->save();
        }
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.daftar-peserta.components.modal-edit');
    }
}
