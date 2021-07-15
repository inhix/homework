<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список категорий
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="CategoriesTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Иконка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $categories;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->title); ?></td>
                                <td>
                                    <img src="<?php echo e($category->getIcon()); ?>" alt="" width="100">
                                </td>
                                <td><a href="<?php echo e(route('categories.edit', $category->id)); ?>"
                                       class="fa fa-pencil"></a>


                                    <button type="button"
                                            onclick="deleteCategory(<?php echo e($category->id); ?>, '<?php echo e(csrf_token()); ?>')"
                                            id="deleteCategory" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                </td>
                            </tr>
                        <?php endforeach;
                        $__env->popLoop();
                        $loop = $__env->getLastLoop(); ?>

                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>
