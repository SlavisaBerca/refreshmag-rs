<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildMenu extends Model
{
    protected $guarded = [];

    public function parentPage()
    {
        return $this->belongsTo(Page::class,'page_id','id');
    }
}
