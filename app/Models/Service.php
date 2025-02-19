<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Service extends Model
{
    protected $guarded = [];

    public function getTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }

    public function getContent()
    {
        return $content = [
            'title'=>$this->getTranslation ? $this->getTranslation->title : null,
            'description'=>$this->getTranslation ? $this->getTranslation->short_description : null,
        ];
    }
}
