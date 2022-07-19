<?php

namespace Database\Seeders\Bionix;

use App\Models\Bionix\BionixSchool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BionixSchool::insert(
        [
            [
                'school_name' => 'SMAN 1 Maospati',
                'start_dp' => '2022-07-20',
                'end_dp' => '2022-07-21'
            ]
        ]);
    }
}
