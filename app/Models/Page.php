<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Page extends Model
{
    protected $guarded = [];

    public function pageSections()
    {
        return $this->hasMany(PageSection::class,'page_id','id')->where('status',1)->orderBy('position','asc');
    }

    public function getTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language'):Language::where('is_default',1)->first()->id);
    }

    public function getName()
    {
        return $this->getTranslation ? $this->getTranslation->name : $this->name;
    }
}
