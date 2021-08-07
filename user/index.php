<?php
include('navbar.php');
?>
<!-- End Navbar Vertical -->

<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Apps</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kanban</li>
            </ol>
          </nav>

          <h1 class="page-header-title">Kanban</h1>
        </div>

        <div class="col-sm-auto">
          <small class="text-cap mb-2">Team members:</small>

          <div class="d-flex">
            <!-- Avatar Group -->
            <div class="avatar-group avatar-circle mr-3">
              <a class="avatar" href="user-profile.html" data-toggle="tooltip" data-placement="top" title="Amanda Harvey">
                <img class="avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
              </a>
              <a class="avatar" href="user-profile.html" data-toggle="tooltip" data-placement="top" title="Linda Bates">
                <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
              </a>
              <a class="avatar avatar-soft-info" href="user-profile.html" data-toggle="tooltip" data-placement="top" title="#digitalmarketing">
                <span class="avatar-initials">
                  <i class="tio-group-senior"></i>
                </span>
              </a>
              <a class="avatar" href="user-profile.html" data-toggle="tooltip" data-placement="top" title="David Harrison">
                <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
              </a>
              <a class="avatar avatar-soft-dark" href="user-profile.html" data-toggle="tooltip" data-placement="top" title="Antony Taylor">
                <span class="avatar-initials">A</span>
              </a>

              <a class="avatar avatar-light avatar-circle" href="javascript:;" data-toggle="modal" data-target="#shareWithPeopleModal">
                <span class="avatar-initials">+2</span>
              </a>
            </div>
            <!-- End Avatar Group -->

            <a class="btn btn-icon btn-primary rounded-circle" href="javascript:;" data-toggle="modal" data-target="#shareWithPeopleModal">
              <i class="tio-share"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Header -->
  </div>
  <!-- End Content -->

  <!-- Content -->
  <div class="content container-fluid my-n9">
    <!-- Filter -->
    <div class="row mb-5">
      <div class="col-12 col-sm-auto mb-3">
        <!-- Input Group -->
        <div class="input-group input-group-merge">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="tio-search"></i>
            </div>
          </div>
          <input type="search" class="form-control" placeholder="Search projects" aria-label="Search projects">
        </div>
        <!-- End Input Group -->
      </div>

      <div class="col-auto mb-3">
        <!-- Daterangepicker -->
        <button id="js-daterangepicker-predefined" class="btn btn-ghost-secondary dropdown-toggle">
          <i class="tio-date-range"></i>
          <span class="js-daterangepicker-predefined-preview ml-1"></span>
        </button>
        <!-- End Daterangepicker -->
      </div>

      <div class="col-auto mb-3 ml-auto">
        <!-- Nav -->
        <ul class="nav nav-segment" id="connectionsTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
              <i class="tio-column-view-outlined"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
              <i class="tio-agenda-view-outlined"></i>
            </a>
          </li>
        </ul>
        <!-- End Nav -->
      </div>
    </div>
    <!-- End Filter -->
  </div>
  <!-- End Content -->

  <!-- Tab Content -->
  <div class="tab-content" id="connectionsTabContent">
    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
      <!-- Content -->
      <div class="content container-fluid kanban-board">
        <!-- Kanban Row -->
        <ul class="row list-unstyled kanban-board-row">
          <li class="js-add-field col-12" data-hs-add-field-options='{
                  "template": "#createProjectGridTemplateToDo",
                  "container": "#createProjectGridContainerToDo",
                  "defaultCreated": 0
                 }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">Multimedia</h6>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="job-detail.php">
                
                <div class="card mb-3">
                  <div class="card-body">
                    
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Main Title</h4>
                      <p>Sub Title</p>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                      <div class="d-flex mb-2">
                        <div class="mr-1"><img src="../assets/svg/components/star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="../assets/svg/components/star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="../assets/svg/components/star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="../assets/svg/components/star.svg" alt="Review rating" width="14"></div>
                        <div class="mr-1"><img src="../assets/svg/components/star.svg" alt="Review rating" width="14"></div>
                      </div>

                        </div>
                        <!-- End Avatar Group -->
                      </div>

                    </div>
                   
                    <div class="row mb-3">
                      
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">20</span>
                          <span class="d-block font-size-sm">Rating</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Review</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Type</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-6">
                        <a class="btn btn-sm btn-white w-100" href="job-rating.php">
                          View
                        </a>
                      </div>

                      <div class="col-6">
                        <a class="btn btn-sm btn-white w-100" href="job-apply.php">
                          Apply
                        </a>
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Increase page loading speed</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">2 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown2",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Implement a calendar plugin</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">1 Assignee</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown3",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">9</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </li>

          <li class="js-add-field col-12" data-hs-add-field-options='{
                    "template": "#createProjectGridTemplateInProgress",
                    "container": "#createProjectGridContainerInProgress",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">In progress</h6>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Display tasks in account page</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img8.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">3 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#kanbanProjectsGridDropdown4",
                                   "type": "css-animation"
                                 }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">12</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block font-size-sm">Days left</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Update Slack integration to use the new bot token</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-danger avatar-circle">
                            <span class="avatar-initials">P</span>
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">3 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                   "target": "#kanbanProjectsGridDropdown5",
                                   "type": "css-animation"
                                 }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">40</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">20</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">45</span>
                          <span class="d-block font-size-sm">Days left</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </li>

          <li class="js-add-field col-12" data-hs-add-field-options='{
                    "template": "#createProjectGridTemplateReview",
                    "container": "#createProjectGridContainerReview",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">Review</h6>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Design banner for social networks</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">L</span>
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">2 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown6",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">2</span>
                          <span class="d-block font-size-sm">Days left</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </li>

          <li class="js-add-field col-12" data-hs-add-field-options='{
                   "template": "#createProjectGridTemplateDone",
                   "container": "#createProjectGridContainerDone",
                   "defaultCreated": 0
                 }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">Done</h6>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Create product roadmap</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">1 Assignee</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown7",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">1</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">1</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Mobile: notifications for subscribe pages and goals</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">3 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown8",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown8" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">5</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">7</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Allow commenting from the report view</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img4.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-soft-info avatar-circle">
                            <span class="avatar-initials">V</span>
                          </span>
                          <span class="font-size-sm ml-2">3 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown9",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown9" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">3</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">6</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom sortablejs-custom-rotate sortablejs-custom-handle" data-href="#">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex mb-5">
                      <div class="mr-2">
                        <h4 class="text-wrap">Public API</h4>

                        <!-- Avatar Group -->
                        <div class="avatar-group avatar-group-sm">
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img4.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                          </span>
                          <span class="avatar avatar-circle">
                            <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                          </span>
                          <span class="font-size-sm ml-2">3 Assignees</span>
                        </div>
                        <!-- End Avatar Group -->
                      </div>

                      <div class="ml-auto">
                        <!-- Unfold -->
                        <div class="hs-unfold card-unfold">
                          <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                                 "target": "#kanbanProjectsGridDropdown10",
                                 "type": "css-animation"
                               }'>
                            <i class="tio-more-vertical"></i>
                          </a>

                          <div id="kanbanProjectsGridDropdown10" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                              <i class="tio-edit dropdown-item-icon"></i> Rename project
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="tio-archive dropdown-item-icon"></i> Archive project
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item text-danger" href="#">
                              <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                              Remove
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">75</span>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">4</span>
                          <span class="d-block font-size-sm">Complete</span>
                        </div>
                        <!-- End Stats -->
                      </div>

                      <div class="col-4">
                        <!-- Stats -->
                        <div class="text-center">
                          <span class="d-block h4 mb-1">0</span>
                          <span class="d-block font-size-sm">Completed</span>
                        </div>
                        <!-- End Stats -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Progress -->
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!-- End Progress -->
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </li>
        </ul>
        <!-- End Kanban Row -->
      </div>
      <!-- End Content -->
    </div>

    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Kanban List -->
        <ul class="list-inline">
          <li class="js-add-field" data-hs-add-field-options='{
                    "template": "#createProjectListTemplateToDo",
                    "container": "#createProjectListContainerToDo",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">To do</h6>

              <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-toggle="tooltip" data-placement="left" title="Add project">
                <i class="tio-add"></i>
              </a>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Front mobile app launch</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown1",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-soft-dark avatar-circle">
                          <span class="avatar-initials">I</span>
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">20</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Increase page loading speed</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown2",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">2 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">3</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Implement a calendar plugin</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown3",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown3" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">2 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">9</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <!-- Container For Input Field -->
            <div id="createProjectListContainerToDo"></div>

            <!-- Card -->
            <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
              <i class="tio-add"></i> Add project
            </a>
            <!-- End Card -->

            <!-- Add Create Project Template -->
            <form id="createProjectListTemplateToDo" style="display: none;">
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="What needs to be done?" aria-label="What needs to be done?"></textarea>
                  </div>

                  <div class="d-flex justify-content-end">
                    <a class="js-delete-field btn btn-sm btn-white mr-2" href="javascript:;">Cancel</a>
                    <a class="btn btn-sm btn-primary" href="javascript:;">Create</a>
                  </div>
                </div>
              </div>
            </form>
            <!-- End Add Create Project Template -->
          </li>

          <!-- Divider -->
          <li>
            <hr class="my-7">
          </li>
          <!-- End Divider -->

          <li class="js-add-field" data-hs-add-field-options='{
                    "template": "#createProjectListTemplateInProgress",
                    "container": "#createProjectListContainerInProgress",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">In progress</h6>

              <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-toggle="tooltip" data-placement="left" title="Add project">
                <i class="tio-add"></i>
              </a>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Display tasks in account page</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown4",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown4" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img8.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">7</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">12</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">3</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Update Slack integration to use the new bot token</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown5",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown5" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-soft-danger avatar-circle">
                          <span class="avatar-initials">P</span>
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">40</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">20</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">45</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <!-- Container For Input Field -->
            <div id="createProjectListContainerInProgress"></div>

            <!-- Card -->
            <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
              <i class="tio-add"></i> Add project
            </a>
            <!-- End Card -->

            <!-- Add Create Project Template -->
            <form id="createProjectListTemplateInProgress" style="display: none;">
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="What needs to be done?" aria-label="What needs to be done?"></textarea>
                  </div>

                  <div class="d-flex justify-content-end">
                    <a class="js-delete-field btn btn-sm btn-white mr-2" href="javascript:;">Cancel</a>
                    <a class="btn btn-sm btn-primary" href="javascript:;">Create</a>
                  </div>
                </div>
              </div>
            </form>
            <!-- End Add Create Project Template -->
          </li>

          <!-- Divider -->
          <li>
            <hr class="my-7">
          </li>
          <!-- End Divider -->

          <li class="js-add-field" data-hs-add-field-options='{
                    "template": "#createProjectListTemplateReview",
                    "container": "#createProjectListContainerReview",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">Review</h6>

              <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-toggle="tooltip" data-placement="left" title="Add project">
                <i class="tio-add"></i>
              </a>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Design banner for social networks</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown6",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown6" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-soft-info avatar-circle">
                          <span class="avatar-initials">L</span>
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">2 Assignees</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">7</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">7</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">2</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <!-- Container For Input Field -->
            <div id="createProjectListContainerReview"></div>

            <!-- Card -->
            <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
              <i class="tio-add"></i> Add project
            </a>
            <!-- End Card -->

            <!-- Add Create Project Template -->
            <form id="createProjectListTemplateReview" style="display: none;">
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="What needs to be done?" aria-label="What needs to be done?"></textarea>
                  </div>

                  <div class="d-flex justify-content-end">
                    <a class="js-delete-field btn btn-sm btn-white mr-2" href="javascript:;">Cancel</a>
                    <a class="btn btn-sm btn-primary" href="javascript:;">Create</a>
                  </div>
                </div>
              </div>
            </form>
            <!-- End Add Create Project Template -->
          </li>

          <!-- Divider -->
          <li>
            <hr class="my-7">
          </li>
          <!-- End Divider -->

          <li class="js-add-field" data-hs-add-field-options='{
                    "template": "#createProjectListTemplateDone",
                    "container": "#createProjectListContainerDone",
                    "defaultCreated": 0
                  }'>
            <!-- Title -->
            <div class="js-sortable-disabled d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-cap mb-0">Done</h6>

              <a class="js-create-field btn btn-icon btn-sm btn-white" href="javascript:;" data-toggle="tooltip" data-placement="left" title="Add project">
                <i class="tio-add"></i>
              </a>
            </div>
            <!-- End Title -->

            <div class="js-sortable">
              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Create product roadmap</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown7",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown7" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">1 Assignee</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">1</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">1</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Mobile: notifications for subscribe pages and goals</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown8",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown8" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img7.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignee</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">5</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">7</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Allow commenting from the report view</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown9",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown9" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img4.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-soft-info avatar-circle">
                          <span class="avatar-initials">V</span>
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignee</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">3</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">6</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="text-wrap">Public API</h4>
                    </div>

                    <div class="col-auto">
                      <!-- Unfold -->
                      <div class="hs-unfold card-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                               "target": "#kanbanProjectsListDropdown10",
                               "type": "css-animation"
                             }'>
                          <i class="tio-more-vertical"></i>
                        </a>

                        <div id="kanbanProjectsListDropdown10" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            <i class="tio-edit dropdown-item-icon"></i> Rename project
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-star-outlined dropdown-item-icon"></i> Add to favorites
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive project
                          </a>

                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item text-danger" href="#">
                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                            Remove
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-sm-auto mb-3 mb-sm-0">
                      <!-- Avatar Group -->
                      <div class="avatar-group avatar-group-sm">
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img4.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img5.jpg" alt="Image Description">
                        </span>
                        <span class="avatar avatar-circle">
                          <img class="avatar-img" src="../assets/img/160x160/img6.jpg" alt="Image Description">
                        </span>
                      </div>
                      <!-- End Avatar Group -->

                      <span class="d-block font-size-sm">3 Assignee</span>
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">75</span>
                        <span class="d-block font-size-sm">Tasks</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">4</span>
                        <span class="d-block font-size-sm">Complete</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-auto mb-3 mb-sm-0">
                      <!-- Stats -->
                      <div class="text-center">
                        <span class="d-block h4 mb-1">0</span>
                        <span class="d-block font-size-sm">Completed</span>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm">
                      <!-- Progress -->
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- End Progress -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <!-- Container For Input Field -->
            <div id="createProjectListContainerDone"></div>

            <!-- Card -->
            <a class="js-sortable-disabled js-create-field btn btn-white btn-dashed-outline" href="javascript:;">
              <i class="tio-add"></i> Add project
            </a>
            <!-- End Card -->

            <!-- Add Create Project Template -->
            <form id="createProjectListTemplateDone" style="display: none;">
              <div class="js-sortable-link sortablejs-custom-handle card mb-3" data-href="#">
                <div class="card-body">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="What needs to be done?" aria-label="What needs to be done?"></textarea>
                  </div>

                  <div class="d-flex justify-content-end">
                    <a class="js-delete-field btn btn-sm btn-white mr-2" href="javascript:;">Cancel</a>
                    <a class="btn btn-sm btn-primary" href="javascript:;">Create</a>
                  </div>
                </div>
              </div>
            </form>
            <!-- End Add Create Project Template -->
          </li>
        </ul>
        <!-- End Kanban List -->
      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Tab Content -->

  <!-- Footer -->

  <div class="footer">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
      </div>
      <div class="col-auto">
        <div class="d-flex justify-content-end">
          <!-- List Dot -->
          <ul class="list-inline list-separator">
            <li class="list-inline-item">
              <a class="list-separator-link" href="#">FAQ</a>
            </li>

            <li class="list-inline-item">
              <a class="list-separator-link" href="#">License</a>
            </li>

            <li class="list-inline-item">
              <!-- Keyboard Shortcuts Toggle -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                  <i class="tio-command-key"></i>
                </a>
              </div>
              <!-- End Keyboard Shortcuts Toggle -->
            </li>
          </ul>
          <!-- End List Dot -->
        </div>
      </div>
    </div>
  </div>



  <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->

<!-- Share with people Modal -->
<div class="modal fade" id="shareWithPeopleModal" tabindex="-1" role="dialog" aria-labelledby="shareWithPeopleModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="shareWithPeopleModalTitle" class="modal-title">Invite users</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <!-- Form Group -->
        <div class="form-group">
          <div class="input-group input-group-merge mb-2 mb-sm-0">
            <div class="input-group-prepend" id="fullName">
              <span class="input-group-text">
                <i class="tio-search"></i>
              </span>
            </div>

            <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails" aria-describedby="fullName">

            <div class="input-group-append input-group-append-last-sm-down-none">
              <!-- Select -->
              <div id="permissionSelectNewProject" class="select2-custom select2-custom-right">
                <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                              "dropdownParent": "#permissionSelectNewProject",
                              "minimumResultsForSearch": "Infinity",
                              "dropdownAutoWidth": true,
                              "dropdownWidth": "10rem"
                            }'>
                  <option value="guest" selected>Guest</option>
                  <option value="can edit">Can edit</option>
                  <option value="can comment">Can comment</option>
                  <option value="full access">Full access</option>
                </select>
              </div>
              <!-- End Select -->

              <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Invite</a>
            </div>
          </div>

          <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Invite</a>
        </div>
        <!-- End Form Group -->

        <ul class="list-unstyled list-unstyled-py-4">
          <!-- List Group Item -->
          <li>
            <div class="media">
              <span class="icon icon-sm icon-soft-dark icon-circle mr-3">
                <i class="tio-group-senior"></i>
              </span>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-12 col-sm">
                    <h5 class="text-body mb-0">#digitalmarketing</h5>
                    <span class="d-block font-size-sm">8 members</span>
                  </div>

                  <div class="col-12 col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect1",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest">Guest</option>
                        <option value="can edit" selected>Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-12 col-sm">
                    <h5 class="text-body mb-0">David Harrison</h5>
                    <span class="d-block font-size-sm">david@example.com</span>
                  </div>

                  <div class="col-12 col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect2",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest">Guest</option>
                        <option value="can edit" selected>Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
              </div>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-12 col-sm">
                    <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                    <span class="d-block font-size-sm">Markvt@example.com</span>
                  </div>

                  <div class="col-12 col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect4",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest">Guest</option>
                        <option value="can edit" selected>Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->

          <!-- List Group Item -->
          <li>
            <div class="media">
              <span class="icon icon-sm icon-soft-dark icon-circle mr-3">
                <i class="tio-group-senior"></i>
              </span>

              <div class="media-body">
                <div class="row align-items-center">
                  <div class="col-12 col-sm">
                    <h5 class="text-body mb-0">#conference</h5>
                    <span class="d-block font-size-sm">3 members</span>
                  </div>

                  <div class="col-12 col-sm">
                    <!-- Select -->
                    <div id="inviteUserSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                      <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect3",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                        <option value="guest">Guest</option>
                        <option value="can edit" selected>Can edit</option>
                        <option value="can comment">Can comment</option>
                        <option value="full access">Full access</option>
                        <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
            </div>
          </li>
          <!-- End List Group Item -->
        </ul>

        <!-- Toggle Switch -->
        <label class="row toggle-switch" for="addTeamPreferencesShareWithPeopleSwitch1">
          <span class="col-8 col-sm-9 toggle-switch-content ml-0">
            <span class="d-flex align-items-center">
              <i class="tio-notifications-on-outlined text-primary mr-3"></i>
              <span class="text-dark">Inform all project members</span>
            </span>
          </span>
          <span class="col-4 col-sm-3">
            <input type="checkbox" class="toggle-switch-input" id="addTeamPreferencesShareWithPeopleSwitch1" checked>
            <span class="toggle-switch-label ml-auto">
              <span class="toggle-switch-indicator"></span>
            </span>
          </span>
        </label>
        <!-- End Toggle Switch -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer justify-content-start">
        <div class="row align-items-center flex-grow-1 mx-n2">
          <div class="col-sm-9 mb-2 mb-sm-0">
            <input type="hidden" id="publicShareLinkClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

            <p class="modal-footer-text">The public share <a href="#">link settings</a>
              <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
            </p>
          </div>

          <div class="col-sm-3 text-sm-right">
            <a class="js-clipboard btn btn-sm btn-white text-nowrap" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#publicShareLinkClipboard",
                    "container": "#shareWithPeopleModal"
                   }'>
              <i class="tio-link mr-1"></i> Copy link</a>
          </div>
        </div>
      </div>
      <!-- End Footer -->
    </form>
  </div>
</div>
<!-- End Share with people Modal -->


<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.js"></script>
<script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="../assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
<script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
<script src="../assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
<script src="../assets/vendor/sortablejs/dist/sortable.umd.js"></script>
<script src="../assets/vendor/daterangepicker/moment.min.js"></script>
<script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>


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


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });


    // INITIALIZATION OF ADD INPUT FILED
    // =======================================================
    $('.js-add-field').each(function() {
      new HSAddField($(this)).init();
    });


    // INITIALIZATION OF SORTABLE
    // =======================================================
    $('.js-sortable').each(function() {
      var sortable = $.HSCore.components.HSSortable.init($(this), {
        forceFallback: true,
        animation: 0,
        group: 'listGroup',
        delay: 500,
        delayOnTouchOnly: true
      });
    });


    // INITIALIZATION OF SORTABLE LINK
    // =======================================================
    $('.js-sortable-link').click(function(e) {
      if ($(e.target).hasClass('hs-unfold') || $(e.target).parents('.hs-unfold').length) {
        return false;
      }

      window.location.replace($(this).attr('data-href'))
    });


    // INITIALIZATION OF DATERANGEPICKER
    // =======================================================
    $('.js-daterangepicker').daterangepicker();

    $('.js-daterangepicker-times').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'M/DD hh:mm A'
      }
    });

    var start = moment();
    var end = moment();

    function cb(start, end) {
      $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
    }

    $('#js-daterangepicker-predefined').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);

    cb(start, end);


    // INITIALIZATION OF CLIPBOARD
    // =======================================================
    $('.js-clipboard').each(function() {
      var clipboard = $.HSCore.components.HSClipboard.init(this);
    });
  });
</script>

<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>

</html>