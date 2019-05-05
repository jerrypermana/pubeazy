
<?php
include "config/koneksi.php";
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PubEazy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets-event/img/favicon.png" rel="icon">
    <link href="assets-event/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets-event/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets-event/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets-event/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets-event/lib/venobox/venobox.css" rel="stylesheet">
    <link href="assets-event/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets-event/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header" class="header-scrolled">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?php echo $base_url; ?>/url.php?p=home">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>/#about">About</a></li>
                    <li><a href="<?php echo $base_url; ?>/#speakers">Speakers</a></li>
                    <li><a href="<?php echo $base_url; ?>/#contact">Contact</a></li>
                    <li><a href="<?php echo $base_url; ?>/url.php?p=login">Login</a></li>
                    <li class="buy-tickets"><a href="<?php echo $base_url; ?>/url.php?p=register">Register</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
