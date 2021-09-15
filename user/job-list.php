<?php
include('navbar.php');
?>
<link rel="stylesheet" href="../assets/js/sweetalert2.all.min.js">
<script src="../assets/js/sweetalert2.all.min.js"></script>
<main id="content" role="main" class="main">
    <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
            echo "<script>Swal.fire('$_SESSION[error]','$_SESSION[error]','error');</script>";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<script>Swal.fire('$_SESSION[success]','$_SESSION[success]','success');</script>";
            unset($_SESSION['success']);
        }
    ?>
    <?php
    if(isset($_GET['course']) || !empty($_GET['course'])){
        $company_qry = "SELECT user.*,user.status as user_status,compony_job_request.*,compony_job_request.status as job_status,compony_job_request.id as job_id FROM user LEFT JOIN compony_job_request ON user.id = compony_job_request.company_id WHERE user.permission = 'company' AND user.status !='blacklist' AND compony_job_request.status !='active' AND compony_job_request.subject = '$_GET[course]'";
    }else{
        $company_qry = "SELECT user.*,user.status as user_status,compony_job_request.*,compony_job_request.status as job_status,compony_job_request.id as job_id FROM user LEFT JOIN compony_job_request ON user.id = compony_job_request.company_id WHERE user.permission = 'company' AND user.status !='blacklist' AND compony_job_request.status !='active'";
    }
    $company_sql = mysqli_query($conn, $company_qry);
    $company_row = mysqli_num_rows($company_sql);
    ?>
    <!-- Content -->
    <div class="content container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10">

                <!-- Filter -->
                <div class="row align-items-center mb-5">
                    <div class="col">
                        <h3 class="mb-0"><?= $company_row; ?> Of Job Detail</h3>
                    </div>
                    <div class="col-sm-auto">
                        <!-- Nav -->
                        <ul class="nav nav-segment" id="leaderboardTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link <?= (!isset($_GET['course']) || empty($_GET['course'])) ? "active" : ""; ?>" id="all-course-tab" href="job-list.php" role="tab">
                                All Course
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?= (!empty($_GET['course']) && $_GET['course']=='Programming') ? "active" : ""; ?>" id="programming-tab" href="./job-list.php?course=Programming" role="tab">
                                Programming
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?= (!empty($_GET['course']) && $_GET['course']=='Networking') ? "active" : ""; ?>" id="networking-tab" href="job-list.php?course=Networking" role="tab">
                                Networking
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?= (!empty($_GET['course']) && $_GET['course']=='Accounting') ? "active" : ""; ?>" id="accounting-tab" href="job-list.php?course=Accounting" role="tab">
                                Accounting
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?= (!empty($_GET['course']) && $_GET['course']=='Multimedia') ? "active" : ""; ?>" id="multimedia-tab" href="job-list.php?course=Multimedia" role="tab">
                                Multimedia
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link <?= (!empty($_GET['course']) && $_GET['course']=='Electronic') ? "active" : ""; ?>" id="electronic-tab" href="job-list.php?course=Electronic" role="tab">
                                Electronic
                            </a>
                            </li>
                        </ul>
                        <!-- End Nav -->
                    </div>
                </div>
                <!-- End Filter -->

                <!-- Tab Content -->
                <div class="tab-content" id="connectionsTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <!-- Connections -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                            <?php while ($array = mysqli_fetch_array($company_sql)) { ?>
                                <div class="col mb-3 mb-lg-5">
                                    <!-- Card -->
                                    <div class="card h-100">
                                        <!-- Body -->
                                        <div class="card-body text-center">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xl avatar-soft-primary avatar-circle avatar-border-lg avatar-centered mb-3">
                                                <img class="avatar-img" src="../<?= ($array['job_image']) ? '/image/' . $array['job_image'] : '/assets/img/160x160/img2.jpg'; ?>" alt="Image Description">
                                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                            <!-- End Avatar -->

                                            <h3 class="mb-1">
                                                <a class="text-dark" href="#"><?= $array['title']; ?></a>
                                            </h3>

                                            <div class="mb-3">
                                                <i class="tio-city mr-1"></i>
                                                <span><?= $array['subtitle']; ?></span>
                                            </div>

                                            <div class="mb-1 text-left">
                                                <b>Salary :</b><span> <?= $array['currency']; ?> <?= $array['salary']; ?></span>
                                            </div>
                                           
                                            <div class="mb-1 text-left">
                                                <b>Subject :</b><span> <?= $array['subject']; ?></span>
                                            </div>

                                            <div class="mb-1 text-left">
                                                <b>Description :</b><span> <?= $array['description']; ?></span>
                                            </div>
                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div class="card-footer">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto py-1">
                                                    <!-- <a class="font-size-sm text-body" href="#"><?= $array['salary']; ?></a> -->
                                                </div>

                                                <div class="col-auto py-1">
                                                    <!-- Checkbox -->
                                                    <?php 
                                                    $check = "SELECT * FROM `applied_job` WHERE job_id = '$array[job_id]' AND user_id ='$_SESSION[userid]'";
                                                    if(mysqli_num_rows(mysqli_query($conn,$check))==0){ ?>
                                                        <a class="btn btn-outline-secondary" href="approve-job.php?detail=<?= $array['job_id']; ?>"><i class="tio-add mr-1"></i>Apply</a>
                                                    <?php }else{ ?>
                                                        <a class="btn btn-outline-primary" href="#"><i class="tio-done mr-1"></i>Apply</a>
                                                    <?php } ?>
                                                    <!-- End Checkbox -->
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Footer -->

                                    </div>
                                    <!-- End Card -->
                                </div>
                            <?php } ?>
                        </div>
                        <!-- End Connections -->
                    </div>

                    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row row-cols-1">
                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-soft-primary avatar-circle avatar-border-lg mr-3">
                                            <span class="avatar-initials">R</span>
                                            <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Rachel Doe</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Design</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown1",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">UI/UX</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sketch</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Figma</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox1" class="custom-control-input custom-checkbox-switch-input" checked>
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox1">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img8.jpg" alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Isabella Finley</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>FrontApp</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown2",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Support</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox2" class="custom-control-input custom-checkbox-switch-input" checked>
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox2">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-warning"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">David Harrison</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Unassigned</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown3",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Marketing</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox3" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox3">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-soft-dark avatar-circle avatar-border-lg mr-3">
                                            <span class="avatar-initials">B</span>
                                            <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Bob Dean</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Sales</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown4",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Sales</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox4" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox4">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Amanda Harvey</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Atlassian</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown5",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Human resources</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Legal</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox5" class="custom-control-input custom-checkbox-switch-input" checked>
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox5">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Finch Hoot</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Dev</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown6",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">JS</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">Vue.js</a></li>
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">HTML5</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox6" class="custom-control-input custom-checkbox-switch-input" checked>
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox6">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col mb-3">
                                <!-- Card -->
                                <div class="card card-body">
                                    <div class="media align-items-md-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-lg avatar-circle avatar-border-lg mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                                            <span class="avatar-status avatar-sm-status avatar-status-danger"></span>
                                        </div>
                                        <!-- End Avatar -->

                                        <div class="media-body">
                                            <div class="row align-items-md-center">
                                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                                    <h4 class="mb-1">
                                                        <a class="text-dark" href="#">Costa Quinn</a>
                                                    </h4>

                                                    <span class="d-block">
                                                        <i class="tio-city mr-1"></i>
                                                        <span>Research team</span>
                                                    </span>
                                                </div>

                                                <div class="col-3 col-md-auto order-md-last text-right ml-n3">
                                                    <!-- Unfold -->
                                                    <div class="hs-unfold">
                                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                     "target": "#connectionsListDropdown7",
                                     "type": "css-animation"
                                   }'>
                                                            <i class="tio-more-vertical"></i>
                                                        </a>

                                                        <div id="connectionsListDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Rename project </a>
                                                            <a class="dropdown-item" href="#">Add to favorites</a>
                                                            <a class="dropdown-item" href="#">Archive project</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!-- End Unfold -->
                                                </div>

                                                <div class="col-sm mb-2 mb-sm-0">
                                                    <!-- Badges -->
                                                    <ul class="list-inline list-inline-m-1 mb-0">
                                                        <li class="list-inline-item"><a class="badge badge-soft-secondary p-2" href="#">SEO</a></li>
                                                    </ul>
                                                    <!-- End Badges -->
                                                </div>

                                                <div class="col-sm-auto">
                                                    <!-- Checkbox -->
                                                    <div class="custom-control custom-checkbox-switch">
                                                        <input type="checkbox" id="connectionsListCheckbox7" class="custom-control-input custom-checkbox-switch-input">
                                                        <label class="custom-checkbox-switch-label btn-sm" for="connectionsListCheckbox7">
                                                            <span class="custom-checkbox-switch-default">
                                                                <i class="tio-user-add mr-1"></i> Connect
                                                            </span>
                                                            <span class="custom-checkbox-switch-active">
                                                                <i class="tio-done mr-1"></i> Connected
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <!-- End Checkbox -->
                                                </div>
                                            </div>
                                            <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
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
    });
</script>

<!-- IE Support -->
<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>

</html>