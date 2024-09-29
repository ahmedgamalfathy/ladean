<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view("admin.faq.index" , compact("faqs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.faq.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $faq = Faq::create([
            "show_in_home" => $request->show_in_home || 0 ,
        ]);



        $faq->storeTranslations($request);


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
        $faq = Faq::findOrFail($id);
        return view ('admin.faq.edit' , compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $faq = Faq::findOrFail($id);

        $faq->update([
            "show_in_home" => $request->show_in_home || 0 ,
        ]);

        $faq->storeTranslations($request);


        toastr()->success(trans("words.edit_successfully"));

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->back();
    }
}
