<?php
include_once("../auth/db.php");
if(isset($_SESSION['userid'])){
    $qry = "SELECT user.*,jobseeker_detail.* FROM user LEFT JOIN jobseeker_detail ON user.id = jobseeker_detail.user_id WHERE user.id = '$_SESSION[userid]'";
    $sql = mysqli_query($conn,$qry);
    if (mysqli_num_rows($sql) !== 1){
        echo "<script>alert('no account')</script>";
        // echo "<script>window.location.href='account-setting.php'</script>";
    }else{
        $request = mysqli_fetch_assoc($sql);
        if($request['permission']!=="user"){
            echo "<script>alert('not user')</script>";
        }else{
            if($request['status']!=="active"){
                if($_SERVER['REQUEST_URI']!=="/company_job/company/account-setting.php"){
                    echo "<script>window.location.href='account-setting.php'</script>";
                }else{
                }
            }
        }
    }
}else{
    echo "<script>window.location.href='../index.php'</script>";
}

?>
