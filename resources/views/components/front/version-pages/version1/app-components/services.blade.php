@foreach($getServices as $service)
<div class="col-xl-2 col-md-4 col-6">
    <div class="benefit-block">
        <div class="image-box mb-12">
            <img src="{{ asset('images/version1/services/'.$service->icon) }}" alt="">
        </div>
        <div class="content-box">
            <p class="fw-500 mb-4p">{{ $service->getContent()['title'] }}</p>
            <p class="light-gray">{{ $service->getContent()['description'] }}</p>
        </div>
    </div>
</div>
@endforeach
