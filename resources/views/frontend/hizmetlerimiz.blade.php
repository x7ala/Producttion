@include('frontend.header');

<div class="container">

    <div class="row">

        @foreach($services as $service)

        <div class="col-md-4">
            <a href="hizmet/{{$service->link}}" class="card-link">
            <div class="card">
                <img src="{{$service->image}}" class="card-img-top" alt="{{$service->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$service->title}}</h5>
                    <p class="card-text">{{$service->summary}}</p>
                </div>
            </div>
            </a>
        </div>

        @endforeach

    </div>
</div>


<br>

@include('frontend.footer');
