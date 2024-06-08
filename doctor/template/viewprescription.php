<?php
include '../config.php';
$admin = new Admin();

$did = $_SESSION['docid'];

$patid=$_GET['pid'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hospito</title>
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
          <div>
                <h4>View Prescription</h4>
            </div>

<?php
$stmt=$admin->ret("SELECT * FROM `prescription` WHERE `pat_id`='$patid' ORDER BY `pr_id` DESC");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <div>
            <h6>Symptoms</h6>
            <div style="display: flex;gap:700px">
            <div>
                <p><?php echo $row['symptoms'] ?></p>
            </div>
            <div>
            <?php echo $row['pr_date'] ?>
            </div>
            </div>
            <hr>
            <h6>Advice</h6>
            <div>
            <p><?php echo $row['advice'] ?></p>
            </div>
            <hr>
            <h6 style="text-align: center;">Prescription</h6>
            <div style="display:flex;justify-content:center">
                <img src="../controller/<?php echo $row['pres_img'] ?>" alt="" style="width: 500px;">
            </div>
            <div style="float:right">
            <a href="../controller/deleteprescription.php?pid=<?php echo $row['pr_id'] ?>&patid=<?php echo $patid ?>"><i class=" typcn typcn-trash menu-icon" style="font-size: 27px;color:red"></i></a>
            </div>
        </div>
     </div>
    </div>
  </div>
<?php }
?>
            


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