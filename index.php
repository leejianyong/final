

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Company Job Request</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <link rel="stylesheet" href="assets/js/sweetalert2.all.min.js">
  <script src="assets/js/sweetalert2.all.min.js"></script>
</head>

<body class="bg-light">
<?php
include_once('auth/db.php');
if(isset($_SESSION['destroy']) && !empty($_SESSION['destroy'])){
  echo "<script>Swal.fire('$_SESSION[destroy]','$_SESSION[destroy]','success');</script>";
  unset($_SESSION['destroy']);
} 

if (isset($_SESSION['userid'])) {
  $qry = "SELECT * FROM user WHERE id='$_SESSION[userid]'";
  $sql = mysqli_query($conn, $qry);
  $row = mysqli_num_rows($sql);
  if ($row == 1) {
    $array = mysqli_fetch_array($sql);
    if ($array['permission'] == 'company') {
      $join_qry = "SELECT * FROM company_detail WHERE company_id='$_SESSION[userid]'";
      $result = mysqli_fetch_array(mysqli_query($conn, $join_qry));
    } elseif ($array['permission'] == 'user') {
      $join_qry = "SELECT * FROM company_detail WHERE company_id='$_SESSION[userid]'";
      $result = mysqli_fetch_array(mysqli_query($conn, $join_qry));
    } elseif ($array['permission'] == 'admin') {
      $join_qry = "SELECT * FROM company_detail WHERE company_id='$_SESSION[userid]'";
      $result = mysqli_fetch_array(mysqli_query($conn, $join_qry));
    }
  } else {
    session_destroy();
    // echo "<script>window.location.href = 'index.php';</script>";
  };
}
?>
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="" style="background-color: lightseagreen;">
      <div class="content container" style="height: 25rem;">
        <!-- Page Header -->
        <div class="page-header page-header-light page-header-reset navbar-expand-lg">
          <div class="navbar-nav">
            <div class="row align-items-center flex-grow-1">
              <div class="col">

                <?php if (isset($array)) {
                  if ($array['permission'] == 'company') { ?>
                    <!-- Logo -->
                    <a class="navbar-brand" href="company/index.php" aria-label="Company Job Request">
                      <img class="navbar-brand-logo" src="assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
                    </a>
                    <!-- End Logo -->
                  <?php } elseif ($array['permission'] == 'user') { ?>
                    <!-- Logo -->
                    <a class="navbar-brand" href="user/index.php" aria-label="Company Job Request">
                      <img class="navbar-brand-logo" src="assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
                    </a>
                    <!-- End Logo -->
                  <?php } elseif ($array['permission'] == 'admin') { ?>
                    <!-- Logo -->
                    <a class="navbar-brand" href="admin/index.php" aria-label="Company Job Request">
                      <img class="navbar-brand-logo" src="assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
                    </a>
                    <!-- End Logo -->
                  <?php }
                } else { ?>
                  <a class="navbar-brand" href="#" aria-label="Company Job Request">
                    <img class="navbar-brand-logo" src="assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
                  </a>
                <?php } ?>
              </div>

              <div class="col-auto">
                <!-- Account -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                       "target": "#accountNavbarDropdown",
                       "type": "css-animation"
                     }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <?php if (isset($result['profile_image'])) { ?>
                        <img class="avatar-img" src="<?php if (!empty($result['profile_image'])) {
                                                        echo "image/" . $result['profile_image'];
                                                      } else {
                                                        echo "assets/img/160x160/img1.jpg";
                                                      } ?>" alt="Image Description">
                      <?php } else {
                        if (isset($array)){
                        if($array['permission']=="admin"){ ?>
                        <img class="avatar-img" src="assets/img/160x160/img4.jpg" alt="Image Description">
                      <?php }else{ ?>
                        <img class="avatar-img" src="assets/img/160x160/img1.jpg" alt="Image Description">
                      <?php } }else{ ?>
                        <img class="avatar-img" src="assets/img/160x160/img1.jpg" alt="Image Description">
                      <?php } } ?>

                      <?php
                      if (isset($result['status'])) {
                        if ($result['status'] == 'active') { ?>
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        <?php } elseif ($result['status'] == 'pending') { ?>
                          <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                        <?php } elseif ($result['status'] == 'drop') { ?>
                          <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                        <?php } elseif ($result['status'] == 'blacklist') { ?>
                          <span class="avatar-status avatar-sm-status avatar-status-secondary"></span>
                        <?php }
                      } else { ?>
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      <?php } ?>
                    </div>
                  </a>

                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <?php if (isset($result['profile_image'])) { ?>
                            <img class="avatar-img" src="<?php if (!empty($result['profile_image'])) {
                                                            echo "image/".$result['profile_image'];
                                                          } else {
                                                            echo "assets/img/160x160/img1.jpg";
                                                          } ?>" alt="Image Description">
                          <?php } else { ?>
                            <img class="avatar-img" src="assets/img/160x160/img1.jpg" alt="Image Description">
                          <?php } ?>
                        </div>
                        <div class="media-body">
                          <?php if (isset($array['email'])) { ?>
                            <span class="card-title h5"><?php if (!isset($result['firstname']) || !isset($result['lastname'])) {
                                                          echo $array['username'];
                                                        } else {
                                                          echo $result['firstname'];
                                                          echo $result['lastname'];
                                                        } ?></span>
                            <span class="card-text"><?= $array['email']; ?></span>
                          <?php } else { ?>
                            <span class="card-title h5">Sign In/Sign Up</span>
                          <?php } ?>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <?php if (isset($_SESSION['userid'])) {
                      if (isset($array['permission'])) {
                        if ($array['permission'] == "company") {
                          if ($array['status'] == "pending") { ?>
                            <a class="dropdown-item" href="company/account-setting.php">
                              <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                            </a>
                          <?php } elseif ($array['status'] == "active") { ?>
                            <a class="dropdown-item" href="company/index.php">
                              <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                            </a>
                          <?php }
                        } elseif ($array['permission'] == "user") { ?>
                          <a class="dropdown-item" href="user/account-setting.php">
                            <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                          </a>
                      <?php }
                      }
                      ?>
                      <a class="dropdown-item" href="signout.php">
                        <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                      </a>
                    <?php } else { ?>
                      <a class="dropdown-item text-center" href="user-signin.php">
                        <span class="text-truncate pr-2" title="Sign In">Login <b>Account</b></span>
                      </a>
                      <a class="dropdown-item text-center" href="user-signup.php">
                        <span class="text-truncate pr-2" title="Sign Up User">Sign Up <b>User</b></span>
                      </a>
                      <a class="dropdown-item text-center" href="company-signup.php">
                        <span class="text-truncate pr-2" title="Sign Up Company">Sign Up <b>Company</b></span>
                      </a>
                    <?php } ?>
                  </div>
                </div>
                <!-- End Account -->
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Page Header -->
      </div>
    </div>
    <!-- End Content -->

    <!-- Content -->
    <div class="content container" style="margin-top: -19rem;">
      <!-- Card -->
      <div class="card mb-3 mb-lg-5">
        <div class="card-body card-body-centered py-5 my-lg-5">

          <div class="col-lg-12">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5 border border-primary ">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                      <img class="first-slide " src="image/index_job_1.jpg" alt="First slide" style="height:600px;width:100%;object-fit: cover;">
                      <div class="carousel-caption imgText">
                        <h1> Welcome to Job Quest </h1>
                        <p> Your future begins here </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide" src="image/index_job_2.jpg" alt="Second slide" style="height:600px;width:100%;object-fit: cover;">
                    <div class="container">
                      <div class="carousel-caption imgText">
                        <h1>Browse through our various selections of careers</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="thrid-slide" src="image/index_job_3.jpg" alt="Third slide" style="height:600px;width:100%;object-fit: cover;">
                    <div class="container">
                      <div class="carousel-caption imgText">
                        <h1>5 Job Tips for Candidates Seeking L&D Employment</h1>
                        <h5>1. Brainstorm Creative Solutions</h5>
                        <h5>2. Go Beyond the Traditional</h5>
                        <h5>3. Be Flexible</h5>
                        <h5>4. Focus on Results</h5>
                        <h5>5. Demonstrate a Commitment to Inclusivity</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-12">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5 border border-primary border-bottom-0 border-right-0">
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading" style="font-size: 35px;">Find the career of your dreams <br><span class="text-muted">It'll blow your mind.</span></h2>
                  <p class="lead" style="font-size: 20px;">We help Interns and Fresh Graduates to find their dream job</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-fluid mx-auto" src="image/second_index_1.jpg" alt="Generic placeholder image">
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-12">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5 border border-primary border-bottom-0 border-left-0">
              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading" style="font-size: 35px;">Hiring people can be easy too<br><span class="text-muted">See for yourself.</span></h2>
                  <p class="lead" style="font-size: 20px;">Employers and Managers can promote their companies and post vacancies here.</p>
                </div>
                <div class="col-md-5 order-md-1">
                  <img class="featurette-image img-fluid mx-auto" src="image/second_index_job3.jpg" alt="Generic placeholder image">
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-12">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5 border border-primary border-bottom-0 border-right-0">
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading" style="font-size: 35px;">And lastly, this one. <br><span class="text-muted">Checkmate.</span></h2>
                  <p class="lead" style="font-size: 20px;">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-fluid mx-auto" src="image/second_index_job4.jpeg" alt="Generic placeholder image">
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-12">
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5 border border-primary border-bottom-0 border-left-0">
              <div class="text-center">
                <div>
                  <h2 style="font-size: 30px;">Build Teams Like The Best Companies In Malaysia</h2>
                </div>
                <img src="image/second_index_job2.png" class="img-fluid" alt="Responsive image" />
                <div>
                  <h4>We help companies of all sizes and industries hire the best talent in Malaysia. Whether you are an SME, startup, local corporate or MNC, we can customise cost-effective solutions that will work best for you.</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>

      </div>
    </div>
    <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <!-- <div class="footer container">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0"><span class="d-none d-sm-inline-block">2021 Copyright </span> &copy; Job Quest System </p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end"> -->
    <!-- List Dot -->
    <!-- <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>

              
                </ul> -->
    <!-- End List Dot -->
    <!-- </div>
            </div>
          </div>
        </div> -->
    <!-- End Footer -->

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Links -->
        <section class="">
          <!-- Grid row-->
          <div class="row">
            <!-- Grid column-->
            <div class="col-lg-4 col-md-8 mb-6 mb-md-0">
              <u>
                <h5 class="text-uppercase text-white" style="font-size: 20px;">Our Mission</h5>
              </u>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">We are on an unwavering mission to be Asia’s most loved job search platform. </a>
                </li>
                <li>
                  <a href="#!" class="text-white">helping people discover any job with any employer in the market.</a>
                </li>
              </ul>
            </div>
            <!-- End Grid column-->

            <!-- Grid column-->
            <div class="col-lg-4 col-md-8 mb-6 mb-md-0">
              <u>
                <h5 class="text-uppercase text-white" style="font-size: 20px;">Job Seekers</h5>
              </u>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Jobs by Specialization</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Jobs by Company Name</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Safe Job Search Guide</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Career Resources</a>
                </li>
              </ul>
            </div>

            <!-- End Grid column-->

            <!-- Grid column-->
            <div class="col-lg-4 col-md-8 mb-6 mb-md-0">
              <u>
                <h5 class="text-uppercase text-white" style="font-size: 20px;">Job Quest</h5>
              </u>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">About Us</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Contact Us</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Partner With Us</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Privacy Policy</a>
                </li>
              </ul>
            </div>
            <!-- End Grid column-->
          </div>
          <!-- End Grid row-->
        </section>
        <!-- End Section: Links -->
      </div>
      <!-- End Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        2021 Copyright ©
        <a class="text-white" href="https://mdbootstrap.com/">Job Quest System</a>
      </div>
      <!-- End Copyright -->
    </footer>

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function() {
      // INITIALIZATION OF UNFOLD
      // =======================================================
      $('.js-hs-unfold-invoker').each(function() {
        var unfold = new HSUnfold($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

</html>