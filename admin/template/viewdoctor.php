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
                  <h4 class="card-title">View Doctor Details</h4>

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                            Doctor Name
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Phone Number
                          </th>
                          <th>
                            Email Address
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Education
                          </th>
                          <th>
                            Experience
                          </th>
                          <th>
                            Description
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
                        $stmt = $admin->ret("SELECT * FROM `doctor`");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr>
                            <td>
                              <?php echo $count++ ?>
                            </td>
                            <td>
                              <?php echo $row['doc_name'] ?>
                            </td>
                            <td class="py-1">
                              <img src="../controller/<?php echo $row['doc_img'] ?>" alt="image" style="width: 100px;height:100px"/>
                            </td>
                            <td>
                              <?php echo $row['doc_phone'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_email'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_dept'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_educ'] ?>
                            </td>
                            <td>
                              <?php echo $row['doc_exp'] ?>
                            </td>
                            <td>
                             <textarea name="" id="" cols="30" rows="4" readonly> <?php echo $row['doc_about'] ?></textarea>
                            </td>
                            <td>
                              <?php echo $row['doc_date'] ?>
                            </td>
                            <th>
                           <a href="../controller/deletedoctor.php?did=<?php echo $row['doc_id'] ?>" onclick="return confirm('Are you sure?')"> <i class="typcn typcn-trash menu-icon" style="font-size:29px;color:red"></i></a>
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