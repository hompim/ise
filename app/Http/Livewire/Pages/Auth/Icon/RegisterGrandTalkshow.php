<?php

namespace App\Http\Livewire\Pages\Auth\Icon;

use App\Models\Icon\IconGrandTalkshow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterGrandTalkshow extends Component
{

    use WithFileUploads;

    public $name,
        $instagram_story,
        $whatsapp,
        $info_source,
        $agree,
        $errorMessage;

    public function akunSubmit()
    {
        if (Auth::user()->userable->talkshow) {
            $this->errorMessage = 'Anda sudah mendaftar Grand Talkshow ISE! 2022';
            return;
        }

        $this->validate([
            'name' => 'required',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'instagram_story' => 'required|image|max:2048',
            'info_source' => 'required',
        ]);

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        Storage::disk('public')->makeDirectory('instagram_story_talkshow');
        $name = date('YmdHis') . '_TALKSHOW_' . $this->name . '.' . $this->instagram_story->getClientOriginalExtension();
        $instagram_story_path = 'instagram_story_talkshow/' . $name;
        $resized_image = (new ImageManager())
            ->make($this->instagram_story)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->instagram_story->getClientOriginalExtension());

        Storage::disk('public')
            ->put(
                $instagram_story_path,
                $resized_image->__toString()
            );

        Auth::user()->update([
            'name' => $this->name,
            'whatsapp' => $this->whatsapp
        ]);


        IconGrandTalkshow::create([
            'member_id' => Auth::user()->userable->id,
            'info_source' => $this->info_source,
            'instagram_story_path' => $instagram_story_path,
        ]);

        // Mail::to(Auth::user()->email)->send(new WebinarKickOffMail);
        // Mail::to(Auth::user()->email)->send(new WebinarKickOffAcaraMail);
        return redirect(route('talkshow.register-success'));
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->info_source = 'Media Sosial ISE! 2022';
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.auth.icon.register-grand-talkshow')->layout('layouts.auth-bionix');
    }
}
