<?php
include("./includes/header.php");
include("./includes/sidebar.php");

if (isset($_GET['act']) && $_GET['act'] != "") {
  $act = $_GET['act'];
  switch ($act) {
    case 'adminlist':
      include '../admin/view/users/adminlist/adminlist.php';
      break;

    case 'admindelete':
      include '../admin/view/users/adminlist/admindelete.php';
      break;

    case 'agentlist':
      include '../admin/view/users/agnetlist/useragent.php';
      break;

    case 'userslist':
      include '../admin/view/users/userslist/userlist.php';
      break;

    case 'province':
      include '../admin/view/location/province/provinceadd.php';
      break;

    case 'district':
      include '../admin/view/location/district/districtadd.php';
      break;

    case 'wards':
      include '../admin/view/location/wards/wardsadd.php';
      break;
    default:
      include "../admin/view/dashboard.php";
      break;
  }
} else {
  include '../admin/view/dashboard.php';
}
