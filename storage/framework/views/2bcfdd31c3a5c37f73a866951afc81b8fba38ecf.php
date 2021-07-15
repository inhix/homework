<?php $__env->startSection('content'); ?>
    <article>
        <h2><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->created_at); ?></p>
        <p><?php echo e($post->content); ?></p>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/Posts/article.blade.php ENDPATH**/ ?>
