<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo e(Form::open([
                'route' => ['posts.update', $post->id],
                'files' => true,
                'method' => 'put'
            ])); ?>

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновляем статью</h3>
                    <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="<?php echo e($post->title); ?>" name="title">
                        </div>
                        <div class="form-group">
                            <img src="<?php echo e($post->getImage()); ?>" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевое изображение</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <?php echo e(Form::select('category_id',
                                $categories,
                                $post->getCategoryID(),
                                ['class' => 'form-control select2'])); ?>

                        </div>
                        <div class="form-group">
                            <label>Теги</label>
                            <?php echo e(Form::select('tags[]',
                                $tags,
                                $selectedTags,
                                ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Выберите теги'])); ?>

                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Дата:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker"
                                       value="<?php echo e($post->date); ?>" name="date">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <?php echo e(Form::checkbox('is_featured', '1', $post->is_featured)); ?>

                            </label>
                            <label>
                                Рекомендовать
                            </label>
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">
                            <label>
                                <?php echo e(Form::checkbox('status', '1', $post->status)); ?>

                            </label>
                            <label>
                                Черновик
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control"><?php echo e($post->description); ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea name="content" id="" cols="30" rows="10"
                                      class="form-control"><?php echo e($post->content); ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Сохранить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            <?php echo e(Form::close()); ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/posts/edit.blade.php ENDPATH**/ ?>
