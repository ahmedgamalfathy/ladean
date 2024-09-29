<?php

namespace Database\Seeders;

use App\Models\Ourgoal;
use App\Models\OurgoalTranslation;
use App\Models\Product;
use App\Models\ProductTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product1.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product2.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product3.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product4.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product5.png',
                'show_in_home'=> 1,
            ],    [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product1.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product2.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product3.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product4.png',
                'show_in_home'=> 1,
            ],
            [
                'name'=>[
                    'ar'=>'منتج تجريبي',
                    'en' => 'Product Test'
                ],
                'content'=>[
                    'ar'=>'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'sed libero enim sed faucibus turpis in eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat sed cras ornare arcu dui vivamus arcu felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices gravida dictum'
                ],
                'image'=>'images/global/product5.png',
                'show_in_home'=> 1,
            ],


        ];
        foreach ($data as $d){

            $product = new Product();
            $product->image = $d['image'];
            $product->show_in_home = $d['show_in_home'];
            $product->save();
            ProductTranslation::create([
                'name'=>$d['name']['ar'],
                'content'=>$d['content']['ar'],
                'locale'=>'ar',
                'product_id'=>$product->id,
            ]);
            ProductTranslation::create([
                'name'=>$d['name']['en'],
                'content'=>$d['content']['en'],
                'locale'=>'en',
                'product_id'=>$product->id,
            ]);

        }
    }
}
