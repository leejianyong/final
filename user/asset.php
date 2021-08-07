<?php
  $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
  $path .=$_SERVER["SERVER_NAME"];  
  $php_self = dirname($_SERVER["PHP_SELF"]);
  $path_self = explode('/', $php_self);
  $request_url = "$_SERVER[REQUEST_URI]";
  $request_url = explode('?', $request_url);
  $request_url = $request_url[0];
  $assets = $path."/".$path_self[1];
?>