<?php
include '../config.php';
$admin = new Admin();

$did = $_SESSION['docid'];

$stmt = $admin->ret("SELECT * FROM `doctor` WHERE `doc_id`='$did'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .clickable-image {
            cursor: pointer;
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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update profile Details</h4>
                                    <form class="forms-sample" action="../controller/editprofile.php" method="POST" enctype="multipart/form-data">
                                        <div>
                                            <label for="profile-image" class="clickable-image">
                                                <img src="../../admin/controller/<?php echo $row['doc_img'] ?>" alt="" style="width:120px;height:120px;border-radius:100px">
                                            </label>

                                        </div>

                                        <div class="form-group">
                                            <label>Change Image</label><br>
                                            <input type="file" name="img" id="profile-image-upload">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" name="name" value="<?php echo $row['doc_name'] ?>" class="form-control" id="exampleInputName1" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Phone No</label>
                                            <input type="tel" name="phone" class="form-control" value="<?php echo $row['doc_phone'] ?>" id="exampleTextarea1" rows="4" required>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $row['doc_email'] ?>" id="exampleTextarea1" rows="4" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Experience</label>
                                            <input type="text" name="exp" class="form-control" value="<?php echo $row['doc_exp'] ?>" id="exampleTextarea1" rows="4" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Qualification</label>
                                            <textarea name="educ" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['doc_educ'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Fees</label>
                                            <input type="number" name="fees" class="form-control" value="<?php echo $row['doc_fees'] ?>" id="exampleTextarea1" rows="4" required>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Description</label>
                                            <textarea name="about" class="form-control" id="exampleTextarea1" rows="4" required><?php echo $row['doc_about'] ?></textarea>
                                        </div>
                                       
                                        <button type="submit" name="editprofile" class="btn btn-primary me-2">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright ©
                            2021. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/file-upload.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page-->
    <script>
        // JavaScript code to preview the uploaded image
        const profileImageUpload = document.getElementById('profile-image-upload');
        const profileImagePreview = document.querySelector('.clickable-image img');

        profileImageUpload.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    profileImagePreview.src = reader.result;
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
