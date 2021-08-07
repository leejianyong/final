<?php
  include_once('./auth/db.php');
?>
<?php
if(isset($_SESSION['userid'])){
  $qry = "SELECT * FROM user WHERE id = '$_SESSION[userid]'";
  $sql = mysqli_query($conn,$qry);
  if (mysqli_num_rows($sql) !== 1){
    echo "<script>$('#welcomeMessageModal').modal('show');</script>";
  }else{
    $request = mysqli_fetch_assoc($sql);
    switch ($request['permission']) {
      case "admin":
        $_SESSION['userid']=$request['id'];
        echo "<script>window.location.href='./admin/index.php'</script>";
        break;
      case "company":   
        $_SESSION['userid']=$request['id'];
        echo "<script>window.location.href='./company/security.php'</script>";
        break;
      case "user":
        $_SESSION['userid']=$request['id'];
        echo "<script>window.location.href='./user/index.php'</script>";
        break;
      default:
        echo "<script>$('#welcomeMessageModal').modal('show');</script>";
    }
  }
}
if(isset($_POST['submit'])){
  if(!empty($_POST['email'])&!empty($_POST['password'])){
    $qry = "SELECT * FROM user WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
    $sql = mysqli_query($conn,$qry);
    if (mysqli_num_rows($sql) !== 1){
      echo "<script>$('#welcomeMessageModal').modal('show');</script>";
    }else{
      $request = mysqli_fetch_assoc($sql);
      switch ($request['permission']) {
        case "admin":
          $_SESSION['userid']=$request['id'];
          echo "<script>window.location.href='./admin/index.php'</script>";
          break;
        case "company":   
          $_SESSION['userid']=$request['id'];
          echo "<script>window.location.href='./company/security.php'</script>";
          break;
        case "user":
          $_SESSION['userid']=$request['id'];
          echo "<script>window.location.href='./user/index.php'</script>";
          break;
        default:
          echo "<script>$('#welcomeMessageModal').modal('show');</script>";
      }
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Company Request Signin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/icon-set/style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
  </head>

    <body>
      <!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(./assets/svg/components/abstract-bg-4.svg);">
          <!-- SVG Bottom Shape -->
          <figure class="position-absolute right-0 bottom-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
              <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
          </figure>
          <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
          <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="z-index-2" src="./assets/img/logo_png/logo_ysl.png" alt="Image Description" style="width: 8rem;">
          </a>

          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <!-- Card -->
              <div class="card card-lg mb-5">
                <div class="card-body">
                  <!-- Form -->
                  <form class="js-validate" method="post">
                    <div class="text-center">
                      <div class="mb-5">
                        <h1 class="display-4">Sign in</h1>
                        <p>Don't have an account yet? <a href="user-signup.php">Sign up here</a></p>
                      </div>
                      <span class="divider text-muted mb-4">Login</span>
                    </div>

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signinSrEmail">Your email</label>
                      <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signupSrPassword" tabindex="0">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="input-label-secondary" href="authentication-reset-password-basic.html">Forgot Password?</a>
                        </span>
                      </label>

                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                               data-msg="Your password is invalid. Please try again."
                               data-hs-toggle-password-options='{
                                 "target": "#changePassTarget",
                                 "defaultClass": "tio-hidden-outlined",
                                 "showClass": "tio-visible-outlined",
                                 "classChangeTarget": "#changePassIcon"
                               }'>
                        <div id="changePassTarget" class="input-group-append">
                          <a class="input-group-text" href="javascript:;">
                            <i id="changePassIcon" class="tio-visible-outlined"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->

                    <button type="submit" name="submit"   class="btn btn-lg btn-block btn-primary">Sign in</button>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Footer -->
              <div class="text-center">
                <small class="text-cap mb-4">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                  <div class="row justify-content-between">
                    <div class="col">
                      <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
        <!-- End Content -->
      </main>

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

                <h4 class="h1">Email And Password Dont Exist</h4>

                <p>please check properly your email and password.</p>
              </div>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer d-block text-center py-sm-5">
               -->

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
      <!-- ========== END MAIN CONTENT ========== -->

      <!-- JS Global Compulsory  -->
      <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
      <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <!-- JS Implementing Plugins -->
      <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
      <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

      <!-- JS Front -->
      <script src="./assets/js/theme.min.js"></script>

      <!-- JS Plugins Init. -->
      <script>
        $(document).on('ready', function () {
          // INITIALIZATION OF SHOW PASSWORD
          // =======================================================
          $('.js-toggle-password').each(function () {
            new HSTogglePassword(this).init()
          });


          // INITIALIZATION OF FORM VALIDATION
          // =======================================================
          $('.js-validate').each(function() {
            $.HSCore.components.HSValidation.init($(this));
          });
        });
      </script>

      <!-- IE Support -->
      <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
      </script>
    </body>
</html>
