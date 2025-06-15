<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/scripts/classes.php";
$db = new Database();
$full_name = $db->execute_sql("SELECT full_name FROM users WHERE id = ?;", [$_SESSION["user_id"]], true)[0]["full_name"] ?? "User";

?>

<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <button type="button" id="sidebarCollapse" class="btn btn-light">
        <i class="fas fa-bars"></i><span></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <div class="nav-dropdown">

                    <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <span><?= $full_name ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                        <ul class="nav-list">
                            <li><a href="settings.html" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>

                            <li><a href="settings.html" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="signup.html" class="dropdown-item"><i class="fas fa-user-plus"></i> Sign up</a></li>
                            <li><a href="login.html" class="dropdown-item"><i class="fas fa-user-lock"></i> Sign in</a></li>
                            <li><a href="../../logout/" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                        </ul>
                    </div>

                </div>
            </li>
        </ul>

    </div>
</nav>