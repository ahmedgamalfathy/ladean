<?php

use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::get("/" , [HomeController::class , "index"])->name('home');
    Route::post("/contact-us" , [ContactUsController::class , 'store'])->name("contactUs");
    Route::get("/products" , [ProductController::class , 'index'])->name("home.products");




    Route::get('/{slug}', [HomeController::class,'pages'])->whereIn('slug',
        [ 'الاسئلة-الشائعة' , 'من-نحن', 'الشروط-والاحكام','سياسة-الخصوصية','سياسة-البيع','سياسة-الاستبدال-والاسترجاع' , 'تواصل-معنا' ,
            'privacy-policy']
    )->name('pages');


    Route::fallback(function () {
        return view("frontend.home.404");
    });



//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});




require __DIR__.'/auth.php';

