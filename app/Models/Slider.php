<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function myTranslation()
    {
        return $this->morphOne(Translation::class,'attributable')->where('language_id',1);
    }

    public function getTranslations()
    {
        return $translations = [
            'title'=>$this->myTranslation ? $this->myTranslation->title : $this->title,
            'subtitle'=> $this->myTranslation ? $this->myTranslation->subtitle : $this->subtitle,
            'description'=>$this->myTranslation ? $this->myTranslation->description : $this->description,
            'button_1_text'=>$this->myTranslation ? $this->myTranslation->button_1_text : $this->button_1_text,
            
        ];
    }
}
