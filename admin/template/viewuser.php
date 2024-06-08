<?php
include '../config.php';
$admin = new Admin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
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
                  <h4 class="card-title">View Appointment Request.</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                            User Name
                          </th>
                          <th>
                            Phone number
                          </th>
                          <th>
                            Email Address
                          </th>
                          <th>
                            Doctor
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            View Schedule
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `appointment` INNER JOIN `patient` ON patient.pat_id=appointment.pat_id INNER JOIN `doctor` ON doctor.doc_id=appointment.doc_id ORDER BY `ap_id` DESC");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr>
                            <td>
                              <?php echo $count++ ?>
                            </td>
                            <td>
                              <?php echo $row['pat_name'] ?>
                            </td>
                            <td>
                              <?php echo $row['pat_phone'] ?>
                            </td>
                            <td>
                              <?php echo $row['pat_email'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_name'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_dept'] ?>
                            </td>
                            <td>
                              <a href="viewdocschedule.php?docid=<?php echo $row['doc_id'] ?>"><i class="typcn typcn-eye menu-icon" style="font-size: 24px;margin-left:50px"></i></a>
                            </td>


                            <td>
                              <?php
                              if ($row['ap_status'] == 'pending') { ?>
                                <a href="../controller/acceptappointment.php?appid=<?php echo $row['ap_id'] ?>&email=<?php echo $row['pat_email'] ?>" class="btn btn-success">Accept</a>
                                <a href="../controller/rejectappointment.php?appid=<?php echo $row['ap_id'] ?>&email=<?php echo $row['pat_email'] ?>" class="btn btn-danger">Reject</a>
                              <?php } else if ($row['ap_status'] == 'accepted') { ?>
                                <button class="btn btn-success" style="width: 180px;">Accepted</button>

                              <?php } else if ($row['ap_status'] == 'rejected') { ?>
                                <button class="btn btn-warning" style="width: 180px;">Rejected</button>
                              <?php } else if ($row['ap_status'] == 'cancelled') { ?>
                                <button class="btn btn-warning" style="width: 180px;">Cancelled</button>
                              <?php }
                              ?>
                            </td>
                            <td>
                              <?php echo $row['ap_date'] ?>
                            </td>
                          </tr>
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