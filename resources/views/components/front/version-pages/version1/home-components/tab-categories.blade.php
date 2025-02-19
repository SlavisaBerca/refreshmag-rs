
            <!-- Featured Product Start -->
            <section class="featured-product-sec py-40 bg-lightest-gray">
                <div class="container-fluid">
                    <div class="row row-gap-3">
                    @foreach($getComponents->where('type','featured') as $featureBanner)
                        <div class="col-xl-3">
                            <a href="shop-grid-2.html" class="main-card text-center">
                                <h4 class="fw-500 white mb-32">{{ $featureBanner->getContent()['title'] }}</h4>
                                <div class="image mb-32">
                                    <img src="{{ asset('images/version1/page-sections/helping-banners/banner-'.$featureBanner->id.'/'.$featureBanner->photo) }}" alt="">
                                </div>
                                <h5 class="fw-500 white mb-20 text-center">{{ $featureBanner->getContent()['subtitle'] }}</h5>
                                <h5 class="fw-500 white text-center"></h5>
                            </a>
                        </div>
                    @endforeach
                        <div class="col-xl-9">
                            <div class="top-bar mb-16">
                               
                                <h5>{{ $sectionData->parentSection->getContent()['title'] }}</h5>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach($getCategories as $tabCategory)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link @if($loop->first) active @endif " id="all-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $tabCategory->id }}"
                                            type="button" role="tab" aria-controls="all" aria-selected="true">{{ $tabCategory->getName() }} </button>
                                    </li>
                                @endforeach
                                   
                                </ul>
                            </div>
                            <div class="tab-content " id="myTabContent">
                            @foreach($getCategories as $tabContent)
                                <div class="tab-pane fade @if($loop->first) show active @endif " id="tab-{{ $tabContent->id }}" role="tabpanel" aria-labelledby="all-tab">
                                   <div class="row row-gap-3">
                                    @for($i=0;$i < 4; $i++)
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                            <div class="featured-product-card bg-white br-10 ">
                                                <div class="image-box mb-16">
                                                    <span class="sale-label">-12%</span>
                                                    <a href="shop-detail.html"><img src="{{ asset('front/version1/assets/media/products/product-1.png') }}"  class="product-image" alt=""></a>
                                                    <div class="side-icons">
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="wishlist.html">
                                                                    <img src="{{ asset('front/version1/assets/media/icons/heart.png') }}" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
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
                                                    <h6 class="product-title mb-8"><a href="shop-detail.html">Elite Audio Gear-{{ $tabContent->id }}</a></h6>
                                                    <div class="text mb-12">
                                                        <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                                    </div>
                                                    <div class="rating-star mb-16 bg-white">
                                                        <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                                        <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$85.00</h6>
                                                    </div>
                                                    <a href="cart.html" class="cus-btn-2 w-100">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                       
                                   </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Featured Product End -->