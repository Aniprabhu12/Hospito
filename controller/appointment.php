<?php
include '../config.php';
$admin = new Admin();

$pid=$_SESSION['pid'];

if (isset($_POST['appointment'])) {

    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $age = $_POST['age']." ".$_POST['days_years'];
    
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $problem = $_POST['problem'];
    $transactionid = $_POST['transactionid'];
    $appointmentfee = $_POST['appointmentfee'];
    $docfee = $_POST['docfee'];
    $docid = $_POST['docid'];

    $stmt=$admin->Rcud("INSERT INTO `appointment`(`doc_id`,`name`,`pat_id`,`age`,`phoneno`,`gender`,`ap_date`,`ap_time`,`amount`,`problem`,`ap_status`,`app_date`)VALUES('$docid','$name','$pid','$age','$phoneno','$gender','$date','$time','$appointmentfee','$problem','pending',now())");

    $stmt2=$admin->cud("INSERT INTO `payment`(`ap_id`,`amount`,`doc_fees`,`trans_id`,`pay_status`,`pay_date`)VALUES('$stmt','$appointmentfee','$docfee','$transactionid','paid',now())","inserted");
    echo "<script>window.location='../appointmentstatus.php';</script>";

}
?>