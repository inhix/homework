<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Привет! Это админка
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Главная страница</h3>
                </div>
                <div class="box-body">
                    Текст инструкции по пользованию админкой
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    и здесь есть место для какого-нибудь текста
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->


        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>
