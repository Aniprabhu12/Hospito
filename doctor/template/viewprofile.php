<?php
include '../config.php';
$admin = new Admin();

$did = $_SESSION['docid'];

$stmt = $admin->ret("SELECT * FROM `doctor` WHERE `doc_id`='$did';");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Personal Trainer</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />

  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: rgb(169, 192, 220);
      background: radial-gradient(circle, rgba(169, 192, 220, 1) 0%, rgba(172, 160, 172, 1) 0%, rgba(214, 214, 214, 1) 3%);
    }
  </style>

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

            <section class="h-100 gradient-custom-2">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col col-lg-12 col-xl-12">
                    <div class="card">
                      <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 200px;height:250px">
                          <img src="../../admin/controller/<?php echo $row['doc_img'] ?>" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 200px;height:300px; z-index: 1">
                          <a href="editprofile.php" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                            Edit profile
                          </a>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                          <h5>Dr.<?php echo $row['doc_name'] ?></h5>
                          <p><?php echo $row['doc_dept'] ?></p>
                        </div>
                      </div>

                      <div class="card-body p-4 text-black" style="margin-top: 100px;">
                        <div class="mb-5">
                          <p class="lead fw-normal mb-1">About</p>
                          <div class="p-4" style="background-color: #f8f9fa;">
                            <div class="col-lg-12">
                              <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_name'] ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_email'] ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_phone'] ?></p>
                                    </div>
                                  </div>

                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Experience</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_exp'] ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Qualification</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_educ'] ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Fees</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">₹<?php echo $row['doc_fees'] ?></p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Description</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0"><?php echo $row['doc_about'] ?></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>





          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=" vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js">
    </script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>