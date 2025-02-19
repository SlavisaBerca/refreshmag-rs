 <!-- HERO BANNER START -->
 <section class="hero-banner py-24">
    <div class="container-fluid">
        <div class="row row-gap-3">
            <div class="col-xl-8 col-lg-12">
            @foreach($getComponents->where('type','main')->take(1) as $component)
            @php $content = $component->getContent(); $subtitle = explode(',',$content['subtitle']);  @endphp
                <div class="banner-right">
                    <div class="banner-content-right">
                        <div class="text-box">
                            <h6 class="color-ter mb-32 d-sm-block d-none">{{ $content['title'] }}</h6>
                            <h2 class="white fw-600 mb-8">{{ $subtitle[0] }}<br> @if(sizeof($subtitle) > 2)  <span class="color-ter"> {{ $subtitle[1] }}&nbsp;  </span> @endif {{ sizeof($subtitle) > 2 ? $subtitle[2] : $subtitle[1] }}</h2>
                            <h6 class="white mb-32">{{ $content['short_description'] }}</h6>
                            <a href="shop-list-1.html" class="cus-btn-3 sec">Shop Now</a>
                        </div>
                        <div class="image-area">
                            <img src="{{ asset('images/version1/hero-banners/banner-'.$component->id.'/'.$component->photo) }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="d-xl-block d-sm-flex gap-16">
                @foreach($getComponents->where('type','help') as $helperComponent)
                @php $help_content = $helperComponent->getContent(); $help_subtitle = explode(',',$help_content['subtitle']); @endphp
                    <div class="banner-right mb-16">
                        <div class="banner-content-right v-2">
                            <div class="text-box">
                                <h5 class="fw-500 mb-16"><a href="shop-detail.html" class="white">{{ $helperComponent->getContent()['title'] }} @if(sizeof($help_subtitle) > 1) <br> <span class="color-ter">{{ $help_subtitle[0] }}&nbsp;</span> @endif {{ sizeof($help_subtitle) > 1 ? $help_subtitle[1] : $help_subtitle[0] }}</a></h5>
                                <p class="white fw-500">Limited Time: Online Only!</p>
                            </div>
                            <div class="image-area">
                                <img src="{{ asset('images/version1/hero-banners/banner-'.$helperComponent->id.'/'.$helperComponent->photo) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HERO BANNER END -->