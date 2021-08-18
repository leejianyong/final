<?php
if(isset($_GET['detail'])){
    $file = "../resume/$_GET[detail]";

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }else{
        echo "<script>window.location.href='account-setting.php';</script>";
    }
}else{
    echo "<script>window.location.href='account-setting.php';</script>";
}
?>