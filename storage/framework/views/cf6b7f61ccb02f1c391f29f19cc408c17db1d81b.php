<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список пользователей
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
                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="UsersTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Аватар</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $user): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <img src="<?php echo e($user->getImage()); ?>" alt="" class="img-responsive"
                                         width="80">
                                </td>
                                <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" class="fa fa-pencil"></a>
                                    <?php echo csrf_field(); ?>


                                    <button type="button"
                                            onclick="deleteUser(<?php echo e($user->id); ?>, '<?php echo e(csrf_token()); ?>')"
                                            id="deleteUser" class="delete">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/users/index.blade.php ENDPATH**/ ?>
