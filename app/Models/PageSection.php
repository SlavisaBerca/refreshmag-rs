<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $guarded = [];

    public function parentSection()
    {
        return $this->belongsTo(Section::class,'section_id','id');
    }

    public function myComponents()
    {
        return $this->hasMany(PageSectionComponent::class,'page_section_id','id');
    }
}
