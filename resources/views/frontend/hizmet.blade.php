@include("frontend.header");

<div class="container">
    <div class="row">
        <div class="mt-5 col-lg-12">
            <h1 style="margin-right: 50px;">{{$service->title}}</h1>
            <a href="{{url($service->image)}}" data-lightbox="image">
                <img src="{{url($service->image)}}" alt="Thumbnail" style="width: 500px;">
            </a>
            <p class="mt-3">{!! $service->summary !!}</p>
        </div>
    </div>
</div>



 <br>

 @include("frontend.footer");
