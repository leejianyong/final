<?php
  include('navbar.php');
  $job_qry = "SELECT * FROM `compony_job_request` WHERE company_id = '$_SESSION[userid]' AND deleted_at IS NULL AND status != 'blacklist'";
  $job_sql = mysqli_query($conn,$job_qry);
  $job_row = mysqli_num_rows($job_sql);
?>
  <link rel="stylesheet" href="../assets/js/sweetalert2.all.min.js">
  <script src="../assets/js/sweetalert2.all.min.js"></script>
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
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center mb-3">
          <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">Job Request List<span class="badge badge-soft-dark ml-2"><?= $job_row; ?></span></h1>
          </div>
          <div class="col-sm-auto">
            <a class="btn btn-primary" href="./project-add.php">Add Request</a>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row justify-content-end mb-3">
        <div class="col-lg">
          <!-- Datatable Info -->
          <div id="datatableCounterInfo" style="display: none;">
            <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
              <span class="d-block d-sm-inline-block font-size-sm mr-3 mb-2 mb-sm-0">
                <span id="datatableCounter">0</span>
                Selected
              </span>
              <a class="btn btn-sm btn-outline-danger mb-2 mb-sm-0 mr-2" href="javascript:;">
                <i class="tio-delete-outlined"></i> Delete
              </a>
              <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                <i class="tio-archive"></i> Archive
              </a>
              <a class="btn btn-sm btn-white mb-2 mb-sm-0 mr-2" href="javascript:;">
                <i class="tio-publish"></i> Publish
              </a>
              <a class="btn btn-sm btn-white mb-2 mb-sm-0" href="javascript:;">
                <i class="tio-clear"></i> Unpublish
              </a>
            </div>
          </div>
          <!-- End Datatable Info -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card border border-warning">
        <!-- Header -->
        <div class="card-header">
          <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-md-4 mb-3 mb-md-0">
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

            <div class="col-auto">
              <!-- Unfold -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;"
                    data-hs-unfold-options='{
                      "target": "#showHideDropdown",
                      "type": "css-animation"
                    }'>
                  <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">6</span>
                </a>

                <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Product</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_product">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_product" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Type</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_type">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_type" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Sub Title</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_vendor">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_vendor">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Gender</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_stocks">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_stocks" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Status</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_sku">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_sku" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Salary</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_price">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_price" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Subject</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_quantity">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_quantity">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <span class="mr-2">Created At</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_variants">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_variants" checked>
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Unfold -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                data-hs-datatables-options='{
                  "columnDefs": [{
                    "targets": [0, 4, 9],
                    "width": "5%",
                    "orderable": false
                  }],
                  "order": [],
                  "info": {
                    "totalQty": "#datatableWithPaginationInfoTotalQty"
                  },
                  "search": "#datatableSearch",
                  "entries": "#datatableEntries",
                  "pageLength": 12,
                  "isResponsive": false,
                  "isShowPaging": false,
                  "pagination": "datatablePagination"
                }'>
            <thead class="thead-light">
              <tr>
                <th></th>
                <th>Job</th>
                <th>Type</th>
                <th>Sub Title</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Salary</th>
                <th>Subject</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while($job_result = mysqli_fetch_array($job_sql)){ ?>
                <tr>
                  <td></td>
                  <td>
                    <a class="media align-items-center" href="./project-detail.php?detail=<?= $job_result['id']; ?>">
                      <img class="avatar avatar-lg mr-3" src="<?php if(!empty($job_result['job_image'])){ echo "../image/".$job_result['job_image'];}else{ echo "../assets/img/400x400/img2.jpg"; } ?>" alt="Image Description">
                      <div class="media-body">
                        <h5 class="text-hover-primary mb-0"><?= $job_result['title']; ?></h5>
                      </div>
                    </a>
                  </td>
                  <td><?= $job_result['type']; ?></td>
                  <td><?= $job_result['subtitle']; ?></td>
                  <td><?= $job_result['gender']; ?></td>
                  <td>
                    <?php if($job_result['status']=='pending'){
                      echo "<span class='legend-indicator bg-warning'></span>Pending";
                    }elseif($job_result['status']=='active'){
                      echo "<span class='legend-indicator bg-success'></span>Active";
                    }elseif($job_result['status']=='blacklist'){
                      echo "<span class='legend-indicator bg-second'></span>BlackList";
                    }else{
                      echo "<span class='legend-indicator bg-danger'></span>Suspended";
                    }
                    ?>
                  </td>
                  <td><?= $job_result['currency']; ?> <?= $job_result['salary']; ?></td>
                  <td><?= $job_result['subject']; ?></td>
                  <td><?= $job_result['created_at']; ?></td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-sm btn-white" href="./project-detail.php?detail=<?= $job_result['id']; ?>">
                        <i class="tio-edit"></i> Edit
                      </a>
                      
                      <!-- Unfold -->
                      <div class="hs-unfold btn-group">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty" href="javascript:;"
                          data-hs-unfold-options='{
                            "target": "#productsEditDropdown<?= $job_result['id']; ?>",
                            "type": "css-animation",
                            "smartPositionOffEl": "#datatable"
                          }'></a>

                        <div id="productsEditDropdown<?= $job_result['id']; ?>" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                          <a class="dropdown-item" href="job-delete.php?id=<?= $job_result['id']; ?>">
                            <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                          </a>
                          <?php if($job_result['status'] != 'drop'){ ?>
                          <!-- <a class="dropdown-item" href="job-drop.php?id=<?= $job_result['id']; ?>">
                            <i class="tio-archive dropdown-item-icon"></i> Drop
                          </a> -->
                          <?php } ?>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
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
                <select id="datatableEntries" class="js-select2-custom"
                        data-hs-select2-options='{
                          "minimumResultsForSearch": "Infinity",
                          "customClass": "custom-select custom-select-sm custom-select-borderless",
                          "dropdownAutoWidth": true,
                          "width": true
                        }'>
                  <option value="12" selected>12</option>
                  <option value="14">14</option>
                  <option value="16">16</option>
                  <option value="18">18</option>
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
  <script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables.net.extensions/select/select.min.js"></script>
  <script src="../assets/vendor/@yaireo/tagify/dist/tagify.min.js"></script>
  

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

      
      // INITIALIZATION OF SELECT2
      // =======================================================
      $('.js-select2-custom').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });

      
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
              '<img class="mb-3" src="../assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
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

      $('#toggleColumn_product').change(function (e) {
        datatable.columns(1).visible(e.target.checked)
      })

      $('#toggleColumn_type').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      })

      datatable.columns(3).visible(false)

      $('#toggleColumn_vendor').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_stocks').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      })

      $('#toggleColumn_sku').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      })

      $('#toggleColumn_price').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      })

      datatable.columns(7).visible(false)

      $('#toggleColumn_quantity').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      })

      $('#toggleColumn_variants').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      })

      
      // INITIALIZATION OF TAGIFY
      // =======================================================
      $('.js-tagify').each(function () {
        var tagify = $.HSCore.components.HSTagify.init($(this));
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
  </body>
</html>
