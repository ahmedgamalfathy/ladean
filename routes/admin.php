<?php


use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\LandingController;
use App\Http\Controllers\Backend\OptionController;
use App\Http\Controllers\Backend\PartnersControler;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ContactUsController;
use  App\Http\Controllers\Backend\OurGoalsContoller;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\LangController;

// routes/web.php



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get("admin/dashboard" , [AdminController::class , 'dashboard'])->name('dashboard');
    Route::get("admin/profile" , [ProfileController::class ,'index'])->name('profile.index');
    Route::post("admin/profile/update" , [ProfileController::class ,'updateProfile'])->name('profile.updateProfile');
    Route::post("admin/profile/update/password" , [ProfileController::class ,'updatePassword'])->name('profile.updatePassword');


    Route::post("upload" , [ProductController::class ,'tempUpload'])->name('tempUpload');


    Route::resources([
        'admin/contact_us'=>ContactUsController::class ,
        'admin/our-goals' => OurGoalsContoller::class ,
        'admin/testimonials' => TestimonialController::class ,
        'admin/landing' => LandingController::class,
        'admin/products' => ProductController::class,
        'admin/partners' => PartnersControler::class ,
        'admin/settings'=> SettingController::class ,
        'admin/faq'=> FaqController::class ,
        'admin/options'=> OptionController::class ,


    ]);

});

//Route::get('lang/{lang}',[LangController::class,'changlang']);







