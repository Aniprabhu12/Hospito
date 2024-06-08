<?php
include 'config.php';
$admin = new Admin();


$patid = $_SESSION['pid'];

$stmt1 = $admin->ret("SELECT * FROM `patient` WHERE `pat_id`='$patid'");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

$did = $_GET['did'];

$stmt = $admin->ret("SELECT * FROM `doctor` WHERE `doc_id`='$did'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hospito</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        #timepicker:before {
            content: 'Time:';
            margin-right: .6em;
            color: #9d9d9d;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->




    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">View Doctor</h1>
            <nav aria-label="breadcrumb animated slideInDown">

            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="admin/controller/<?php echo $row['doc_img'] ?>" alt="">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Doctor</p>
                    <h1 class="mb-4">Dr.<?php echo $row['doc_name'] ?></h1>
                    <p><?php echo $row['doc_about'] ?></p>

                    <p><i class="far fa-check-circle text-primary me-3"></i>Experience:<?php echo $row['doc_exp'] ?></p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Department:<?php echo $row['doc_dept'] ?></p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Qualification:<?php echo $row['doc_educ'] ?></p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
                    <h4 class="mb-4" style="color:red">NOTE: PLEASE SELECT THE TIME ACCORDING TO DOCTOR'S SCHEDULE  </h4>
                    


                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <table class="table">
                            <tr>
                                <th>
                                    Slno
                                </th>
                                <th>
                                    Days
                                </th>
                                <th>
                                    From Time
                                </th>
                                <th>
                                    To Time
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                            <?php
                            $count = 1;
                            $stmt2 = $admin->ret("SELECT * FROM `schedule` WHERE `doc_id`='$did'");
                            $scheduleData = array(); // Initialize an empty array to store the schedule data

                            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                $scheduleData[] = array(
                                    'date' => $row2['days'],
                                    'time' => $row2['from_time'] . ' - ' . $row2['to_time'],
                                    'from_time' => $row2['from_time'],
                                    'to_time' => $row2['to_time']
                                );
                            ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $row2['days'] ?></td>
                                    <td><?php echo $row2['from_time'] ?></td>
                                    <td><?php echo $row2['to_time'] ?></td>
                                    <td>
                                        <?php if ($row2['sch_status'] == 'not available') { ?>
                                            <button class="btn btn-danger">Not Available</button>
                                        <?php } else if ($row2['sch_status'] == 'available') { ?>
                                            <button class="btn btn-success">Available</button>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>


                        </table>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form action="controller/appointment.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="hidden" name="docid" value="<?php echo $did ?>">
                                    <input type="text" name="name" class="form-control border-0" value="<?php echo $row1['pat_name'] ?>" placeholder="Your Name" style="height: 55px;" Required pattern="[ A-Za-z]+" Required/>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" name="phoneno" class="form-control border-0" value="<?php echo $row1['pat_phone'] ?>" placeholder="Your Mobile" style="height: 55px; title="Please Enter Valid Number" required/>
                                </div>
                                <div class="col-12 ">
                                    <input type="email" name="email" class="form-control border-0" value="<?php echo $row1['pat_email'] ?>" placeholder="Your Email" style="height: 55px;" Required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" Required/>
                                </div>
                                <div class="col-3 col-sm-3">
                                    <input type="number" name="age" class="form-control border-0" placeholder="Your Age" style="height: 55px;" min="1" Required/>
                                </div>
                                <div class="col-6 col-sm-3">
                                <select class="form-select border-0" name="days_years" style="height: 55px;width:130px" Required>
                                        <option selected disabled hidden>days/year</option>
                                        <option value="days">Days</option>
                                        <option value="months">Months</option>
                                        <option value="years">Years</option>

                                    </select>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" name="gender" style="height: 55px;" Required>
                                        <option selected disabled hidden>Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">

                                        <input type="date" name="date" class="form-control border-0 datetimepicker-input" placeholder="Choose Date" style="height: 55px;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d', strtotime('+1 week')) ?>" Required/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="time" name="time" id="timepicker" class="form-control border-0 datetimepicker-input" style="height: 55px;" required>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" name="problem" placeholder="Describe your problem" required></textarea>
                                </div>
                                <div>
                                    <h6>Appointment Fees</h6>
                                    <div class="col-12 ">
                                        <div class="text mb-4" id="time">
                                            <?php

                                            $stmt5 = $admin->ret("SELECT * FROM `fees`");
                                            $row5 = $stmt5->fetch(PDO::FETCH_ASSOC);
                                            ?>
                                            <input type="text" name="appointmentfee" class="form-control" value="<?php echo $row5['fee'] ?>" style="height: 55px;" readonly>
                                        </div>
                                        <h6>Doctor Fees</h6>
                                        <div class="text" id="time">
                                            
                                            <input type="text" name="docfee" class="form-control" value="<?php echo $row['doc_fees'] ?>" style="height: 55px;" readonly>
                                        </div>

                                        <div style="margin-top: 10px;">
                                            <h6 style="text-align: center;">Scan and Pay</h6>
                                            <img src="img/dummyQR.jpg" alt="" style="width:150px;height:150px;margin-left:150px">
                                            <h6>Transaction Id</h6>
                                            <input type="" name="transactionid" class="form-control" placeholder="0000 0000 0000 0000 00" minlength="12" maxlength="18" Required pattern="[0-9]+" Required/>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button name="appointment" class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Feature Start -->

    <!-- Feature End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>











    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>




</body>

</html>