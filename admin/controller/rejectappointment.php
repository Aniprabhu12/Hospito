
<?php
include '../config.php';
$admin = new Admin();

$apid = $_GET['appid'];


$email = $_GET['email'];

$query = $admin->ret("select * from `patient` WHERE `pat_email`='$email'");
$row = $query->fetch(PDO::FETCH_ASSOC);
$name = $row['pat_name'];


$stmt4 = $admin->ret("SELECT * FROM `appointment` INNER JOIN `doctor` ON doctor.doc_id=appointment.doc_id WHERE `ap_id`='$apid'");
$row4 = $stmt4->fetch(PDO::FETCH_ASSOC);
$docname = $row4['doc_name'];
$dept = $row4['doc_dept'];
$apdate = $row4['ap_date'];
$aptime = $row4['ap_time'];

use PHPMailer\PHPMailer\PHPMailer;

require_once "../../PHPMailer/PHPMailer.php";
require_once "../../PHPMailer/SMTP.php";
require_once "../../PHPMailer/Exception.php";


$mail = new PHPMailer(true);

//smtp settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "shreyavpoojary03@gmail.com";
$mail->Password = 'pneqlsakfuegyfql';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";



//email settings
$mail->isHTML(true);
$mail->setFrom('HOSPITO', 'shreyavpoojary03@gmail.com');
$mail->addAddress("$email", "$name");
$mail->Subject = ("Appointment with Dr. $docname [$dept] ");
$mailContent = "<h4>Dear $name,<br>
    
    Your appointment with Dr. $docname [$dept] has been rejected and payment is refunded.<br>
    
    </h4>";
$mail->Body = $mailContent;

if ($mail->send()) {




    $stmt=$admin->cud("UPDATE `appointment` SET `ap_status`='rejected' WHERE `ap_id`='$apid'","updated");

    $stmt=$admin->cud("UPDATE `payment` SET `pay_status`='refunded' WHERE `ap_id`='$apid'","updated");
    
    
    echo "<script>window.location='../template/viewuser.php';</script>";
    

    $status = "success";
    $response = "Email is sent!";
} else {
    $status = "failed";
    $response = "Something is wrong: <br>" . $mail->ErrorInfo;
}

exit(json_encode(array("status" => $status, "response" => $response)));



?>
