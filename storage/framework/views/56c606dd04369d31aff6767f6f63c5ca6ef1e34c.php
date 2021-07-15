<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
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
                        <a href="create.html" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Текст</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $comments;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $comment): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($comment->id); ?></td>
                                <td><?php echo e($comment->text); ?>

                                </td>
                                <td>
                                    <?php if ($comment->status == 1): ?>
                                        <a href="/admin/comments/toggle/<?php echo e($comment->id); ?>"
                                           class="fa fa-lock"></a>
                                    <?php else: ?>
                                        <a href="/admin/comments/toggle/<?php echo e($comment->id); ?>"
                                           class="fa fa-thumbs-o-up"></a>
                                    <?php endif; ?>
                                    <?php echo e(Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete'])); ?>

                                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>

                                    <?php echo e(Form::close()); ?>

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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/comments/index.blade.php ENDPATH**/ ?>
