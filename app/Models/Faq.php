<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['question' , 'answer'];
    protected array $locales;
    protected $guarded=[];

    public function __construct()
    {
        $this->locales = config('translatable.locales');
    }

    public function storeTranslations($request)
    {
        foreach ($this->locales as $locale) {
            FaqTranslation::updateOrCreate([
                'faq_id' => $this->id,
                'locale' => $locale,
            ],[
                'faq_id' => $this->id,
                'locale' => $locale,
                'question' => $request->question[$locale],
                'answer' => $request->answer[$locale],
            ]);
        }
    }
}





