<?php

namespace App\Models;

use App\Models\Translation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    protected $gaurded = [];

    protected $casts = [
        'brands' => 'array',
        'attributes' => 'array',
        'colors' => 'array',
        'sizes' => 'array',
        'tehnical_details' => 'array',
    ];

    public function getPrice()
    {
        return $this->price;
    }

    public function getPriceFormat()
    {

    }

    public function getTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function parentSubCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id','id');
    }
    public function parentChildCategory()
    {
        return $this->belongsTo(ChildCategory::class,'child_category_id','id');
    }
    public function getContent()
    {
        return 
         [
            'name'=>$this->getTranslation ? $this->getTranslation->name : $this->name,
            'short_description'=>$this->getTranslation ? $this->getTranslation->short_description : $this->short_description,
            'description'=>$this->getTranslation ? $this->getTranslation->description_one : $this->description,
            'description_two'=>$this->getTranslation ? $this->getTranslation->description_two : $this->description_two,
            'tehnical_details'=>$this->getTranslation ? $this->getTranslation->description_three : $this->techical_details,
        ];
    }
}
