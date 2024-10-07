@include('frontend.header');

<div class="container">
    <div class="row">
        <div class="mt-5 col-lg-12">
            <h1 style="margin-right: 50px;">{{$system->title}}</h1>
            <a href="{{url($system->image)}}">
                <img src="{{url($system->image)}}" alt="Thumbnail" style="width: 500px;">
            </a>
            <p class="mt-3">{!! $system->content !!}</p>
        </div>
    </div>
</div>

<br>


@include('frontend.footer');
