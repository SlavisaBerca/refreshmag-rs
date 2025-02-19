<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class AppSetting extends Model
{
    protected $guarded = [];

    public function getTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id);
    }

    public function getContent()
    {
        return $content = [
            'middle_badge'=>$this->getTranslation ? $this->getTranslation->middle_badge : $this->middle_badge,
        ];
    }
}
