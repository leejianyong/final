<?php
include_once('../auth/db.php');
if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `user` SET `status`='drop' WHERE id ='$_GET[company]' AND permission = 'company'";
    if(mysqli_query($conn,$qry)){
        echo "<script>alert('Drop Success')</script>";
        echo "<script>window.location.href = 'company_list.php';</script>";
    }else{
        echo "<script>alert('Drop Error')</script>";
        echo "<script>window.location.href = 'company_list.php';</script>";
    }
}else{
    echo "<script>window.location.href = 'company_list.php';</script>";
}

?>