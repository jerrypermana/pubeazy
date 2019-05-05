<?php
$sess_username = $_SESSION['group_session'];

if ($_SESSION['group_session'] == 'admin') {

     $cek_konferensi    = mysqli_query($konek, "SELECT * FROM conference");
	$total_konferensi  = mysqli_num_rows($cek_konferensi);

     $cek_paper         = mysqli_query($konek, "SELECT * FROM paper");
	$total_paper       = mysqli_num_rows($cek_paper);

     $cek_presenter     = mysqli_query($konek, "SELECT * FROM presenter");
	$total_presenter   = mysqli_num_rows($cek_presenter);

	$cek_peserta       = mysqli_query($konek, "SELECT * FROM peserta");
	$total_peserta     = mysqli_num_rows($cek_peserta);

  ?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Dashboard
        <small>Selamat datang <?php echo $sess_username; ?>!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>

<section class="content">
     <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo number_format($total_konferensi,0,',','.'); ?></h3>
              <p>Total Konferensi</p>
            </div>
            <div class="icon">
              <i class="ion ion-chatboxes"></i>
            </div>
            <a href="<?php echo $base_url; ?>/index.php?p=list-konferensi" class="small-box-footer">Lihat daftar konferensi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($total_paper,0,',','.'); ?></h3>
              <p>Total Paper</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            <a href="<?php echo $base_url; ?>/index.php?p=list-paper" class="small-box-footer">Lihat daftar paper <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo number_format($total_presenter,0,',','.'); ?></h3>
              <p>Total Presenter</p>
            </div>
            <div class="icon">
              <i class="ion ion-man"></i>
            </div>
            <a href="<?php echo $base_url; ?>/index.php?p=rep-presenter" class="small-box-footer">Lihat daftar presenter <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($total_peserta,0,',','.'); ?></h3>
              <p>Total Peserta</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo $base_url; ?>/index.php?p=rep-peserta" class="small-box-footer">Lihat daftar peserta <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</section>

<?php

}
?>
