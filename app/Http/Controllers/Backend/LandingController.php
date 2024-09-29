<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landing = Landing::get()->first();
        return view("admin.landing.index" , compact("landing"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $landing = Landing::get()->first();

        if ($landing != null){
            $imagePath = $this->updateImage($request , "image" , "uploads" , $landing->image);

            $landing->update([
                "image" => empty(!$imagePath) ? $imagePath : $landing->image ,
                "link1" => $request->link1,
//                "link2" =>$request->link2
            ]);
            $landing->storeTranslations($request);
            toastr()->success(trans("words.edit_successfully"));
        }else{
            $imagePath = $this->uploadImage($request , "image" , "uploads");
            $landing = Landing::create([
                "image" => $imagePath ,
                "link1" => $request->link1 ,
//                "link2" => $request->link2
            ]);

            $landing->storeTranslations($request);
            toastr()->success(trans("words.added_successfully"));
        }




        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
