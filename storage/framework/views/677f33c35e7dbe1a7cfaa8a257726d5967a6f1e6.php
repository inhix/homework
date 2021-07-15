<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="/admin">
            <i class="fa fa-dashboard"> </i> <span>Админ-панель</span>
        </a>
    </li>
    <li><a href="<?php echo e(route('posts.index')); ?>"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
    <li><a href="<?php echo e(route('matches.index')); ?>"><i class="fa fa-gamepad"></i> <span>Матчи</span></a></li>
    <li><a href="<?php echo e(route('categories.index')); ?>"><i class="fa fa-list-ul"></i> <span>Категории</span></a>
    </li>
    <li><a href="<?php echo e(route('tags.index')); ?>"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
    <li>
        <a href="/admin/comments">
            <i class="fa fa-commenting"></i> <span>Комментарии</span>
            <span class="pull-right-container">

        </span>
        </a>
    </li>
    <li><a href="<?php echo e(route('players.index')); ?>"><i class="fa fa-users"></i> <span>Игроки</span></a></li>
    <?php if (Illuminate\Support\Facades\Auth::user()->role_id === 1): ?>
        <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users"></i> <span>Пользователи</span></a>
        </li>
    <?php endif; ?>


</ul>
<?php /**PATH /Users/anymac/Desktop/laravel/blog/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>
