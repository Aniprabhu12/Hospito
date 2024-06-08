<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Hospito</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link ">Home</a>
            <a href="doctor.php" class="nav-item nav-link ">Doctors</a>
            <?php
            if (!isset($_SESSION['pid'])) { ?>
                <a href="login.php" class="nav-item nav-link">History</a>
                <a href="login.php" class="nav-item nav-link">Status</a>
                <a href="login.php" class="nav-item nav-link">Profile</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="login.php" class="dropdown-item">User Login</a>
                        <a href="doctor/template/login.php" class="dropdown-item">Doctor Login</a>
                    </div>
                </div>
            <?php  } else { ?>
                <a href="viewhistory.php" class="nav-item nav-link">History</a>
                <a href="appointmentstatus.php" class="nav-item nav-link">Status</a>
                <a href="profile.php" class="nav-item nav-link">Profile</a>
                <a href="logout.php" class="nav-item nav-link">Logout</a>
            <?php   }
            ?>


        </div>
        <?php
            if (!isset($_SESSION['pid'])) { ?>
        <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
        <?php } else { ?>
            <a href="doctor.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
      <?php  } ?>
    </div>
</nav>
<!-- Navbar End -->