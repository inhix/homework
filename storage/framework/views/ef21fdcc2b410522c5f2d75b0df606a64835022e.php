<?php $__env->startSection('content'); ?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php $__currentLoopData = $posts;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $post): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?php echo e(route('post.show', $post->id)); ?>"><img
                                    src="<?php echo e($post->getImage()); ?>" alt=""></a>

                            <a href="<?php echo e(route('post.show', $post->id)); ?>"
                               class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <?php if ($post->hasCategory()): ?>
                                    <h6>
                                        <a href="<?php echo e(route('category.show', $post->category->id)); ?>"> <?php echo e($post->getCategoryTitle()); ?></a>
                                    </h6>
                                <?php endif; ?>
                                <h1 class="entry-title"><a
                                        href="<?php echo e(route('post.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
                                </h1>


                            </header>
                            <div class="entry-content">
                                <?php echo $post->description; ?>


                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?php echo e(route('post.show', $post->id)); ?>" class="more-link">Continue
                                        Reading</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <a
                                        href="#"><?php echo e($post->author->name); ?></a> On <?php echo e($post->getDate()); ?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>

                <?php echo e($posts->links()); ?>

            </div>
            <?php echo $__env->make('pages._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<!-- end main content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/pages/index.blade.php ENDPATH**/ ?>
