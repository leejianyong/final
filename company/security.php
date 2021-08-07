<?php
include_once("../auth/db.php");
if(isset($_SESSION['userid'])){
    $qry = "SELECT user.*,company_detail.company_id FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.id = '$_SESSION[userid]'";
    $sql = mysqli_query($conn,$qry);
    if (mysqli_num_rows($sql) !== 1){
        echo "<script>alert('no account')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }else{
        $request = mysqli_fetch_assoc($sql);
        if($request['permission']!=="company"){
            echo "<script>alert('not company')</script>";
            echo "<script>window.location.href='../index.php'</script>";
        }else{
            if($request['status']!=="approve"){
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
