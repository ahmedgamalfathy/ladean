<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqTranslation;
use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locales = config('translatable.locales');
        $data = [
            [
                'question'=>[
                    'ar'=>'ما هو هدفنا؟',
                    'en' => 'What is Our Goal?'
                ],
                'answer'=>[
                    'ar'=>'لذلك ، هدفنا الرئيسي هو تزويدك بمحتوى أصلي وآمن بنسبة 100٪ يوفر لك تجربة رائعة وأفضل على شبكة الإنترنت العالمية. نحن نركز بشكل أساسي على خدمتنا وتحسينها بانتظام لتوفير تجربة مستخدم أفضل لجميع المستخدمين. في الأساس',
                    'en' => 'There are millions of websites created every day, also, there is much fake content spread on the internet.'
                ],
                'show_in_home'=> 1,
            ],
            [
                'question'=>[
                    'ar'=>'ما هي خدمتنا؟',
                    'en' => 'What is our Service?'
                ],
                'answer'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر',
                    'en' => 'We are mainly focused on selling Shopping Bags, Laundry Continous Roll, Trash Bags category so, we provide Shopping Bags, Laundry Continous Roll'
                ],
                'show_in_home'=> 1,
            ],
            [
                'question'=>[
                    'ar'=>'ما هو موقعنا',
                    'en' => 'What is our Location?'
                ],
                'answer'=>[
                    'ar'=>'المملكة العربية السعودية',
                    'en' => 'Saudi Arabia'
                ],
                'show_in_home'=> 1,
            ],

        ];
        foreach ($data as $d){

            $faq = new Faq();
            $faq->show_in_home = $d['show_in_home'];
            $faq->save();
            FaqTranslation::create([
                'question'=>$d['question']['ar'],
                'answer'=>$d['answer']['ar'],
                'locale'=>'ar',
                'faq_id'=>$faq->id,
            ]);
            FaqTranslation::create([
                'question'=>$d['question']['en'],
                'answer'=>$d['answer']['en'],
                'locale'=>'en',
                'faq_id'=>$faq->id,
            ]);

        }
    }
}
