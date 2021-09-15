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
                            <a class="nav-link active" href="profile-company.php?detail=<?= $_GET['detail']; ?>">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="profile-company-job.php?detail=<?= $_GET['detail']; ?>">JobList</a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav -->

                <div class="row">
                    <div class="col-lg-4">

                        <!-- Sticky Block Start Point -->
                        <div id="accountSidebarNav"></div>

                        <!-- Card -->
                        <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
                       "parentSelector": "#accountSidebarNav",
                       "breakpoint": "lg",
                       "startPoint": "#accountSidebarNav",
                       "endPoint": "#stickyBlockEndPoint",
                       "stickyOffsetTop": 20
                     }'>
                            <!-- Header -->
                            <div class="card-header">
                                <h5 class="card-header-title">Profile</h5>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body">
                                <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                                    <li class="py-0">
                                        <small class="card-subtitle">About</small>
                                    </li>
                                    <li>
                                        <i class="tio-user-outlined nav-icon"></i>
                                        <?= $company_array['username']; ?>
                                    </li>
                                    <li>
                                        <i class="tio-city nav-icon"></i>
                                        <?= $company_array['country']; ?>
                                    </li>
                                    <li>
                                        <i class="tio-briefcase-outlined nav-icon"></i>
                                        <?= $company_array['organization']; ?>
                                    </li>
                                    
                                    <li class="pt-2 pb-0">
                                        <small class="card-subtitle">Contacts</small>
                                    </li>
                                    <li>
                                        <i class="tio-online nav-icon"></i>
                                        <?= $company_array['email']; ?>
                                    </li>
                                    <li>
                                        <i class="tio-android-phone-vs nav-icon"></i>
                                        <?= $company_array['contact']; ?>
                                    </li>
                                    <li class="pt-2 pb-0">
                                        <small class="card-subtitle">Location</small>
                                    </li>
                                    <li>
                                        <i class="tio-briefcase-outlined nav-icon"></i>
                                        <?= $company_array['addressline1']; ?>
                                    </li>
                                    <?php if(!empty($company_array['addressline2'])){ ?>
                                    <li>
                                        <i class="tio-briefcase-outlined nav-icon"></i>
                                        <?= $company_array['addressline2']; ?>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <i class="tio-briefcase-outlined nav-icon"></i>
                                        <?= $company_array['city']; ?>
                                    </li>
                                    <li>
                                        <i class="tio-briefcase-outlined nav-icon"></i>
                                        <?= $company_array['state']; ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-lg-8">
                        <!-- Card -->
                        <div class="card mb-3 mb-lg-5">
                            <!-- Header -->
                            <div class="card-header">
                            <?php 
                                $job_qry = "SELECT user.*,user.status as user_status,compony_job_request.*,compony_job_request.status as job_status,compony_job_request.id as job_id,compony_job_request.created_at as job_date FROM user LEFT JOIN compony_job_request ON user.id = compony_job_request.company_id WHERE user.id='$_GET[detail]' AND user.permission = 'company' AND user.status !='blacklist' AND compony_job_request.status !='blacklist' ORDER BY job_id DESC";
                                $job_sql = mysqli_query($conn,$job_qry);
                            ?>
                                <h5 class="card-header-title">Activity Job Request Stream</h5>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body card-body-height" style="height: 30rem;">
                                <!-- Step -->
                                <ul class="step step-icon-xs">
                                    <?php while($job_array = mysqli_fetch_array($job_sql)){ ?>
                                    <!-- Step Item -->
                                    <li class="step-item">
                                        <div class="step-content-wrapper">
                                            <span class="step-icon step-icon-pseudo step-icon-soft-dark"></span>

                                            <div class="step-content">
                                                <h5 class="mb-1">
                                                    <a class="text-dark" href="#"><?= $job_array['title']; ?>
                                                        <?php if($job_array['job_status'] == 'active'){ ?>
                                                            <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>Active</span>
                                                        <?php }elseif($job_array['job_status'] == 'pending'){ ?>
                                                            <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-warning"></span>Pending</span>
                                                        <?php }elseif($job_array['job_status'] == 'blacklist'){?>
                                                            <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-second"></span>Blacklist</span>
                                                        <?php }elseif($job_array['job_status'] == 'drop'){?>
                                                            <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-danger"></span>Suspended</span>
                                                        <?php }else{ ?>
                                                            <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-second"></span>Unknown</span>
                                                        <?php } ?>
                                                    </a>
                                                </h5>

                                                <p class="font-size-sm mb-1"><?= $job_array['subtitle']; ?>
                                                    <!-- <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a> -->
                                                </p>

                                                <ul class="list-group">
                                                    <!-- List Item -->
                                                    <li class="list-group-item list-group-item-light">
                                                        <div class="row gx-1">
                                                            <div class="col">
                                                                <div class="media">
                                                                    <span class="mt-1 mr-2">
                                                                        <img class="avatar avatar-m" src="../<?= ($job_array['job_image'])?'/image/'.$job_array['job_image']:'/assets/img/160x160/img2.jpg'; ?>" alt="Image Description">
                                                                    </span>
                                                                    <div class="media-body text-truncate">
                                                                        <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls"><?= $job_array['currency']; ?> <?= $job_array['salary']; ?></span>
                                                                        <small class="d-block text-muted"><?= $job_array['description']; ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- End List Item -->
                                                </ul>

                                                <small class="text-muted text-uppercase"><?= $job_array['job_date']; ?></small>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Step Item -->
                                    <?php } ?>
                                </ul>
                                <!-- End Step -->
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->

                        <!-- Sticky Block End Point -->
                        <div id="stickyBlockEndPoint"></div>
                    </div>
                </div>
                <!-- End Row -->
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
<script src="../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>


<!-- JS Front -->
<script src="../assets/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function() {
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });




        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({
            boundary: 'window'
        })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });


        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function() {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function() {
            new HSFormSearch($(this)).init()
        });


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        $('.js-nav-scroller').each(function() {
            new HsNavScroller($(this)).init()
        });


        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        $('.js-sticky-block').each(function() {
            var stickyBlock = new HSStickyBlock($(this), {
                targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
            }).init();
        });
    });
</script>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>

</html>