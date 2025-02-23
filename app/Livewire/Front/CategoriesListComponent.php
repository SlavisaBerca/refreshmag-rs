<?php

namespace App\Livewire\Front;

use App\Traits\GetDefaultVersion;
use Livewire\Component;

class CategoriesListComponent extends Component
{
    use GetDefaultVersion;

    public function render()
    {
        return view('livewire.front.categories-list-component',[
            'version'=>$this->defaultVersion(),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }
}
