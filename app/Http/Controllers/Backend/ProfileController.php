<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public  function index(){
        return view('admin.profile.index');
    }

    public  function updateProfile(Request $request){



        $request->validate([
            "name" => ['required' , 'max:100'] ,
            "email" => ['required' , 'email' , 'unique:users,email,' . Auth::user()->id ] ,
            "image" => ['image' , 'max:2048']
        ]);

        $user = Auth::user();

        if($request->hasFile('image')){

            if(File::exists(public_path($user->image) )){
                File::delete(public_path($user->image));
            }

//             Upload File
            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move( public_path('uploads') , $imageName);


            $user->image = "/uploads/" .  $imageName ;

        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


//        Session::flash('message', trans('words.saved_successfully'));

        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }


    public  function  updatePassword(Request $request){





        $request->validate([
            "currentPassword" => ['required' , 'current_password'] ,
            "password"=> ['required' , "confirmed", "min:8"]
        ]);



        $request->user()->update([
           "password" => bcrypt($request->password)
        ]);

        toastr()->success(trans("words.edit_successfully"));
        return redirect()->back();
    }
}
