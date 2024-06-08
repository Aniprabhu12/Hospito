<?php
include '../config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['docid']);
header('location:login.php');
?>