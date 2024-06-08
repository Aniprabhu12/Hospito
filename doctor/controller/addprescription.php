<?php
include '../config.php';
$admin=new Admin();

$did=$_SESSION['docid'];

if(isset($_POST['add'])){
    $apid=$_POST['apid'];
    $pid=$_POST['pid'];
    $symptoms=$_POST['symptoms'];
    $advice=$_POST['advice'];

    $target="upload/";
    $image=$target.basename($_FILES['prescription']['name']);
    move_uploaded_file($_FILES['prescription']['tmp_name'],$image);

    $stmt=$admin->cud("INSERT INTO `prescription`(`doc_id`,`app_id`,`pat_id`,`advice`,`symptoms`,`pres_img`,`pr_date`)VALUES('$did','$apid','$pid','$advice','$symptoms','$image',now())","inserted");
    echo "<script>window.location='../template/viewappointment.php';</script>";
}
?>


