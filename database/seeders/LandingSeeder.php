<?php

namespace Database\Seeders;

use App\Models\Landing;
use App\Models\LandingTranslation;
use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locales = config('translatable.locales');
        $data = [
            [
                'name'=>[
                    'ar'=>'مصنع لدائن للتميز للبلاستييك',
                    'en' => 'Ladaen Factory for Plastic'
                ],
                'content'=>[
                    'ar'=>'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ .',
                    'en' => 'To provide our customers with highly professional plastic products through national human cadres in a healthy work environment that encourages creativity, innovation and safety.'
                ],
                'image'=>'images/global/slider.png',
                'link1'=> 'https://www.youtube.com/watch?v=Bkoswines34',
                'link2'=>'https://www.youtube.com/watch?v=Bkoswines34'
            ],

        ];
        foreach ($data as $d){

            $landing = new Landing();
            $landing->image = $d['image'];
            $landing->link1 = $d['link1'];
            $landing->link2 = $d['link2'];
            $landing->save();
            LandingTranslation::create([
                'name'=>$d['name']['ar'],
                'content'=>$d['content']['ar'],
                'locale'=>'ar',
                'landing_id'=>$landing->id,
            ]);
            LandingTranslation::create([
                'name'=>$d['name']['en'],
                'content'=>$d['content']['en'],
                'locale'=>'en',
                'landing_id'=>$landing->id,
            ]);

        }
    }
}
