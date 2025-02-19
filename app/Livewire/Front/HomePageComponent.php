<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\PageSection;
use App\Traits\GetDefaultVersion;

class HomePageComponent extends Component
{
    use GetDefaultVersion;

    public function render()
    {
        return view('livewire.front.home-page-component',[
            'version'=>$this->defaultVersion(),
            'pageSections'=>PageSection::with('myComponents')->where('is_home',1)->where('version',$this->defaultVersion())->where('status',1)->orderBy('position','asc')->get(),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }
}
