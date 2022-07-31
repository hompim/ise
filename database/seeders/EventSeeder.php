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
                'title' => 'BIONIX Student Level 2022',
                'description' => 'Olimpiade bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat.BIONIX Student Level dilaksanakan melalui empat tahapan kompetisi',
                'start_date' => '2022-07-16',
                'end_date' => '2022-09-25',
                'regis_link' => 'register-student',
                'landing_link' =>'bionix',
                'event_type' => 'SMA',
            ],
            [
                'title' => 'IS Class ISE! 2022',
                'description' => 'Simulasi perkuliahan yang memberikan kamu, para siswa/i SMA/SMK/sederajat, pengalaman menjadi seorang mahasiswa Sistem Informasi ITS. Dapatkan informasi seputar keilmuan dan keprofesian, serta rasakan langsung dunia perkuliahan bersama dosen-dosen terbaik di bidangnya.',
                'start_date' => null,
                'end_date' => null,
                'regis_link' => 'register-is-class',
                'landing_link' =>null,
                'event_type' => 'SMA',
            ],
            [
                'title' => 'Data Science Academy ISE! 2022',
                'description' => 'desc',
                'start_date' => '2022-08-01',
                'end_date' => null,
                'regis_link' => 'register-data-science-academy',
                'landing_link' =>null,
                'event_type' => 'Mahasiswa',
            ],
            [
                'title' => 'Startup Academy ISE! 2022',
                'description' => 'desc',
                'start_date' => '2022-08-01',
                'end_date' => null,
                'regis_link' => 'register-startup-academy',
                'landing_link' =>null,
                'event_type' => 'Mahasiswa',
            ]
            ]);
    }
}
