<?php

    include '../config.php';
    $admin = new Admin();

$did=$_SESSION['docid'];

    
           $stmt = $admin -> cud("UPDATE `appointment` SET `notification_status` = 'read' WHERE `doc_id` = '$did'  ","updated");
           echo "<script>window.location='../template/viewappointment.php';</script>";      



    ?>