<?php
include '../config.php';
$admin=new Admin();

$pid=$_SESSION['pid'];

if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $photo=basename($_FILES['img']['name']);

    $target = "upload/";
    $image = $target . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $image);

    if(empty($photo)){
        $stmt=$admin->ret("SELECT * FROM `patient` WHERE `pat_id`='$pid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $stmt=$admin->cud("UPDATE `patient` SET `pat_name`='$name',`pat_phone`='$phone',`pat_email`='$email' WHERE `pat_id`='$pid'","updated");
        echo "<script>window.location='../profile.php';</script>";

    } else {
        $stmt=$admin->cud("UPDATE `patient` SET `pat_name`='$name',`pat_phone`='$phone',`pat_email`='$email',`pat_img`='$image' WHERE `pat_id`='$pid'","updated");
        echo "<script>window.location='../profile.php';</script>";
    }

 
}
?>