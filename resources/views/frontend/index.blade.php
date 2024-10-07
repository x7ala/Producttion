@include("frontend.header");

<!-- Carousel Slider -->
<div class="carousel-container">
<div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators (using div instead of ol) -->
    <div class="carousel-indicators">
        <span data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></span>
        <span data-bs-target="#carouselIndicators" data-bs-slide-to="1"></span>
        <span data-bs-target="#carouselIndicators" data-bs-slide-to="2"></span>
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgs/maxresdefault.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="Carousel-titles">Yaratıcılığın Ortak Noktası</h5>
                <p class="Carousel-prgs">Konseptten Ekrana, Yanınızdayız.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imgs/mezuniyet.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="Carousel-titles">Kapsamlı Etkinlik Desteği</h5>
                <p>Tüm etkinliklerinizde yanınızdayız… kurumsal organizasyonlardan özel kutlamalara kadar</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imgs/eventprod2.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="Carousel-titles">Third Slide</h5>
                <p>Description for the third slide.</p>
            </div>
        </div>
    </div>

    <!-- Controls for prev/next arrows -->
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
</div>



<!-- Abt Us -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-5">
            <img src="imgs/1.jpeg" class="card-img-top1" alt="Card 1" style="width: 100%;">
        </div>
        <div class="col-md-6 col-lg-7">
            <h1 class="hizmet" style="text-align: left;margin-bottom: 40px;margin-top: 20px;"> Hakkımızda </h1>
        <p>2011 yılında ,Yavuz Toraman ve Berk Toraman tarafından aile şirketi olarak kurulan TT PRODUCTION sektördeki tecrübesini,güvenilirliğini ve dostlarını 1996-2011 yılları arasında Park Production ortaklığı döneminde kazanmış olup , 2011 den itibaren TT PRODUCTION olarak yoluna  devam etmektedir. Hizmet sektöründe şunu anlıyoruz ki , güvenilirlik, kurumların isim ve markasına değil, kişilere olmuştur. Dostlarımızdan aldığımız güven ve destekle yatırımlarımıza devam etmekteyiz.</p>


        <div style="margin-top: 50px;"><a class="all-button" href="{{url('hakkimizda')}}" class="btn btn-primary"><strong>Detayli Bilgi</strong></a></div>


        </div>
    </div>
</div>



<!-- Hizmetlerimiz card layout -->
<h1 class="hizmet" style="margin-top: 80px;"> <a style="text-decoration:none;color:#000" href="{{url('hizmetlerimiz')}}">Hizmetlerimiz</a> </h1>

<p class="hizmet-p">Etkinlik ve organizasyonlarınız için sunduğumuz hizmetler</p>

<div class="container my-4"> <!-- Add a top margin to offset the fixed navbar -->
    <div class="row "> <!-- Center the row within the container -->
        <!-- Card 1 -->
        @foreach ($services as $service)

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="{{$service->image}}" class="card-img-top" alt="{{$service->title}}">
                <div class="card-body">
                    <a href="{{url('hizmet/'.$service->link)}}" class="btn btn-primary"><strong>{{$service->title}}</strong></a>
                </div>
            </div>
        </div>

        @endforeach




    </div>
</div>




<!-- Sistemler card layout -->

<h1 class="sistemler" style="margin-top: 50px;"> <a style="text-decoration:none;color:#000" href="{{url('sistemler')}}">Sistemler</a> </h1>

<p class="sistemler-p" style="margin-bottom: 50px;">Profesyonel ekibimizle her türlü etkinliğinizde yanınızdayız</p>

<div class="container my-4"> <!-- Add a top margin to offset the fixed navbar -->
    <div class="row "> <!-- Center the row within the container -->
        <!-- Card 1 -->

        @foreach ($systems as $system)

        <div class="col-md-6 col-lg-3">
            <div class="card">
                <img src="{{$system->image}}" class="card-img-top" alt="{{$system->title}}">
                <div class="card-body">
                    <a href="{{url('sistem/'.$system->link)}}" class="btn btn-primary"><strong>{{$system->title}}</strong></a>
                </div>
            </div>
        </div>

        @endforeach


    </div>
</div>


<br>

@include("frontend.footer");
