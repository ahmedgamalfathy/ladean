<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    use ImageUploadTrait;

    public function index()
    {
        $products = Product::all();
        return view("admin.products.index" , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $imagePath = $this->uploadImage($request , "image" , "uploads");


        $product = Product::create([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => $imagePath
        ]);



        $product->storeTranslations($request);


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
        $product = Product::findOrFail($id);
        return view ('admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

//        $request->validate([
//            'name' => ['required' , 'string'] ,
//            'content'=> ['required' , 'string'],
//            'image' => ['image' , 'nullable' , 'max:2000'],
//            'show_in_home' => ['required']
//        ]);


        $imagePath = $this->updateImage($request , "image" , "uploads" , $product->image);

        $product->update([
            "show_in_home" => $request->show_in_home || 0 ,
            "image" => empty(!$imagePath) ? $imagePath : $product->image
        ]);

        $product->storeTranslations($request);


        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $this->deleteImage($product->image);
        $product->delete();
        return redirect()->back();
    }


    public function tempUpload(Request $request){

    }
}
