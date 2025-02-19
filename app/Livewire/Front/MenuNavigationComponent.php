<?php

namespace App\Livewire\Front;

use App\Models\Page;
use App\Traits\GetDefaultVersion;
use Livewire\Component;

class MenuNavigationComponent extends Component
{
    use GetDefaultVersion;
    public $page;

    public function mount($slug)
    {
        $this->page = Page::with(['pageSections'])->where('slug',$slug)->first();
    }
    public function render()
    {
        return view('livewire.front.menu-navigation-component',[
            'page'=>$this->page,
            'version'=>$this->defaultVersion(),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }
}
