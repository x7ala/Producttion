@include('frontend.header');

<!-- Sanatcilar Carousel Slider -->
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
                <img src="imgs/sertab-erener-konser.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="Carousel-titles">Sertab Erener</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/silaya-cerez-ihalesi-250-bin-lira-ndxp.webp" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="Carousel-titles">Sıla</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/guruo-model2.webp" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="Carousel-titles">Gurup Model</h5>
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

    <br>


@include('frontend.footer');
