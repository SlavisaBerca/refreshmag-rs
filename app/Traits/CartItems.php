<?php 

namespace App\Traits;

use App\Models\Product;
use App\Models\Currency;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

trait CartItems
{
    public function getCartItems()
    {
        return  Session::has('cart') ? Session::get('cart') : [];
    }   

    public function cartCount()
    {
        return Session::has('cart') ? count(Session::get('cart')) : 0;
    }

    public function getCartTotal()
    {
        return Session::has('cart') ? array_sum(Session::get('cart')['product_total']) : 0.00;
    }

    public function addWithAttributes($productId)
    {
        $current_currency = Session::has('currency') ? Currency::find(Session::get('currency')) : Currency::where('is_default',1)->first();
        $currency_value = $current_currency ? $current_currency->value : 1;
        $product = Product::find($productId);
        $price = $product->getPrice();

    }

    public function addSimpleProduct($productId)
    {
        $this->generateKey($productId);
    }

    public function updateCartItems($cartKey)
    {

    }

    public function removeCartItems($cartKey)
    {

    }

    public function generateAttrKeys($productId,$attributes)
    {
        return $productId . '-' . md5(json_encode($attributes));
    }

    public function generateKey($productId)
    {
        return 'prod'.$productId.''.Str::random(10);
    }

    public static function showInProvider()
    {
        return [
            'cartCount'=>Session::has('cart') ? count(Session::get('cart')) : 0,
            'cartTotal'=>Session::has('cart') ? array_sum(Session::get('cart')['product_total']) : 0.00,
        ];
    }
}