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
    <title>Forms | Bootstrap Simple Admin Template</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/asset-header.php"; ?>
</head>

<body>
    <div class="wrapper">
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/sidebar.php"; ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->

            <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/navbar.php"; ?>
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

                                    <form id="newblog-form" accept-charset="utf-8">
                                        <div class="mb-3">
                                            <label for="text" class="form-label">Title</label>
                                            <input type="text" name="title-field" placeholder="title" class="form-control"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="text" class="form-label">Subject</label>
                                            <textarea type="text" name="subject-field" class="form-control"
                                                required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">file</label>
                                            <input class="form-control" name="file-field" type="file" id="formFile1" required>
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
<script src="./newblog-script.js"></script>

</html>