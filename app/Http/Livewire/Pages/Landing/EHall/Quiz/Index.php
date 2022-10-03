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
            ['Prestasi' ,[
                [9, 'MyBaby'],
                [10, 'Elang System - Juara 2 Kota Cerdas  GEMASTIK 13v'],
                [11, '2nd Gemastik Smart City'],
                [12, '2nd Coding Competition'],
                [13, 'Cyber Security SpiderLabs'],
                    [14, 'Most Outstanding Delegates MUN 2021'],
                    [15, '3rd Runner Up KMI'],
                    [16, '3rd Mile Zero project'],
                ]],
            ];
    }
}
