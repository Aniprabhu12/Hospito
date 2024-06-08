<?php
include '../config.php';
$admin=new Admin();

$docid=$_SESSION['docid'];

if(isset($_POST['editprofile'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $educ=$_POST['educ'];
    $exp=$_POST['exp'];
    $about=$_POST['about'];
    $fees=$_POST['fees'];
   

    $photo=basename($_FILES['img']['name']);

    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    if(empty($photo)){
       

        $stmt2=$admin->cud("UPDATE `doctor` SET `doc_name`='$name',`doc_phone`='$phone',`doc_email`='$email',`doc_exp`='$exp',`doc_educ`='$educ',`doc_about`='$about',`doc_fees`='$fees' WHERE `doc_id`='$docid'","Updated");
        echo "<script>window.location='../template/viewprofile.php';</script>";
    } else {
        $stmt2=$admin->cud("UPDATE `doctor` SET `doc_name`='$name',`doc_phone`='$phone',`doc_email`='$email',`doc_img`='$image',`doc_exp`='$exp',`doc_educ`='$educ',`doc_about`='$about',`doc_fees`='$fees' WHERE `doc_id`='$docid'","Updated");
        echo "<script>window.location='../template/viewprofile.php';</script>";
    }


}
?>