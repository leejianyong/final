<?php
include("navbar.php");

?>
<main id="content" role="main" class="main">
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
<?php
if(isset($_POST['job_submit'])){
  $Date = date("Y-m-d H:i:s");

  $datetime = date("YmdHis");

  $job_image = NULL;
  $targetDir = "../image/";
  $fileName = basename($_FILES["job_image"]["name"]);
  $Extension=explode(".", $fileName);
  $prod = $_SESSION['userid']."job_image".$datetime;
  $NewFileName=$prod .".".end($Extension);
  $targetFilePath = $targetDir . $NewFileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  if(!empty($_FILES["job_image"]["name"])){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["job_image"]["tmp_name"], $targetFilePath)){
            $job_image = $NewFileName;
          }else{ $_SESSION['error'] = 'Error Upload Profile Image!'; 
            echo "<script>window.location.href = 'project-add.php';</script>";}
      }else{ $_SESSION['error'] = 'Only JPG, JPEG & PNG files are Allowed to Upload!'; 
        echo "<script>window.location.href = 'project-add.php';</script>";}
  }

  $job_background_image = NULL;
  $targetDir = "../image/";
  $fileName = basename($_FILES["job_background_image"]["name"]);
  $Extension=explode(".", $fileName);
  $prod = $_SESSION['userid']."job_background_image".$datetime;
  $NewFileName=$prod .".".end($Extension);
  $targetFilePath = $targetDir . $NewFileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  if(!empty($_FILES["job_background_image"]["name"])){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["job_background_image"]["tmp_name"], $targetFilePath)){
            $job_background_image = $NewFileName;
          }else{ $_SESSION['error'] = 'Error Upload Background Image!'; 
            echo "<script>window.location.href = 'project-add.php';</script>";}
      }else{ $_SESSION['error'] = 'Only JPG, JPEG & PNG files are Allowed to Upload!'; 
        echo "<script>window.location.href = 'project-add.php';</script>";}
  }

  $create_qry = "INSERT INTO `compony_job_request`(`company_id`, `title`, `subtitle`, `description`, `salary`, `currency`, `gender`, `type`, `subject`, `job_image`, `job_background_image`, `status`, `created_at`) VALUES 
  ('$_SESSION[userid]','$_POST[title]','$_POST[subtitle]','$_POST[description]','$_POST[salary]','$_POST[currency]','$_POST[gender]','$_POST[type]','$_POST[subject]',
  '$job_image',
  '$job_background_image',
  'pending',
  '$Date')";
  if (mysqli_query($conn, $create_qry)) {
    $_SESSION['success'] = 'Create Job Request Success!';
    echo "<script>window.location.href = 'project-list.php';</script>";
  } else { $_SESSION['error'] = 'Create Job Request Error!'; 
    echo "<script>window.location.href = 'project-add.php';</script>";}
}
?>
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col-sm mb-2 mb-sm-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Jobs</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Job Request</li>
            </ol>
          </nav>
          <h1 class="page-header-title">Add Job Request</h1>
        </div>
      </div>
    </div>
    <!-- End Page Header -->
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Profile Cover -->
            <div class="profile-cover">
              <div class="profile-cover-img-wrapper">
                <img id="profileCoverImg" class="profile-cover-img" src="../assets/img/1920x400/img2.jpg" alt="Image Description">

                <!-- Custom File Cover -->
                <div class="profile-cover-content profile-cover-btn">
                  <div class="custom-file-btn">
                    <input type="file" name="job_background_image" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder" data-hs-file-attach-options='{
                                "textTarget": "#profileCoverImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
                    <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                      <i class="tio-add-photo mr-sm-1"></i>
                      <span class="d-none d-sm-inline-block">Update your background</span>
                    </label>
                  </div>
                </div>
                <!-- End Custom File Cover -->
              </div>
            </div>
            <!-- End Profile Cover -->

            <!-- Avatar -->
            <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
              <img id="avatarImg" class="avatar-img" src="../assets/img/160x160/img2.jpg" alt="Image Description">
              <input type="file" name="job_image" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                          "textTarget": "#avatarImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>
              <span class="avatar-uploader-trigger">
                <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
              </span>
            </label>
            <!-- End Avatar -->

            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Job Request Information</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form Group -->
              <div class="form-group">
                <label for="Title" class="input-label">Title <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="This is your main title."></i></label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" aria-label="Title" value="" required>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="form-group">
                <label for="subTitle" class="input-label">Sub Title <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="This is your sub title."></i></label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title" aria-label="Sub Title" value="" required>
              </div>
              <!-- End Form Group -->
              <label class="input-label">Description <span class="input-label-secondary">(Optional)</span></label>
              <!-- Quill -->
              <textarea id="description" name="description" class="form-control" placeholder="Description field" rows="4" required></textarea>
              <!-- End Quill -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-4">
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">More Informtaion</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="form-group">
                <label for="priceNameLabel" class="input-label">Salary</label>

                <div class="input-group">
                  <input type="text" class="form-control" name="salary" id="salary" placeholder="0.00" aria-label="0.00" value="" required>
                  <div class="input-group-append">
                    <!-- Select -->
                    <div id="priceCurrencySelect" class="select2-custom select2-custom-right">
                      <select name="currency" class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                                  "dropdownParent": "#priceCurrencySelect",
                                  "dropdownAutoWidth": true,
                                  "width": true
                                }'>
                        <option value="USD">USD</option>
                        <option value="MYR" selected>MYR</option>
                        <option value="SGD">SGD</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                </div>
              </div>
              <!-- Form Group -->
              <div class="form-group">
                <label for="categoryLabel" class="input-label">Gender</label>

                <!-- Select -->
                <select name="gender" class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="categoryLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select gender"
                          }' required>
                  <option label="empty"></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Both" selected>Both</option>
                </select>
                <!-- End Select -->
              </div>
              <!-- Form Group -->

              <!-- Form Group -->
              <div class="form-group">
                <label for="typeLabel" class="input-label">Work Type</label>

                <!-- Select -->
                <select name="type" class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="typeLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select Work Type"
                          }' required>
                  <option label="empty"></option>
                  <option value="InternShip" selected>InternShip</option>
                  <option value="FullTime">FullTime</option>
                  <option value="PathTime">PathTime</option>
                </select>
                <!-- End Select -->
              </div>
              <!-- Form Group -->

              <!-- Form Group -->
              <div class="form-group">
                <label for="collectionsLabel" class="input-label">Request Course</label>
                <!-- Select -->
                <select name="subject" class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="collectionsLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select Request Course"
                          }' required>
                  <option label="empty" selected></option>
                  <option value="Accounting">Accounting</option>
                  <option value="Multimedia">Multimedia</option>
                  <option value="Programming">Programming</option>
                  <option value="Eletronic">Eletronic</option>
                  <option value="Networking">Networking</option>
                </select>
                <!-- End Select -->
              </div>
              <!-- Form Group -->
            </div>
            <!-- Body -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Row -->

      <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
        <!-- Card -->
        <div class="card card-sm bg-dark border-dark mx-2">
          <div class="card-body">
            <div class="row justify-content-center justify-content-sm-between">
              <div class="col">
                <!-- <button type="button" class="btn btn-ghost-danger">Delete</button> -->
                <a href="project-list.php" class="btn btn-ghost-light mr-2">Cancel</a>
              </div>
              <div class="col-auto">
                <!-- <button type="button" class="btn btn-ghost-light mr-2">Discard</button> -->
                <button type="submit" name="job_submit" class="btn btn-primary">Add Request</button>
              </div>
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </form>
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

<!-- Add Image from URL Modal -->
<div class="modal fade" id="addImageFromURLModal" tabindex="-1" role="dialog" aria-labelledby="addImageFromURLModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="addImageFromURLModalTitle" class="modal-title">Add image from URL</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <label for="pasteImageURLNameLabel" class="input-label">Paste image URL</label>
        <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://" aria-label="https://">
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button type="button" class="btn btn-primary">Add media</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Add Image from URL Modal -->

<!-- Embed Video Modal -->
<div class="modal fade" id="embedVideoModal" tabindex="-1" role="dialog" aria-labelledby="embedVideoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="embedVideoModalTitle" class="modal-title">Embed video</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <label for="pasteVideoURLNameLabel" class="input-label">Paste video URL</label>
        <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://" aria-label="https://">
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button type="button" class="btn btn-primary">Add media</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
  -
</div>
<!-- End Embed Video Modal -->

<!-- Products Advanced Features Modal -->
<div class="modal fade" id="productsAdvancedFeaturesModal" tabindex="-1" role="dialog" aria-hidden="true">
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
      <div class="modal-body">
        <div class="text-center mb-7">
          <h4 class="h1">Advanced features</h4>
          <p>"Compare to" Price, Bulk Discount Pricing, Inventory Tracking</p>

          <a class="btn btn-primary" href="#">
            <i class="tio-star mr-1"></i> Upgrade to get these features
          </a>
        </div>

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="../assets/svg/illustrations/choice.svg" alt="Image Description">

          <div class="media-body">
            <h4>"Compare to" price</h4>
            <p>Use this feature when you want to put a product on sale or show savings off suggested retail pricing.</p>
          </div>
        </div>
        <!-- End Media -->

        <hr class="my-4">

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="../assets/svg/illustrations/presenting.svg" alt="Image Description">

          <div class="media-body">
            <h4>Bulk discount pricing</h4>
            <p>Encourage higher purchase quantities with volume discounts.</p>
          </div>
        </div>
        <!-- End Media -->

        <hr class="my-4">

        <!-- Media -->
        <div class="d-sm-flex">
          <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="../assets/svg/illustrations/book.svg" alt="Image Description">

          <div class="media-body">
            <h4>Inventory tracking</h4>
            <p>Automatically keep track of product availability and receive notifications when inventory levels get low.</p>
          </div>
        </div>
        <!-- End Media -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Close</button>
        <button type="button" class="btn btn-primary">Upgrade now</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
  -
</div>
<!-- End Products Advanced Features Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
<script src="../assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js"></script>
<script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="../assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>
<script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
<script src="../assets/vendor/quill/dist/quill.min.js"></script>
<script src="../assets/vendor/@yaireo/tagify/dist/tagify.min.js"></script>
<script src="../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="../assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatables.net.extensions/select/select.min.js"></script>
<script src="../assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
<script src="../assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>


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


    // INITIALIZATION OF QUILLJS EDITOR
    // =======================================================
    var quill = $.HSCore.components.HSQuill.init('.js-quill');


    // INITIALIZATION OF TAGIFY
    // =======================================================
    $('.js-tagify').each(function() {
      var tagify = $.HSCore.components.HSTagify.init($(this));
    });

    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });

    // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
    // =======================================================
    $('.js-dropzone').each(function() {
      var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
    });


    // INITIALIZATION OF FANCYBOX
    // =======================================================
    $('.js-fancybox').each(function() {
      var fancybox = $.HSCore.components.HSFancyBox.init($(this));
    })


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
      }
    });


    // INITIALIZATION OF QUANTITY COUNTER
    // =======================================================
    $('.js-quantity-counter').each(function() {
      var quantityCounter = new HSQuantityCounter($(this)).init();
    });


    // INITIALIZATION OF ADD INPUT FILED
    // =======================================================
    $('.js-add-field').each(function() {
      new HSAddField($(this), {
        addedField: function() {
          $('.js-add-field .js-quantity-counter-dynamic').each(function() {
            var quantityCounter = new HSQuantityCounter($(this)).init();
          });
        }
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