<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['add'])){
    $fees=$_POST['fees'];
    $docfees=$_POST['docfees'];

    $stmt=$admin->cud("INSERT INTO `fees`(`fee`,`fees_date`)VALUES('$fees',now())","inserted");
    echo "<script>window.location='../template/appointmentfees.php';</script>";
}
?>