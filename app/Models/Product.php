<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory  , Translatable;
    public $translatedAttributes = ['name' , 'content'];
    protected array $locales;
    protected $guarded=[];


    public function __construct()
    {
        $this->locales = config('translatable.locales');
    }


    public function storeTranslations($request)
    {
        foreach ($this->locales as $locale) {
            ProductTranslation::updateOrCreate([
                'product_id' => $this->id,
                'locale' => $locale,
            ],[
                'product_id' => $this->id,
                'locale' => $locale,
                'name' => $request->name[$locale],
                'content' => $request->content[$locale],
            ]);
        }
    }

}
