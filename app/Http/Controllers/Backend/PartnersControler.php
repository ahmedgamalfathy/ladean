<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ourgoal;
use App\Models\Partner;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class PartnersControler extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view("admin.partners.index" , compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.partners.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = $this->uploadImage($request , "image" , "uploads");

        Partner::create([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => $imagePath
        ]);



        toastr()->success(trans("words.added_successfully"));

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
        $partner = Partner::findOrFail($id);
        return view ('admin.partners.edit' , compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::findOrFail($id);

//        $request->validate([
//            'name' => ['required' , 'string'] ,
//            'content'=> ['required' , 'string'],
//            'image' => ['image' , 'nullable' , 'max:2000'],
//            'show_in_home' => ['required']
//        ]);


        $imagePath = $this->updateImage($request , "image" , "uploads" , $partner->image);

        $partner->update([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => empty(!$imagePath) ? $imagePath : $partner->image
        ]);



        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);
        $this->deleteImage($partner->image);
        $partner->delete();
        return redirect()->back();
    }
}
