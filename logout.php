<?php
session_start();
session_unset();
session_destroy();
$_SESSION['logged_in']=false;
header('location:index.php');
?>
