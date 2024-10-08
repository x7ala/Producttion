@include("frontend.header");

<div class="container">
    <div class="row">
        <div class="mt-5 col-lg-12">
            <h1 style="margin-right: 50px;">{{$article->title}}</h1>
                <img src="{{url($article->image)}}" alt="Thumbnail" style="width: 500px;">
            <p class="mt-3">{!! $article->content !!}</p>
        </div>
    </div>
</div>



 <br>

 @include("frontend.footer");
