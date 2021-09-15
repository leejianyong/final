<?php
include_once('security.php');
if($request['status']=="active"){
  echo "<script>window.location.href='index.php'</script>";
}elseif($request['status']=="pending"){
  // echo "<script>window.location.href='index.php'</script>";
}elseif($request['status']=="drop"){
  // echo "<script>window.location.href='index.php'</script>";
}elseif($request['status']=="blacklist"){
  // echo "<script>window.location.href='index.php'</script>";
}else{
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Company Approve Details</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/icon-set/style.css">
  <link rel="stylesheet" href="../assets/vendor/select2/dist/css/select2.min.css">
  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">
  <!-- <script src="../assets/js/theme.sweetalert2.all.min.js"></script> -->
  <link rel="stylesheet" href="../assets/js/sweetalert2.all.min.js">
</head>

<body class="footer-offset" data-offset="80" data-hs-scrollspy-options='{
          "target": "#navbarSettings"
        }'>
  <script src="../assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>
  <?php
  $Date = date("Y-m-d H:i:s");

  if (isset($_POST['email_submit'])) {
    if (!empty($_POST['email'])) {
      $qry = "SELECT * FROM user WHERE email ='$_POST[email]'";
      $row = mysqli_num_rows(mysqli_query($conn, $qry));
      if ($row >= 1) {
        echo "<script>Swal.fire('Email already Exist!','Choose another email...','error');</script>";
      } else {
        $update_qry = "UPDATE user SET email='$_POST[email]',updated_at='$Date' WHERE id='$_SESSION[userid]'";
        if (mysqli_query($conn, $update_qry)) {
          echo "<script>Swal.fire('Update Email Success!','Your information already update...','success');</script>";
        } else {  echo "<script>Swal.fire('Update Email Error!','Your information update failed...','error');</script>"; }
      }
    } else { echo "<script>Swal.fire('Update Email Error!','Your information update failed...','error');</script>"; }
  }

  if (isset($_POST['password-submit'])) {
    if (!empty($_POST['currentPassword']) & !empty($_POST['confirmNewPassword']) & !empty($_POST['newPassword'])) {
      $qry = "SELECT * FROM user WHERE id='$_SESSION[userid]'";
      $result = mysqli_fetch_assoc(mysqli_query($conn, $qry));
      if ($result['password'] == $_POST['currentPassword']) {
        if ($_POST['confirmNewPassword'] == $_POST['newPassword']) {
          $update_qry = "UPDATE user SET password='$_POST[newPassword]',updated_at='$Date' WHERE id='$_SESSION[userid]'";
          if (mysqli_query($conn, $update_qry)) {
            echo "<script>Swal.fire('Update Password Success!','Your information already update...','success');</script>";
          } else { echo "<script>Swal.fire('Update Password Error!','Your information update failed...','error');</script>"; }
        } else { echo "<script>Swal.fire('Dual New Password Unmatch!','Your information update failed...','error');</script>"; }
      } else { echo "<script>Swal.fire('Wrong Current Password!','Your information update failed...','error');</script>"; }
    }
  }

  if(isset($_POST['basic-submit'])){
    $datetime = date("YmdHis");

    $targetDir = "../image/";
    $fileName = basename($_FILES["profile_image"]["name"]);
    $Extension=explode(".", $fileName);
    $prod = $_SESSION['userid']."profile_image".$datetime;
    $NewFileName=$prod .".".end($Extension);
    $targetFilePath = $targetDir . $NewFileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($_FILES["profile_image"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFilePath)){
              $profile_image = $NewFileName;
            }else{
              echo "<script>Swal.fire('Error Upload Profile Image!','Your profile image update failed...','error');</script>";
            }
        }else{
          echo "<script>Swal.fire('Error Upload Profile Image!','Sorry, only JPG, JPEG & PNG files are allowed to upload.','error');</script>";
        }
    }

    $targetDir = "../image/";
    $fileName = basename($_FILES["background_image"]["name"]);
    $Extension=explode(".", $fileName);
    $prod = $_SESSION['userid']."background_image".$datetime;
    $NewFileName=$prod .".".end($Extension);
    $targetFilePath = $targetDir . $NewFileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($_FILES["background_image"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["background_image"]["tmp_name"], $targetFilePath)){
              $background_image = $NewFileName;
            }else{
              echo "<script>Swal.fire('Error Upload Background Image!','Your background image update failed...','error');</script>";
            }
        }else{
          echo "<script>Swal.fire('Error Upload Background Image!','Sorry, only JPG, JPEG & PNG files are allowed to upload.','error');</script>";
        }
    }

    if(!isset($_POST['acc'])){ $acc = 0; }else{ $acc = 1; }
    if(!isset($_POST['pro'])){ $pro = 0; }else{ $pro = 1; }
    if(!isset($_POST['multi'])){ $multi = 0; }else{ $multi = 1; }
    if(!isset($_POST['elec'])){ $elec = 0; }else{ $elec = 1; }
    if(!isset($_POST['net'])){ $net = 0; }else{ $net = 1; }

    $update_qry = "UPDATE company_detail SET 
    company_name='$_POST[company_name]',
    contact='$_POST[contact]',
    organization='$_POST[organization]',
    acc='$acc',
    pro='$pro',
    multi='$multi',
    elec='$elec',
    net='$net',
    country='$_POST[country]',
    city='$_POST[city]',
    state='$_POST[state]',
    addressline1='$_POST[addressLine1]',
    addressline2='$_POST[addressLine2]',";
    if(isset($background_image)){
      $update_qry .= "background_image='$background_image',";
    }
    if(isset($profile_image)){
      $update_qry .= "profile_image='$profile_image',";
    }
    $update_qry .= "updated_at='$Date' 
    WHERE company_id='$_SESSION[userid]'";
    if (mysqli_query($conn, $update_qry)) {
      $up_detail = "UPDATE user SET username='$_POST[company_name]',updated_at='$datetime' WHERE id='$_SESSION[userid]'";
      mysqli_query($conn, $up_detail);
      echo "<script>Swal.fire('Update Basic Information Success!','Your information already update...','success');</script>";
    } else { echo "<script>Swal.fire('Update Basic Information Error!','Your information update failed...','error');</script>"; }
  }
  
  $qry = "SELECT user.*,company_detail.* FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.id = '$_SESSION[userid]'";
  $sql = mysqli_query($conn,$qry);
  $result = mysqli_fetch_assoc($sql);
  ?>

  <!-- ========== MAIN CONTENT ========== -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-no-gutter">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="../index.php">Pages</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
              </ol>
            </nav>
            <h1 class="page-header-title">Company Information</h1>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-3">
          <!-- Navbar -->
          <div class="navbar-vertical navbar-expand-lg mb-3 mb-lg-5">
            <!-- Navbar Toggle -->
            <button type="button" class="navbar-toggler btn btn-block btn-white mb-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu" data-toggle="collapse" data-target="#navbarVerticalNavMenu">
              <span class="d-flex justify-content-between align-items-center">
                <span class="h5 mb-0">Nav menu</span>

                <span class="navbar-toggle-default">
                  <i class="tio-menu-hamburger"></i>
                </span>

                <span class="navbar-toggle-toggled">
                  <i class="tio-clear"></i>
                </span>
              </span>
            </button>
            <!-- End Navbar Toggle -->

            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
              <!-- Navbar Nav -->
              <ul id="navbarSettings" class="js-sticky-block js-scrollspy navbar-nav navbar-nav-lg nav-tabs card card-navbar-nav" data-hs-sticky-block-options='{
                       "parentSelector": "#navbarVerticalNavMenu",
                       "breakpoint": "lg",
                       "startPoint": "#navbarVerticalNavMenu",
                       "endPoint": "#stickyBlockEndPoint",
                       "stickyOffsetTop": 20
                     }'>
                <li class="nav-item">
                  <a class="nav-link active" href="#content">
                    <i class="tio-user-outlined nav-icon"></i> Basic information
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#emailSection">
                    <i class="tio-online nav-icon"></i> Email
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#passwordSection">
                    <i class="tio-lock-outlined nav-icon"></i> Password
                  </a>
                </li>
              </ul>
              <!-- End Navbar Nav -->
            </div>
          </div>
          <!-- End Navbar -->
        </div>

        <div class="col-lg-9">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Profile Cover -->
            <form id="Basic_information" method="POST" action="" enctype="multipart/form-data">
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img id="profileCoverImg" class="profile-cover-img" src="<?php if(!empty($result['background_image'])){ echo "../image/".$result['background_image'];}else{ echo "../assets/img/1920x400/img2.jpg"; } ?>" alt="Image Description">

                  <!-- Custom File Cover -->
                  <div class="profile-cover-content profile-cover-btn">
                    <div class="custom-file-btn">
                      <input type="file" name="background_image" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder" data-hs-file-attach-options='{
                                "textTarget": "#profileCoverImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
                      <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                        <i class="tio-add-photo mr-sm-1"></i>
                        <span class="d-none d-sm-inline-block">Update your header</span>
                      </label>
                    </div>
                  </div>
                  <!-- End Custom File Cover -->
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                <img id="avatarImg" class="avatar-img" src="<?php if(!empty($result['profile_image'])){ echo "../image/".$result['profile_image'];}else{ echo "../assets/img/160x160/img2.jpg"; } ?>" alt="Image Description">

                <input type="file" name="profile_image" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
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
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h2 class="card-title h4">Basic information</h2>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="newEmailLabel" class="col-sm-3 col-form-label input-label">Company Name</label>

                <div class="col-sm-9">
                  <input type="text" name="company_name" value="<?= $result['company_name']; ?>" class="form-control" name="newEmail" id="newEmailLabel" placeholder="Enter Company Name" aria-label="Enter Company Name" required data-msg="Please enter a valid Company Name.">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <!-- <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" aria-label="Email" value="mark@example.com">
                    </div>
                  </div> -->
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                <div class="col-sm-9">
                  <input type="text" class="js-masked-input form-control" name="contact" id="phoneLabel" placeholder="+x(xxx)xxzx-xxxx" aria-label="+x(xxx)xxxx-xxxx" value="<?= $result['contact']; ?>" data-hs-mask-options='{
                               "template": "+0(000)0000-0000"
                             }'>
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Organization</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Your organization" aria-label="Your organization" value="<?= $result['organization']; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div id="accountType" class="row form-group">
                <label class="col-sm-3 col-form-label input-label">Company type</label>

                <div class="col-sm-9">
                  <div class="input-group input-group-sm-down-break">
                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="acc" id="customInlineCheck1" class="custom-control-input indeterminate-checkbox" <?php if ($result['acc'] == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                          }; ?>>
                        <label class="custom-control-label" for="customInlineCheck1">Accounting</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="pro" id="customInlineCheck2" class="custom-control-input indeterminate-checkbox" <?php if ($result['pro'] == 1) {
                                                                                                                                                echo "checked";
                                                                                                                                              }; ?>>
                        <label class="custom-control-label" for="customInlineCheck2">Programming</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="multi" id="customInlineCheck3" class="custom-control-input indeterminate-checkbox" <?php if ($result['multi'] == 1) {
                                                                                                                                                echo "checked";
                                                                                                                                              }; ?>>
                        <label class="custom-control-label" for="customInlineCheck3">Multimedia</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="elec" id="customInlineCheck4" class="custom-control-input indeterminate-checkbox" <?php if ($result['elec'] == 1) {
                                                                                                                                                          echo "checked";
                                                                                                                                                        }; ?>>
                        <label class="custom-control-label" for="customInlineCheck4">Electronic</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="net" id="customInlineCheck5" class="custom-control-input indeterminate-checkbox" <?php if ($result['net'] == 1) {
                                                                                                                                                          echo "checked";
                                                                                                                                                        }; ?>>
                        <label class="custom-control-label" for="customInlineCheck5">Networking</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                  </div>
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="locationLabel" class="col-sm-3 col-form-label input-label">Country</label>
                <div class="col-sm-9">
                  <!-- Select -->
                    <select name="country" id="locationLabel" data-hs-select2-options='{
                                  "searchInputPlaceholder": "Search a country"
                                }'>
                      <option value="<?= $result['country']; ?>"></option>
                    </select>
                  <!-- End Select -->
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="cityLabel" class="col-sm-3 col-form-label input-label">City</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City" value="<?= $result['city']; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="stateLabel" class="col-sm-3 col-form-label input-label">State</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="state" id="stateLabel" placeholder="State" aria-label="State" value="<?= $result['state']; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="addressLine1Label" class="col-sm-3 col-form-label input-label">Address line 1</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address" value="<?= $result['addressline1']; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="addressLine2Label" class="col-sm-3 col-form-label input-label">Address line 2 <span class="input-label-secondary">(Optional)</span></label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="addressLine2" id="addressLine2Label" placeholder="Your address" aria-label="Your address" value="<?= $result['addressline2']; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <div class="d-flex justify-content-end">
                <button type="submit" name="basic-submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="emailSection" class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h3 class="card-title h4">Email</h3>
            </div>

            <!-- Body -->
            <div class="card-body">
              <p>Your current email address is <span class="font-weight-bold"><?= $result['email']; ?></span></p>

              <!-- Form -->
              <form method="post" action="">
                <!-- Form Group -->
                <div class="row form-group">
                  <label for="newEmailLabel" class="col-sm-3 col-form-label input-label">New email address</label>

                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" name="newEmail" id="newEmailLabel" placeholder="Enter new email address" aria-label="Enter new email address" required data-msg="Please enter a valid email address.">
                  </div>
                </div>
                <!-- End Form Group -->
                <br>
                <br>
                <br>
                <br>
                <div class="d-flex justify-content-end">
                  <button type="submit" name="email_submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              <!-- End Form -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div id="passwordSection" class="card mb-3 mb-lg-5">
            <div class="card-header">
              <h4 class="card-title">Change your password</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <form id="changePasswordForm" method="POST" action="">
                <!-- Form Group -->
                <div class="row form-group">
                  <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password">
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="newPassword" class="col-sm-3 col-form-label input-label">New password</label>

                  <div class="col-sm-9">
                    <input type="password" class="js-pwstrength form-control" name="newPassword" id="newPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-pwstrength-options='{
                               "ui": {
                                 "container": "#changePasswordForm",
                                 "viewports": {
                                   "progress": "#passwordStrengthProgress",
                                   "verdict": "#passwordStrengthVerdict"
                                 }
                               }
                             }'>

                    <p id="passwordStrengthVerdict" class="form-text mb-2"></p>

                    <div id="passwordStrengthProgress"></div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                  <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                  <div class="col-sm-9">
                    <div class="mb-3">
                      <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                  </div>
                </div>
                <!-- End Form Group -->

                <div class="d-flex justify-content-end">
                  <button type="submit" name="password-submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              <!-- End Form -->
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
  <script src="../assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
  <script src="../assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
  <script src="../assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js"></script>
  <script src="../assets/vendor/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

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


      // INITIALIZATION OF FILE ATTACH
      // =======================================================
      $('.js-file-attach').each(function() {
        var customFile = new HSFileAttach($(this)).init();
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


      // INITIALIZATION OF SELECT2 WITH FLAGS
      // =======================================================
      $.getJSON('../assets/json/flags.json', function(data) {
        const items = [{
          id: null,
          html: '',
          text: ''
        }];

        // let images = [];

        $.each(data, function(key, val) {
          // images[key] = new Image()
          // images[key].src = '.' + val.image

          items.push({
            id: val.name,
            text: val.name,
            // <img class="avatar avatar-xss avatar-circle mr-2" src="' + images[key].src + '" alt="Flag Image" />
            html: '<span class="d-flex align-items-center"><span class="text-truncate">' + val.name + '</span></span>'
          })
        });

        $.HSCore.components.HSSelect2.init($('#locationLabel'), {
          data: items,
          templateResult: function(data) {
            return data.html
          },
          templateSelection: function(data) {
            if (!data.id) {
              return '<span class="text-muted">Select country</span>'
            }

            return data.html
          }
        });
      });


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      $('.js-sticky-block').each(function() {
        var stickyBlock = new HSStickyBlock($(this), {
          targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
        }).init();
      });


      // INITIALIZATION OF SCROLL NAV
      // =======================================================
      var scrollspy = new HSScrollspy($('body'), {
        // !SETTING "resolve" PARAMETER AND RETURNING "resolve('completed')" IS REQUIRED
        beforeScroll: function(resolve) {
          if (window.innerWidth < 992) {
            $('#navbarVerticalNavMenu').collapse('hide').on('hidden.bs.collapse', function() {
              return resolve('completed');
            });
          } else {
            return resolve('completed');
          }
        }
      }).init();


      // INITIALIZATION OF PASSWORD STRENGTH MODULE
      // =======================================================
      $('.js-pwstrength').each(function() {
        var pwstrength = $.HSCore.components.HSPWStrength.init($(this));
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
  </script>
</body>

</html>