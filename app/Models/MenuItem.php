<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = [];

    public function getSubmenuItems()
    {
        return $this->hasMany(SubMenu::class)->where('sub_menus.status',1)->orderBy('sub_menus.position','asc');
    }

    public function parentPage()
    {
        return $this->belongsTo(Page::class,'page_id','id');
    }
}
