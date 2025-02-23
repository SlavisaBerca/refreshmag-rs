<?php

namespace App\Livewire\Front;

use App\Traits\GetDefaultVersion;
use Livewire\Component;

class WholeShopComponent extends Component
{
    use GetDefaultVersion;

    public function render()
    {
        return view('livewire.front.whole-shop-component',[
            'version'=>$this->defaultVersion(),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }
}
