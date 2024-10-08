@include('frontend.header');


<!-- news cards -->
<div class="container">
    <div class="row">
        @foreach($newsArticles as $article)
            <div class="col-md-4">
                <a href="haber/{{$article->link}}">
                <div class="card card-body h-70 border-info">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}">
                    <hr>
                    <h4 class="news-title">{{ $article->title }}</h4>
                    <p>{{ $article->content }}</p>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@include('frontend.footer');
