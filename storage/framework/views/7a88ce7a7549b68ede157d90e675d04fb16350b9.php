<!-- ======= Matches Section ======= -->
<section id="matches" class="pricing section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Матчи</h2>
        </div>
        <center><h5>Предстоящие матчи</h5></center>
        <?php if (count($upcomingMatches) > 0): ?>
            <div>

                <table id="UpcomingMatchesTable" class="table table-bordered table-striped" type="">
                    <tbody>

                    <?php $__currentLoopData = $upcomingMatches;
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData

                    as $match):
                    $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img src="/storage/images/<?php echo e($match->getCategoryIcon()); ?>" alt="" width="70">
                            <p>
                        </td>
                        <td>
                            <img src="/storage/images/vA6Y1XVX1v.png" alt="" height="50">
                            <p>
                                Team Spirit
                        </td>
                        <td>-</td>
                        <td>
                            <img src="<?php echo e($match->getOpponentLogo()); ?>" alt="" height="50">
                            <p>
                                <?php echo e($match->opponent_name); ?>

                        </td>
                        <td><h5><?php echo e($match->tournament); ?></h5></td>
                        <td>
                            <h2><?php echo e(date("h:i", strtotime($match->start_time))); ?></h2>
                            <p>
                            <?php echo e(date("d.m.Y", strtotime($match->start_time))); ?></td>
                        <td>
                    <tr>
                    </tbody>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        <?php else: ?>
            <p></p>
            <center><h3>Предстоящих матчей нет</h3></center>
        <?php endif; ?>

        <center><h5>Прошедшие матчи</h5></center>
        <p>
            <?php if (count($previousMatches) > 0): ?>
        <div>

            <table id="PreviousMatchesTable" class="table table-bordered table-striped" type="">
                <tbody>

                <?php $__currentLoopData = $previousMatches;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData

                as $match):
                $__env->incrementLoopIndices();
                $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="/storage/images/<?php echo e($match->getCategoryIcon()); ?>" alt="" width="70">
                        <p>
                    </td>
                    <td>
                        <img src="/storage/images/vA6Y1XVX1v.png" alt="" height="50">
                        <p>
                            Team Spirit
                    </td>
                    <td><h5><?php echo e($match->score); ?></h5></td>
                    <td>
                        <img src="<?php echo e($match->getOpponentLogo()); ?>" alt="" height="50">
                        <p>
                            <?php echo e($match->opponent_name); ?>

                    </td>
                    <td><h5><?php echo e($match->tournament); ?></h5></td>
                    <td>
                        <h2><?php echo e(date("H:i", strtotime($match->start_time))); ?></h2>
                        <p>
                        <?php echo e(date("d.m.Y", strtotime($match->start_time))); ?></td>
                    <td>
                <tr>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php endif; ?>


        </div>
    </div>
</section><!-- End Matches Section -->
<?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/matches.blade.php ENDPATH**/ ?>
