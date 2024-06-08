<?php
include '../config.php';
$admin=new Admin();

$apid=$_GET['appid'];

$stmt=$admin->cud("UPDATE `appointment` SET `ap_status`='cancelled' WHERE `ap_id`='$apid'","updated");
$stmt=$admin->cud("UPDATE `payment` SET `pay_status`='refunded' WHERE `ap_id`='$apid'","updated");


echo "<script>window.location='../appointmentstatus.php';</script>";
?>