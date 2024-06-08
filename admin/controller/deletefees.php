<?php
include '../config.php';
$admin=new Admin();

$fid=$_GET['fid'];

$stmt=$admin->cud("DELETE FROM `fees` WHERE `fees_id`='$fid'","deleted");
echo "<script>alert('Deleted');window.location='../template/appointmentfees.php';</script>";
?>