<?php

namespace App\Http\Livewire\Pages\DashboardGeneral;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChooseDashboard extends Component
{
    public $events;

    public function mount()
    {

        $this->events = Auth::user()->userable->jenjang == 'SMA' ? Event::where('event_type', 'SMA')->orWhere('event_type', 'All')->get() :
                        (Auth::user()->userable->jenjang == 'Mahasiswa' ? Event::where('event_type', 'Mahasiswa')->orWhere('event_type', 'All')->get() :
                        (Auth::user()->userable->jenjang == 'Umum' ? Event::where('event_type', 'Umum')->orWhere('event_type', 'All')->get() :
                        null));

    }

    public function render()
    {
        return view('livewire.pages.dashboard-general.choose-dashboard')->layout('layouts.dashboard');
    }
}
