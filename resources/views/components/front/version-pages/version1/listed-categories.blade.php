

        <!-- Main Sections -->
        <main class="main-wrapper">

            <!-- Title Banner Start -->
            <section class="title-banner">
               <div class="container-fluid">
                   <div class="banner-wrapper">
                       <img src="assets/media/banner/left-image.png" alt="" class="banner-image1">
                       <h1 class="dark-black fw-600">{{ $defaultContent['lang019'] }}</h1>
                       <img src="assets/media/banner/right-image.png" alt="" class="banner-image2">
                   </div>
               </div>
           </section>
           <!-- Title Banner End -->

           <!-- Featured Product Start -->
           <section class="featured-product-sec py-40 bg-lightest-gray">
               <div class="container-fluid">
                   <div class="shop-grid-topbar-container mb-16">
                   
                       <div class="hr-line mb-sm-12 mb-24"></div>
                      
                   <div class="row row-gap-3">
                    @foreach($getCategories as $category)
                       <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4">
                           <div class="featured-product-card bg-white br-10">
                               <div class="image-box mb-16">                               
                                   <a href="{{ route('shop.by',['param'=>'cat','slug'=>$category->slug]) }}"><img src="{{ asset('images/categories/cat-'.$category->id.'/'.$category->photo) }}" class="product-image"
                                           alt=""></a>
                                   <div class="side-icons">
                                       <ul class="list-unstyled">

                                       </ul>
                                   </div>
                               </div>
                               <div class="product-desc">
                                   <h6 class="product-title mb-8"><a href="{{ route('shop.by',['param'=>'cat','slug'=>$category->slug]) }}">{{ $category->getName() }}</a></h6>
                                   <div class="text mb-16">
                                       <p class="light-gray">10 {{ $defaultContent['lang002'] }}</p>
                                   </div>
                                  
                                   <a href="{{ route('shop.by',['param'=>'cat','slug'=>$category->slug]) }}" class="cus-btn-2 w-100">{{ $defaultContent['lang024'] }}</a>
                               </div>
                           </div>
                       </div>
                    @endforeach
                       
                   </div>
                
               </div>
           </section>
           <!-- Featured Product End -->

          