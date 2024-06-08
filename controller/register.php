<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];


    $target = "upload/";
    $image = $target . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $image);

    $stmt = $admin->ret("SELECT * FROM `patient` WHERE `pat_email`='$email'");
    $num = $stmt->rowCount();

    if ($num > 0) {
        echo "<script>alert('Email already exist');
        window.location='../register.php';
        </script>";
    } else {
        if ($password == $repassword) {
            $pass = password_hash($password, PASSWORD_BCRYPT);

            $stmt2 = $admin->cud("INSERT INTO `patient`(`pat_name`,`pat_phone`,`pat_img`,`pat_email`,`pat_password`,`pat_date`)VALUES('$name','$phone','$image','$email','$pass',now())", "saved");
            if ($stmt2) {
                echo "<script>alert('Registered Successfully');
            window.location='../login.php';
            </script>";
            } else {
                echo "<script>alert('Something went wrong!!,please try again.');
                window.location='../register.php';
                </script>";
            }
        } else {
            echo "<script>alert('Password did not match,please try again.');
            window.location='../register.php';
            </script>";
        }
    }
}
