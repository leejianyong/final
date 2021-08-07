<?php
    $qry = "SELECT user.*,company_detail.* FROM user LEFT JOIN company_detail ON user.id = company_detail.company_id WHERE user.id = '$_SESSION[userid]'";
    $sql = mysqli_query($conn,$qry);
    $result = mysqli_fetch_assoc($sql);
?>