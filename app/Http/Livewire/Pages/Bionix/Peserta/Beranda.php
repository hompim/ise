<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\Announcement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{
    public $announcement;

    public function mount(){
        $this->announcement = Announcement::where('start', '<=', Carbon::now())
        ->where('end', '>=', Carbon::now())
        ->where(function ($q) {
            $q->where('category', Auth::user()->userable->bionix_type == 'bionix_junior' ? 'Student' : 'College')
                ->orWhere('category', 'Both');
        })->get();
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.beranda');
    }
}
