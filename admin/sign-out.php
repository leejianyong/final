<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
session_start();
$_SESSION['destroy'] = 'Log Out Success!';
echo "<script>window.location.href='../index.php';</script>";
?>