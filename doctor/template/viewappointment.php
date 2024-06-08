<?php
include '../config.php';
$admin = new Admin();

$did = $_SESSION['docid'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOSPITO</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
        include 'navbar.php';
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            <?php
            include 'sidebar.php';
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">View Appointment Details</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Slno
                                                    </th>
                                                    <th>
                                                        Patient Name
                                                    </th>
                                                    <th>
                                                        Age
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                    <th>
                                                        Problems
                                                    </th>
                                                    <th>
                                                        Add Prescription
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                $stmt = $admin->ret("SELECT * FROM `appointment` WHERE `doc_id`='$did' AND `ap_status`='accepted' ORDER BY `ap_id`  DESC");
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $count++ ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['name'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['age'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['phoneno'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['problem'] ?>
                                                        </td>

                                                        <td>
                                                            <a href="" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['ap_id'] ?>"> <i class="typcn typcn-book menu-icon" style="font-size: 28px;color:green;margin-left:50px"></i></a>
                                                        </td>
                                                    </tr>



                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter<?php echo $row['ap_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Prescription</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <form action="../controller/addprescription.php" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="apid" value="<?php echo $row['ap_id'] ?>">
                                                                        <input type="hidden" name="pid" value="<?php echo $row['pat_id'] ?>">
                                                                        <div class="form-group">
                                                                            <label for="">Symptoms</label>
                                                                            <textarea name="symptoms" id="" cols="30" rows="3" class="form-control" placeholder="Symptoms..."></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Advice</label>
                                                                            <textarea name="advice" id="" cols="30" rows="3" class="form-control" placeholder="Advice..."></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Upload Prescription</label>
                                                                            <input type="file" name="prescription" class="form-control">
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" name="add" class="btn btn-primary">Add Prescription</button>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php
                include 'footer.php';
                ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>