<?php
  $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
  $path .=$_SERVER["SERVER_NAME"];  
  $php_self = dirname($_SERVER["PHP_SELF"]);
  $path_self = explode('/', $php_self);
  $request_url = "$_SERVER[REQUEST_URI]";
  $assets = $path."/".$path_self[1];
?>