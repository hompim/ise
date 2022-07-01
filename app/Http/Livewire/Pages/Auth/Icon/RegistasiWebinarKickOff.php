<?php

namespace App\Http\Livewire\Pages\Auth\Icon;

use App\Mail\WebinarKickOffMail;
use App\Models\Icon\IconWebinarKickOff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Exception\ImageException;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistasiWebinarKickOff extends Component
{

    use WithFileUploads;

    public $name,
        $instagram_story,
        $whatsapp,
        $info_source,
        $agree,
        $errorMessage;

    public function render()
    {
        return view('livewire.pages.auth.icon.registasi-webinar-kick-off')->layout('layouts.auth-bionix');
    }

    public function akunSubmit()
    {
        if (Auth::user()->userable->webinar) {
            $this->errorMessage = 'Anda sudah mendaftar Webinar Kick Off ISE! 2022';
            return;
        }
        $this->validate([
            'name' => 'required',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'instagram_story' => 'required|image|max:2048',
            'info_source' => 'required'
        ]);

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        Storage::disk('public')->makeDirectory('instagram_story_webinar');
        $name = date('YmdHis') . '_WEBINAR_' . $this->name . '.' . $this->instagram_story->getClientOriginalExtension();
        $instagram_story_path = 'instagram_story_webinar/' . $name;
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

        IconWebinarKickOff::create([
            'member_id' => Auth::user()->userable_id,
            'info_source' => $this->info_source,
            'instagram_story_path' => $instagram_story_path,
        ]);
        Mail::to(Auth::user()->email)->send(new WebinarKickOffMail);
        //return redirect()->to(route('register-success-talkshow'));
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->info_source = 'Media Sosial ISE! 2021';
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }
}
