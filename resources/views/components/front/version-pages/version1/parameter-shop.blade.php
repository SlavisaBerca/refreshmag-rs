<style>
    .progress {
    height: 100% !important;
    left: 0% !important;
    right: 0% !important;
    position: absolute;
    border-radius: 5px;
    background: #006937;
}
.title-banner {
    background: url(../front/version1/assets/media/banner/title-banner.png) no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
    text-align: center !important;
    height: clamp(150px, 10.417vw, 350px) !important;
    display: grid !important;
    align-items: center !important;
}
</style>

        <!-- Main Sections -->
        <main class="main-wrapper">

            <!-- Title Banner Start -->
            <section class="title-banner">
               <div class="container-fluid">
                   <div class="banner-wrapper">
                       <img src="{{ asset('front/version1/assets/media/banner/left-image.png') }}" alt="" class="banner-image1">
                       <h1 class="dark-black fw-600">{{ $defaultContent['lang024'] }}</h1>
                       <img src="{{ asset('front/version1/assets/media/banner/left-image.png') }}" alt="" class="banner-image2">
                   </div>
               </div>
           </section>
           <!-- Title Banner End -->

           <!-- Featured Product Start -->
           <section class="featured-product-sec py-40 bg-lightest-gray">
               <div class="container-fluid">
                   <div class="row row-gap-3">
                  
                       <div class="col-xl-3">
                           <div class="sidebar bg-white">
                               <form action="shop-grid-1.html" class="mb-24">
                                   <input type="text" wire:model.live.debounce.300ms="searchProductsHere" id="searchBar" class="form-control" placeholder="Search products here....">
                                   <button>
                                       <i class="fa-light fa-magnifying-glass"></i>
                                   </button>
                               </form>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-1 mb-24">
                                   <div class="title mb-24" data-count="1">
                                       <h6>Product Categories</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <ul class="list-unstyled">
                                    @foreach($getCategories as $productCategory)
                                           <li class="checkbox-group">
                                               <div class="arrow-block d-flex align-items-center justify-content-between mb-16">
                                                   <div class="check-block">
                                                    <input 
                                                    type="checkbox" 
                                                    id="cable-check-{{ $productCategory->id }}" 
                                                    class="sub-check-box"  
                                                    wire:model.live="selectedCategories" 
                                                    value="{{ $productCategory->id }}"
                                                    {{ in_array($productCategory->id, $selectedCategories) ? 'checked' : '' }}
                                                />
                                                     <label for="cable-check-{{ $productCategory->id }}">{{ $productCategory->getName() }}</label>
                                                   </div>
                                                   @if($productCategory->getSubcategories->count() > 0) <i class="fa-thin fa-chevron-down fw-500 light-gray"></i> @endif 
                                               </div>
                                    @if($productCategory->getSubcategories->count() > 0)
                                               <ul class="sub-checkboxes pl-16 mb-16">
                                    @foreach($productCategory->getSubcategories as $productSub)
                                                   <li class="d-flex align-items-center gap-2 mb-12">
                                                       <div class="check-block">
                                                        <input 
                                                        type="checkbox" 
                                                        id="subcat-check-{{ $productSub->id }}" 
                                                        class="sub-check-box"  
                                                        wire:model.live="selectedSubcategories" 
                                                        value="{{ $productSub->id }}"
                                                        {{ in_array($productSub->id, $selectedSubcategories) ? 'checked' : '' }}
                                                    />
                                                           <label for="subcat-check-{{ $productSub->id }}">{{ $productSub->getName() }}</label>
                                                       </div>
                                                       <p class="light-gray fw-400">(20)</p>
                                                   </li>
                                    @endforeach
                                                   
                                                   
                                               </ul>
                                    @endif
                                           </li>
                                    @endforeach
                                        
                                       </ul>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"> </div>
                               <div class="category-block box-2 mb-24">
                                   <div class="title mb-32" data-count="2">
                                       <h6>Filter By Price</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <div class="wrapper">
                                           <div class="price-input mb-24">
                                               <div class="field">
                                                   <div class="fw-500 mb-4p">Low</div>
                                                   <input type="number" wire:model.live.debounce.300ms="lowestPrice" class="input-min" value="{{ $lowestPrice }}">
                                               </div>
                                               <div class="field">
                                                   <div class="fw-500 mb-4p">High</div>
                                                   <input type="number" class="input-max" wire:model.live.debounce.300ms="highestPrice" value="{{ $highestPrice }}">
                                               </div>
                                           </div>
                                           <div class="slider">
                                               <div class="progress"></div>
                                           </div>
                                           <div class="range-input">
                                            <!-- Min Range Input -->
                                            <input 
                                                type="range" 
                                                class="range-min" 
                                                wire:model.live.debounce.300ms="lowestPrice" 
                                                min="0" 
                                                max="1000000" 
                                                step="1"
                                                value="{{ $lowestPrice }}"
                                                style="background-size: {{ (($lowestPrice - 0) / ($highestPrice - 0)) * 100 }}% 100%;" 
                                            >
                                        
                                            <!-- Max Range Input -->
                                            <input 
                                                type="range" 
                                                class="range-max" 
                                                wire:model.live.debounce.300ms="highestPrice" 
                                                min="0" 
                                                max="1000000" 
                                                step="1"
                                                value="{{ $highestPrice }}"
                                                style="background-size: {{ ((($highestPrice - $lowestPrice) / (10000 - $lowestPrice)) * 100) }}% 100%;" 
                                            >
                                        </div>
                                        
                                        
                                       </div>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-3 mb-24">
                                   <div class="title mb-32" data-count="3">
                                       <h6>Filter By Parameters </h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <ul class="list-unstyled">
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox"  wire:model.live="bestSeller" id="check-64">
                                                   <label for="check-64">Best Seller</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox"  wire:model.live="mostPopular"  id="check-128">
                                                   <label for="check-128">Most Popular </label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-4 mb-24">
                                   <div class="title mb-32" data-count="4">
                                       <h6>Filter By Colors</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <div class="product-color">
                                           <ul class="unstyled list">
                                               <li>
                                                   <label for="muhRadio9"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio9" name="muhRadio" class="radio-1" value="muhRadio1">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio8"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio8" name="muhRadio" class="radio-2" value="muhRadio2">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio7"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio7" name="muhRadio" class="radio-3" value="muhRadio3">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio1"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio1" name="muhRadio" class="radio-4" value="muhRadio1">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio2"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio2" name="muhRadio" class="radio-5" value="muhRadio2">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio3"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio3" name="muhRadio" class="radio-6" value="muhRadio3">
                                                   </label>
                                               </li>
                                               <li>
                                                   <label for="muhRadio4"
                                                       class="d-flex align-items-center h-21 light-black font-sec fw-500">
                                                       <input type="radio" id="muhRadio4" name="muhRadio" class="radio-7" value="muhRadio4">
                                                   </label>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-5 mb-24">
                                   <div class="title mb-24" data-count="5">
                                       <h6>Filter By Storage</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <ul class="list-unstyled">
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="infinix">
                                                   <label for="infinix">Infinix</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="oppo">
                                                   <label for="oppo">Oppo</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="vivo">
                                                   <label for="vivo">Vivo</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="samsung">
                                                   <label for="samsung">Samsung</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="oneplus">
                                                   <label for="oneplus">One Plus</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                           <li class="d-flex align-items-center justify-content-between mb-12">
                                               <div class="check-block">
                                                   <input type="checkbox" id="Nokia">
                                                   <label for="Nokia">Nokia</label>
                                               </div>
                                               <p class="light-gray fw-400">(20)</p>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-6 mb-24">
                                   <div class="title mb-24" data-count="6">
                                       <h6>Filter By Reviews</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <div class="d-flex justify-content-between align-items-center mb-16">
                                           <div class="star-rating">
                                               <input type="radio" id="1-star" checked name="rating" value="1">
                                               <label for="1-star" class="star">&#9733;</label>
                                               <input type="radio" id="2-stars" name="rating" value="2">
                                               <label for="2-stars" class="star">&#9733;</label>
                                               <input type="radio" id="3-stars" name="rating" value="3">
                                               <label for="3-stars" class="star">&#9733;</label>
                                               <input type="radio" id="4-stars" name="rating" value="4">
                                               <label for="4-stars" class="star">&#9733;</label>
                                               <input type="radio" id="5-stars" name="rating" value="5">
                                               <label for="5-stars" class="star">&#9733;</label>
                                           </div>
                                           <p class="light-gray fw-400">(20)</p>
                                       </div>
                                       <div class="d-flex justify-content-between align-items-center mb-16">
                                           <div class="star-rating">
                                               <input type="radio" id="11-star" name="rating2" value="11">
                                               <label for="11-star" class="star">&#9733;</label>
                                               <input type="radio" id="12-stars" checked name="rating2" value="12">
                                               <label for="12-stars" class="star">&#9733;</label>
                                               <input type="radio" id="13-stars"  name="rating2" value="13">
                                               <label for="13-stars" class="star">&#9733;</label>
                                               <input type="radio" id="14-stars" name="rating2" value="14">
                                               <label for="14-stars" class="star">&#9733;</label>
                                               <input type="radio" id="15-stars" name="rating2" value="15">
                                               <label for="15-stars" class="star">&#9733;</label>
                                           </div>
                                           <p class="light-gray fw-400">(20)</p>

                                       </div>
                                       <div class="d-flex justify-content-between align-items-center mb-16">
                                           <div class="star-rating ">
                                               <input type="radio" id="21-star" name="rating3" value="21">
                                               <label for="21-star" class="star">&#9733;</label>
                                               <input type="radio" id="22-stars" name="rating3" value="22">
                                               <label for="22-stars" class="star">&#9733;</label>
                                               <input type="radio" id="23-stars" checked name="rating3" value="23">
                                               <label for="23-stars" class="star">&#9733;</label>
                                               <input type="radio" id="24-stars" name="rating3" value="24">
                                               <label for="24-stars" class="star">&#9733;</label>
                                               <input type="radio" id="25-stars" name="rating3" value="25">
                                               <label for="25-stars" class="star">&#9733;</label>
                                           </div>
                                           <p class="light-gray fw-400">(20)</p>
                                       </div>
                                       <div class="d-flex justify-content-between align-items-center mb-16">
                                           <div class="star-rating ">
                                               <input type="radio" id="31-star" name="rating4" value="31">
                                               <label for="31-star" class="star">&#9733;</label>
                                               <input type="radio" id="32-stars" name="rating4" value="32">
                                               <label for="32-stars" class="star">&#9733;</label>
                                               <input type="radio" id="33-stars" name="rating4" value="33">
                                               <label for="33-stars" class="star">&#9733;</label>
                                               <input type="radio" id="34-stars" checked name="rating4" value="34">
                                               <label for="34-stars" class="star">&#9733;</label>
                                               <input type="radio" id="35-stars" name="rating4" value="35">
                                               <label for="35-stars" class="star">&#9733;</label>
                                           </div>
                                           <p class="light-gray fw-400">(20)</p>
                                       </div>
                                       <div class="d-flex justify-content-between align-items-center mb-16">
                                           <div class="star-rating">
                                               <input type="radio" id="41-star" name="rating5" value="41">
                                               <label for="41-star" class="star">&#9733;</label>
                                               <input type="radio" id="42-stars" name="rating5" value="42">
                                               <label for="42-stars" class="star">&#9733;</label>
                                               <input type="radio" id="43-stars" name="rating5" value="43">
                                               <label for="43-stars" class="star">&#9733;</label>
                                               <input type="radio" id="44-stars" name="rating5" value="44">
                                               <label for="44-stars" class="star">&#9733;</label>
                                               <input type="radio" id="45-stars" checked name="rating5" value="45">
                                               <label for="45-stars" class="star">&#9733;</label>
                                           </div>
                                           <p class="light-gray fw-400">(20)</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <div class="category-block box-7 mb-24">
                                   <div class="title mb-24" data-count="7">
                                       <h6>Feature Products</h6>
                                       <span>
                                           <i class="far fa-horizontal-rule"></i>
                                       </span>
                                   </div>
                                   <div class="content-block">
                                       <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                           <div class="image-box d-flex flex-shrink-0"> 
                                               <img src="assets/media/images/sidebar-1.png" alt="">
                                           </div>  
                                           <div>
                                               <p class="mb-8">Samsung Galaxy S20 FE 8GB/256GB Blue</p>
                                               <p class="color-primary"><span class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00</p>
                                           </div>
                                       </a>
                                       <div class="hr-line mb-24"></div>
                                       <a href="shop-list-1.html" class="d-flex gap-24 align-items-center mb-24">
                                           <div class="image-box d-flex flex-shrink-0"> 
                                               <img src="assets/media/images/sidebar-2.png" alt="">
                                           </div>  
                                           <div>
                                               <p class="mb-8">Beats Studio Wireless Noise Cancelling Over-Ear</p>
                                               <p class="color-primary">$650.00</p>
                                           </div>
                                       </a>
                                       <div class="hr-line mb-24"></div>
                                       <a href="shop-list-1.html" class="d-flex gap-24 align-items-center">
                                           <div class="image-box d-flex flex-shrink-0"> 
                                               <img src="assets/media/images/sidebar-3.png" alt="">
                                           </div>  
                                           <div>
                                               <p class="mb-8">Logitech F710 Wireless Gamepad - 940-000119</p>
                                               <p class="color-primary"><span class="light-gray text-decoration-line-through">$700.00</span>&nbsp;$650.00</p>
                                           </div>
                                       </a>
                                   </div>
                               </div>
                               <div class="hr-line mb-24"></div>
                               <a href="" class="main-card">
                                   <h4 class="fw-500 white mb-32">Special Offer</h4>
                                   <div class="image mb-32">
                                       <img src="assets/media/products/main-image.png" alt="">
                                   </div>
                                   <h5 class="fw-500 white mb-16 text-center">Gamepad Game Controller</h5>
                                   <h5 class="fw-500 white text-center">$90.00</h5>
                               </a>
                           </div>
                       </div>
                    
                       <div class="col-xl-9">
                           <div class="shop-grid-topbar mb-16">
                               <div class="first-block">
                                   <div class="visual-btns">
                                      
                                       <a href="" class="text-decoration-underline fw-500">
                                        Clear All
                                        </a>
                                   </div>
                                   <div class="results d-lg-block d-none">
                                       <p class="dark-gray">{{ $defaultContent['lang028'] }} 01 - {{ $pageSize }} {{ $defaultContent['lang030'] }} {{ $getProducts->total() }} {{ $defaultContent['lang031'] }}</p>
                                   </div>
                               </div>
                               <div class="second-block">
                                   <div class="grid-icons">
                                       <a href="shop-grid-sidebar-1.html" class="grid-dots active">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" viewBox="0 0 22 30" fill="none">
                                               <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM3 14C4.65685 14 6 12.6569 6 11C6 9.34315 4.65685 8 3 8C1.34315 8 0 9.34315 0 11C0 12.6569 1.34315 14 3 14ZM14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11ZM19 14C20.6569 14 22 12.6569 22 11C22 9.34315 20.6569 8 19 8C17.3431 8 16 9.34315 16 11C16 12.6569 17.3431 14 19 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM3 30C4.65685 30 6 28.6569 6 27C6 25.3431 4.65685 24 3 24C1.34315 24 0 25.3431 0 27C0 28.6569 1.34315 30 3 30ZM14 27C14 28.6569 12.6569 30 11 30C9.34315 30 8 28.6569 8 27C8 25.3431 9.34315 24 11 24C12.6569 24 14 25.3431 14 27ZM19 30C20.6569 30 22 28.6569 22 27C22 25.3431 20.6569 24 19 24C17.3431 24 16 25.3431 16 27C16 28.6569 17.3431 30 19 30Z"
                                                   fill="#006937" />
                                           </svg>
                                       </a>
                                       <a href="shop-grid-sidebar-2.html" class="grid-dots">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                               <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M3 6C4.65685 6 6 4.65685 6 3C6 1.34315 4.65685 0 3 0C1.34315 0 0 1.34315 0 3C0 4.65685 1.34315 6 3 6ZM11 6C12.6569 6 14 4.65685 14 3C14 1.34315 12.6569 0 11 0C9.34315 0 8 1.34315 8 3C8 4.65685 9.34315 6 11 6ZM22 3C22 4.65685 20.6569 6 19 6C17.3431 6 16 4.65685 16 3C16 1.34315 17.3431 0 19 0C20.6569 0 22 1.34315 22 3ZM27 6C28.6569 6 30 4.65685 30 3C30 1.34315 28.6569 0 27 0C25.3431 0 24 1.34315 24 3C24 4.65685 25.3431 6 27 6ZM6 11C6 12.6569 4.65685 14 3 14C1.34315 14 0 12.6569 0 11C0 9.34315 1.34315 8 3 8C4.65685 8 6 9.34315 6 11ZM11 14C12.6569 14 14 12.6569 14 11C14 9.34315 12.6569 8 11 8C9.34315 8 8 9.34315 8 11C8 12.6569 9.34315 14 11 14ZM22 11C22 12.6569 20.6569 14 19 14C17.3431 14 16 12.6569 16 11C16 9.34315 17.3431 8 19 8C20.6569 8 22 9.34315 22 11ZM27 14C28.6569 14 30 12.6569 30 11C30 9.34315 28.6569 8 27 8C25.3431 8 24 9.34315 24 11C24 12.6569 25.3431 14 27 14ZM6 19C6 20.6569 4.65685 22 3 22C1.34315 22 0 20.6569 0 19C0 17.3431 1.34315 16 3 16C4.65685 16 6 17.3431 6 19ZM11 22C12.6569 22 14 20.6569 14 19C14 17.3431 12.6569 16 11 16C9.34315 16 8 17.3431 8 19C8 20.6569 9.34315 22 11 22ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19ZM27 22C28.6569 22 30 20.6569 30 19C30 17.3431 28.6569 16 27 16C25.3431 16 24 17.3431 24 19C24 20.6569 25.3431 22 27 22ZM6 27C6 28.6569 4.65685 30 3 30C1.34315 30 0 28.6569 0 27C0 25.3431 1.34315 24 3 24C4.65685 24 6 25.3431 6 27ZM11 30C12.6569 30 14 28.6569 14 27C14 25.3431 12.6569 24 11 24C9.34315 24 8 25.3431 8 27C8 28.6569 9.34315 30 11 30ZM22 27C22 28.6569 20.6569 30 19 30C17.3431 30 16 28.6569 16 27C16 25.3431 17.3431 24 19 24C20.6569 24 22 25.3431 22 27ZM27 30C28.6569 30 30 28.6569 30 27C30 25.3431 28.6569 24 27 24C25.3431 24 24 25.3431 24 27C24 28.6569 25.3431 30 27 30Z"
                                                   fill="#EAEAEC" />
                                           </svg>
                                       </a>
                                   </div>
                               </div>
                               <div class="last-block">
                                   <div class="d-lg-flex d-none align-items-center gap-8">
                                       <p class="dark-gray">{{ $defaultContent['lang033'] }}  {{ $defaultContent['lang032'] }}:</p>
                                       <div class="drop-container ">
                                           <div class="wrapper-dropdown dark-black" id="dropdown12">
                                              @if($orderColumn !=='id')
                                                @if($orderColumn=='price' && $orderDirection=='desc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang034'] }}: {{ $defaultContent['lang035'] }} {{ $defaultContent['lang037'] }} {{ $defaultContent['lang036'] }}</span>
                                                @endif  
                                                @if($orderColumn=='price' && $orderDirection=='asc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang034'] }}: {{ $defaultContent['lang036'] }} {{ $defaultContent['lang037'] }} {{ $defaultContent['lang035'] }}</span>
                                                @endif 
                                                @if($orderColumn=='created_at' && $orderDirection=='desc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang043'] }}: {{ $defaultContent['lang040'] }}</span>
                                                @endif 
                                                
                                                @if($orderColumn=='created_at' && $orderDirection=='asc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang043'] }}: {{ $defaultContent['lang041'] }}</span>
                                                @endif 
                                                @if($orderColumn=='views' && $orderDirection=='desc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang044'] }}: {{ $defaultContent['lang046'] }}</span>
                                                @endif 
                                                @if($orderColumn=='sales' && $orderDirection=='desc')
                                                <span class="selected-display" id="destination12">{{ $defaultContent['lang044'] }}: {{ $defaultContent['lang046'] }}</span>
                                                @endif 
                                                
                                               
                                              @else  
                                              <span class="selected-display" id="destination12"> {{ $defaultContent['lang042'] }}:</span>     
                                              @endif 
                                               <svg id="drp-arrow1" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                                   <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                       stroke-linejoin="round"></path>
                                               </svg>
                                               <ul class="topbar-dropdown bg-light-gray">
                                                   <li class="item dark-black " wire:click="sortProducts('price','desc')">{{ $defaultContent['lang034'] }}: {{ $defaultContent['lang035'] }} {{ $defaultContent['lang037'] }} {{ $defaultContent['lang036'] }}</li>
                                                   <li class="item dark-black"wire:click="sortProducts('price','asc')">{{ $defaultContent['lang034'] }}: {{ $defaultContent['lang036'] }} {{ $defaultContent['lang037'] }} {{ $defaultContent['lang035'] }}</li>
                                                   <li class="item dark-black " wire:click="sortProducts('created_at','desc')">{{ $defaultContent['lang043'] }}: {{ $defaultContent['lang040'] }}</li>
                                                   <li class="item dark-black"wire:click="sortProducts('created_at','asc')"> {{ $defaultContent['lang043'] }}: {{ $defaultContent['lang041'] }}</li>
                                                   <li class="item dark-black " wire:click="sortProducts('views','desc')">{{ $defaultContent['lang044'] }}: {{ $defaultContent['lang045'] }}</li>
                                                   <li class="item dark-black"wire:click="sortProducts('sales','desc')"> {{ $defaultContent['lang044'] }}: {{ $defaultContent['lang046'] }}</li>
                                                   
                                                </ul>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="drop-container ">
                                       <div class="wrapper-dropdown dark-black" id="dropdown21">
                                            
                                           <span class="selected-display" id="destination21">Page Size: {{ $pageSize }}</span>
                                           <svg id="drp-arrow-02" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                               xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                               <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                   stroke-linejoin="round"></path>
                                           </svg>
                                           <ul class="topbar-dropdown bg-light-gray">
                                                @if($pageSize > 15) 
                                                <li class="item dark-black" wire:click="changePageSize('15')">Show:15</li>  
                                                @endif
                                               <li class="item dark-black" wire:click="changePageSize('30')">Show:30</li>
                                               <li class="item dark-black" wire:click="changePageSize('60')">Show:60</li>
                                               <li class="item dark-black" wire:click="changePageSize('120')">Show:120</li>
                                               <li class="item dark-black" wire:click="changePageSize('240')">Show:240</li>
                                               <li class="item dark-black" wire:click="changePageSize('all')">Show: All</li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           
                           </div>
                           
                           <div class="row row-gap-3">
                            @foreach($getProducts as $product)
                               <div class="col-xl-4 col-lg-4 col-md-6">
                                   <div class="featured-product-card bg-white br-10">
                                       <div class="image-box mb-16">
                                           <span class="sale-label">-12%</span>
                                           <a href="shop-detail.html">
                                            @if($product->photo)
                                            <img src="{{ asset('images/products/prod-'.$product->id.'/'.$product->photo) }}"  class="product-image" alt=""></a>
                                            @else  
                                            <img src="{{ asset('front/version1/assets/media/products/product-1.png') }}"  class="product-image" alt=""></a>     
                                            @endif 
                                           <div class="side-icons">
                                               <ul class="list-unstyled">
                                                   <li>
                                                       <a href="wishlist.html">
                                                           <img src="{{ asset('front/version1/assets/media/icons/heart.png') }}" alt="">
                                                       </a>
                                                   </li>
                                                   <li>
                                                       <a href="#" class="btn" wire:click="getProductQuickView('{{ $product->id }}')" data-bs-toggle="modal" data-bs-target="#getQuickView">
                                                           <img src="{{ asset('front/version1/assets/media/icons/eye.png') }}" alt="">
                                                       </a>
                                                   </li>
                                                   <li>
                                                       <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                           <img src="{{ asset('front/version1/assets/media/icons/compare.png') }}" alt="">
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                       <div class="product-desc">
                                           <h6 class="product-title mb-8"><a href="shop-detail.html">{{ $product->getContent()['name'] }}</a></h6>
                                           <div class="text mb-16">
                                               <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                           </div>
                                           <div class="rating-star mb-16 bg-white">
                                               <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                               <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;${{ $product->price }}</h6>
                                           </div>
                                           <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                       </div>
                                   </div>
                               </div>
                        @endforeach

                           </div>
                           <div class="pagination pt-40">
                             {{ $getProducts->links('vendor.pagination.version1.paginate') }}
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Modal -->
               
               <x-front.version-pages.version1.shop-components.quick-view-modal :getProduct="$getProduct"/>
             
           </section>
           <!-- Featured Product End -->
