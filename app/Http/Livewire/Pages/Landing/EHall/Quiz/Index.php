<?php

namespace App\Http\Livewire\Pages\Landing\EHall\Quiz;

use App\Models\Icon\EhallQuestType;
use Livewire\Component;

class Index extends Component
{
    public $type_quiz;

    public function render()
    {
        return view('livewire.pages.landing.e-hall.quiz.index')->layout('layouts.landing');
    }

    public function mount()
    {
        $this->types = [
            ['Trivia', [
                [1, 'Wawasan IT'],
                [2, 'Seputar ISE'],
                [3, 'Seputar Sistem Informasi'],
                [4, 'Technical IT'],
            ]],
            ['Startup', [
                [5, 'Drafta'],
                [6, 'Stratek'],
                [7, 'Data.Ekspor'],
                [8, 'Lokapin'],
            ]],
            ['Prestasi', [
                [9, 'MyBaby'],
                [10, 'Sensible - Elang System - Juara 2 Kota Cerdas  GEMASTIK 13'],
                [11, 'Sensible - Juara 3 GEMASTIK XIV Cabang Bisnis TIK'],
                [12, 'Juara 2 CODING COMPETITION 3.0'],
                [13, '1st Spiderlabs CTF'],
                [14, 'Most Outstanding Delegates MUN 2021'],
                [15, '3rd Runner Up Kewirausahaan Mahasiswa Indonesia'],
                [16, 'Swakarya - Juara 3 Mile Zero Competition'],
                [18, 'Elang System - Juara 2 Kota Cerdas  GEMASTIK 13'],
            ]],
        ];
    }
}
