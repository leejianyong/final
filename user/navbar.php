<?php
  include('security.php');
  include_once('asset.php');
  // include_once("../auth/db.php");
  $qry = "SELECT user.*,jobseeker_detail.* FROM user LEFT JOIN jobseeker_detail ON user.id = jobseeker_detail.user_id WHERE user.id = '$_SESSION[userid]'";
  $sql = mysqli_query($conn,$qry);
  $result = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Company Job Request | User</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/icon-set/style.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/quill/dist/quill.snow.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/@yaireo/tagify/dist/tagify.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= $assets; ?>/assets/js/sweetalert2.all.min.js">
    
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?= $assets; ?>/assets/css/theme.min.css">
  </head>
  <style>
  .nav-subtitle{
    color: white !important;
  }
  .active.nav-link {
    border-left-color: white !important;
  }
  .navbar .nav-link:hover {
    color: white !important;
  }
  .js-nav-tooltip-link.nav-link.active{
    color:white !important;
  }
  .navbar{
    background-color: lightskyblue !important;
  }
  .close{
    color:white !important;
  }
  </style>
  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    
    <script src="<?= $assets; ?>/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>

    <!-- ========== HEADER ========== -->
    
      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="../index.php" aria-label="Front">
              <img class="navbar-brand-logo" src="<?= $assets; ?>/assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
              <img class="navbar-brand-logo-mini" src="<?= $assets; ?>/assets/img/logo_png/logo_y2.png" alt="Logo">
            </a>
            <!-- End Logo -->
          </div>

          <div class="navbar-nav-wrap-content-left">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
              <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
              <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
            </button>
            <!-- End Navbar Vertical Toggle -->
          </div>

          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content-right">
            <!-- Navbar -->
            <ul class="navbar-nav align-items-center flex-row">
              <li class="nav-item d-md-none">
                <!-- Search Trigger -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#searchDropdown",
                       "type": "css-animation",
                       "animationIn": "fadeIn",
                       "hasOverlay": "rgba(46, 52, 81, 0.1)",
                       "closeBreakpoint": "md"
                     }'>
                    <i class="tio-search"></i>
                  </a>
                </div>
                <!-- End Search Trigger -->
              </li>

              <li class="nav-item">
                <!-- Account -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#accountNavbarDropdown",
                       "type": "css-animation"
                     }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="<?php if(!empty($result['profile_image'])){ echo "../image/".$result['profile_image'];}else{ echo "../assets/img/160x160/img1.jpg"; } ?>" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>

                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <img class="avatar-img" src="<?php if(!empty($result['profile_image'])){ echo "../image/".$result['profile_image'];}else{ echo "../assets/img/160x160/img1.jpg"; } ?>" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="card-title h5"><?= $result['firstname']." ".$result['lastname']; ?></span>
                          <span class="card-text"><?= $result['email']; ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="account-setting.php">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                    </a>

                    <a class="dropdown-item" href="sign-out.php">
                      <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                    </a>
                  </div>
                </div>
                <!-- End Account -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div>
          <!-- End Secondary Content -->
        </div>
      </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->

    <!-- Navbar Vertical -->
    
      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
              <!-- Logo -->
              
                <a class="navbar-brand" href="../index.php" aria-label="Front">
                  <img class="navbar-brand-logo" src="<?= $assets; ?>/assets/img/logo_png/logo_ysl_lg2.png" alt="Logo">
                  <img class="navbar-brand-logo-mini" src="<?= $assets; ?>/assets/img/logo_png/logo_y2.png" alt="Logo">
                </a>
              
              <!-- End Logo -->

              <!-- Navbar Vertical Toggle -->
              <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                <i class="tio-clear tio-lg"></i>
              </button>
              <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content">
              <ul class="navbar-nav navbar-nav-lg nav-tabs">
                <!-- Company -->
                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/index.php") ? "active" : ""; ?><?= (@$request_url == $php_self."/profile-company-job.php") ? "active" : ""; ?><?= (@$request_url == $php_self."/profile-company.php") ? "active" : ""; ?>" href="./index.php" title="Company page" data-placement="left">
                  <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Company List</span>
                  </a>
                </li>
                <!-- End Company -->

                <!-- Job List -->
                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/job-list.php") ? "active" : ""; ?>" href="./job-list.php" title="Job page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Job List</span>
                  </a>
                </li>
                <!-- End Job List -->

                <li class="nav-item">
                  <div class="nav-divider"></div>
                </li>

                <!-- Start User -->
                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">User</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/account-setting.php") ? "active" : ""; ?>" href="./account-setting.php" title="Account Setting" data-placement="left">
                  <i class="tio-user-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Account Setting Page</span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/account-job-apply.php") ? "active" : ""; ?>" href="./account-job-apply.php" title="Account Job Apply" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Job Apply Page</span>
                  </a>
                </li>

                <li class="nav-item">
                  <div class="nav-divider"></div>
                </li>

                <!-- Start Group -->
                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">About</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."../index.php") ? "active" : ""; ?>" href="../index.php" title="Welcome page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">About Me</span>
                  </a>
                </li>
                <!-- End Group -->
              </ul>
            </div>
            <!-- End Content -->
          </div>
        </div>
      </aside>
    <!-- End Navbar Vertical -->