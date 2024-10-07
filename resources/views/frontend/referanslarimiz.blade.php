@include('frontend.header');

<div class="container">
    <div class="row">
        @foreach($references as $reference)
        <div class="mt-5 col-lg-7">
            {!! $reference->description !!}
        </div>
        @endforeach
    </div>
</div>



@include('frontend.footer');
