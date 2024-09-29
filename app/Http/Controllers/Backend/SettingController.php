<?php

namespace App\Http\Controllers\Backend;

use App\Actions\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function index(){
        $settings = Setting::all();
        return view('admin.settings.index',['settings'=>$settings]);
    }

    public function store(Request $request)
    {

        $data = $request->except('_token');
        foreach ($data as $key=>$value){
            $setting = Setting::where('key',$key)->first();
            if ($setting->type == 'file'){
                $setting->value = app()->call(new UploadFile($value,'images/settings/'));
            }else{
                $setting->value = $value;
            }
            $setting->save();
        }//end foreach
        toastr()->success(trans("words.edit_successfully"));
        return redirect()->back();
    }
}
