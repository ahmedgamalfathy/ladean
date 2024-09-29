<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request){
        ContactUs::create($request->all());
        toastr()->success(trans("words.added_successfully"));
        return redirect()->back();
    }
}
