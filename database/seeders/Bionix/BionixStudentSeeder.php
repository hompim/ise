<?php

namespace Database\Seeders\Bionix;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Member;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BionixStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = Setting::where('name','bionix_junior_price')->first()->value;
        for($x=0;$x<10;$x++){
            $city = City::inRandomOrder()->first();
            $member_junior_1 = TeamJuniorMember::create(
                [
                    'name'=>'John',
                    'class'=>'10',
                    'whatsapp'=>'12345678',
                    'email'=>'leader_junior_'.$x.'@gmail.com',
                    'instagram_path' => 'bionix/instagram_testing.jpg',
                    'identity_card_path' =>'bionix/identity_testing.jpg',
                    'twibbon_path' =>'bionix/twibbon_testing.jpg'
                ]
            );
            $member_junior_2 = TeamJuniorMember::create(
                [
                    'name'=>'Doe',
                    'class'=>'12',
                    'whatsapp'=>'12345678',
                    'email'=>'doe_'.$x.'@gmail.com',
                    'instagram_path' => 'bionix/instagram_testing.jpg',
                    'identity_card_path' =>'bionix/identity_testing.jpg',
                    'twibbon_path' =>'bionix/twibbon_testing.jpg'
                ]
            );
            $team_data = TeamJuniorData::create(
                [
                    'team_name'=>'Team '.$x,
                    'info_source'=>'Media Sosial ISE! 2021',
                    'school_name'=>'SMA Tadika Mesra',
                    'city_id'=>$city->id,
                    'payment_price'=>$price,
                    'leader_id'=>$member_junior_1->id,
                    'member_id'=>$member_junior_2->id
                ]
            );
            $member_data = Member::create([
                'jenjang'=>'SMA',
                'bionix_id'=>$team_data->id,
                'bionix_type'=>'App\Models\Bionix\TeamJuniorData',
            ]);
            User::create(
                [
                    'name'=>$member_junior_1->name,
                    'email'=>$member_junior_1->email,
                    'password'=>Hash::make('password'),
                    'userable_id'=>$member_data->id,
                    'userable_type'=>'App\Models\Member',
                    'email_verified_at'=>Carbon::now()
                ]
            );
        }
    }
}
