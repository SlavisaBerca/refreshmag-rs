        <!-- Inner Banner Start -->
        <section class="inner-banner">
            <div class="container-fluid">
            @foreach($getComponents->where('type','second-inner') as $secondInnerBanner)
            @php $inner_second_subtitle = explode(',',$secondInnerBanner->getContent()['subtitle']); @endphp
                <div class="inner-content v-2">
                    <div class="inner-text">
                        <h2 class="white"> @if(sizeof($inner_second_subtitle) > 1) <span class="color-ter">{{ $inner_second_subtitle[0] }}</span>&nbsp; @endif {{ sizeof($inner_second_subtitle) > 1 ? $inner_second_subtitle[1] : $inner_second_subtitle[0] }}</h2>
                    </div>
                    <div class="coming-soon-cd">
                        <ul class="unstyled countdown">
                            <li>
                                <h2 class="h5">365</h2>
                                <h6 class="fw-500">Dana</h6>
                            </li>
                            <li>
                                <h2 class="h5">24</h2>
                                <h6 class="fw-500">Ore</h6>
                            </li>
                            <li>
                                <h2 class="h5">60</h2>
                                <h6 class="fw-500">Minute</h6>
                            </li>
                            <li>
                                <h2 class="h5">60</h2>
                                <h6 class="fw-500">Secunde</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-image-2">
                        <img src="{{ asset('images/version1/page-sections/inner-banners/banner-'.$secondInnerBanner->id.'/'.$secondInnerBanner->photo) }}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Inner Banner End -->