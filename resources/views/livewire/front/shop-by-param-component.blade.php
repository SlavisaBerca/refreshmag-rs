<div>
    {!! view('components.front.version-pages.version'.$version.'.parameter-shop',[
        'getProducts'=>$getProducts??[],
        'currentCategory'=>$currentCategory??null,
        'pageSize'=>$pageSize??20,
        'orderColumn'=>$orderColumn,
        'orderDirection'=>$orderDirection,
        'getProduct'=>$getProduct,
        'selectedCategories'=>$selectedCategories??[],
        'selectedSubcategories'=>$selectedSubcategories??[],
        'lowestPrice'=>$lowestPrice??0,
        'highestPrice'=>$highestPrice??0,
        'stockFilter'=>$stockFilter??null,
    ]) !!}
</div>
