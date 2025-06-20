<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/scripts/classes.php";

$db = new Database();
$rows = $db->execute_sql("SELECT title, file_location, author_id FROM blogs", [], true);
$uploadDir = $_SERVER["DOCUMENT_ROOT"] . "/files/uploads/blog-images/";

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

      <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/navbar.php"; ?>
      <!-- end of navbar navigation -->
      <div class="content">
        <div class="container">

          <div class="row">

            <div class="row">
              <div class="leftcolumn">

              <?php
              foreach ($rows as $row) {
                echo
                '<div class="card">
                  <h2>' . htmlspecialchars($row['title']) . '</h2>
                  <!-- <h5>Title description, Dec 7, 2017</h5> -->
                  <img class="fakeimg" src="/files/uploads/blog-images/'. $row['file_location'] .'"></img>
                  <!-- <div >Image</div> -->
                  <br>
                  <!-- <p>Some text..</p> -->
                  <a href="admin_blog_detail.html" class="text-primmary "
                    style="width: max-content; color:blue ;text-align: left;">Detail</a>
                </div>
                ';
              }
              ?>

              </div>
              <div class="rightcolumn">

                <div class="card">
                  <h3>Popular Post</h3>
                  <div class="fakeimg">Image</div><br>
                  <div class="fakeimg">Image</div><br>
                  <div class="fakeimg">Image</div>
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
<style>
  * {
    box-sizing: border-box;
  }

  /* Add a gray background color with some padding */
  body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
  }

  /* Header/Blog Title */
  .header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
  }

  /* Create two unequal columns that floats next to each other */
  /* Left column */
  .leftcolumn {
    float: left;
    width: 75%;
  }

  /* Right column */
  .rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
  }

  /* Fake image */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }

  /* Add a card effect for articles */
  .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Footer */
  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) {

    .leftcolumn,
    .rightcolumn {
      width: 100%;
      padding: 0;
    }
  }

  .fakeimg,
  video,
  audio,
  iframe,
  embed,
  object {
    max-width: 100%;
    height: 300px;
    /* Maintains aspect ratio */
    object-fit: contain;
    /* Options: contain, cover, fill */
  }
</style>