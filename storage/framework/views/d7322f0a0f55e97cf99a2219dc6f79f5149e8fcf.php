<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить матч
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo e(Form::open([
                'route' => ['matches.update', $match->id],
                'files' => true,
                'method' => 'put'
            ])); ?>

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновляем матч</h3>
                    <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя соперника</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="<?php echo e($match->opponent_name); ?>" name="opponent_name">
                        </div>
                        <div class="form-group">
                            <img src="<?php echo e($match->getOpponentLogo()); ?>" alt="" class="img-responsive"
                                 width="200">
                            <label for="exampleInputFile">Лицевое изображение</label>
                            <input type="file" id="exampleInputFile" name="opponent_logo">
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <?php echo e(Form::select('category_id',
                                $categories,
                                $match->getCategoryID(),
                                ['class' => 'form-control select2'])); ?>

                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Время начала матча:</label>
                            <div class="input-group date">
                                <input id="datetime" type="datetime-local" type="text"
                                       value="<?php echo e(date("Y-m-d", strtotime($match->start_time)) . 'T' . date("h:i", strtotime($match->start_time))); ?>"
                                       name="start_time">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="exampleInputEmail1">Турнир</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                               value="<?php echo e($match->tournament); ?>" name="tournament">
                    </div>
                    <div class="col-md-12">
                        <label for="exampleInputEmail1">Счёт</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                               value="<?php echo e($match->score); ?>" name="score">
                    </div>

                </div>
            </div>
            <!-- /.box-body -->

            <button class="btn btn-warning pull-right">Сохранить</button>
    </div>

    <!-- /.box-footer-->
    <!-- /.box -->
<?php echo e(Form::close()); ?>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/matches/edit.blade.php ENDPATH**/ ?>
