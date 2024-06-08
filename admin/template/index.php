<?php
include '../config.php';
$admin = new Admin();

if(!isset($_SESSION['adid'])){
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hospito Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
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
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
      include 'sidebar.php';
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <h4>Todays Appointment.</h4>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                       
                        <th>Patient Name</th>
                        <th>Phone Number</th>
                        <th>Doctor Name</th>
                        <th>Department</th>
                        
                        <th>Date</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $stmt6 = $admin->ret("SELECT * FROM `appointment` INNER JOIN `patient` ON patient.pat_id=appointment.pat_id INNER JOIN `doctor` ON doctor.doc_id=appointment.doc_id WHERE `app_date`=CURDATE() ");
                      while($row6=$stmt6->fetch(PDO::FETCH_ASSOC)){ 
                      ?>
                      <tr>
                        <td>
                          <?php echo $row6['pat_name'] ?>
                        </td>
                        <td>
                          <?php echo $row6['pat_phone'] ?>
                        </td>
                        <td>
                          <?php echo $row6['doc_name'] ?>
                        </td>
                        <td>
                          <?php echo $row6['doc_dept'] ?>
                        </td>
                        <td>
                          <?php echo $row6['app_date'] ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <a href="viewuser.php" class="btn btn-primary btn-block">View All</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
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
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>