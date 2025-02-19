  <!-- Brand Slider Start -->
  <div class="brand-sec">
    <div class="brand-slider">
    @for($i=0; $i < 6; $i++)
        <div class="brand-block">
            <img src="{{ asset('front/version1/assets/media/icons/logo-'.$i.'.png') }}" alt="">
        </div>
    @endfor
    </div>
</div>
<!-- Brand Slider End -->