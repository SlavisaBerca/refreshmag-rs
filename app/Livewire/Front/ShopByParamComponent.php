<?php

namespace App\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Language;
use App\Models\SubCategory;
use Livewire\WithPagination;
use App\Models\ChildCategory;
use App\Traits\ProductQuickView;
use App\Traits\GetDefaultVersion;
use Illuminate\Support\Facades\Session;

class ShopByParamComponent extends Component
{
    use GetDefaultVersion, WithPagination, ProductQuickView;

    public $currentParam;
    public $currentCategory;
    public $parentCategory;
    public $pageSize = 15;
    public $productsList;
    public $orderColumn='id';
    public $orderDirection='desc';
    public $selectedCategories=[];
    public $selectedSubcategories=[];
    public $bestSeller;
    public $mostPopular;
    public $getProduct;
    public $highestPrice;
    public $lowestPrice;
    public $searchProductsHere;

    public function mount($param,$slug)
    {        
        if($param=='cat')
        {
            $this->currentParam='category_id';
            $this->currentCategory = Category::where('slug',$slug)->first();

        }
        if($param=='subcat')
        {
            $this->currentParam = 'sub_category_id';
            $this->currentCategory = SubCategory::where('slug',$slug)->first();

            
        }
        if($param=='child')
        {
            $this->currentParam = 'child_category_id';
            $this->currentCategory = ChildCategory::where('slug',$slug)->first();
        
        }
   
        $lower_price = Product::where($this->currentParam,$this->currentCategory->id)->orderBy('price','asc')->first();
        $highest_price = Product::where($this->currentParam,$this->currentCategory->id)->orderBy('price','desc')->first();
        $this->lowestPrice = $lower_price ?  $lower_price->price : 1;
        $this->highestPrice = $highest_price ? $highest_price->price : 1;
    }
    public function render()
    {
        
        return view('livewire.front.shop-by-param-component',[
            'version'=>$this->defaultVersion(),
            'getProduct'=>$this->getProduct,
            'getProducts'=>$this->getProducts()->orderBy($this->orderColumn??'id',$this->orderDirection)->paginate(is_numeric($this->pageSize) ? $this->pageSize : Product::count()),
        ])->layout('layouts.front.version'.$this->defaultVersion().'.app');
    }

    public function getProducts()
    {
        $query = Product::query();
    

        if (empty($this->selectedCategories) && empty($this->selectedSubcategories)) {
         
            if ($this->currentCategory) {
               
                $query->where($this->currentParam, $this->currentCategory->id);
            }
        }    
     
        if (!empty($this->selectedCategories)) {
            $query->whereIn('category_id', $this->selectedCategories);
        }
    
        if (!empty($this->selectedSubcategories)) {
            $query->whereIn('sub_category_id', $this->selectedSubcategories);
        }

        $query->when($this->searchProductsHere,function($translation){
            $translation->whereHas('getTranslation',function($query){
                $query->where('language_id',Session::has('language') ? Session::get('language') : Language::where('is_default',1)->first()->id)
                ->where('name','like','%'.$this->searchProductsHere.'%')
                ->orWhere('short_description','like','%'.$this->searchProductsHere.'%')
                ->orWhere('description_one','like','%'.$this->searchProductsHere.'%')
                ->orWhere('description_two','like','%'.$this->searchProductsHere.'%')
                ->orWhere('description_three','like','%'.$this->searchProductsHere.'%');
            });
        });
      
        $query->when($this->lowestPrice && $this->highestPrice,function($query){
            $query->whereBetween('price',[$this->lowestPrice,$this->highestPrice]);
        });
        $query->when($this->bestSeller,function($query){
            $query->where('sales','>=',1)->where('views','>=',1);
           
        });
        $query->when($this->mostPopular,function($query){
            $query->where('views','>=',1)->where('sales','>=',0);
        });
        return $query;
    }
    
    public function sortProducts($column,$dir)
    {        
        $this->orderColumn = $column;
        $this->orderDirection = $dir;
    }

    public function getProductQuickView($id)
    {
        $this->getProduct = $this->getProduct($id);
    }

    public function changePageSize($size)
    {
        if($size=='all')
        {
            $this->pageSize = $this->getProducts()->count();
        }else{
            $this->pageSize = $size;
        }
    }
    public function updatedSelectedCategories()
    {
        
        $this->selectedCategories = array_filter($this->selectedCategories, function ($item) {
            return is_numeric($item); 
        });
        
       
        $this->selectedCategories = array_map('intval', $this->selectedCategories);
    
       
        $this->selectedCategories = Category::whereIn('id', $this->selectedCategories)
                                             ->pluck('id')
                                             ->toArray();
        
     
        $this->currentParam = 'category_id';
       
       $this->getProducts()->whereIn($this->currentParam, $this->selectedCategories)->first();
    }

    public function updatedLowestPrice()
    {
        $this->lowestPrice > $this->highestPrice ? $this->highestPrice=$this->lowestPrice+1 : $this->highestPrice = $this->highestPrice;
    }
    
    public function updatedSelectedSubcategories()
    {
       
        $this->selectedSubcategories = array_filter($this->selectedSubcategories, function ($item) {
            return is_numeric($item);
        });
    
        $this->selectedSubcategories = array_map('intval', $this->selectedSubcategories);
     
        $this->selectedSubcategories = Category::whereIn('id', $this->selectedSubcategories)
                                                ->pluck('id')
                                                ->toArray();        
     
        $this->currentParam = 'sub_category_id';

         $this->getProducts()->whereIn($this->currentParam, $this->selectedSubcategories);
    }
    
    public function resetViewProduct()
    {
        $this->getProduct = null;
    }
}
