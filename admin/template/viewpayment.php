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
                  <h4 class="card-title">View Payment Details</h4>

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
                            Phone Number
                          </th>
                          <th>
                            Doctor Name
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Appointment Fees
                          </th>
                          <th>
                            Doctor Fees
                          </th>
                          <th>
                            Pay Status
                          </th>
                          <th>
                            Date
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `payment` INNER JOIN `appointment` ON appointment.ap_id=payment.ap_id INNER JOIN `patient` ON patient.pat_id=appointment.pat_id INNER JOIN `doctor` ON doctor.doc_id=appointment.doc_id ORDER BY `pay_id` DESC");
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
                              <?php echo $row['doc_name'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_dept'] ?>
                            </td>
                            <td>
                              ₹<?php echo $row['amount'] ?>
                            </td>
                            <td>
                              ₹<?php echo $row['doc_fees'] ?>
                            </td>
                            <td>
                                <?php
                                    if($row['pay_status']=='paid'){ ?>
                                        <button class="btn btn-success btn-lg">Paid</button>
                                 <?php } else  if($row['pay_status']=='refunded'){ ?>
                                        <button class="btn btn-danger" style="width:128px">Refunded</button>
                                 <?php }
                                ?>
                             
                            </td>
                            
                            <td>
                              <?php echo $row['pay_date'] ?>
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