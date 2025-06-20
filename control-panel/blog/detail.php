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
                <div class="card">
                  <h2>TITLE HEADING</h2>
                  <h5>Title description, Dec 7, 2017</h5>
                  <div style="width: 100%;">
                    <object class="fakeimg" data="Blowfish.png"></object>
                  </div>
                  <p>Some text..</p>

                  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>



                  <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-start align-items-center">
                          <img class="rounded-circle shadow-1-strong me-3" src="Blowfish.png" alt="avatar" width="60"
                            height="60" />
                          <div>
                            <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                            <p class="text-muted small mb-0">
                              Shared publicly - Jan 2020
                            </p>
                          </div>
                        </div>

                        <p class="mt-3 mb-4 pb-2">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                        </p>

                        <div class="small d-flex justify-content-start">
                          <a href="#!" class="d-flex align-items-center me-3">
                            <i class="far fa-thumbs-up me-2"></i>
                            <p class="mb-0">Like</p>
                          </a>
                          <a href="#!" class="d-flex align-items-center me-3">
                            <i class="far fa-comment-dots me-2"></i>
                            <p class="mb-0">Comment</p>
                          </a>
                          <a href="#!" class="d-flex align-items-center me-3">
                            <i class="fas fa-share me-2"></i>
                            <p class="mb-0">Share</p>
                          </a>
                        </div>
                      </div>
                      <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <div class="d-flex flex-start w-100">
                          <img class="rounded-circle shadow-1-strong me-3" src="showcase 1.gif" alt="avatar" width="40"
                            height="40" />
                          <div data-mdb-input-init class="form-outline w-100">
                            <label class="form-label" for="textAreaExample">Comment</label>
                            <textarea class="form-control" id="textAreaExample" rows="4"
                              style="background: #fff;"></textarea>
                          </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                          <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-sm">Post comment</button>
                          <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-outline-primary btn-sm">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>


              </div>
              <div class="rightcolumn">
                <div class="card">
                  <h2>ADS</h2>
                  <div class="fakeimg" style="height:100px;">Image</div>
                  <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                </div>
                <div class="card">
                  <h3>Popular Post</h3>
                  <div class="fakeimg">Image</div><br>
                  <div class="fakeimg">Image</div><br>
                  <div class="fakeimg">Image</div>
                </div>
                <div class="card">
                  <h3>Follow Me</h3>
                  <p>Some text..</p>
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