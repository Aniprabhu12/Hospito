<?php 
include '../config.php';
$admin=new Admin();

$pid=$_SESSION['pid'];

if(isset($_POST['send'])){
    $feed=$_POST['feed'];

    $stmt=$admin->cud("INSERT INTO `feedback`(`pat_id`,`feed`,`date`)VALUES('$pid','$feed',now())","inserted");
    echo "<script>window.location='../index.php';</script>";
}
?>