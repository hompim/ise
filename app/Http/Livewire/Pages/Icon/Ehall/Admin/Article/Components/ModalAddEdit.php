<?php

namespace App\Http\Livewire\Pages\Icon\Ehall\Admin\Article\Components;

use App\Models\Icon\EhallArticle;
use App\Models\Icon\EhallArticleImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;

class ModalAddEdit extends ModalComponent
{

    use WithFileUploads;

    public $modal_type;
    public $artikel;
    public $title;
    public $subtitle;
    public $content;
    public $article_type;
    public $link_youtube;
    public $logo;
    public $title_image;
    public $images = [];
    public $isImageChange;


    public function mount($type, $id = null)
    {
        $this->modal_type = $type;
        if ($type == 'edit') {
            $this->artikel =  EhallArticle::find($id);
            $this->title = $this->artikel->title;
            $this->subtitle = $this->artikel->subtitle;
            $this->article_type = $this->artikel->type;
            $this->content = $this->artikel->content;
            $this->link_youtube = $this->artikel->link_youtube;
            $this->images = $this->artikel->galery;
            $this->isImageChange = false;
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required'
        ]);

        if ($this->modal_type == 'add') {

            $this->validate([
                'images.*' => 'image|max:2048', // 1MB Max
            ]);
            $article = EhallArticle::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'type' => $this->article_type,
                'content' => $this->content,
                'slug' => Str::slug($this->title),
                'link_youtube' => $this->link_youtube
            ]);

            Storage::disk('public')->makeDirectory('ehall');

            if ($this->logo) {
                $name = date('YmdHis') . '_LOGO_' . $this->title . '.' . $this->logo->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->logo)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->logo->getClientOriginalExtension());

                Storage::disk('public')
                    ->put(
                        'ehall/' . $name,
                        $resized_image->__toString()
                    );

                $article->update([
                    'logo_image_path' => 'ehall/' . $name
                ]);
            }
            if ($this->title_image) {
                $name = date('YmdHis') . '_TITLE_' . $this->title . '.' . $this->title_image->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->title_image)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->title_image->getClientOriginalExtension());

                Storage::disk('public')
                    ->put(
                        'ehall/' . $name,
                        $resized_image->__toString()
                    );

                $article->update([
                    'title_image_path' => 'ehall/' . $name
                ]);
            }

            foreach ($this->images as $key => $image) {
                $name = date('YmdHis') . '_GALERY_' . $this->title . '_' . $key . '.' . $image->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($image)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($image->getClientOriginalExtension());

                Storage::disk('public')
                    ->put(
                        'ehall/' . $name,
                        $resized_image->__toString()
                    );

                EhallArticleImage::create([
                    'article_id' => $article->id,
                    'image_path' => 'ehall/' . $name
                ]);
            }
        } elseif ($this->modal_type == 'edit') {
            if ($this->isImageChange) {
                $this->validate([
                    'images.*' => 'image|max:2048', // 1MB Max
                ]);
            }

            $this->artikel->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'type' => $this->article_type,
                'content' => $this->content,
                'slug' => Str::slug($this->title),
                'link_youtube' => $this->link_youtube
            ]);

            if ($this->logo) {
                $name = date('YmdHis') . '_LOGO_' . $this->title . '.' . $this->logo->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->logo)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->logo->getClientOriginalExtension());

                Storage::disk('public')
                    ->put(
                        'ehall/' . $name,
                        $resized_image->__toString()
                    );

                $this->artikel->update([
                    'logo_image_path' => 'ehall/' . $name
                ]);
            }

            if ($this->title_image) {
                $name = date('YmdHis') . '_TITLE_' . $this->title . '.' . $this->title_image->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->title_image)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->title_image->getClientOriginalExtension());

                Storage::disk('public')
                    ->put(
                        'ehall/' . $name,
                        $resized_image->__toString()
                    );

                $this->artikel->update([
                    'title_image_path' => 'ehall/' . $name
                ]);
            }

            if ($this->isImageChange) {

                foreach ($this->images as $key => $image) {
                    $name = date('YmdHis') . '_GALERY_' . $this->title . '_' . $key . '.' . $image->getClientOriginalExtension();
                    $resized_image = (new ImageManager())
                        ->make($image)
                        ->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->encode($image->getClientOriginalExtension());

                    Storage::disk('public')
                        ->put(
                            'ehall/' . $name,
                            $resized_image->__toString()
                        );

                    EhallArticleImage::create([
                        'article_id' => $this->artikel->id,
                        'image_path' => 'ehall/' . $name
                    ]);
                }
            }
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function deleteImage()
    {
        if ($this->modal_type == 'edit') {
            foreach ($this->artikel->galery as $key => $g) {
                $g->delete();
            }
        }

        $this->isImageChange = true;
        $this->images = [];
    }


    public function render()
    {
        return view('livewire.pages.icon.ehall.admin.article.components.modal-add-edit');
    }
}
