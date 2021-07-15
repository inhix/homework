<!-- ======= News Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Новости</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach(\App\Category::get() as $category)
                        <li data-filter=".filter-{{ $category->name }}">{{ $category->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($latestNews as $news)
                @if(!empty($news->image))
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$news->getCategoryName()}}">
                        <div class="portfolio-wrap">
                            <img src="{{ $news->getImage() }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$news->title}}</h4>
                                <p>
                                    {{$news->getCategoryTitle()}}
                                </p>

                                <div class="portfolio-links">
                                    <a href="{{$news->getImage()}}" data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="{{$news->description}}"><i
                                            class="bx bx-plus" width="100"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

    </div>
</section><!-- End News Section -->
