<?php
include_once('security.php');
    if(isset($_GET['detail'])){
        $Date = date("Y-m-d H:i:s");
        $check = "SELECT * FROM `applied_job` WHERE job_id = '$_GET[detail]' AND user_id ='$_SESSION[userid]'";
        $sql = mysqli_query($conn,$check);
        if(mysqli_num_rows($sql)==0){
            $qry = "INSERT INTO `applied_job`(`job_id`, `user_id`, `remark`, `extra_file`, `created_at`) VALUES ('$_GET[detail]','$_SESSION[userid]','','','$Date')";
            if(mysqli_query($conn,$qry)){
                echo "<script>alert('Approve Success');window.location.href='job-list.php'</script>";
            }else{
                echo "<script>alert('Approve Error');window.location.href='job-list.php'</script>";
            }
        }else{
            echo "<script>alert('Approve Already Exist');window.location.href='job-list.php'</script>";
        }
    }else{
        echo "<script>alert('Approve Error');window.location.href='job-list.php'</script>";
    }
?>