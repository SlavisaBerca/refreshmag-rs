<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $guarded = [];

    public function getChildrens()
    {
        return $this->hasMany(ChildMenu::class)->where('child_menus.status',1)->orderBy('child_menus.position','asc');
    }

    public function parentPage()
    {
        return $this->belongsTo(Page::class,'page_id','id');
    }
}
