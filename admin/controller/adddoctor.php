<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['adddoc'])){

    $doc=$_POST['doc'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $about=$_POST['about'];
    $edu=$_POST['edu'];
    $dept=$_POST['dept'];
    $docfees=$_POST['docfees'];
    $exp=$_POST['exp'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];


    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $stmt=$admin->ret("SELECT * FROM `doctor` WHERE `doc_email`='$email'");
    $num=$stmt->rowCount();

    if($num>0){
        echo "<script>alert('Email already exist');
        window.location='../template/adddoctor.php';
        </script>";

    }else{
        if($password==$repassword){
            $pass=password_hash($password,PASSWORD_BCRYPT);
              $stmt2=$admin->cud("INSERT INTO `doctor`(`doc_name`,`doc_img`,`doc_about`,`doc_phone`,`doc_email`,`doc_exp`,`doc_educ`,`doc_dept`,`doc_fees`,`doc_password`,`doc_date`)VALUES('$doc','$image','$about','$phone','$email','$exp','$edu','$dept','$docfees','$pass',now())","saved");
            if($stmt2){
            echo "<script>alert('Registered Successfully');
            window.location='../template/viewdoctor.php';
            </script>";
            } else {
                echo "<script>alert('Something went wrong!!,please try again.');
               history.back();
                </script>";
            }
        }else{
            echo "<script>alert('Password did not match,please try again.');
            history.back();
            </script>";
        }

        }
        
    }

?>
