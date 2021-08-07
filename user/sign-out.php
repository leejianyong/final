<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(session_destroy()){
    echo "<script>window.location.href='../index.php';</script>";
}
?>