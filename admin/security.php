<?php
include_once("../auth/db.php");
if(isset($_SESSION['userid'])){
    $qry = "SELECT * FROM user WHERE id = '$_SESSION[userid]'";
    $sql = mysqli_query($conn,$qry);
    if (mysqli_num_rows($sql) !== 1){
        echo "<script>alert('Account No Exist')</script>";
        echo "<script>window.location.href='../index.php'</script>";

    }else{
        $request = mysqli_fetch_assoc($sql);
        if($request['permission']!=="admin"){
            echo "<script>window.location.href='../index.php'</script>";
        }
    }
}else{
    echo "<script>window.location.href='../index.php'</script>";
}

?>
