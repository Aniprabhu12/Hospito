
<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['login']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];


    $stmt1=$admin->ret("SELECT * FROM `doctor` WHERE `doc_email`='$email'");
    $num=$stmt1->rowCount();
    if($num>0)
    {
        $row=$stmt1->fetch(PDO::FETCH_ASSOC);
        $dbpassword=$row['doc_password'];
        if(password_verify($password,$dbpassword))
        {
            $_SESSION['docid']=$row['doc_id'];
        echo "<script>alert('Login Successful');
        window.location='../template/index.php'; </script>";
        }

        else {
            echo "<script>alert('You have entered wrong password');
            window.location='../template/login.php';</script>";
            }
    }else{
            echo "<script>alert('You are not a valid user');
            window.location='../template/login.php';</script>";

            }
        
    
}
?>
