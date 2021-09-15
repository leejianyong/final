<?php
require('./navbar.php');

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
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-end">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Company</a></li>
              <li class="breadcrumb-item active" aria-current="page">BlackList</li>
            </ol>
          </nav>

          <h1 class="page-header-title">Company BlackList</h1>
        </div>

        <!-- <div class="col-sm-auto">
              <a class="btn btn-primary" href="users-add-user.html">
                <i class="tio-user-add mr-1"></i> Add user
              </a>
            </div> -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <!-- Card -->
    <div class="card border border-danger border-bottom-0 border-right-0">
      <?php
      $company_qry = "SELECT user.*,company_detail.*,user.id as userid FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.permission = 'company' AND status ='blacklist'";
      $company_sql = mysqli_query($conn, $company_qry);
      ?>
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
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

          <div class="col-sm-6">
            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
              <!-- Datatable Info -->
              <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
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

              <!-- Unfold -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                  <i class="tio-filter-list mr-1"></i> Filter <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
                </a>

                <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                  <!-- Card -->
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-header-title">Filter users</h5>

                      <!-- Toggle Button -->
                      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="javascript:;" data-hs-unfold-options='{
                              "target": "#usersFilterDropdown",
                              "type": "css-animation",
                              "smartPositionOff": true
                             }'>
                        <i class="tio-clear tio-lg"></i>
                      </a>
                      <!-- End Toggle Button -->
                    </div>

                    <div class="card-body">
                      <form>
                        <div class="form-row">
                          <div class="col-sm form-group">
                            <small class="text-cap mb-2">Country</small>

                            <!-- Select -->
                            <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="3" data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                              <option value="">Any</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Singapore">Singapore</option>
                              <option value="India">India</option>
                              <option value="China">China</option>
                              <option value="Thai">Thai</option>
                            </select>
                            <!-- End Select -->
                          </div>

                          <div class="col-sm form-group">
                            <small class="text-cap mb-2">Status</small>

                            <!-- Select -->
                            <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="4" data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                              <option value="">Any status</option>
                              <option value="Active" data-option-template='<span class="legend-indicator bg-success"></span>Active'>Active</option>
                              <option value="Pending" data-option-template='<span class="legend-indicator bg-warning"></span>Pending'>Pending</option>
                              <option value="Suspended" data-option-template='<span class="legend-indicator bg-danger"></span>Suspended'>Suspended</option>
                            </select>
                            <!-- End Select -->
                          </div>
                        </div>
                        <!-- End Row -->

                        <a class="js-hs-unfold-invoker btn btn-block btn-primary" href="javascript:;" data-hs-unfold-options='{
                                "target": "#usersFilterDropdown",
                                "type": "css-animation",
                                "smartPositionOff": true
                               }'>Apply</a>
                      </form>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
              </div>
              <!-- End Unfold -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 7],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
          <thead class="thead-light">
            <tr>
              <th class="table-column-pr-0">
                <!-- <div class="custom-control custom-checkbox">
                  <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                  <label class="custom-control-label" for="datatableCheckAll"></label>
                </div> -->
              </th>
              <th class="table-column-pl-0">Name</th>
              <th>Contact</th>
              <th>Country</th>
              <th>Status</th>
              <th>Create Date</th>
              <th>Role</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php while ($company_array = mysqli_fetch_array($company_sql)) { ?>
              <tr>
                <td class="table-column-pr-0">
                  <!-- <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                    <label class="custom-control-label" for="usersDataCheck1"></label>
                  </div> -->
                </td>
                <td class="table-column-pl-0">
                  <a class="d-flex align-items-center" href="./profile-company.php?detail=<?= $company_array['userid']; ?>">
                    <div class="avatar avatar-circle">
                      <img class="avatar-img" src="<?= $assets; ?><?= ($company_array['profile_image']) ? '/image/' . $company_array['profile_image'] : '/assets/img/160x160/img2.jpg'; ?>" alt="Image Description">
                    </div>
                    <div class="ml-3">
                      <span class="d-block h5 text-hover-primary mb-0"><?= $company_array['company_name']; ?></span>
                      <span class="d-block font-size-sm text-body"><?= $company_array['email']; ?></span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0"><?= $company_array['contact']; ?></span>
                </td>
                <td><?= $company_array['country']; ?> <span class="text-hide">Code: <?= $company_array['country']; ?></span></td>
                <td>
                  <?php if ($company_array['status'] == "active") { ?>
                    <span class="legend-indicator bg-success"></span>Active
                  <?php } elseif ($company_array['status'] == "pending") { ?>
                    <span class="legend-indicator bg-warning"></span>Pending
                  <?php } elseif ($company_array['status'] == "drop") { ?>
                    <span class="legend-indicator bg-danger"></span>Suspended
                  <?php } else { ?>
                    <span class="legend-indicator bg-second"></span>BlackList
                  <?php } ?>
                </td>
                <td><?= $company_array['created_at']; ?></td>
                <td><?= $company_array['permission']; ?></td>
                <td>
                  <div class="btn-group" role="group">
                    <?php if ($company_array['status'] == "blacklist") { ?>
                      <a class="btn btn-sm btn-outline-primary" href="./company-whitelist.php?company=<?= $company_array['company_id']; ?>">
                        <i class="tio-done"></i> WhiteList
                      </a>
                    <?php } ?>
                  </div>
                </td>
                </td>
              </tr>
            <?php } ?>
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
              <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                <option value="10">10</option>
                <option value="15" selected>15</option>
                <option value="20">20</option>
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
<script src="<?= $assets; ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?= $assets; ?>/assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-transform-tabs-to-btn/dist/hs-transform-tabs-to-btn.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/select2/dist/js/select2.full.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/hs-counter/dist/hs-counter.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/appear/dist/appear.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net.extensions/select/select.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/jszip/dist/jszip.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= $assets; ?>/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js"></script>


<!-- JS Front -->
<script src="<?= $assets; ?>/assets/js/theme.min.js"></script>

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


    // INITIALIZATION OF SHOW PASSWORD
    // =======================================================
    $('.js-toggle-password').each(function() {
      new HSTogglePassword(this).init()
    });


    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });


    // INITIALIZATION OF TABS
    // =======================================================
    $('.js-tabs-to-dropdown').each(function() {
      var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
    });


    // INITIALIZATION OF STEP FORM
    // =======================================================
    $('.js-step-form').each(function() {
      var stepForm = new HSStepForm($(this), {
        finish: function() {
          $("#addUserStepFormProgress").hide();
          $("#addUserStepFormContent").hide();
          $("#successMessageContent").show();
        }
      }).init();
    });


    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function() {
      var mask = $.HSCore.components.HSMask.init($(this));
    });


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });


    // INITIALIZATION OF COUNTERS
    // =======================================================
    $('.js-counter').each(function() {
      var counter = new HSCounter($(this)).init();
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copy',
          className: 'd-none'
        },
        {
          extend: 'excel',
          className: 'd-none'
        },
        {
          extend: 'csv',
          className: 'd-none'
        },
        {
          extend: 'pdf',
          className: 'd-none'
        },
        {
          extend: 'print',
          className: 'd-none'
        },
      ],
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
          '<img class="mb-3" src="<?= $assets; ?>/assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">No data to show</p>' +
          '</div>'
      }
    });

    $('#export-copy').click(function() {
      datatable.button('.buttons-copy').trigger()
    });

    $('#export-excel').click(function() {
      datatable.button('.buttons-excel').trigger()
    });

    $('#export-csv').click(function() {
      datatable.button('.buttons-csv').trigger()
    });

    $('#export-pdf').click(function() {
      datatable.button('.buttons-pdf').trigger()
    });

    $('#export-print').click(function() {
      datatable.button('.buttons-print').trigger()
    });

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function(e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function() {
        var newValue = $input.val();

        if (newValue == "") {
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });


    // INITIALIZATION OF QUICK VIEW POPOVER
    // =======================================================
    $('#editUserPopover').popover('show');

    $(document).on('click', '#closeEditUserPopover', function() {
      $('#editUserPopover').popover('dispose');
    });

    $('#editUserModal').on('show.bs.modal', function() {
      $('#editUserPopover').popover('dispose');
    });


    // DARK POPOVER
    // =======================================================
    $('[data-toggle="popover-dark"]').on('shown.bs.popover', function() {
      $('.popover').last().addClass('popover-dark')
    })
  });
</script>

<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?= $assets; ?>/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>

</html>