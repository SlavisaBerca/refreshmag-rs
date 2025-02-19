



          

            <!-- Recommended Product Start -->
            <section class="recommended-product bg-lightest-gray py-40">
                <div class="container-fluid">
                    <div class="top-bar mb-16">
                        <h5>{{ $sectionData->parentSection->getContent()['title'] }}</h5>
                        <a href="shop-grid-sidebar-1.html" class="cus-btn-arrow"> Show All 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                                <path
                                    d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                    stroke="#0C0C0D" stroke-width="2" />
                            </svg>
                        </a>
                    </div>
                    <div class="row row-gap-3">
                    @for($i=0; $i < 6; $i++)
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="featured-product-card bg-white br-10">
                                <div class="image-box mb-16">
                                    <span class="sale-label">-12%</span>
                                    <a href="shop-detail.html"><img src="{{ asset('front/version1/assets/media/products/rec-1.png') }}"  class="product-image" alt=""></a>
                                    <div class="side-icons">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="wishlist.html">
                                                    <img src="{{ asset('front/version1/assets/media/icons/heart.png') }}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#productQuickView">
                                                    <img src="{{ asset('front/version1/assets/media/icons/heart.png') }}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="zui-wrapper-button" data-bs-toggle="modal" data-bs-target="#comparepopup">
                                                    <img src="{{ asset('front/version1/assets/media/icons/heart.png') }}" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <h6 class="product-title mb-8"><a href="shop-detail.html">White Earbuds</a></h6>
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
            </section>
            <!-- Recommended Product End -->