<?php
include '../config.php';
$admin=new Admin();

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
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     <?php
     include 'sidebar.php';
     ?>
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Fees</h4>
                
                  <form action="../controller/addfees.php" method="POST"  class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Appointment Fees</label>
                      <input type="number" name="fees" class="form-control" id="exampleInputUsername1" placeholder="Appointment Fees" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary mr-2">Add</button>
                                      </form>
                </div>
              </div>
            </div>


            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Fees Details</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                           Appointment Fees
                          </th>
                          
                          
                            <th>
                            Date
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `fees`");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr>
                            <td>
                                <?php echo $count++  ?>
                            </td>
                            <td>
                               ₹ <?php echo $row['fee'] ?>
                            </td>
                           
                            <td>
                                <?php echo $row['fees_date'] ?>
                            </td>
                           
                            <th>
                           <a href="../controller/deletefees.php?fid=<?php echo $row['fees_id'] ?>" onclick="return confirm('Are you sure?')"> <i class="typcn typcn-trash menu-icon" style="font-size:29px;color:red"></i></a>
                            </th>

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
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


