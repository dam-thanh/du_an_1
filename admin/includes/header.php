<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
  header("location:index.php");
}
?>
<div class="header">

  <!-- Logo -->
  <div class="header-left">
    <a href="dashboard.php" class="logo">
      <img src="assets/img/rsadmin.png" alt="Logo">
    </a>
    <a href="dashboard.php" class="logo logo-small">
      <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
    </a>
  </div>
  <!-- /Logo -->

  <a href="javascript:void(0);" id="toggle_btn">
    <i class="fe fe-text-align-left"></i>
  </a>



  <!-- Mobile Menu Toggle -->
  <a class="mobile_btn" id="mobile_btn">
    <i class="fa fa-bars"></i>
  </a>
  <!-- /Mobile Menu Toggle -->

  <!-- Header Right Menu -->
  <ul class="nav user-menu">


    <!-- User Menu -->
    <!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"><?php echo $_SESSION['auser']; ?></h4> -->
    <li class="nav-item dropdown app-dropdown">
      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
      </a>

      <div class="dropdown-menu">
        <div class="user-header">
          <div class="avatar avatar-sm">
            <img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
          </div>
          <div class="user-text">
            <h6><?php echo $_SESSION['auser']; ?></h6>
            <p class="text-muted mb-0">Administrator</p>
          </div>
        </div>
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>

    <!-- /User Menu -->

  </ul>
  <!-- /Header Right Menu -->

</div>

<!-- header --->