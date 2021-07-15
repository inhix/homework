<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список игроков
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
                        <a href="<?php echo e(route('players.create')); ?>" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="PlayersTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Никнейм</th>
                            <th>Фото</th>
                            <th>Описание</th>
                            <th>Состав</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $players;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $player): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($player->id); ?></td>
                                <td><?php echo e($player->name); ?></td>
                                <td><?php echo e($player->nickname); ?></td>
                                <td>
                                    <img src="<?php echo e($player->getImage()); ?>" alt="" width="100">
                                </td>
                                <td><?php echo e(substr($player->player_description, 0, 20) . '...'); ?></td>
                                <td><?php echo e($player->getCategoryTitle()); ?></td>
                                <td>
                                    <a href="<?php echo e(route('players.edit', $player->id)); ?>"
                                       class="fa fa-pencil"></a>
                                    <?php echo csrf_field(); ?>
                                    <button type="button"
                                            onclick="deletePlayer(<?php echo e($player->id); ?>, '<?php echo e(csrf_token()); ?>')"
                                            id="deletePost" class="delete">
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/players/index.blade.php ENDPATH**/ ?>
