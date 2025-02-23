<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Category extends Model
{
    protected $guarded = [];

    public function getName()
    {
       
        return $this->myTranslation ? $this->getTranslation->name : $this->name;
    }

    public function getTranslation()
    {
        return $this->morphOne(Translation::class, 'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }    

    public function getSubCategories()
    {
        return $this->hasMany(SubCategory::class)->where('status',1)->orderBy('sub_categories.position','asc');
    }

    public function myProducts()
    {
        return $this->hasMany(Product::class);
    }

}
