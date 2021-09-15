<?php
include_once('security.php');

if(isset($_GET['company']) & !empty($_GET['company'])){
    $qry = "UPDATE `user` SET `status`='active' WHERE id ='$_GET[company]' AND permission = 'company'";
    if(mysqli_query($conn,$qry)){
        $_SESSION['success']='Aprrove Success';
        echo "<script>window.location.href = 'index.php';</script>";
    }else{
        $_SESSION['error']='Aprrove Error';
        echo "<script>window.location.href = 'index.php';</script>";
    }
}else{
    echo "<script>window.location.href = 'index.php';</script>";
}

?>