<?php

namespace App\Http\Controllers\Backend;

use App\Actions\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Setting;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index(){
        $options = Option::all();
        return view("admin.options.index" , [
            'options' => $options
        ]);
    }

    public function store(Request $request){



        $data = [
            "show_our_goals " => $request->show_our_goals || 0 ,
            "show_products" => $request->show_products || 0  ,
            "show_testimonials" => $request->show_testimonials || 0  ,
            "show_partners" => $request->show_partners || 0 ,
            'show_faq' => $request->show_faq || 0
        ];



        foreach ($data as $key=>$value){
            $option = Option::where('key',$key)->first();

            $option->show_in_home = $value;

            $option->save();
        }//end foreach


        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();

}
}
