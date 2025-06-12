<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/scripts/classes.php";

$user_id = $_SESSION["user_id"];
$db = new Database();

$full_name = $db->execute_sql("SELECT full_name FROM users WHERE id = ?", [$user_id], true)[0]["full_name"];
$number_of_user = $db->execute_sql("SELECT COUNT(*) AS users_count FROM users", [], true)[0]["users_count"];
$number_of_blog = $db->execute_sql("SELECT COUNT(*) AS blogs_count FROM blogs", [], true)[0]["blogs_count"];
$number_of_comment = $db->execute_sql("SELECT COUNT(*) AS comment_count FROM blog_comments", [], true)[0]["comment_count"];
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
    <title>Dashboard | Bootstrap Simple Admin Template</title>
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
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span><?= $full_name ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="settings.html" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>

                                        <li><a href="settings.html" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="signup.html" class="dropdown-item"><i class="fas fa-user-plus"></i> signup</a></li>
                                        <li><a href="login.html" class="dropdown-item"><i class="fas fa-user-lock"></i> signin</a></li>
                                        <li><a href="../../logout/" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Number of user</p>
                                                <span class="number"><?= $number_of_user ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this year
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-file-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Number of Blog</p>
                                                <span class="number"><?= $number_of_blog ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this year
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Page views</p>
                                                <span class="number">28,210</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-stopwatch"></i> For this Year
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Number of comment</p>
                                                <span class="number"><?= $number_of_comment ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> For this year
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Traffic Overview</h5>
                                                <p class="text-muted">Current year website visitor data</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="trafficflow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Users Activity</h5>
                                                <p class="text-muted">Current year users activityy</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="sales"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h5 class="mb-0">Top Visitors by Country</h5>
                                        <p class="text-muted">Current year website visitor data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table table-striped">
                                            <thead class="success">
                                                <tr>
                                                    <th>Country</th>
                                                    <th class="text-end">Unique Visitors</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                                    <td class="text-end">27,340</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-in"></i> India</td>
                                                    <td class="text-end">21,280</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                                    <td class="text-end">18,210</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                                    <td class="text-end">15,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                                    <td class="text-end">14,276</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                                    <td class="text-end">13,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                                    <td class="text-end">12,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                                    <td class="text-end">11,886</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                                    <td class="text-end">11,509</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-nz"></i> New Zealand</td>
                                                    <td class="text-end">1,700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h5 class="mb-0">Most Visited Pages</h5>
                                        <p class="text-muted">Current year website visitor data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table table-striped">
                                            <thead class="success">
                                                <tr>
                                                    <th>Page Name</th>
                                                    <th class="text-end">Visitors</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>/about.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">8,340</td>
                                                </tr>
                                                <tr>
                                                    <td>/special-promo.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">7,280</td>
                                                </tr>
                                                <tr>
                                                    <td>/products.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">6,210</td>
                                                </tr>
                                                <tr>
                                                    <td>/documentation.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">5,176</td>
                                                </tr>
                                                <tr>
                                                    <td>/customer-support.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">4,276</td>
                                                </tr>
                                                <tr>
                                                    <td>/index.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">3,176</td>
                                                </tr>
                                                <tr>
                                                    <td>/products-pricing.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">2,176</td>
                                                </tr>
                                                <tr>
                                                    <td>/product-features.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">1,886</td>
                                                </tr>
                                                <tr>
                                                    <td>/contact-us.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">1,509</td>
                                                </tr>
                                                <tr>
                                                    <td>/terms-and-condition.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                                    <td class="text-end">1,100</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <script src="../../assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="../../assets/js/dashboard-charts.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>