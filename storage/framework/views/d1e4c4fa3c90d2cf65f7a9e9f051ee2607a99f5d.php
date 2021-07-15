<?php $__env->startSection('content'); ?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="leave-comment mr0"><!--leave comment-->
                    <?php if (session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h3 class="text-uppercase">My profile</h3>
                    <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br>
                    <img src="<?php echo e($user->getImage()); ?>" alt="" class="profile-image">
                    <form class="form-horizontal contact-form" role="form" method="post" action="/profile"
                          enctype="multipart/form-data">

                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Name" value="<?php echo e($user->name); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email" value="<?php echo e($user->email); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="file" class="form-control" id="image" name="avatar">
                            </div>
                        </div>
                        <button type="submit" class="btn send-btn">Update</button>

                    </form>
                </div><!--end leave comment-->
            </div>
            <?php echo $__env->make('pages._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<!-- end main content-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/pages/profile.blade.php ENDPATH**/ ?>
