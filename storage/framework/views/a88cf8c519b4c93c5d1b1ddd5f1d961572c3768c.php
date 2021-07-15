<?php $__env->startSection('content'); ?>
    <article>
        <div class="row">


            <h2><?php echo e($post['0']->title); ?></h2>
            <p>Published on <?php echo e($post['0']->created_at); ?></p>
            <p><?php echo e($post['0']->content); ?></p>
        </div>
        <a href="/">Вернуться на главную</a>
    </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/posts/article.blade.php ENDPATH**/ ?>
