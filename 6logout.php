<?php

session_start();
 

$_SESSION = array();
 

session_destroy();
 

header("location: log_in.php");
exit;
?>
