<?php
$admin = new Admin();
$did = $_SESSION['docid'];
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
  <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard</span>

      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class=" typcn typcn-group-outline menu-icon"></i>
        <span class="menu-title">Manage Patient</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="viewpatient.php">View Patient</a></li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
        <i class="typcn d typcn-credit-card menu-icon"></i>
        <?php
        $stmt5 = $admin->ret("SELECT * FROM `appointment` WHERE `ap_status`='accepted' AND `doc_id`='$did' AND `notification_status`='unread'");
        $num5 = $stmt5->rowCount();
        ?>
        <span class="menu-title">Appointment <span class="badge badge-primary"><?php echo $num5 ?></span></span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="../controller/changestatus.php" >View Appointment</a></li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
        <i class="typcn typcn-book menu-icon"></i>
        <span class="menu-title">Schedule</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic4">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="addschedule.php">Add Schedule</a></li>
          <li class="nav-item"> <a class="nav-link" href="viewschedule.php">View Schedule</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
        <i class="typcn typcn-user menu-icon"></i>
        <span class="menu-title">Manage Profile</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic7">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="viewprofile.php">View Profile</a></li>

        </ul>
      </div>
    </li>




  </ul>
</nav>


