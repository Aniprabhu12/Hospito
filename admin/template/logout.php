<?php
include '../config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['adid']);
header('location:login.php');
?>