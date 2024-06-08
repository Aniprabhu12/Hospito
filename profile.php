
<?php
include 'config.php';
$admin=new Admin();

$pid=$_SESSION['pid'];

$stmt=$admin->ret("SELECT * FROM `patient` WHERE `pat_id`='$pid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
</head>

    



<body itemscope="itemscope" itemtype="http://schema.org/Person">
<meta itemprop="birthDate" content="1990-03-20">
<meta itemprop="url" content="https://krasin.in.ua">
<meta itemprop="email" content="mailto:kirillkrasin@gmail.com">


<?php
include 'navbar.php';
?>
    <div class="profile-wrapper container">
	<div class="row">
		<div class="col-md-6 left" style="width: 300px;margin-left:160px">
			<img class="user-photo" itemprop="image" src="controller/<?php echo $row['pat_img']?>" alt="Kirill Krasin">
		</div>
		<div class="col-md-6 right text-center">
			<h1 itemprop="name"><?php echo $row['pat_name'] ?></h1><!-- Name -->
			<h2><?php echo $row['pat_email'] ?></h2><!-- Job -->
			
			<hr>
			
			<hr>
			<div class="phone">
			<h3>Contact:</h3>
			<h2><a ><?php echo $row['pat_phone'] ?></a></h2>
			</div>
            <div>
                <a href="editprofile.php" class="btn btn-success">Edit Profile</a>
            </div>
		</div>
	</div>
    </div>

    <?php
include 'footer.php';
    ?>
    <style>@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300');</style>

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
  </body>
  
</html>