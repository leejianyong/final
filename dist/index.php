<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Dashboard | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/icon-set/style.css">
    <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="./assets/vendor/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" href="./assets/vendor/daterangepicker/daterangepicker.css">
    

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
  </head>

  <body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    
      <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
    

    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>

        <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">

        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;"
                 data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->

    <!-- ========== HEADER ========== -->
    
      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="./index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo">
              <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo">
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

            <!-- Search Form -->
            <div class="d-none d-md-block">
              <form class="position-relative">
                <!-- Input Group -->
                <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tio-search"></i>
                    </div>
                  </div>
                  <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front"
                         data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                  <a class="input-group-append" href="javascript:;">
                    <span class="input-group-text">
                      <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                    </span>
                  </a>
                </div>
                <!-- End Input Group -->

                <!-- Card Search Content -->
                <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                  <!-- Body -->
                  <div class="card-body-height py-3">
                    <small class="dropdown-header mb-n2">Recent searches</small>

                    <div class="dropdown-item bg-transparent text-wrap my-2">
                      <span class="h4 mr-1">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="./index.html">
                          Gulp <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                      <span class="h4">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="./index.html">
                          Notification panel <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                    </div>

                    <div class="dropdown-divider my-3"></div>

                    <small class="dropdown-header mb-n2">Tutorials</small>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-tune"></i>
                        </span>

                        <div class="media-body text-truncate">
                          <span>How to set up Gulp?</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-paint-bucket"></i>
                        </span>

                        <div class="media-body text-truncate">
                          <span>How to change theme color?</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider my-3"></div>

                    <small class="dropdown-header mb-n2">Members</small>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>David Harrison</span>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item my-2" href="./index.html">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                          <span class="avatar-initials">A</span>
                        </div>
                        <div class="media-body text-truncate">
                          <span>Anne Richard</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="./index.html">
                    See all results
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
                <!-- End Card Search Content -->
              </form>
            </div>
            <!-- End Search Form -->
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

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Notification -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#notificationDropdown",
                       "type": "css-animation"
                     }'>
                    <i class="tio-notifications-on-outlined"></i>
                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                  </a>

                  <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Notifications</span>

                      <!-- Unfold -->
                      <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                           data-hs-unfold-options='{
                             "target": "#notificationSettingsOneDropdown",
                             "type": "css-animation"
                           }'>
                          <i class="tio-more-vertical"></i>
                        </a>
                        <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <span class="dropdown-header">Settings</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive all
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-gift dropdown-item-icon"></i> What's new?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header">Feedback</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                    <!-- End Header -->

                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                      </li>
                    </ul>
                    <!-- End Nav -->

                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Tab Content -->
                      <div class="tab-content" id="notificationTabContent">
                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked>
                                      <label class="custom-control-label" for="notificationCheck1"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Brian Warner</span>
                                  <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                                </div>
                                <small class="col-auto text-muted text-cap">2hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked>
                                      <label class="custom-control-label" for="notificationCheck2"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">K</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Klara Hampton</span>
                                  <p class="card-text font-size-sm">mentioned you in a comment</p>
                                  <blockquote class="blockquote blockquote-sm">
                                    Nice work, love! You really nailed it. Keep it up!
                                  </blockquote>
                                </div>
                                <small class="col-auto text-muted text-cap">10hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked>
                                      <label class="custom-control-label" for="notificationCheck4"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Ruby Walter</span>
                                  <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                      <label class="custom-control-label" for="notificationCheck3"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/svg/brands/google.svg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">from Google</span>
                                  <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                      <label class="custom-control-label" for="notificationCheck5"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Sara Villar</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                      <label class="custom-control-label" for="notificationCheck7"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">A</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Anne Richard</span>
                                  <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                                </div>
                                <small class="col-auto text-muted text-cap">1dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                      <label class="custom-control-label" for="notificationCheck6"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Finch Hoot</span>
                                  <p class="card-text font-size-sm">left Slack group HS projects</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                      <label class="custom-control-label" for="notificationCheck8"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                                      <span class="avatar-initials">HS</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Htmlstream</span>
                                  <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                                </div>
                                <small class="col-auto text-muted text-cap">6dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                      <label class="custom-control-label" for="notificationCheck9"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Linda Bates</span>
                                  <p class="card-text font-size-sm">Accepted your connection</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                      <label class="custom-control-label" for="notificationCheck10"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">L</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Lewis Clarke</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>
                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->

                    <!-- Card Footer -->
                    <a class="card-footer text-center" href="#">
                      View all notifications
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Card Footer -->
                  </div>
                </div>
                <!-- End Notification -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Apps -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#appsDropdown",
                       "type": "css-animation"
                     }'>
                    <i class="tio-menu-vs-outlined"></i>
                  </a>

                  <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Web apps &amp; services</span>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body card-body-height">
                      <!-- Nav -->
                      <div class="nav nav-pills flex-column">
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/atlassian.svg" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Atlassian</span>
                              <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                            </div>
                          </div>
                        </a>

                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/slack.svg" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                              <span class="d-block font-size-sm text-body">Email collaboration software</span>
                            </div>
                          </div>
                        </a>

                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/google-webdev.svg" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Google webdev</span>
                              <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                            </div>
                          </div>
                        </a>

                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/frontapp.svg" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Frontapp</span>
                              <span class="d-block font-size-sm text-body">The inbox for teams</span>
                            </div>
                          </div>
                        </a>

                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">HS Support</span>
                              <span class="d-block font-size-sm text-body">Customer service and support</span>
                            </div>
                          </div>
                        </a>

                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="avatar avatar-xs avatar-soft-dark mr-3">
                              <span class="avatar-initials"><i class="tio-apps"></i></span>
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">More Front products</span>
                              <span class="d-block font-size-sm text-body">Check out more HS products</span>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Nav -->
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <a class="card-footer text-center" href="#">
                      View all apps
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Apps -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Activity -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                      "target": "#activitySidebar",
                      "type": "css-animation",
                      "animationIn": "fadeInRight",
                      "animationOut": "fadeOutRight",
                      "hasOverlay": true,
                      "smartPositionOff": true
                     }'>
                    <i class="tio-voice-line"></i>
                  </a>
                </div>
                <!-- Activity -->
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
                      <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>

                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">Mark Williams</span>
                          <span class="card-text">mark@example.com</span>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#navSubmenuPagesAccountDropdown1",
                           "event": "hover"
                         }'>
                        <span class="text-truncate pr-2" title="Set status">Set status</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                      </a>

                      <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-success mr-1"></span>
                          <span class="text-truncate pr-2" title="Available">Available</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-danger mr-1"></span>
                          <span class="text-truncate pr-2" title="Busy">Busy</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-warning mr-1"></span>
                          <span class="text-truncate pr-2" title="Away">Away</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                    </a>

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Settings">Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                          <span class="avatar-initials">HS</span>
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                          <span class="card-text">hs.example.com</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;"
                         data-hs-unfold-options='{
                           "target": "#navSubmenuPagesAccountDropdown2",
                           "event": "hover"
                         }'>
                        <span class="text-truncate pr-2" title="Customization">Customization</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                      </a>

                      <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->

                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
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
              
              
                <a class="navbar-brand" href="./index.html" aria-label="Front">
                  <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo">
                  <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo">
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
                <!-- Dashboards -->
                <li class="navbar-vertical-aside-has-menu show">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle active" href="javascript:;" title="Dashboards">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link active" href="./index.html" title="Default">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Default</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./dashboard-alternative.html" title="Alternative">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Alternative</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Dashboards -->

                <li class="nav-item">
                  <small class="nav-subtitle" title="Pages">Pages</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Pages -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Pages">
                    <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Pages</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Users</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./users.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./users-leaderboard.html" title="Leaderboard">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Leaderboard</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./users-add-user.html" title="Add User">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Add User <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">User Profile <span class="badge badge-primary badge-pill ml-1">5</span></span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile.html" title="Profile">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Profile</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-teams.html" title="Teams">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Teams</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-projects.html" title="Projects">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Projects</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-connections.html" title="Connections">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Connections</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./user-profile-my-profile.html" title="My Profile">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">My Profile</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Account">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Account</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./account-settings.html" title="Settings">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Settings</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-billing.html" title="Billing">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Billing</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-invoice.html" title="Invoice">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Invoice</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./account-api-keys.html" title="API Keys">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">API Keys</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">E-commerce</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Products</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-products.html" title="Products">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Products</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-product-details.html" title="Product Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Product Details</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-add-product.html" title="Add Product">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Add Product</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Orders</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-orders.html" title="Orders">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Orders</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-order-details.html" title="Order Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Order Details</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                          <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customers">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Customers</span>
                          </a>

                          <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-customers.html" title="Customers">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Customers</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-customer-details.html" title="Customer Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Customer Details</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="./ecommerce-add-customers.html" title="Add Customers">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Add Customers</span>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce-manage-reviews.html" title="Manage Reviews">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Manage Reviews</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./ecommerce-checkout.html" title="Checkout">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Checkout</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Projects">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Projects</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./projects.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./projects-timeline.html" title="Timeline">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Timeline</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Project">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Project</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./project.html" title="Overview">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Overview</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-files.html" title="Files">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Files <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-activity.html" title="Activity">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Activity</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-teams.html" title="Teams">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Teams</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./project-settings.html" title="Settings">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./referrals.html" title="Referrals">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Referrals</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Pages -->

                <!-- Apps -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Apps">
                    <i class="tio-apps nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Apps <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-kanban.html" title="Kanban">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Kanban</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-calendar.html" title="Calendar">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Calendar <span class="badge badge-info badge-pill ml-1">New</span></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-invoice-generator.html" title="Invoice Generator">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Invoice Generator</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./apps-file-manager.html" title="File Manager">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">File Manager</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Apps -->

                <!-- Authentication -->
                <li class="navbar-vertical-aside-has-menu ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Authentication">
                    <i class="tio-lock-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Authentication</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign In">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sign In</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signin-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signin-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Sign Up">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sign Up</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signup-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-signup-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reset Password">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Reset Password</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-reset-password-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-reset-password-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Email Verification">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Email Verification</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-email-verification-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-email-verification-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="navbar-vertical-aside-has-menu ">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="2-step Verification">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">2-step Verification</span>
                      </a>

                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-two-step-verification-basic.html" title="Basic">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Basic</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="./authentication-two-step-verification-cover.html" title="Cover">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Cover</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#welcomeMessageModal" title="Welcome Message">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Welcome Message</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./error-404.html" title="Error 404">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Error 404</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link " href="./error-500.html" title="Error 500">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Error 500</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Authentication -->

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link " href="./welcome-page.html" title="Welcome page" data-placement="left">
                    <i class="tio-visible-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Welcome Page</span>
                  </a>
                </li>

                <li class="nav-item">
                  <small class="nav-subtitle" title="Layouts">Layouts</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link " href="./layouts/layouts.html" title="Layouts" data-placement="left">
                    <i class="tio-dashboard-vs-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Layouts</span>
                  </a>
                </li>

                <li class="nav-item">
                  <div class="nav-divider"></div>
                </li>

                <li class="nav-item">
                  <small class="nav-subtitle" title="Documentation">Documentation</small>
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link" href="./documentation/index.html" title="Documentation" data-placement="left">
                    <i class="tio-book-opened nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Documentation <span class="badge badge-primary badge-pill ml-1">v1.1</span></span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="js-nav-tooltip-link nav-link" href="./documentation/typography.html" title="Components" data-placement="left">
                    <i class="tio-layers-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Components</span>
                  </a>
                </li>

                <li class="nav-item">
                  <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                </li>

                <!-- Front Builder -->
                <li class="nav-item nav-footer-item ">
                  <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#styleSwitcherDropdown",
                       "type": "css-animation",
                       "animationIn": "fadeInRight",
                       "animationOut": "fadeOutRight",
                       "hasOverlay": true,
                       "smartPositionOff": true
                     }'>
                    <i class="tio-tune nav-icon"></i>
                  </a>
                  <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
                    <i class="tio-tune nav-icon"></i>
                  </a>
                </li>
                <!-- End Front Builder -->

                <!-- Help -->
                <li class="navbar-vertical-aside-has-menu nav-footer-item ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Help">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Resources &amp; tutorials">
                        <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Keyboard shortcuts">
                        <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Connect other apps">
                        <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="What's new?">
                        <i class="tio-gift dropdown-item-icon"></i> What's new?
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Contact support">
                        <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Help -->

                <!-- Language -->
                <li class="navbar-vertical-aside-has-menu nav-footer-item ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Language">
                    <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
                  </a>

                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (US)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                        English (US)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (UK)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                        English (UK)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Deutsch">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                        Deutsch
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Dansk">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                        Dansk
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Italiano">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                        Italiano
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="中文 (繁體)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                        中文 (繁體)
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Language -->
              </ul>
            </div>
            <!-- End Content -->

            <!-- Footer -->
            <div class="navbar-vertical-footer">
              <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">
                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                       data-hs-unfold-options='{
                        "target": "#styleSwitcherDropdown",
                        "type": "css-animation",
                        "animationIn": "fadeInRight",
                        "animationOut": "fadeOutRight",
                        "hasOverlay": true,
                        "smartPositionOff": true
                       }'>
                      <i class="tio-tune"></i>
                    </a>
                  </div>
                  <!-- End Unfold -->
                </li>

                <li class="navbar-vertical-footer-list-item">
                  <!-- Other Links -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                       data-hs-unfold-options='{
                        "target": "#otherLinksDropdown",
                        "type": "css-animation",
                        "animationIn": "slideInDown",
                        "hideOnScroll": true
                       }'>
                      <i class="tio-help-outlined"></i>
                    </a>

                    <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                      <span class="dropdown-header">Help</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-book-outlined dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-command-key dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-alt dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-gift dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Contacts</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-chat-outlined dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Other Links -->
                </li>

                <li class="navbar-vertical-footer-list-item">
                  <!-- Language -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                       data-hs-unfold-options='{
                        "target": "#languageDropdown",
                        "type": "css-animation",
                        "animationIn": "slideInDown",
                        "hideOnScroll": true
                       }'>
                      <img class="avatar avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                    </a>

                    <div id="languageDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                      <span class="dropdown-header">Select language</span>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="English">English (US)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="English">English (UK)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="Deutsch">Deutsch</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="Dansk">Dansk</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="Italiano">Italiano</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="./assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                        <span class="text-truncate pr-2" title="中文 (繁體)">中文 (繁體)</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Language -->
                </li>
              </ul>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </aside>
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main pointer-event">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <h1 class="page-header-title">Dashboard</h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#inviteUserModal">
                <i class="tio-user-add mr-1"></i> Invite users
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Total Users</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">72,540</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 12.5%
                </span>
                <span class="text-body font-size-sm ml-1">from 70,104</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Sessions</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">29.4%</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 1.7%
                </span>
                <span class="text-body font-size-sm ml-1">from 29.1%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Avg. Click Rate</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">56.8%</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "%",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-danger">
                  <i class="tio-trending-down"></i> 4.4%
                </span>
                <span class="text-body font-size-sm ml-1">from 61.2%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body">
                <h6 class="card-subtitle">Pageviews</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-6">
                    <span class="card-title h2">92,913</span>
                  </div>

                  <div class="col-6">
                    <!-- Chart -->
                    <div class="chartjs-custom" style="height: 3rem;">
                      <canvas class="js-chart"
                              data-hs-chartjs-options='{
                                "type": "line",
                                "data": {
                                   "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"],
                                   "datasets": [{
                                    "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92],
                                    "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"],
                                    "borderColor": "#377dff",
                                    "borderWidth": 2,
                                    "pointRadius": 0,
                                    "pointHoverRadius": 0
                                  }]
                                },
                                "options": {
                                   "scales": {
                                     "yAxes": [{
                                       "display": false
                                     }],
                                     "xAxes": [{
                                       "display": false
                                     }]
                                   },
                                  "hover": {
                                    "mode": "nearest",
                                    "intersect": false
                                  },
                                  "tooltips": {
                                    "postfix": "k",
                                    "hasIndicator": true,
                                    "intersect": false
                                  }
                                }
                              }'>
                      </canvas>
                    </div>
                    <!-- End Chart -->
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-secondary">0.0%</span>
                <span class="text-body font-size-sm ml-1">from 2,913</span>
              </div>
            </a>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Stats -->

        <div class="row gx-2 gx-lg-3">
          <div class="col-lg-5 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Import data into Front Dashboard</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown2",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown2" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share chart
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>

                <ul class="list-group list-group-flush list-group-no-gutters">
                  <li class="list-group-item py-3">
                    <h5 class="modal-title">Import users from:</h5>
                  </li>

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/capsule.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Capsule</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/mailchimp.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Mailchimp</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <!-- List Group Item -->
                  <li class="list-group-item py-3">
                    <div class="media">
                      <div class="mt-1 mr-3">
                        <img class="avatar avatar-xs avatar-4by3" src="./assets/svg/brands/google-webdev.svg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Webdev</h5>
                            <span class="d-block font-size-sm">Users</span>
                          </div>

                          <div class="col-auto">
                            <a class="btn btn-sm btn-primary" href="#" title="Launch importer" target="_blank">
                              Launch <span class="d-none d-sm-inline-block">importer</span>
                              <i class="tio-open-in-new ml-1"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                  </li>
                  <!-- End List Group Item -->

                  <li class="list-group-item"><small>Or you can <a href="#">sync data to Front Dashboard</a> to ensure your data is always up-to-date.</small></li>
                </ul>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-7 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Monthly expenses</h5>

                <!-- Nav -->
                <ul class="nav nav-segment" id="expensesTab" role="tablist">
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="thisWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link active" href="javascript:;" data-toggle="tab">This week</a>
                  </li>
                  <li class="nav-item" data-toggle="chart-bar" data-datasets="lastWeek" data-trigger="click" data-action="toggle">
                    <a class="nav-link" href="javascript:;" data-toggle="tab">Last week</a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <div class="row mb-4">
                  <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex align-items-center">
                      <span class="h1 mb-0">35%</span>
                      <span class="text-success ml-2">
                        <i class="tio-trending-up"></i> 25.3%
                      </span>
                    </div>
                  </div>

                  <div class="col-sm-auto align-self-sm-end">
                    <!-- Legend Indicators -->
                    <div class="row font-size-sm">
                      <div class="col-auto">
                        <span class="legend-indicator bg-primary"></span> New
                      </div>
                      <div class="col-auto">
                        <span class="legend-indicator"></span> Overdue
                      </div>
                    </div>
                    <!-- End Legend Indicators -->
                  </div>
                </div>
                <!-- End Row -->

                <!-- Bar Chart -->
                <div class="chartjs-custom">
                  <canvas id="updatingData" style="height: 20rem;"
                          data-hs-chartjs-options='{
                            "type": "bar",
                            "data": {
                              "labels": ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"],
                              "datasets": [{
                                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                "backgroundColor": "#377dff",
                                "hoverBackgroundColor": "#377dff",
                                "borderColor": "#377dff"
                              },
                              {
                                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                                "backgroundColor": "#e7eaf3",
                                "borderColor": "#e7eaf3"
                              }]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "color": "#e7eaf3",
                                    "drawBorder": false,
                                    "zeroLineColor": "#e7eaf3"
                                  },
                                  "ticks": {
                                    "beginAtZero": true,
                                    "stepSize": 100,
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 10,
                                    "postfix": "$"
                                  }
                                }],
                                "xAxes": [{
                                  "gridLines": {
                                    "display": false,
                                    "drawBorder": false
                                  },
                                  "ticks": {
                                    "fontSize": 12,
                                    "fontColor": "#97a4af",
                                    "fontFamily": "Open Sans, sans-serif",
                                    "padding": 5
                                  },
                                  "categoryPercentage": 0.5,
                                  "maxBarThickness": "10"
                                }]
                              },
                              "cornerRadius": 2,
                              "tooltips": {
                                "prefix": "$",
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'></canvas>
                </div>
                <!-- End Bar Chart -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-header-title">Users</h5>

                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->
                </div>
              </div>

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Status:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;"
                              data-target-column-index="2"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                        <option value="">All</option>
                        <option value="successful">Successful</option>
                        <option value="overdue">Overdue</option>
                        <option value="pending">Pending</option>
                      </select>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-sm-auto">
                    <div class="d-flex align-items-center mr-2">
                      <span class="text-secondary mr-2">Signed up:</span>

                      <!-- Select -->
                      <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1" style="opacity: 0;"
                              data-target-column-index="5"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                        <option value="">All</option>
                        <option value="1 year ago">1 year ago</option>
                        <option value="6 months ago">6 months ago</option>
                      </select>
                      <!-- End Select -->
                    </div>
                  </div>

                  <div class="col-md">
                    <form>
                      <!-- Search -->
                      <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tio-search"></i>
                          </div>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                      </div>
                      <!-- End Search -->
                    </form>
                  </div>
                </div>
                <!-- End Filter -->
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                   data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Full name</th>
                  <th>Status</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th>Signed up</th>
                  <th>User ID</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                      <label class="custom-control-label" for="usersDataCheck2"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Unassigned</td>
                  <td>amanda@example.com</td>
                  <td>1 year ago</td>
                  <td>67989</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                      <label class="custom-control-label" for="usersDataCheck3"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">A</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Anne Richard</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>anne@example.com</td>
                  <td>6 months ago</td>
                  <td>67326</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                      <label class="custom-control-label" for="usersDataCheck4"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">David Harrison</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>david@example.com</td>
                  <td>6 months ago</td>
                  <td>55821</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                      <label class="custom-control-label" for="usersDataCheck5"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Finch Hoot</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>finch@example.com</td>
                  <td>1 year ago</td>
                  <td>85214</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                      <label class="custom-control-label" for="usersDataCheck6"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Bob Dean</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>bob@example.com</td>
                  <td>6 months ago</td>
                  <td>75470</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                      <label class="custom-control-label" for="usersDataCheck7"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>Ella@example.com</td>
                  <td>1 year ago</td>
                  <td>37534</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                      <label class="custom-control-label" for="usersDataCheck8"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img4.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Sam Kart</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>sam@example.com</td>
                  <td>1 year ago</td>
                  <td>57300</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                      <label class="custom-control-label" for="usersDataCheck9"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img6.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Costa Quinn</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Unassigned</td>
                  <td>costa@example.com</td>
                  <td>1 year ago</td>
                  <td>71288</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck10">
                      <label class="custom-control-label" for="usersDataCheck10"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">R</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Rachel Doe</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Unassigned</td>
                  <td>rachel@example.com</td>
                  <td>6 months ago</td>
                  <td>95211</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck11">
                      <label class="custom-control-label" for="usersDataCheck11"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">B</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Brian Halligan</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>brian@example.com</td>
                  <td>1 year ago</td>
                  <td>58643</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck12">
                      <label class="custom-control-label" for="usersDataCheck12"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Linda Bates</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>linda@example.com</td>
                  <td>1 year ago</td>
                  <td>44414</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck13">
                      <label class="custom-control-label" for="usersDataCheck13"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">C</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Chris Mathew <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>chris@example.com</td>
                  <td>1 year ago</td>
                  <td>12569</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck14">
                      <label class="custom-control-label" for="usersDataCheck14"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-2">
                        <span class="avatar-initials">L</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Lewis Clarke</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-danger"></span>Overdue
                  </td>
                  <td>Non-subscription</td>
                  <td>lewis@example.com</td>
                  <td>1 year ago</td>
                  <td>54621</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck15">
                      <label class="custom-control-label" for="usersDataCheck15"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Clarice Boone <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Non-subscription</td>
                  <td>clarice@example.com</td>
                  <td>6 months ago</td>
                  <td>23485</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck16">
                      <label class="custom-control-label" for="usersDataCheck16"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-danger avatar-circle mr-2">
                        <span class="avatar-initials">M</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Mark Colbert</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Successful
                  </td>
                  <td>Subscription</td>
                  <td>mark@example.com</td>
                  <td>6 months ago</td>
                  <td>78463</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck17">
                      <label class="custom-control-label" for="usersDataCheck17"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-info avatar-circle mr-2">
                        <span class="avatar-initials">J</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Johnny Appleseed</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>johnny@example.com</td>
                  <td>1 year ago</td>
                  <td>23564</td>
                </tr>

                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck18">
                      <label class="custom-control-label" for="usersDataCheck18"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="./user-profile.html">
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">P</span>
                      </div>
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">Phileas Fogg</span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-warning"></span>Pending
                  </td>
                  <td>Subscription</td>
                  <td>phileas@example.com</td>
                  <td>6 months ago</td>
                  <td>39199</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->

        <div class="row gx-2 gx-lg-3">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Transactions</h5>

                <!-- Daterangepicker -->
                <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-secondary dropdown-toggle">
                  <i class="tio-date-range"></i>
                  <span class="js-daterangepicker-predefined-preview ml-1"></span>
                </button>
                <!-- End Daterangepicker -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Chart -->
                <div class="chartjs-custom mx-auto" style="height: 20rem;">
                  <canvas class="js-chart-datalabels"
                          data-hs-chartjs-options='{
                            "type": "bubble",
                            "data": {
                              "datasets": [
                                {
                                  "label": "Label 1",
                                  "data": [
                                    {"x": 55, "y": 65, "r": 99}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "gulpRGBA[#377dff,.9]",
                                  "borderColor": "transparent"
                                },
                                {
                                  "label": "Label 2",
                                  "data": [
                                    {"x": 33, "y": 42, "r": 65}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "rgba(100, 0, 214, 0.8)",
                                  "borderColor": "transparent"
                                },
                                {
                                  "label": "Label 3",
                                  "data": [
                                    {"x": 46, "y": 26, "r": 38}
                                  ],
                                  "color": "#fff",
                                  "backgroundColor": "#00c9db",
                                  "borderColor": "transparent"
                                }
                              ]
                            },
                            "options": {
                              "scales": {
                                "yAxes": [{
                                  "gridLines": {
                                    "display": false
                                  },
                                  "ticks": {
                                    "display": false,
                                    "max": 100,
                                    "beginAtZero": true
                                  }
                                }],
                                "xAxes": [{
                                "gridLines": {
                                    "display": false
                                  },
                                  "ticks": {
                                    "display": false,
                                    "max": 100,
                                    "beginAtZero": true
                                  }
                                }]
                              },
                              "tooltips": false
                            }
                          }'></canvas>
                </div>
                <!-- End Chart -->

                <!-- Legend Indicators -->
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <span class="legend-indicator bg-primary"></span> New
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator" style="background-color: #7000f2;"></span> Pending
                  </div>

                  <div class="col-auto">
                    <span class="legend-indicator bg-info"></span> Failed
                  </div>
                </div>
                <!-- End Legend Indicators -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>

          <div class="col-lg-6">
            <!-- Card -->
            <div class="card h-100">
              <!-- Header -->
              <div class="card-header">
                <h5 class="card-header-title">Reports overview</h5>

                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;"
                     data-hs-unfold-options='{
                       "target": "#reportsOverviewDropdown1",
                       "type": "css-animation"
                     }'>
                    <i class="tio-more-vertical"></i>
                  </a>

                  <div id="reportsOverviewDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                    <span class="dropdown-header">Settings</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-share dropdown-item-icon"></i> Share reports
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-download-to dropdown-item-icon"></i> Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                    </a>

                    <div class="dropdown-divider"></div>

                    <span class="dropdown-header">Feedback</span>

                    <a class="dropdown-item" href="#">
                      <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <span class="h1 d-block mb-4">$7,431.14 USD</span>

                <!-- Progress -->
                <div class="progress rounded-pill mb-2">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Gross value"></div>
                  <div class="progress-bar opacity" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="Net volume from sales"></div>
                  <div class="progress-bar opacity-xs" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="New volume from sales"></div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <span>0%</span>
                  <span>100%</span>
                </div>
                <!-- End Progress -->

                <!-- Table -->
                <div class="table-responsive">
                  <table class="table table-lg table-nowrap card-table mb-0">
                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary"></span>Gross value
                      </th>
                      <td>$3,500.71</td>
                      <td>
                        <span class="badge badge-soft-success">+12.1%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity"></span>Net volume from sales
                      </th>
                      <td>$2,980.45</td>
                      <td>
                        <span class="badge badge-soft-warning">+6.9%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator bg-primary opacity-xs"></span>New volume from sales
                      </th>
                      <td>$950.00</td>
                      <td>
                        <span class="badge badge-soft-danger">-1.5%</span>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">
                        <span class="legend-indicator"></span>Other
                      </th>
                      <td>32</td>
                      <td>
                        <span class="badge badge-soft-success">1.9%</span>
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- End Table -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>
      <!-- End Content -->

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
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                         data-hs-unfold-options='{
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
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="./assets/svg/brands/excel.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="./assets/svg/brands/word.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-1.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-2.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="./assets/svg/illustrations/card-3.svg" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Project status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="./assets/svg/illustrations/graphs.svg" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Create a new user Modal -->
    <div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="inviteUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="inviteUserModalTitle" class="modal-title">Invite users</h4>

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
                  <div id="permissionSelect" class="select2-custom select2-custom-right">
                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;"
                            data-hs-select2-options='{
                              "dropdownParent": "#permissionSelect",
                              "minimumResultsForSearch": "Infinity",
                              "dropdownAutoWidth": true,
                              "dropdownWidth": "11rem"
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

            <div class="form-row">
              <h5 class="col modal-title">Invite users</h5>

              <div class="col-auto">
                <a class="d-flex align-items-center font-size-sm text-body" href="#">
                  <img class="avatar avatar-xss mr-2" src="./assets/svg/brands/gmail.svg" alt="Image Description">
                  Import contacts
                </a>
              </div>
            </div>

            <hr class="mt-2">

            <ul class="list-unstyled list-unstyled-py-4">
              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">amanda@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect1",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected>Guest</option>
                            <option value="can edit">Can edit</option>
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
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">David Harrison</h5>
                        <span class="d-block font-size-sm">david@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect2",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected>Guest</option>
                            <option value="can edit">Can edit</option>
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
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">Markvt@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect4",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected>Guest</option>
                            <option value="can edit">Can edit</option>
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
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-3">
                    <span class="avatar-initials">B</span>
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Bob Dean</h5>
                        <span class="d-block font-size-sm">bob@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                                  data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect3",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected>Guest</option>
                            <option value="can edit">Can edit</option>
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
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer justify-content-start">
            <div class="row align-items-center flex-grow-1 mx-n2">
              <div class="col-sm-9 mb-2 mb-sm-0">
                <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

                <p class="modal-footer-text">The public share <a href="#">link settings</a>
                  <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
                </p>
              </div>

              <div class="col-sm-3 text-sm-right">
                <a class="js-clipboard btn btn-sm btn-white text-nowrap" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Copy to clipboard!"
                   data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#inviteUserPublicClipboard",
                    "container": "#inviteUserModal"
                   }'>
                <i class="tio-link mr-1"></i> Copy link</a>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </form>
      </div>
    </div>
    <!-- End Create a new user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Global Compulsory  -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js"></script>
    <script src="./assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="./assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
    <script src="./assets/vendor/select2/dist/js/select2.full.min.js"></script>
    <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/vendor/chart.js.extensions/chartjs-extensions.js"></script>
    <script src="./assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="./assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="./assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="./assets/vendor/datatables.net.extensions/select/select.min.js"></script>
    <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
    

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>

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

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        Chart.plugins.unregister(ChartDataLabels);

        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

        // CALL WHEN TAB IS CLICKED
        // =======================================================
        $('[data-toggle="chart-bar"]').click(function(e) {
          let keyDataset = $(e.currentTarget).attr('data-datasets')

         if (keyDataset === 'lastWeek') {
           updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
           updatingChart.data.datasets = [
             {
               "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ];
           updatingChart.update();
         } else {
           updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
           updatingChart.data.datasets = [
             {
               "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ]
           updatingChart.update();
         }
        })

        
        // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
        // =======================================================
        $('.js-chart-datalabels').each(function () {
          $.HSCore.components.HSChartJS.init($(this), {
            plugins: [ChartDataLabels],
            options: {
              plugins: {
                datalabels: {
                  anchor: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  align: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  color: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                  },
                  font: function(context) {
                    var value = context.dataset.data[context.dataIndex],
                      fontSize = 25;

                    if (value.r > 50) {
                      fontSize = 35;
                    }

                    if (value.r > 70) {
                      fontSize = 55;
                    }

                    return {
                      weight: 'lighter',
                      size: fontSize
                    };
                  },
                  offset: 2,
                  padding: 0
                }
              }
            },
          });
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

        
        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        
        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function() {
          var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>
