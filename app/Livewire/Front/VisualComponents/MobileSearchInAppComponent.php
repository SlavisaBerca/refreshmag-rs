<?php

namespace App\Livewire\Front\VisualComponents;

use Livewire\Component;
use App\Models\Category;
use App\Traits\GetDefaultVersion;

class MobileSearchInAppComponent extends Component
{
    use GetDefaultVersion;

    public $searchResults = [], $categoryId, $getCategory, $searchProducts;

    public function render()
    {
        return view('livewire.front.visual-components.mobile-search-in-app-component',[
            'version'=>$this->defaultVersion(),
            'serachResults'=>$this->searchResults,
            'getCategory'=>$this->getCategory,
        ]);
    }

    public function getSearchResults()
    {
        $this->searchResults = Category::whereHas('getTranslation',function($query){
            $query->where('name','like','%'.$this->searchProducts.'%');
        })->get();
    }
    public function updatedSearchProducts()
    {
         $this->getSearchResults();
    }
    public function getCategoryId($id)
    {
        $this->categoryId = $id;
        $this->getCategory = Category::find($id);
    }
}
