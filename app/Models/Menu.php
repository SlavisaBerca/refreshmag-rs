<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function getItems()
    {
        return $this->hasMany(MenuItem::class)->where('status',1)->orderBy('position','asc');
    }
}
