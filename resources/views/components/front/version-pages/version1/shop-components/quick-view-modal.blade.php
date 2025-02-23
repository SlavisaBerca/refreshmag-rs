
<div class="modal fade" id="getQuickView" wire:ignore.self data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="shop-detail">
                    <div class="detail-wrapper">
                        @if($getProduct)
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="quick-image-box">
                                    @if($getProduct->photo)
                                    <img src="{{ asset('images/products/prod-'.$getProduct->id.'/'.$getProduct->photo) }}" alt="">
                                    @else  
                                    <img src="{{ asset('front/version1/assets/media/products/quick-view-image.png') }}" alt="">
                                    @endif 
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-text-container bg-white br-20">
                                    <div class="close-content text-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <h3 class="fw-600 mb-16"> {{ $getProduct->getContent()['name'].''.$getProduct->id }} </h3>
                                    <div class="d-flex align-items-center flex-wrap gap-16 mb-24">
                                        <h5 class="color-sec">★★★★<span class="light-gray">★</span>&nbsp;&nbsp;<span
                                                class="text-16 fw-400 dark-black">(02 Reviews)</span></h5>
                                        <div class="vr-line vr-line-2"></div>
                                        <p class="light-gray">Brand: <span class="color-primary">Beast</span></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-16 mb-24">
                                        <p class="light-gray text-decoration-line-through">${{  $getProduct->price }}</p>
                                        <h5>${{ $getProduct->price }}</h5>
                                        <span class="label white">-12%</span>
                                    </div>
                                    <p class="light-gray mb-24">
                                        {{ \Illuminate\Support\Str::limit( $getProduct->getContent()['short_description'], 80) }}
                                    </p>
                                    <div class="hr-line mb-24"></div>
                                    <div class="function-bar mb-16">
                                        <div class="quantity quantity-wrap">
                                            <div class="input-area quantity-wrap">
                                                <input class="decrement" type="button" value="-">
                                                <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                                    class="number">
                                                <input class="increment" type="button" value="+">
                                            </div>
                                        </div>
                                        <div class="cart-btn w-100">
                                            <a href="cart.html" class="cus-btn-2 w-100">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="hr-line mb-24"></div>
                                    <div class="d-flex align-items-center gap-16 mb-16">
                                        <h6>Category:</h6>
                                        <p class="light-gray">{{ $getProduct->parentCategory->getName() }}</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-16 mb-16">
                                        <h6>Tags:</h6>
                                        <p class="light-gray">5G Compatible , <span>256GB Storage , </span> Student Phone</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
