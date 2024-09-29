<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $locales = config('translatable.locales');

        $settings = [

            [
                'display_name' => 'اسم الموقع',
                'key' => 'website_title',
                'tabs' => 'website_data' ,
                'type' => 'text',
                'values' => [
                    'ar' => 'لدائن',
                    'en' => 'ladaen'
                ]
            ],
            [
                'display_name' => 'وصف الموقع',
                'key' => 'meta_description',
                'type' => 'textarea',
                'tabs' => 'website_data' ,
                'values' => [
                    'ar' => ' كل ما تحتاجه لتبدع بتعبئة وتغليف منتجاتك! نحن مختصين بكل ما يتعلق بالتعبئة والتغليف والتجهيز بمختلف المجالات بالشكل الذي يناسب طموحك ورؤيتك كرائد/ة أعمال',
                    'en' => 'Everything you need to get creative with packaging your products! We specialize in everything related to the packaging, preparation and response of medicines that suit your ambition and vision as a business'
                ]
            ],
            [
                'display_name' => 'العنوان',
                'key' => 'website_address',
                'tabs' => 'website_data' ,
                'type' => 'input',
                'values' => [
                    'ar' => 'المملكة العربية السعودية',
                    'en' => 'المملكة العربية السعودية'
                ]
            ],
            [
                'display_name' => 'خريطة الموقع',
                'key' => 'website_map',
                'tabs' => 'website_data' ,
                'type' => 'textarea',
                'values' => [
                    'ar' => ' <iframe
                                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3572.312127850818!2d50.039429!3d26.445666!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDI2JzQ0LjYiTiA1MMKwMDInMjQuOSJF!5e0!3m2!1sen!2sus!4v1707333835876!5m2!1sen!2sus"
                                width="400"
                                height="300"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>',
                    'en' => ' <iframe
                                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3572.312127850818!2d50.039429!3d26.445666!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDI2JzQ0LjYiTiA1MMKwMDInMjQuOSJF!5e0!3m2!1sen!2sus!4v1707333835876!5m2!1sen!2sus"
                                width="400"
                                height="300"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>'
                ]
            ],
            [
                'display_name' => 'لوجو الموقع',
                'key' => 'website_logo',
                'type' => 'file',
                'tabs' => 'website_data' ,
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],
            [
                'display_name' => 'لوجو الموقع المظلم',
                'key' => 'website_logo_dark',
                'tabs' => 'website_data' ,
                'type' => 'file',
                'values' => [
                    'ar' => 'images/global/لوجو.png',
                    'en' => 'images/global/لوجو.png'
                ]
            ],
            [
                'display_name' => 'الايقونة المفضلة',
                'key' => 'favicon',
                'type' => 'file',
                'tabs' => 'website_data' ,
                'values' => [
                    'ar' => 'website/imgs/favicon.png',
                    'en' => 'website/imgs/favicon.png'
                ]
            ],

            [
                'display_name' => 'من نحن',
                'key' => 'about_us',
                'tabs' => 'website_pages' ,
                'type' => 'textarea',
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],
            [
                'display_name' => 'غلاف من نحن',
                'key' => 'about_us_image',
                'tabs' => 'website_pages' ,
                'type' => 'file',
                'values' => [
                    'ar' => 'لدائن',
                    'en' => 'ladaen'
                ]
            ],
            [
                'display_name' => 'الشروط والاحكام',
                'key' => 'terms_and_conditions',
                'tabs' => 'website_pages' ,

                'type' => 'textarea',
                'values' => [
                    'ar' => 'نص تجريبى للشروط و الاحكام',
                    'en' => 'نص تجريبى للشروط و الاحكام'
                ]
            ],
            [
                'display_name' => 'غلاف الشروط والاحكام',
                'key' => 'terms_and_conditions_image',
                'tabs' => 'website_pages' ,

                'type' => 'file',
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],
            [
                'display_name' => 'سياسة الخصوصية',
                'key' => 'privacy_policy',
                'tabs' => 'website_pages' ,
                'type' => 'textarea',
                'values' => [
                    'ar' => 'سياسة الخصوصية',
                    'en' => 'privacy_policy'
                ]
            ],
            [
                'display_name' => 'غلاف سياسة الخصوصية',
                'key' => 'privacy_policy_image',
                'tabs' => 'website_pages' ,
                'type' => 'file',
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],

            [
                'display_name' => 'الاسئلة الشائعة',
                'key' => 'faq',
                'tabs' => 'website_pages' ,
                'type' => 'textarea',
                'values' => [
                    'ar' => 'الاسئلة الشائعة',
                    'en' => 'faq'
                ]
            ],
            [
                'display_name' => 'غلاف الاسئلة الشائعة ',
                'key' => 'faq_image',
                'tabs' => 'website_pages' ,
                'type' => 'file',
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],
            [
                'display_name' => 'سياسة الاستبدال والاسترجاع',
                'key' => 'replacement_and_refund_policy',
                'type' => 'textarea',
                'tabs' => 'website_pages' ,
                'values' => [
                    'ar' => 'سياسة الاستبدال والاسترجاع',
                    'en' => 'replacement_and_refund_policy'
                ]
            ],

            [
                'display_name' => 'غلاف سياسة الاستبدال والاسترجاع',
                'key' => 'replacement_and_refund_policy_image',
                'type' => 'file',
                'tabs' => 'website_pages' ,
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],


            [
                'display_name' => 'تواصل معنا',
                'key' => 'contact-us',
                'type' => 'textarea',
                'tabs' => 'website_pages' ,
                'values' => [
                    'ar' => 'تواصل معنا',
                    'en' => 'Contact Us'
                ]
            ],
            [
                'display_name' => 'غلاف تواصل معنا',
                'key' => 'contact-us_image',
                'type' => 'file',
                'tabs' => 'website_pages' ,
                'values' => [
                    'ar' => 'images/global/logo.png',
                    'en' => 'images/global/logo.png'
                ]
            ],



            [
                'display_name' => 'رقم الهاتف',
                'key' => 'website_phone',
                'tabs' => 'technical_support' ,
                'type' => 'input',
                'values' => [
                    'ar' => '0568188007',
                    'en' => '0568188007'
                ]
            ],
            [
                'display_name' => 'رقم الواتس',
                'key' => 'whatsapp_phone',
                'tabs' => 'technical_support' ,
                'type' => 'input',
                'values' => [
                    'ar' => '0568188007',
                    'en' => '0568188007'
                ]
            ],
            [
                'display_name' => 'الايميل',
                'key' => 'email',
                'tabs' => 'technical_support' ,
                'type' => 'input',
                'values' => [
                    'ar' => 'Info@plexcellence.com.sa',
                    'en' => 'Info@plexcellence.com.sa'
                ]
            ],
            [
                'display_name' => 'انستجرام',
                'key' => 'instagram',
                'type' => 'url',
                'tabs' => 'social' ,
                'values' => [
                    'ar' => 'https://www.instagram.com/',
                    'en' => 'https://www.instagram.com/'
                ]
            ],
            [
                'display_name' => 'فيسبوك',
                'key' => 'facebook',
                'type' => 'url',
                'tabs' => 'social' ,
                'values' => [
                    'ar' => 'https://www.instagram.com/',
                    'en' => 'https://www.instagram.com/'
                ]
            ],

            [
                'display_name' => 'تويتر',
                'key' => 'twitter',
                'type' => 'url',
                'tabs' => 'social' ,
                'values' => [
                    'ar' => 'https://www.instagram.com/',
                    'en' => 'https://www.instagram.com/'
                ]
            ],
            [
                'display_name' => 'تويتر',
                'key' => 'snapchat',
                'type' => 'url',
                'tabs' => 'social' ,
                'values' => [
                    'ar' => 'https://www.snapchat.com/',
                    'en' => 'https://www.snapchat.com/'
                ]
            ],
            [
                'display_name' => 'يوتيوب',
                'key' => 'youtube',
                'type' => 'url',
                'tabs' => 'social' ,
                'values' => [
                    'ar' => 'https://www.youtube.com/',
                    'en' => 'https://www.youtube.com/'
                ]
            ],
            [
                'display_name' => 'تواصل معنا رئيسي',
                'key' => 'primary_header_contact',
                'type' => 'url',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'تواصل معنا الان',
                    'en' => 'Contact us now'
                ]
            ],
            [
                'display_name' => 'تواصل معنا فرعي',
                'key' => 'secondary_header_contact',
                'type' => 'url',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'تواصل معنا',
                    'en' => 'Contact us'
                ]
            ],
//            [
//                'display_name' => 'تواصل معنا براجراف',
//                'key' => 'paragraph_header_contact',
//                'type' => 'textarea',
//                'tabs' => 'header' ,
//                'values' => [
//                    'ar' => '',
//                    'en' => ''
//                ]
//            ],




            [
                'display_name' => 'العنوان الاساسي للمنتجات',
                'key' => 'primary_header_products',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'المنتجات المتوفرة',
                    'en' => 'Available products'
                ]
            ],
            [
                'display_name' => 'العنوان الفرعي للمنتجات',
                'key' => 'secondary_header_products',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'المنتجات',
                    'en' => 'products'
                ]
            ],
            [
                'display_name' => 'المنتجات براجراف',
                'key' => 'paragraph_header_products',
                'type' => 'textarea',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'We mainly focus on selling Shopping Bags, Continuous Laundry Rolls and Garbage Bags category, therefore, we provide Shopping Bags, Continuous Laundry Rolls.'
                ]
            ],





            [
                'display_name' => 'العنوان الاساسي لشركاؤنا',
                'key' => 'primary_header_partners',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'شركاء النجاح',
                    'en' => 'Partners'
                ]
            ],
            [
                'display_name' => 'العنوان الفرعي لشركاؤنا',
                'key' => 'secondary_header_partners',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'شركاؤنا',
                    'en' => 'partners'
                ]
            ],
            [
                'display_name' => 'شركاؤنا براجراف',
                'key' => 'paragraph_header_partners',
                'type' => 'textarea',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'We mainly focus on selling Shopping Bags, Continuous Laundry Rolls and Garbage Bags category, therefore, we provide Shopping Bags, Continuous Laundry Rolls.'
                ]
            ],




            [
                'display_name' => 'العنوان الاساسي لعملاؤنا',
                'key' => 'primary_header_testimonials',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'عملاؤنا ',
                    'en' => 'clients'
                ]
            ],
            [
                'display_name' => 'العنوان الفرعي لعملاؤنا',
                'key' => 'secondary_header_testimonials',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'عملاؤنا',
                    'en' => 'our clients'
                ]
            ],
            [
                'display_name' => 'عملاؤنا براجراف',
                'key' => 'paragraph_header_testimonials',
                'type' => 'textarea',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'We mainly focus on selling Shopping Bags, Continuous Laundry Rolls and Garbage Bags category, therefore, we provide Shopping Bags, Continuous Laundry Rolls.'
                ]
            ],


            [
                'display_name' => 'العنوان الاساسي للاسئلة الشائعة',
                'key' => 'primary_header_faq',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'اسئلة عامة ',
                    'en' => 'General Questions'
                ]
            ],
            [
                'display_name' => 'العنوان الفرعي للاسئلة الشائعة',
                'key' => 'secondary_header_faq',
                'type' => 'input',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'الاسئلة الشائعة',
                    'en' => 'FAQ'
                ]
            ],
            [
                'display_name' => 'الاسئلة الشائعة براجراف',
                'key' => 'paragraph_header_faq',
                'type' => 'textarea',
                'tabs' => 'header' ,
                'values' => [
                    'ar' => 'نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل المستمر .',
                    'en' => 'We mainly focus on selling Shopping Bags, Continuous Laundry Rolls and Garbage Bags category, therefore, we provide Shopping Bags, Continuous Laundry Rolls.'
                ]
            ],

        ];


        foreach ($settings as $se) {
            $setting = Setting::where('key', $se['key'])->first();
            if ($setting) {
                //update
            } else {
                //create
                $setting = new Setting();

            }
            $setting->display_name = $se['display_name'];
            $setting->key = $se['key'];

            $setting->type = $se['type'];
            $setting->tabs = $se['tabs'];
            $setting->save();
            foreach ($locales as $locale) {
                $setting->translateOrNew($locale)->value = $se['values'][$locale];
            }
            $setting->save();
        }
    }
}
