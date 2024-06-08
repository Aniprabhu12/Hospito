<?php
include('../config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	$password=password_hash($password,PASSWORD_BCRYPT);
	  $sql=$admin->cud("UPDATE `patient` SET `pat_password`='$password' where `pat_email`='$semail'","saved");
	  echo "<script>alert('password sucessfully changed');
    window.location='../login.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Password did not match!!');
    window.location='../createpassword.php';
 </script>";
}