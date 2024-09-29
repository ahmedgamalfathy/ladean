<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'key' => 'show_our_goals',
                'show_in_home'=> 1,
            ],
            [
                'key' => 'show_products',
                'show_in_home'=> 1,
            ],
            [
                'key' => 'show_testimonials',
                'show_in_home'=> 0,
            ],
            [
                'key' => 'show_partners',
                'show_in_home'=> 1,
            ],[
                'key' => 'show_faq',
                'show_in_home'=> 1,
            ],


        ];

        foreach ($data as $d){

            $option = new Option();
            $option->key = $d['key'];
            $option->show_in_home = $d['show_in_home'];
            $option->save();

        }
    }
}
