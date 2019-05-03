<?php
session_start();
include "../config/koneksi.php";
if (!isset($_SESSION['email'])) {

    header("Location: ../index.php");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PubEazy</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DATA TABLES -->
    <link href="../assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <!-- Select2 -->
    <link rel="stylesheet" href="../assets/bower_components/select2/dist/css/select2.min.css">

    <!-- <link href="../assets/editor/editor.css" type="text/css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- CSS DATATABLES JSON -->
    <link href="../assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <!-- jQuery 3 -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Select2 -->
    <script src="../assets/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Data Tables Ajax JSON -->
    <script src="../assets/plugins/bootstrap-table/dist/bootstrap-table.min.js" type="text/javascript"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../assets/index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>P</b>E</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Pub</b>Eazy</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['realname'] ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    <!-- START MODUL ADMIN -->
                    <?php

                    if ($_SESSION['group_session'] == 'admin') {


                        ?>
                        <li>
                            <a href="<?php echo $base_url; ?>/index.php?p=dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base_url; ?>/index.php?p=list-konferensi">
                                <i class="fa fa-newspaper-o"></i> <span>Konferensi</span>

                            </a>

                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Presenter</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=list-paper">
                                        <i class="fa fa-book"></i> <span>Daftar Paper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=v-paper">
                                        <i class="fa fa-check-square-o"></i> <span>Verifikasi Paper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=list-transaksi-presenter">
                                        <i class="fa fa-bank"></i> <span>Verifikasi Transfer</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=list-v-akhir">
                                        <i class="fa fa-check-square"></i> <span>Verifikasi Akhir</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=list-jadwal">
                                        <i class="fa fa-calendar-check-o"></i> <span>List Jadwal</span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Peserta</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">

                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=list-transaksi-peserta">
                                        <i class="fa fa-users"></i> <span>Transfer Peserta</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>Master File</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">

                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-subject">
                                        <i class="fa fa-inbox"></i> <span>Subject</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-keyword">
                                        <i class="fa fa-key"></i> <span>Keyword</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-jam">
                                        <i class="fa fa-clock-o"></i> <span>Jam</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-accountbank">
                                        <i class="fa fa-bank"></i> <span>Bank Account</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-ruang">
                                        <i class="fa fa-building-o"></i> <span>Ruang</span>
                                    </a>
                                </li>
                               <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-file-o"></i> <span>LOA (Letter of Accepted)</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=mst-admin">
                                        <i class="fa fa-user"></i> <span>Admin</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i> <span>Pelaporan</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                            <!-- <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=rep-loi">
                                        <i class="fa fa-line-chart"></i> <span>Statistik</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=rep-loi">
                                        <i class="fa fa-file-o"></i> <span>Letter Of Invititation (LOI)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=rep-loi">
                                        <i class="fa fa-file-o"></i> <span>Letter Of Accepted (LOA)</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=rep-presenter">
                                        <i class="fa fa-file-o"></i> <span>Presenter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=rep-peserta">
                                        <i class="fa fa-file-o"></i> <span>Peserta</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- START SYSTEM SETTING -->
                        <li class="header">Setting</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i> <span>System Setting</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">

                                <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=set-keynote-speakers">
                                        <i class="fa fa-bullhorn"></i> <span>Keynote Speakers</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="<?php echo $base_url; ?>/index.php?p=setting-loa">
                                        <i class="fa fa-envelope"></i> <span>LOA</span>
                                    </a>
<<<<<<< Updated upstream
                                </li>

=======
                                </li> -->
                                
>>>>>>> Stashed changes
                            </ul>
                        </li>
                        <!-- CLOSE SYSTEM SETTING -->


                        <li>
                            <a href="../config/logout.php">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>


                    <?php
                } ?>
                <!-- CLOSE MODUL ADMIN -->

                <!-- START MODUL PRESENTER-->
                <?php
                    if ($_SESSION['group_session'] == 'presenter') {


                        ?>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=dashboard-presenter">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=pre-list-paper">
                            <i class="fa fa-list"></i> <span>List Paper</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=add-paper">
                            <i class="fa fa-book"></i> <span>Upload Paper</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=bukti-transfer">
                            <i class="fa fa-credit-card"></i> <span>Payment Proofs</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=add-jadwal">
                            <i class="fa fa-calendar-plus-o"></i> <span>Add Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=add-ppt">
                            <i class="fa fa-file-powerpoint-o"></i> <span>Upload PPT</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=edit-presenter">
                            <i class="fa fa-user"></i> <span>Change Your Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="../config/logout.php">
                            <i class="fa fa-sign-out"></i> <span>Logout</span>
                        </a>
                    </li>

                    <?php

                }
                ?>
                <!-- CLOSE MODUL PRESENTER-->
                <!-- START MODUL PESERTA -->
                <?php
                    if ($_SESSION['group_session'] == 'peserta') {


                        ?>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=dashboard-peserta">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list-ul"></i> <span>Konferensi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li>
                                <a href="<?php echo $base_url; ?>/index.php?p=konferensi">
                                    <i class="fa fa-check"></i> <span>Pilih Konferensi</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $base_url; ?>/index.php?p=daftar-konferensi">
                                    <i class="fa fa-bars"></i> <span>Daftar Konferensi</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=list-transfer">
                            <i class="fa fa-credit-card"></i> <span>Bukti Transfer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?p=edit-peserta">
                            <i class="fa fa-user"></i> <span>Ubah Profil Pengguna</span>
                        </a>
                    </li>

                    <li>
                        <a href="../config/logout.php">
                            <i class="fa fa-sign-out"></i> <span>Logout</span>
                        </a>
                    </li>
                        <!-- CLOSE MODUL PESERTA -->
                    <?php

                }
                ?>


                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- START CONTENT TEMPALTE -->
