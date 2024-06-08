<?php
include 'config.php';
$admin = new Admin();

$pid = $_SESSION['pid'];

$stmt = $admin->ret("SELECT * FROM `patient` WHERE `pat_id`='$pid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">

    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300');
    </style>
</head>

<body itemscope="itemscope" itemtype="http://schema.org/Person">
    <?php include 'navbar.php'; ?>

    <div class="profile-wrapper container">
        <div class="row">
            <div class="col-md-6 left" style="width: 300px;margin-left:160px">
                <img class="user-photo" itemprop="image" src="controller/<?php echo $row['pat_img'] ?>" alt="Kirill Krasin">
            </div>
            <div class="col-md-6 right text-center " style="height: 400px;">
                <h2>Update Profile</h2>
                <form action="controller/updateprofile.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                        <input type="text" name="name" class="form-control" value="<?php echo $row['pat_name'] ?>">
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="email" class="form-control" value="<?php echo $row['pat_email'] ?>">
                    </div>
                    <div class="form-group mb-4">
                        <input type="tel" name="phone" class="form-control" value="<?php echo $row['pat_phone'] ?>">
                    </div>
                    <div class="form-group mb-4">
                        <input type="file" name="img" class="form-control" onchange="previewImage(event)">
                    </div>
                    <div>
                        <button type="submit" name="edit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.querySelector('.user-photo');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
