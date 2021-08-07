<?php
include_once('../auth/db.php');
if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `compony_job_request` SET `status`='pending' WHERE id ='$_GET[company]'";
    if(mysqli_query($conn,$qry)){
        echo "<script>alert('Whitelist Success')</script>";
        echo "<script>window.location.href = 'company_job_black_list.php';</script>";
    }else{
        echo "<script>alert('Whitelist Error')</script>";
        echo "<script>window.location.href = 'company_job_black_list.php';</script>";
    }
}

?>