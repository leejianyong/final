<?php
require('./navbar.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
?>
    <main id="content" role="main" class="main">
      <?php
           $company_qry = "SELECT applied_job.*,compony_job_request.*,user.*,applied_job.user_id as userid,applied_job.created_at as request_date,compony_job_request.created_at as job_date,jobseeker_detail.*,jobseeker_detail.resume as user_resume,user.email as user_email
          FROM applied_job LEFT JOIN compony_job_request ON applied_job.job_id = compony_job_request.id LEFT JOIN user ON applied_job.user_id = user.id LEFT JOIN jobseeker_detail ON applied_job.user_id = jobseeker_detail.user_id
          WHERE compony_job_request.company_id = '$_SESSION[userid]' AND applied_job.id = '$_GET[user]'";
          $company_sql = mysqli_query($conn,$company_qry);
          if(mysqli_num_rows($company_sql) == 0){
            echo "<script>window.location.href='user-applied.php';</script>";
          }
          $result = mysqli_fetch_array($company_sql);

          $company = "SELECT * FROM user WHERE id = '$result[company_id]'";
          $company_detail = mysqli_query($conn,$company);
          $company_result = mysqli_fetch_array($company_detail);
          
          function sendEmail($company_email, $company_name, $useremail, $username, $subject, $html)
          {
            $mail = new PHPMailer(true);                       // Passing `true` enables exceptions
            try {
                //服务器配置
                $mail->CharSet ="UTF-8";                      //设定邮件编码
                $mail->SMTPDebug = 0;                         // 调试模式输出
                $mail->isSMTP();                              // 使用SMTP
                $mail->Host = 'smtp.gmail.com';               // SMTP服务器
                $mail->SMTPAuth = true;                       // 允许 SMTP 认证
                $mail->Username = 'leejianyong97@gmail.com';  // SMTP 用户名  即邮箱的用户名
                $mail->Password = 'A2000356804abc';           // SMTP 密码  部分邮箱是授权码(例如163邮箱)
                $mail->SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
                $mail->Port = 465;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持
            
                $mail->setFrom($company_email, $company_name);      //发件人
                $mail->addAddress($useremail, $username);   // 收件人
                //$mail->addAddress('ellen@example.com');                   // 可添加多个收件人
                $mail->addReplyTo($company_email, $company_name);       //回复的时候回复给哪个邮箱 建议和发件人一致
                //$mail->addCC('cc@example.com');                           //抄送
                //$mail->addBCC('bcc@example.com');                         //密送
            
                //发送附件
                // $mail->addAttachment('../xy.zip');                       // 添加附件
                // $mail->addAttachment('../thumb-1.jpg', 'new.jpg');       // 发送附件并且重命名
            
                //Content
                $mail->isHTML(true);                                        // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
                $mail->Subject = $subject;
                $mail->Body    = '<h2>'. $company_email .'</h2>'. $html .'<br>'. date('Y-m-d H:i:s');
                $mail->AltBody = $html;
            
                $mail->send();
                $_SESSION['success'] = 'Email Send Success';
                echo "<script>window.location.href='user-applied.php';</script>";
            } catch (Exception $e) {
                $_SESSION['error'] = $mail->ErrorInfo;
                echo "<script>window.location.href='user-applied.php';</script>";
            }
          }
          if(isset($_POST['submit'])){
            sendEmail($company_result['email'], $company_result['username'], $_POST['email'], $_POST['username'], $_POST['subject'], $_POST['masseges']);
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
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Company</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comapny Email</li>
                  </ol>
                </nav>
                <h1 class="page-header-title">Comapny Email</h1>
              </div>
            </div>
          </div>
          <!-- End Page Header -->
          <form action="" method="post">
            <div class="row ">
              <div class="col-lg-12">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5 border border-warning">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">User information</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form Group -->
                    

                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="Subject" class="input-label">User Name</label>
                          <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" aria-label="Enter User Name" value="<?=$result['firstname'];?> <?=$result['lastname'];?>" required> 
                        </div>
                        <!-- End Form Group -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="weightLabel" class="input-label">User Email</label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter User Email" aria-label="Enter User Email" value="<?=$result['user_email'];?>" required>
                        </div>
                        <!-- End Form Group -->
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="productNameLabel" class="input-label">Subject <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="This is Subject Title."></i></label>
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Your Subject" aria-label="Enter Your Subject" value="<?=$result['title'];?>" required>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <!-- Form Group -->
                        <div class="form-group">
                          <label for="weightLabel" class="input-label">Email</label>
                          <textarea type="text" class="form-control" placeholder="Enter Your Masseges" name="masseges" id="masseges" rows="10" required></textarea>
                        </div>
                        <!-- End Form Group -->
                      </div>
                    </div>
                    
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
                      <a type="button" href="user-applied.php" class="btn btn-ghost-danger">Cancel</a>
                    </div>
                    <div class="col-auto">
                      <button type="submit" name="submit" class="btn btn-primary">Send</button>
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

    <!-- ========== END SECONDARY CONTENTS ========== -->

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

        
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF TABS
        // =======================================================
        $('.js-tabs-to-dropdown').each(function () {
          var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
        });

        
        // INITIALIZATION OF STEP FORM
        // =======================================================
        $('.js-step-form').each(function () {
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
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
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
          buttons: [
            {
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

        
        // INITIALIZATION OF QUICK VIEW POPOVER
        // =======================================================
        $('#editUserPopover').popover('show');

        $(document).on('click', '#closeEditUserPopover' , function() {
          $('#editUserPopover').popover('dispose');
        });

        $('#editUserModal').on('show.bs.modal', function() {
          $('#editUserPopover').popover('dispose');
        });


        // DARK POPOVER
        // =======================================================
        $('[data-toggle="popover-dark"]').on('shown.bs.popover', function () {
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