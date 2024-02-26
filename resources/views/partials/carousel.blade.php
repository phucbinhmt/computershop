<div class="container px-0 my-2">
    <div id="carouselSlide" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSlide" data-slide-to="1"></li>
            <li data-target="#carouselSlide" data-slide-to="2"></li>
            <li data-target="#carouselSlide" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid" src="{{ asset('images/carousel/1.png') }}" alt="Slide Carousel">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="{{ asset('images/carousel/2.png') }}" alt="Slide Carousel">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="{{ asset('images/carousel/3.png') }}" alt="Slide Carousel">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="{{ asset('images/carousel/4.png') }}" alt="Slide Carousel">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
