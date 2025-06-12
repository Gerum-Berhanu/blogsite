<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
?>

<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Settings | Bootstrap Simple Admin Template</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/asset-header.php"; ?>
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php"; ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->

            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="nav navbar-nav ms-auto">






                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Mr X</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="settings.html" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>

                                        <li><a href="settings.html" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="signup.html" class="dropdown-item"><i class="fas fa-user-plus"></i> signup</a></li>
                                        <li><a href="login.html" class="dropdown-item"><i class="fas fa-user-lock"></i> signin</a></li>
                                        <li><a href="login.html" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Settings</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password_reset" role="tab" aria-controls="system" aria-selected="false">Change Password</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="col-md-6">
                                        <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                                        <div class="mb-3">
                                            <label for="site-title" class="form-label">User name</label>
                                            <input type="text" name="site_title" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Logo</label>
                                            <input class="form-control" name="site_logo" type="file" id="formFile1">
                                            <small class="text-muted">The image must have a maximum size of 1MB</small>
                                        </div>


                                        <div class="mb-3 text-end">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="password_reset" role="tabpanel" aria-labelledby="password-tab">
                                    <div class="col-md-6">
                                        <p class="text-muted">Password changing tab</p>
                                        <div class="mb-3">
                                            <label for="site-title" class="form-label">Old Password</label>
                                            <input type="text" name="site_title" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="site-title" class="form-label">New Password</label>
                                            <input type="text" name="site_title" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="site-title" class="form-label">Confirm Password</label>
                                            <input type="text" name="site_title" class="form-control">
                                        </div>




                                        <div class="mb-3 text-end">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>