<?php
  include('security.php');
  include_once('asset.php');
  $qry = "SELECT user.*,company_detail.* FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.id = '$_SESSION[userid]'";
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
    <title>Company &amp; Company Request</title>

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

  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    
    <script src="<?= $assets; ?>/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>

    <!-- ========== HEADER ========== -->
    
      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="./index.php" aria-label="Front">
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
                      <img class="avatar-img" src="<?php if(!empty($result['profile_image'])){ echo "../image/".$result['profile_image'];}else{ echo "../assets/img/160x160/img6.jpg"; } ?>" alt="Image Description">
                      <?php if($result['status']=='active'){ ?>
                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                      <?php }elseif($result['status']=='pending'){ ?>
                        <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                      <?php }elseif($result['status']=='drop'){ ?>
                        <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                      <?php }elseif($result['status']=='blacklist'){ ?>
                        <span class="avatar-status avatar-sm-status avatar-status-secondary"></span>
                      <?php } ?>
                    </div>
                  </a>

                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <img class="avatar-img" src="<?php if(!empty($result['profile_image'])){ echo "../image/".$result['profile_image'];}else{ echo "../assets/img/160x160/img6.jpg"; } ?>" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="card-title h5"><?= $result['firstname']." ".$result['lastname']; ?></span>
                          <span class="card-text"><?= $result['email']; ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Settings">Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

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
              
                <a class="navbar-brand" href="./index.php" aria-label="Front">
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
                
                <!-- Start Company -->
                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">Company</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/index.php") ? "active" : ""; ?>" href="./index.php" title="Welcome page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Account Profile</span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/project-add.php") ? "active" : ""; ?><?= (@$request_url == $php_self."/project-detail.php") ? "active" : ""; ?><?= (@$request_url == $php_self."/project-list.php") ? "active" : ""; ?>" href="./project-list.php" title="Welcome page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Company JobList</span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/job_black_list.php") ? "active" : ""; ?>" href="./job_black_list.php" title="job_black_list page" data-placement="left">
                  <i class="tio-lock-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Job BlackList</span>
                  </a>
                </li>
                <!-- End Company -->

                <li class="nav-item">
                  <div class="nav-divider"></div>
                </li>

                <!-- Start User -->
                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">User</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/user-applied.php") ? "active" : ""; ?>" href="./user-applied.php" title="User applied page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">User Appiled Page</span>
                  </a>
                </li>

                <!-- <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link <?= (@$request_url == $php_self."/index.php") ? "active" : ""; ?>" href="./welcome-page.html" title="Welcome page" data-placement="left">
                  <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">User Rating Page</span>
                  </a>
                </li> -->
                <!-- End user -->

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

                <li class="nav-item">
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

              </ul>
            </div>
            <!-- End Content -->
          </div>
        </div>
      </aside>
    
    <!-- End Navbar Vertical -->