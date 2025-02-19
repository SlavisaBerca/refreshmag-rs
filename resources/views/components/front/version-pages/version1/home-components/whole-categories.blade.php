 <!-- Product Categories Start -->
 <div class="categories-sec py-24">
    <div class="container-fluid">
        <div class="row">
            <div class="categories-wrapper">
            @foreach($getCategories as $showAll)
                <a href="shop-grid-sidebar-1.html" class="category-block">
                    <div class="image-box mb-12">
                        <img src="{{ asset('images/categories/cat-'.$showAll->id.'/'.$showAll->photo) }}" alt="">
                    </div>
                    <p class="fw-500 mb-4p">{{ $showAll->getName() }}</p>
                    <p class="dark-gray">{{ $showAll->myProducts->count() }} {{ $defaultContent['lang002'] }}</p>
                </a>
            @endforeach
               
               
            </div>
        </div>
    </div>
</div>
<!-- Product Categories End -->