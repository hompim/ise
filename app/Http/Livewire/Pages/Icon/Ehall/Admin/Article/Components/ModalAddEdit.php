<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Article\Components;

use App\Models\Icon\EhallArticle;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Str;

class ModalAddEdit extends ModalComponent
{
    public $modal_type;
    public $artikel;
    public $title;
    public $content;
    public $type;

    public function mount($type, $id = null)
    {
        $this->modal_type = $type;
        if ($type == 'edit') {
            $this->artikel =  EhallArticle::find($id);
            $this->title = $this->artikel->title;
            $this->type = $this->artikel->type;
            $this->content = $this->artikel->content;
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'type' => 'required',
            'content' => 'required'
        ]);

        if ($this->modal_type == 'add') {
            EhallArticle::create([
                'title' => $this->title,
                'type' => $this->type,
                'content' => $this->content,
                'slug' => Str::slug($this->title),
            ]);
        } elseif ($this->type == 'edit') {
            $this->promo->update([
                'title' => $this->title,
                'type' => $this->type,
                'content' => $this->content,
                'slug' => Str::slug($this->title),
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.article.components.modal-add-edit');
    }
}
