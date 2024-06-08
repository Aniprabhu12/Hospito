<?php
include 'config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['pid']);
header('location:index.php');
?>