<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Submission;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.pages.bionix.admin.submission.index')->layout('layouts.dashboard');
    }
}
