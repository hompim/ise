<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = Admin::create([
            'admin_type' => 'Bionix Admin'
        ]);

        $admin2 = Admin::create([
            'admin_type' => 'Icon Admin'
        ]);

        User::insert(
            [
                [
                    'name' => 'Admin Bionix',
                    'email' => 'Bionix.Admin@ise-its.com',
                    'password' => Hash::make('password'),
                    'userable_id' => $admin1->id,
                    'userable_type' => 'App\Models\Admin',
                    'email_verified_at' => Carbon::now()
                ],
                [
                    'name' => 'Admin Icon',
                    'email' => 'Icon.Admin@ise-its.com',
                    'password' => Hash::make('password'),
                    'userable_id' => $admin2->id,
                    'userable_type' => 'App\Models\Admin',
                    'email_verified_at' => Carbon::now()
                ],
            ]
        );
    }
}
