<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Components;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalAddEdit extends ModalComponent
{

    public $shorten_link;
    public $type = 'add';
    public $link_pendek;
    public $link_tujuan;
    public $deskripsi;

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->shorten_link = ShortenLink::find($id);
            $this->link_pendek = $this->shorten_link->shorten_link;
            $this->link_tujuan = $this->shorten_link->destination;
            $this->deskripsi = $this->shorten_link->description;
        }
    }

    public function submit()
    {
        if ($this->type == 'add') {
            $this->validate([
                'link_pendek' => 'required|unique:shorten_links,shorten_link',
                'link_tujuan' => 'required',
                'deskripsi' => 'required',
            ]);

            $link = "https://ise-its.com/$this->link_pendek";
            $qrCode = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=$link";

            ShortenLink::create([
                'shorten_link' => $this->link_pendek,
                'destination' => $this->link_tujuan,
                'description' => $this->deskripsi,
                "qr_code" => $qrCode
            ]);
        } elseif ($this->type == 'edit') {
            $this->validate([
                'link_pendek' => 'required|unique:shorten_links,shorten_link,' . $this->shorten_link->id,
                'link_tujuan' => 'required',
                'deskripsi' => 'required',
            ]);

            $link = "https://ise-its.com/$this->link_pendek";
            $qrCode = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=$link";

            $this->shorten_link->update([
                'shorten_link' => $this->link_pendek,
                'destination' => $this->link_tujuan,
                'description' => $this->deskripsi,
                "qr_code" => $qrCode
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.pages.bionix.admin.pengumuman.components.modal-add-edit');
    }
}
