
            <!-- Popular Product Start -->
            <section class="popular-product bg-lightest-gray pt-24 pb-40">
                <div class="container-fluid">
                    <div class="top-bar mb-16">
                        <h5>{{ $sectionData->parentSection->getContent()['title'] }}</h5>
                        <ul class="nav nav-tabs" id="myProduct" role="tablist">
                        @foreach($getCategories as $popularTab)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($loop->first) active @endif " id="laptop-pro-tab" data-bs-toggle="tab" data-bs-target="#popular-{{ $popularTab->id }}" type="button"
                                    role="tab" aria-controls="laptop-pro" aria-selected="false">{{ $popularTab->getName() }}</button>
                            </li>
                        @endforeach
                          
                        </ul>
                    </div>
                    <div class="tab-content" id="myProductContent">
                    @foreach($getCategories as $popularContent)
                        <div class="tab-pane fa de @if($loop->first) show active @endif " id="popular-{{ $popularContent->id }}" role="tabpanel" aria-labelledby="all-product-tab">
                            <div class="row row-gap-3">
                            @for($i=0; $i < 6; $i++)
                                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                                    <div class="featured-product-card bg-white br-10">
                                        <div class="image-box mb-16">
                                            <span class="sale-label">-12%</span>
                                            <a href="shop-detail.html"><img src="{{ asset('front/version1/assets/media/products/product-1b.png') }}"  class="product-image" alt=""></a>
                                            <div class="side-icons">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <img src="assets/media/icons/heart.png" alt="">
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
                                            <h6 class="product-title mb-8"><a href="shop-detail.html">{{ $popularContent->getName(). $i }}-{{ $popularContent->id }}</a></h6>
                                            <div class="text mb-12">
                                                <p class="light-gray">Lorem ipsum dolor sit amet consectetur. Id viverra cursus enim risus mattis urnanullam quis magna. Ligula maecenas integer diam risus rhoncus at. Viverra a consectetur ac lobortis.</p>
                                            </div>
                                            <div class="rating-star mb-16 bg-white">
                                                <h5 class="color-sec mb-24">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span class="text-16 fw-400 dark-black">(80)</span></h5>
                                                <h6 ><span class="text-decoration-line-through light-gray"> $12.00</span>&nbsp;&nbsp;$10.00</h6>
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
            </section>
            <!-- Popular Product End -->