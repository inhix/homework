<!-- ======= Players Section ======= -->
<section id="players" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Игроки</h2>
            <p>На данный момент в Team Spirit выступает 19 игроков из всех стран СНГ.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php $__currentLoopData = $players;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $player): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <?php echo e(strip_tags($player->player_description)); ?>

                                <strong>Состав:</strong> <?php echo e($player->getCategoryTitle()); ?>.

                            </p>
                            <img src="<?php echo e($player->getImage()); ?>" class="testimonial-img" alt="">
                            <h3><?php echo e($player->name); ?></h3>
                            <h4><?php echo e($player->nickname); ?></h4>
                        </div>
                    </div><!-- End testimonial item -->
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
<?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/players.blade.php ENDPATH**/ ?>
