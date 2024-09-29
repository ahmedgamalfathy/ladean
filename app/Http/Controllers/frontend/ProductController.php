<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view("frontend.home.products" , ["products" => $products]);
    }
}
