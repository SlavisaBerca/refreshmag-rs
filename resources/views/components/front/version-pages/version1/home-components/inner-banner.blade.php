  <!-- Inner Banner Start -->
  <section class="inner-banner">
    <div class="container-fluid">
    @foreach($getComponents->where('type','inner') as $innerBanner)
    @php $inner_subtitle = explode(',',$innerBanner->getContent()['subtitle']);  @endphp
        <div class="inner-content">
            <div class="inner-text">
                <h2 class="white">{{ $innerBanner->getContent()['title'] }} <br> @if(sizeof($inner_subtitle) > 1) <span class="color-ter">{{ $inner_subtitle[0] }}</span>&nbsp; @endif {{ sizeof($inner_subtitle) > 1 ? $inner_subtitle[1] : $inner_subtitle[0]}}</h2>
            </div>
            <div class="inner-image">
                <img src="{{ asset('images/version1/page-sections/inner-banners/banner-'.$innerBanner->id. '/'.$innerBanner->photo) }}" alt="">
            </div>
            <div class="inner-image-2">
                <img src="{{ asset('images/version1/page-sections/inner-banners/banner-'.$innerBanner->id. '/'.$innerBanner->thumbnail) }}" alt="">
            </div>
        </div>
    @endforeach
    </div>
</section>
<!-- Inner Banner End -->