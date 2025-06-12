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
    <title>Forms | Bootstrap Simple Admin Template</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/asset-header.php"; ?>
</head>

<body>
    <div class="wrapper">
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
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Mr X</span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="settings.html" class="dropdown-item"><i
                                                    class="fas fa-address-card"></i> Profile</a></li>

                                        <li><a href="settings.html" class="dropdown-item"><i class="fas fa-cog"></i>
                                                Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="signup.html" class="dropdown-item"><i class="fas fa-user-plus"></i>
                                                signup</a></li>
                                        <li><a href="login.html" class="dropdown-item"><i class="fas fa-user-lock"></i>
                                                signin</a></li>
                                        <li><a href="login.html" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt"></i> Logout</a></li>
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
                        <h3>New POST</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">New Blog</div>
                                <div class="card-body">

                                    <form accept-charset="utf-8">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Title</label>
                                            <input type="email" name="title" placeholder="title" class="form-control"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Subject</label>
                                            <textarea type="text" name="subject" class="form-control"
                                                required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">file</label>
                                            <input class="form-control" name="site_logo" type="file" id="formFile1">
                                            <small class="text-muted">The image must have a maximum size of 40MB</small>
                                        </div>
                                        <div class="mb-3">
                                            <input type="submit" class="btn btn-primary">
                                        </div>
                                    </form>
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
    <script src="../../assets/js/form-validator.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>