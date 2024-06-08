<?php
include '../config.php';
$admin = new Admin();



if(!isset($_SESSION['docid'])){
  header('location:login.php');
}

$did=$_SESSION['docid'];

$stmt1=$admin->ret("SELECT * FROM `appointment` WHERE `doc_id`='$did' AND `ap_status`='accepted'");
$num1=$stmt1->rowCount();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hospito Doctor</title>
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

          <div class="row">
            <div class="col-xl-6 grid-margin stretch-card flex-column">
              <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="mb-0 text-muted">Total number of patient</p>
                        <!-- <p class="mb-0 text-muted">+1.37%</p> -->
                      </div>
                      <h4><?php echo $num1 ?></h4>
                      <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <h5 class="mb-2 text-titlecase mb-4">Todays Appointment.</h5>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead class="bg-secondary">
                      <tr>
                        <th class="ml-5">Slno</th>
                        <th>Patient Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count = 1;
                      $stmt = $admin->ret("SELECT * FROM `appointment` INNER JOIN `patient` ON patient.pat_id=appointment.pat_id WHERE `doc_id`='$did' AND `ap_status`='accepted'");
                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                          <td>
                            <?php echo $count++ ?>
                          </td>
                          <td>
                            <?php echo $row['name'] ?>
                          </td>
                          <td>
                            <?php echo $row['phoneno'] ?>
                          </td>
                          <td>
                            <?php echo $row['ap_date'] ?>
                          </td>
                          <td>
                            <?php echo $row['ap_time'] ?>
                          </td>
                        </tr>
                      <?php }
                      ?>

                    </tbody>
                  </table>
                  <a href="viewappointment.php" class="btn btn-secondary btn-block">View All</a>
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