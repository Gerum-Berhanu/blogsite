<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . '://' . $host;
?>

<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <img src="../../assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="<?= $base_url . '/control-panel/dashboard/' ?>"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li>
            <a href="<?= $base_url . '/control-panel/blog/index.php' ?>"><i class="fas fa-book"></i> Index</a>
        </li>
        <li>
            <a href="<?= $base_url . '/control-panel/blog/newblog.php' ?>"><i class="fas fa-plus"></i> New Blog</a>
        </li>
        <li>
            <a href="<?= $base_url . '/control-panel/blog/admin_list_blog.php' ?>"><i class="fas fa-list"></i> List Blog</a>
        </li>

        <li>
            <a href="<?= $base_url . '/control-panel/users/users.php' ?>"><i class="fas fa-table"></i> Users</a>
        </li>

        <li>
            <a href="<?= $base_url . '/login/index.php' ?>"><i class="fas fa-lock"></i> Login</a>
        </li>
        <li>
            <a href="<?= $base_url . '/signup/index.php' ?>"><i class="fas fa-user-plus"></i> Signup</a>
        </li>

        <li class="d-none">
            <a href="<?= $base_url . '/login/forgot-password.php' ?>"><i class="fas fa-user-lock"></i> Forgot password</a>
        </li>

        <li>
            <a href="<?= $base_url . '/control-panel/dashboard/settings.php' ?>"><i class="fas fa-cog"></i>Settings</a>
        </li>
    </ul>
</nav>