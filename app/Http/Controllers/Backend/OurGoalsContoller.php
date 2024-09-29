<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ourgoal;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class OurGoalsContoller extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourgoals = Ourgoal::all();
        return view("admin.our-goals.index" , compact('ourgoals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.our-goals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


//        $request->validate([
//            'name' => ['required' ] ,
//            'content'=> ['required'],
//            'image' => ['image' , 'required' , 'max:2000'],
//            'show_in_home' => ['required']
//        ]);

        $imagePath = $this->uploadImage($request , "image" , "uploads");

        $our_goal = Ourgoal::create([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => $imagePath
        ]);


        $our_goal->storeTranslations($request);



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
        $ourgoal = Ourgoal::findOrFail($id);
        return view ('admin.our-goals.edit' , compact('ourgoal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $our_goal = Ourgoal::findOrFail($id);

//        $request->validate([
//            'name' => ['required' , 'string'] ,
//            'content'=> ['required' , 'string'],
//            'image' => ['image' , 'nullable' , 'max:2000'],
//            'show_in_home' => ['required']
//        ]);


        $imagePath = $this->updateImage($request , "image" , "uploads" , $our_goal->image);

        $our_goal->update([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => empty(!$imagePath) ? $imagePath : $our_goal->image
        ]);

        $request['show_in_home'] = (isset($request['show_in_home']))?$request['show_in_home']:0;


        $our_goal->storeTranslations($request);


        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ourgoal = Ourgoal::findOrFail($id);
        $this->deleteImage($ourgoal->image);
        $ourgoal->delete();
        return redirect()->back();
    }
}
