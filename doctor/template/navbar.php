<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<div class="navbar-brand-wrapper d-flex justify-content-center">
  <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
    <a class="navbar-brand brand-logo" href="index.php"><h3 class="text-light">Hospito</h3></a>
    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

      <div style="display:flex;gap:700px">
   
        <span class="nav-profile-name" style="width: 400px;"><h3> Doctor</h3>
        <?php
        $did=$_SESSION['docid'];
$stmt11=$admin->ret("SELECT * FROM `doctor` WHERE `doc_id`='$did'");
$row11=$stmt11->fetch(PDO::FETCH_ASSOC);

        ?>
      <h5><?php echo $row11['doc_name'] ?></h5>
      </span>


       
        <a href="logout.php" class="dropdown-item">
          <i class="typcn typcn-eject text-primary"></i>
          Logout
        </a>
      
    
    </div>
   

 
</div>
</nav>