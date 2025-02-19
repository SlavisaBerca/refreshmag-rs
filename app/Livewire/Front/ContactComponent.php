<?php

namespace App\Livewire\Front;

use App\Traits\GetDefaultVersion;
use Livewire\Component;

class ContactComponent extends Component
{
    use GetDefaultVersion;
    public function render()
    {
        return view('livewire.front.contact-component',[
            'version'=>$this->defaultVersion(),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }
}
