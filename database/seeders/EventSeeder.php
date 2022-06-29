<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'title' => 'Webinar Kick Off ISE! 2022',
                'description' => 'Occaecat et magna consequat duis exercitation.',
                'start_date' => '2021-10-11',
                'end_date' => '2022-11-06',
                'regis_link' => 'register-webinar',
                'landing_link' => null,
                'event_type' => 'All',
            ],
            [
                'title' => 'BIONIX Student Level 2022',
                'description' => 'Olimpiade bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat.BIONIX Student Level dilaksanakan melalui empat tahapan kompetisi dengan konsep acara daring penuh.',
                'start_date' => '2021-07-03',
                'end_date' => '2022-09-25',
                'regis_link' => 'register-student',
                'landing_link' =>'bionix',
                'event_type' => 'SMA',
            ]
            ]);
    }
}