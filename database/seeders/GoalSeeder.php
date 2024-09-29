<?php

namespace Database\Seeders;

use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
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
                    'ar'=>'رسالتنا',
                    'en' => 'Our message'
                ],
                'content'=>[
                    'ar'=>'أن نقدم لعملائنا منتجات بلاستيكية باحترافية عالية من خلال كوادر بشرية وطنية في بيئة عمل صحية تشجع علي الإبداع والابتكار والسلامة.',
                    'en' => 'To provide our customers with highly professional plastic products through national human cadres in a healthy work environment that encourages creativity, innovation and safety.'
                ],
                'image'=>'images/global/message.gif',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'رؤيتنا',
                    'en' => 'Our message'
                ],
                'content'=>[
                    'ar'=>'أن نكون الرواد في تقديم المنتجات البلاستيكية التي تفوق تطلعات العملاء من خلال بناء علامة تجارية قوية ذات سمعة إيجابية ومنتجات متميزة ومتنوعة في الأسواق المحلية والإقليمية.',
                    'en' => 'To be the pioneers in providing plastic products that exceed customer expectations by building a strong brand with a positive reputation and distinguished and diverse products in the local and regional markets.'
                ],
                'image'=>'images/global/idea.gif',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'قيامنا',
                    'en' => 'Our resurrection'
                ],
                'content'=>[
                    'ar'=>'حددت الإدارة التنفيذية رؤيتها ورسالتها انطلاقا من القيم التي وضعتها لنفسها منذ تأسيسها . هذه القيم هي : النزاهة ، رضا العملاء ، الإحترافية وصديق البيئة',
                    'en' => 'The executive management has defined its vision and mission based on the values it has set for itself since its founding. These values are: integrity, customer satisfaction, professionalism and environmental friendliness'
                ],
                'image'=>'images/global/target.gif',
                'show_in_home'=> 1,
            ],
            ];
        foreach ($data as $d){

            $goal = new Ourgoal();
            $goal->image = $d['image'];
            $goal->show_in_home = $d['show_in_home'];
            $goal->save();
            OurgoalTranslation::create([
                'name'=>$d['name']['ar'],
                'content'=>$d['content']['ar'],
                'locale'=>'ar',
                'ourgoal_id'=>$goal->id,
            ]);
            OurgoalTranslation::create([
                'name'=>$d['name']['en'],
                'content'=>$d['content']['en'],
                'locale'=>'en',
                'ourgoal_id'=>$goal->id,
            ]);

        }
    }
}
