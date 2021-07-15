<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список матчей
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
                        <a href="<?php echo e(route('matches.create')); ?>" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="MatchesTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Категория</th>
                            <th>Счёт</th>
                            <th>Название соперника</th>
                            <th>Логотип соперника</th>
                            <th>Турнир</th>
                            <th>Начало матча</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $matches;
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $match): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($match->id); ?></td>
                                <td><?php echo e($match->getCategoryTitle()); ?></td>
                                <td><?php echo e($match->score); ?></td>
                                <td><?php echo e($match->opponent_name); ?></td>
                                <td>
                                    <img src="<?php echo e($match->getOpponentLogo()); ?>" alt="" width="100">
                                </td>
                                <td><?php echo e($match->tournament); ?></td>
                                <td><?php echo e($match->start_time); ?></td>
                                <td>
                                    <a href="<?php echo e(route('matches.edit', $match->id)); ?>"
                                       class="fa fa-pencil"></a>
                                    <?php echo csrf_field(); ?>
                                    <button type="button"
                                            onclick="deleteMatch(<?php echo e($match->id); ?>, '<?php echo e(csrf_token()); ?>')"
                                            id="deleteMatch" class="delete">
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/matches/index.blade.php ENDPATH**/ ?>
