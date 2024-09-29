<?php

namespace Database\Seeders;

use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image'=>'images/global/logo1.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo2.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo3.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo4.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo5.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo6.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo7.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo8.png',
                'show_in_home'=> 1,
            ],
            [
                'image'=>'images/global/logo9.png',
                'show_in_home'=> 1,
            ],

        ];
        foreach ($data as $d){

            $goal = new Partner();
            $goal->image = $d['image'];
            $goal->show_in_home = $d['show_in_home'];
            $goal->save();


        }
    }
}
