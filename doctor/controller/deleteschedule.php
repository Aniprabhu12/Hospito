<?php
include '../config.php';
$admin=new Admin();

$sid=$_GET['sid'];

$stmt=$admin->cud("DELETE FROM `schedule` WHERE `sch_id`='$sid'","deleted");
echo "<script>alert('Deleted');window.location='../template/viewschedule.php';</script>";
?>