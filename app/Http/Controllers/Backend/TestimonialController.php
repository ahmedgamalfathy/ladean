<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use App\Models\Product;
use App\Models\Testimonial;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    use ImageUploadTrait;

    public function index()
    {
        $testimonials = Testimonial::all();
        return view("admin.testimonials.index", compact('testimonials'));
    }

    public function create(){

        return view("admin.testimonials.create" );

    }

    public function store(Request $request){

        $imagePath = $this->uploadImage($request , "image" , "uploads");

        $testimonial = Testimonial::create([
            "rate" => $request->rate ,
            "image" => $imagePath ,
            "show_in_home" => $request->show_in_home || 0 ,
        ]);

        $testimonial->storeTranslations($request);

        toastr()->success(trans("words.added_successfully"));

        return redirect()->back();
    }

    public function edit(string $id){
        $testimonial = Testimonial::findOrFail($id);
        return view ('admin.testimonials.edit' , compact('testimonial'));
    }

    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $imagePath = $this->updateImage($request , "image" , "uploads" , $testimonial->image);

        $testimonial->update([
            "show_in_home" => $request->show_in_home || 0 ,
            "rate" => $request->rate,
            "image" => empty(!$imagePath) ? $imagePath : $testimonial->image
        ]);

        $testimonial->storeTranslations($request);


        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->deleteImage($testimonial->image);
        $testimonial->delete();
        return redirect()->back();
    }



}
