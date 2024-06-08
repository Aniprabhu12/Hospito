<?php
include '../config.php';
$admin=new Admin();

$did=$_SESSION['docid'];

if(isset($_POST['addsch'])){
    $days=$_POST['days'];
    $ftime=$_POST['ftime'];
    $ttime=$_POST['ttime'];

    						

    $stmt=$admin->cud("INSERT INTO `schedule`(`doc_id`,`days`,`from_time`,`to_time`,`sch_status`,`sch_date`)VALUES('$did','$days','$ftime','$ttime','available',now())","inserted");
    echo "<script>window.location='../template/viewschedule.php';</script>";
}
?>