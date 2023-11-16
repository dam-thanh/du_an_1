<!DOCTYPE html>
<html lang="en">

<head>
  <!-- FOR MORE PROJECTS visit: codeastro.com -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!--	Fonts
	========================================================-->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

  <!--	Css Link
	========================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/layerslider.css">
  <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--	Title
	=========================================================-->
  <title>Real Estate PHP</title>
</head>

<body>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65465463a9ff0f0012c0d8b1&product=sticky-share-buttons&source=platform" async="async"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/65464ac3a84dd54dc4888a7c/1hed983mg';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
  <div class="top-header bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="top-contact list-text-white  d-table">
            <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+84 0394240007</a></li>
            <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>damthanh.etd@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <div class="top-contact float-right">
            <ul class="list-text-white d-table">
              <li><i class="fas fa-user text-success mr-1"></i>
                <?php if (isset($_SESSION['uemail'])) { ?>
                  <a href="logout.php">Đăng xuất</a>&nbsp;&nbsp;<?php } else { ?>
                  <a href="login.php">Đăng nhập</a>&nbsp;&nbsp;

                  |
              </li>
              <li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> Đăng ký</li><?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-nav secondary-nav hover-success-nav py-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Trang chủ</a></li>

                <li class="nav-item"> <a class="nav-link" href="about.php">Về chúng tôi</a> </li>

                <li class="nav-item"> <a class="nav-link" href="contact.php">Liên hệ</a> </li>

                <li class="nav-item"> <a class="nav-link" href="property.php">Dự án</a> </li>

                <li class="nav-item"> <a class="nav-link" href="agent.php">Đại lý</a> </li>


                <?php if (isset($_SESSION['uemail'])) { ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản của tôi</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"> <a class="nav-link" href="profile.php">Hồ sơ</a> </li>
                      <!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
                      <li class="nav-item"> <a class="nav-link" href="feature.php">Tài sản của bạn</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="logout.php">Đăng xuất</a> </li>
                    </ul>
                  </li>
                <?php } else { ?>
                  <!-- <li class="nav-item"> <a class="nav-link" href="login.php"></a> </li> -->
                <?php } ?>

              </ul>


              <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Đăng
                tin</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>