<?php

namespace App\Livewire\Front\VisualComponents;

use App\Traits\GetDefaultVersion;
use App\Traits\CartItems;
use Livewire\Component;

class AppCartComponent extends Component
{
    use GetDefaultVersion, CartItems;
    public function render()
    {
        return view('livewire.front.visual-components.app-cart-component',[
            'version'=>$this->defaultVersion(),
            'cartCount'=>$this->cartCount(),
            'cartItems'=>$this->getCartItems(),
            'cartTotal'=>$this->getCartTotal(),
        ]);
    }
}
