<?php
include_once('security.php');

if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `compony_job_request` SET `status`='drop' WHERE id ='$_GET[company]'";
    if(mysqli_query($conn,$qry)){
        $_SESSION['success']='Drop Success';
        echo "<script>window.location.href = 'company_job_list.php';</script>";
    }else{
        $_SESSION['error']='Drop Error';
        echo "<script>window.location.href = 'company_job_list.php';</script>";
    }
}else{
    echo "<script>window.location.href = 'company_job_list.php';</script>";
}

?>