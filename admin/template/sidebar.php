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
        <?php
        $stmt5 = $admin->ret("SELECT * FROM `appointment` WHERE `ap_status`='pending'");
        $num5 = $stmt5->rowCount();
        ?>
        <span class="menu-title">Appointment <span class="badge badge-primary"><?php echo $num5 ?></span></span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="viewuser.php">View Appointment</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
        <i class="typcn typcn-user-add-outline menu-icon"></i>
        <span class="menu-title">Manage Doctor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="adddoctor.php">Add Doctor</a></li>
          <li class="nav-item"> <a class="nav-link" href="viewdoctor.php">View Doctor</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic9">
        <i class="typcn typcn-ticket menu-icon"></i>
        <span class="menu-title">Manage Fees</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic9">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="appointmentfees.php">Add Fees</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
        <i class="typcn d typcn-credit-card menu-icon"></i>
        <span class="menu-title">Manage Payment</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="viewpayment.php">View Payment</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
        <i class="typcn typcn-document-text menu-icon"></i>
        <span class="menu-title">Feedback</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic3">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="viewfeedback.php">View Feedback</a></li>

        </ul>
      </div>
    </li>




  </ul>
</nav>