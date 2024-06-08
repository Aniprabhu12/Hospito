<?php
include '../config.php';
$admin=new Admin();

$prid=$_GET['pid'];
$pid=$_GET['patid'];

$stmt=$admin->cud("DELETE FROM `prescription` WHERE `pr_id`='$prid'","deleted");
echo "<script>alert('Deleted');window.location='../template/viewprescription.php?pid=$pid';</script>";
?>