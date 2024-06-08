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
                  <h4 class="card-title">Add Doctor Details</h4>
                
                  <form action="../controller/adddoctor.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Doctor Name</label>
                      <input type="text" name="doc" class="form-control" id="exampleInputUsername1" placeholder="Doctor Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone Number</label>
                      <input type="tel" name="phone" class="form-control" id="exampleInputUsername1" placeholder="Phone Number" pattern="[0-9]{10}" title="Please Enter Valid Number" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email Address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputUsername1" placeholder="Email Address" required>
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea type="text" name="about" class="form-control" id="exampleInputUsername1" placeholder="Description...." required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Image</label>
                      <input type="file" name="img" class="form-control" id="exampleInputUsername1" placeholder="Image" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Education</label>
                      <input type="text" name="edu" class="form-control" id="exampleInputEmail1" placeholder="Education" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Department</label>
                      <input type="text" name="dept" class="form-control" id="exampleInputEmail1" placeholder="Department" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Experience</label>
                      <input type="text" name="exp" class="form-control" id="exampleInputEmail1" placeholder="Experience" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Doctor Fees</label>
                      <input type="number" name="docfees" class="form-control" id="exampleInputEmail1" placeholder="Doctor Fees" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" name="repassword" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                   
                    <button type="submit" name="adddoc" class="btn btn-primary mr-2">Add</button>
                    <button class="btn btn-light" type="reset">Clear</button>
                  </form>
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


