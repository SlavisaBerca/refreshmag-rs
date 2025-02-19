<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Section extends Model
{
    protected $guarded = [];

    public function myTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }

    public function getContent()
    {
       return $content = [
            'title'=>$this->myTranslation ? $this->myTranslation->title : null,
        ];
    }
}
