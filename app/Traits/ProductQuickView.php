<?php 

namespace App\Traits;

use App\Models\Product;

trait ProductQuickView
{
    public function getProduct($id)
    {
        return Product::find($id);
    }

    public function resetGetProduct()
    {
        return null;
    }
}