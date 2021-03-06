<?php
include_once('navbar.php');
$company_qry = "SELECT user.*,company_detail.*,user.id as userid FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.permission = 'company' AND user.id = '$_GET[detail]'";
$company_sql = mysqli_query($conn, $company_qry);
if (mysqli_num_rows($company_sql) != 1) {
    echo "<script>window.location.href = 'index.php';</script>";
}
$company_array = mysqli_fetch_array($company_sql);
?>

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10">
                <!-- Profile Cover -->
                <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                        <img class="profile-cover-img" src="<?= $assets; ?><?= ($company_array['background_image']) ? '/image/' . $company_array['background_image'] : '/assets/img/1920x400/img1.jpg'; ?>" alt="Image Description">
                    </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Profile Header -->
                <div class="text-center mb-5">
                    <!-- Avatar -->
                    <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                        <img class="avatar-img" src="<?= $assets; ?><?= ($company_array['profile_image']) ? '/image/' . $company_array['profile_image'] : '/assets/img/160x160/img2.jpg'; ?>" alt="Image Description">
                        <?php if ($company_array['status'] == 'active') { ?>
                            <span class="avatar-status avatar-status-success"></span>
                        <?php } elseif ($company_array['status'] == 'pending') { ?>
                            <span class="avatar-status avatar-status-warning"></span>
                        <?php } elseif ($company_array['status'] == 'drop') { ?>
                            <span class="avatar-status avatar-status-danger"></span>
                        <?php } elseif ($company_array['status'] == 'blacklist') { ?>
                            <span class="avatar-status avatar-status-secondary"></span>
                        <?php } ?>
                    </div>
                    <!-- End Avatar -->

                    <h1 class="page-header-title"><?= $company_array['company_name']; ?></h1>

                    <!-- List -->
                    <ul class="list-inline list-inline-m-1">
                        <li class="list-inline-item">
                            <i class="tio-city mr-1"></i>
                            <span><?= $company_array['username']; ?></span>
                        </li>


                        <li class="list-inline-item">
                            <i class="tio-date-range mr-1"></i>
                            <span><?= $company_array['created_at']; ?></span>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                <!-- End Profile Header -->

                <!-- Nav -->
                <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
                    <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                        <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                            <i class="tio-chevron-left"></i>
                        </a>
                    </span>

                    <span class="hs-nav-scroller-arrow-next" style="display: none;">
                        <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                            <i class="tio-chevron-right"></i>
                        </a>
                    </span>

                    <ul class="nav nav-tabs align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="profile-company.php?detail=<?= $_GET['detail']; ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="profile-company-job.php?detail=<?= $_GET['detail']; ?>">JobList</a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav -->
            <?php 
                $job_qry = "SELECT user.*,user.status as user_status,compony_job_request.*,compony_job_request.status as job_status,compony_job_request.id as job_id,compony_job_request.created_at as job_date FROM user LEFT JOIN compony_job_request ON user.id = compony_job_request.company_id WHERE user.id='$_GET[detail]' AND user.permission = 'company' AND user.status !='blacklist' AND compony_job_request.status !='blacklist' ORDER BY job_id DESC";
                $job_sql = mysqli_query($conn,$job_qry);
                $job_num = mysqli_num_rows($job_sql);
            ?>
            <!-- Filter -->
                <div class="row align-items-center mb-5">
                    <div class="col">
                        <h3 class="mb-0"><?= $job_num; ?> Job Request</h3>
                    </div>
                </div>
            <!-- End Filter -->

            <!-- Tab Content -->
            <div class="tab-content" id="projectsTabContent">
              <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                <div class="row row-cols-1 row-cols-md-3">
                <?php while($job_array = mysqli_fetch_array($job_sql)){ ?>
                  <div class="col mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card card-hover-shadow text-center h-100">
                      <div class="card-progress-wrap">
                        <!-- Progress -->
                        <div class="progress card-progress">
                            <?php if($job_array['job_status'] == 'active'){ ?>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }elseif($job_array['job_status'] == 'pending'){ ?>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }elseif($job_array['job_status'] == 'blacklist'){?>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }elseif($job_array['job_status'] == 'drop'){?>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php }else{ ?>
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            <?php } ?>
                        </div>
                        <!-- End Progress -->
                      </div>

                      <!-- Body -->
                      <div class="card-body">
                        <div class="row align-items-center text-left mb-4">
                          <div class="col">
                            <?php if($job_array['job_status'] == 'active'){ ?>
                                <span class="badge badge-soft-success p-2">Active</span>
                            <?php }elseif($job_array['job_status'] == 'pending'){ ?>
                                <span class="badge badge-soft-warning p-2">Pending</span>
                            <?php }elseif($job_array['job_status'] == 'blacklist'){?>
                                <span class="badge badge-soft-secondary p-2">BlcakList</span>
                            <?php }elseif($job_array['job_status'] == 'drop'){?>
                                <span class="badge badge-soft-danger p-2">Suspended</span>
                            <?php }else{ ?>
                                <span class="badge badge-soft-secondary p-2">Unknown</span>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mb-2">
                          <!-- Avatar -->
                          <img class="avatar avatar-xl" src="../<?= ($job_array['job_image'])?'/image/'.$job_array['job_image']:'/assets/img/160x160/img2.jpg'; ?>" alt="Image Description">
                        </div>

                        <div class="mb-4">
                          <h2 class="mb-1"><?= $job_array['title']?$job_array['title']:'No Title'; ?></h2>
                          <small class="card-subtitle"><?= $job_array['subtitle']?$job_array['subtitle']:'No SubTitle'; ?></small>
                          <h5><?= $job_array['description']?'Description : '.$job_array['description']:'No Description'; ?></h5>
                          <span class="font-size-sm"><?= $job_array['job_date']; ?></span>
                        </div>
                      </div>
                      <!-- End Body -->

                      <!-- Footer -->
                      <div class="card-footer">
                        <!-- Stats -->
                        <div class="row">
                          <div class="col">
                            <span class="h5"><?= $job_array['currency']; ?> <?= $job_array['salary']; ?></span>
                            <span class="d-block font-size-sm">Salary</span>
                          </div>

                          <div class="col column-divider">
                            <span class="h5"><?= $job_array['type']?$job_array['type']:'Empty'; ?></span>
                            <span class="d-block font-size-sm">Type</span>
                          </div>

                          <div class="col column-divider">
                            <span class="h5"><?=($job_array['subject'])?$job_array['subject']:'Empty';?></span>
                            <span class="d-block font-size-sm">Subject</span>
                          </div>
                        </div>
                        <!-- End Stats -->
                      </div>
                      <!-- End Footer -->
                    </div>
                    <!-- End Card -->
                  </div>
                <?php } ?>
              
                </div>
                <!-- End Row -->
              </div>
            </div>
            <!-- End Tab Content -->
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
            </div>
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js"></script>
    <script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="../assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
    <script src="../assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
    

    <!-- JS Front -->
    <script src="../assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        $('.js-nav-scroller').each(function () {
          new HsNavScroller($(this)).init()
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>
