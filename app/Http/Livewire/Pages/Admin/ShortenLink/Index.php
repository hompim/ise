<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.shorten-link.index')->layout('layouts.dashboard');
    }

    public static function modalMaxWidth(): string
{
    return 'xl';
}
}
