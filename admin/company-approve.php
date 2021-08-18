<?php
include_once('security.php');

if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `user` SET `status`='active' WHERE id ='$_GET[company]' AND permission = 'company'";
    if(mysqli_query($conn,$qry)){
        echo "<script>alert('Aprrove Success')</script>";
        echo "<script>window.location.href = 'company_list.php';</script>";
    }else{
        echo "<script>alert('Aprrove Error')</script>";
        echo "<script>window.location.href = 'company_list.php';</script>";
    }
}else{
    echo "<script>window.location.href = 'company_list.php';</script>";
}

?>