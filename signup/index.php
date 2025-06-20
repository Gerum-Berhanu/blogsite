<?php
// require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
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
    <title>Sign up | Bootstrap Simple Admin Template</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/asset-header.php"; ?>
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="../assets/img/bootstraper-logo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Create new account</h6>
                    <form id="signup-form" action="" method="">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="full-name-field" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email-field" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password-field" class="form-control" placeholder="Password" required>
                        </div>
                        <!-- 
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Confirm password" required>
                        </div> 
                        -->
                        <div class="mb-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" name="check-field" type="checkbox" id="check1" required>
                                <label class="form-check-label" for="check1">
                                    I agree to the <a href="#" tabindex="-1">terms and policy</a>.
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Register</button>
                    </form>
                    <p class="mb-0 text-muted">Already have an account? <a href="../login/">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
<script src="./signup-script.js"></script>

</html>