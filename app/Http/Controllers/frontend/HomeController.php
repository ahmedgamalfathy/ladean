<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Landing;
use App\Models\Ourgoal;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $landing = Landing::first();
        $ourgoals = Ourgoal::all();
        $partners = Partner::all();
        $products = Product::all();
        $testimonials = Testimonial::all();
        $faqs = Faq::all();
        return view("frontend.home.home" ,
        [
            "ourgoals" => $ourgoals ,
            "partners" => $partners ,
            "products" => $products ,
            "landing" => $landing ,
            "testimonials" => $testimonials ,
            "faqs" => $faqs
        ]
        );
    }

    public function pages($slug)
    {
        $faqs = Faq::all();

        return view('frontend.home.sections.pages', [
                'text' => Setting::where('display_name', implode(' ', explode('-', $slug)))->first()->value ,
                'key' => Setting::where('display_name', implode(' ', explode('-', $slug)))->first()->key ,
                "faqs" => $faqs

            ]
        );
    }

}
