<?php
include 'config.php';
$admin = new Admin();

$uid = $_SESSION['pid'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HOSPITO</title>
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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->





    <!-- Navbar Start -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment Status</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-11 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment Status</p>
                    <table class="table">

                        <tr>
                            <th>
                                Slno
                            </th>
                            <th>
                                Doctor Name
                            </th>
                            <th>
                                Department
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Time
                            </th>
                            <th>
                                Amount
                            </th>
                            <th>
                                Amount Status
                            </th>
                            <th>
                                Appointment Status
                            </th>
                            <th>
                                Cancel
                            </th>
                        </tr>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `appointment` INNER JOIN `doctor` ON doctor.doc_id=appointment.doc_id WHERE `pat_id`='$uid' ORDER BY `ap_id` DESC");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td>
                            <?php echo $count++ ?>
                                </td>
                                <td>
                                    <?php echo $row['doc_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['doc_dept'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ap_date'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ap_time'] ?>
                                </td>
                                <td>
                                ₹<?php echo $row['amount'] ?>
                                </td>
                                <td>
                                <?php
                                    if($row['ap_status']=='pending' || $row['ap_status']=='accepted'){ ?>
                                     <button class="btn btn-success">Paid</button>
                                     <?php } else if($row['ap_status']=='cancelled' || $row['ap_status']=='rejected'){ ?>
                                     <button class="btn btn-danger">Refunded</button>
                                     <?php } ?>
                                </td>
                                <td>
                                    <?php
                                    if($row['ap_status']=='pending'){ ?>
                                        <button class="btn btn-warning">Pending</button>
                                  <?php  } else if($row['ap_status']=='accepted'){ ?>
                                        <button class="btn btn-success">Accepted</button>
                                  <?php  } else if($row['ap_status']=='rejected'){ ?>
                                        <button class="btn btn-danger">Rejected</button>
                                  <?php  } else if($row['ap_status']=='cancelled'){ ?>
                                        <h6>------</h6>
                                  <?php  }
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    if($row['ap_status']=='pending' || $row['ap_status']=='accepted'){ ?>
                                        <a href="controller/cancelappointment.php?appid=<?php echo $row['ap_id'] ?>" class="btn btn-warning">Cancel</a>
                                  <?php  } else if($row['ap_status']=='cancelled'){ ?>
                                    <button class="btn btn-danger">Cancelled</button>
                                 <?php }
                                    ?>
                                </td>
                            </tr>
                        <?php }
                        ?>

                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- Appointment End -->


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