<?php $__env->startSection('content'); ?>
    <article>
        <h3><?php echo e($post->title); ?></h3>
        <p>Published on <?php echo e($post->created_at); ?></p>
        <p2><?php echo e($post->content); ?></p2>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/article.blade.php ENDPATH**/ ?>