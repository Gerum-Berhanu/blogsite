<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/scripts/classes.php";

$db = new Database();

$rows = $db->execute_sql("SELECT full_name, email FROM users", [], true);

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
    <title>Users | Bootstrap Simple Admin Template</title>
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
                        <h3>Users

                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($rows as $row) {
                                        echo 
                                        '<tr>
                                            <td>' . htmlspecialchars($row["full_name"]) . '</td>
                                            <td>' . htmlspecialchars($row["email"]) . '</td>
                                            <td>Manager</td>
                                            <td>Admin</td>
                                            <td>Active</td>
                                            <td class="text-end">
                                                <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/datatables/datatables.min.js"></script>
    <script src="../../assets/js/initiate-datatables.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>