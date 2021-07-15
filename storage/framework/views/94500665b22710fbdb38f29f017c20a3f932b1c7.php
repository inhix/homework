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
                    <?php $__currentLoopData = \App\Category::get();
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>
                        <li data-filter=".filter-<?php echo e($category->name); ?>"><?php echo e($category->title); ?></li>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php $__currentLoopData = $latestNews;
            $__env->addLoop($__currentLoopData);
            foreach ($__currentLoopData as $news): $__env->incrementLoopIndices();
                $loop = $__env->getLastLoop(); ?>
                <?php if (!empty($news->image)): ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo e($news->getCategoryName()); ?>">
                        <div class="portfolio-wrap">
                            <img src="<?php echo e($news->getImage()); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?php echo e($news->title); ?></h4>
                                <p>
                                    <?php echo e($news->getCategoryTitle()); ?>

                                </p>

                                <div class="portfolio-links">
                                    <a href="<?php echo e($news->getImage()); ?>" data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="<?php echo e($news->description); ?>"><i
                                            class="bx bx-plus" width="100"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach;
            $__env->popLoop();
            $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</section><!-- End News Section -->
<?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/news.blade.php ENDPATH**/ ?>
