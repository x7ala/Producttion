@include('frontend.header');

<div class="container">

    <div class="row">

        @foreach($systems as $system)

        <div class="col-md-4">
            <a href="sistem/{{$system->link}}" class="card-link">
            <div class="card">
                <img src="{{$system->image}}" class="card-img-top" alt="{{$system->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$system->title}}</h5>
                    <p class="card-text">{{$system->summary}}</p>
                </div>
            </div>
            </a>
        </div>

        @endforeach

    </div>
</div>


<br>



 @include('frontend.footer');
