<!-- ======= Players Section ======= -->
<section id="players" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Игроки</h2>
            <p>На данный момент в Team Spirit выступает 19 игроков из всех стран СНГ.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($players as $player)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                {{strip_tags($player->player_description)}}
                                <strong>Состав:</strong> {{$player->getCategoryTitle()}}.

                            </p>
                            <img src="{{$player->getImage()}}" class="testimonial-img" alt="">
                            <h3>{{$player->name}}</h3>
                            <h4>{{$player->nickname}}</h4>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
