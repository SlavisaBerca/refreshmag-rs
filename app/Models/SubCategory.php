<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class SubCategory extends Model
{
    protected $guarded = [];

    public function getChildrens()
    {
        return $this->hasMany(ChildCategory::class)->orderBy('child_categories.position','asc');
    }

    public function getTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }

    public function getDefaultTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Language::where('is_default',1)->first()->id);
    }

    public function getName()
    {
        return $this->getTranslation ? $this->getTranslation->name : $this->getDefaultTranslation->name;
    }
}
