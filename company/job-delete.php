<?php
include_once('../auth/db.php');
if(isset($_GET['id'])){
    $Date = date("Y-m-d H:i:s");
    $qry = "UPDATE `compony_job_request` SET `deleted_at`='$Date' WHERE company_id = '$_SESSION[userid]' AND id = '$_GET[id]'";
    mysqli_query($conn,$qry);
    $_SESSION['success'] = 'Delete Success';
    echo "<script>window.location.href='project-list.php';</script>";
}else{
    $_SESSION['error'] = 'Delete Error';
    echo "<script>window.location.href='project-list.php';</script>";
}
?>