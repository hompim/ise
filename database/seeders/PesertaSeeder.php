<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $member1 = Member::create([
            'jenjang' => 'Mahasiswa'
        ]);

        $member2 = Member::create([
            'jenjang' => 'SMA'
        ]);

        User::insert(
          [
            [
                'name' => 'Peserta1',
                'password' => Hash::make('password'),
                'email' => 'peserta1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'userable_type' => 'App\Models\Member',
                'userable_id' => $member1->id
            ],
            [
                'name' => 'Peserta2',
                'password' => Hash::make('password'),
                'email' => 'peserta2@gmail.com',
                'email_verified_at' => Carbon::now(),
                'userable_type' => 'App\Models\Member',
                'userable_id' => $member2->id
            ],

          ]
            );
    }
}
