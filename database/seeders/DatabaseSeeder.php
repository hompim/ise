<?php

namespace Database\Seeders;

use App\Models\Setting;
use Database\Seeders\Bionix\BionixStudentSeeder;
use Database\Seeders\Bionix\CitiesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            EventSeeder::class,
            PesertaSeeder::class,
            CitiesSeeder::class,
            SettingSeeder::class,
            BionixStudentSeeder::class
        ]);
    }
}
