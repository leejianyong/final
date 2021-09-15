<?php
include_once('security.php');

if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `user` SET `status`='pending' WHERE id ='$_GET[company]' AND permission = 'company'";
    if(mysqli_query($conn,$qry)){
        $_SESSION['success']='Whitelist Success';
        echo "<script>window.location.href = 'company_black_list.php';</script>";
    }else{
        $_SESSION['error']='Whitelist Error';
        echo "<script>window.location.href = 'company_black_list.php';</script>";
    }
}else{
    echo "<script>window.location.href = 'company_black_list.php';</script>";
}

?>