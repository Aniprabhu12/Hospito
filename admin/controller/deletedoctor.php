<?php
include '../config.php';
$admin=new Admin();

$did=$_GET['did'];

$stmt=$admin->cud("DELETE FROM `doctor` WHERE `doc_id`='$did'","deleted");
echo "<script>alert('Deleted');window.location='../template/viewdoctor.php';</script>";
?>