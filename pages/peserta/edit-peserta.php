<?php
if ($_SESSION['group_session'] == 'peserta') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubah Profil Pengguna
        </h1>

    </section>

    <?php

    $username   = $_SESSION['username'];
    $query      = "SELECT * FROM peserta WHERE username='$username'";
    $hasil = mysqli_query($konek, $query);
    $row = mysqli_fetch_array($hasil);
    $hitung = mysqli_num_rows($hasil);

    if ($hitung == 0) {
        echo '<script>alert("ID Anggota Tidak Di Temukan")
             location.replace("' . $base_url . '../index.php?id=dashboard")</script>';
    }
    ?>
    </br>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">
                                <h4 class="box-title">Ubah Profil Pengguna</h4>
                            </a></li>
                        <li><a href="#tab_2" data-toggle="tab">
                                <h4 class="box-title">Ubah Password Pengguna</h4>
                            </a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form role="form" action="" method="POST" name='simpan' class='form-horizontal form-bordered' onSubmit='return validasi()' enctype="multipart/form-data">
                                <table class="table table-condensed">
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Username<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%">
                                            <label><?php echo $row['username']; ?></label>
                                            <input type="hidden" name="username" id='username' class="form-control" style="width: 50%" value='<?php echo $row['username']; ?>'></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>No Anggota<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%">
                                            <label><?php echo $row['member_id']; ?></label>
                                          
                                    </tr>
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Nama Lengkap<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="text" name="nama" id='nama' class="form-control" style="width: 50%" value='<?php echo $row['realname']; ?>'></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Email<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="text" name="email" id='email' class="form-control" style="width: 50%" value='<?php echo $row['email']; ?>'></th>
                                    </tr>

                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Afiliasi<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="text" name="instansi" id='instansi' class="form-control" style="width: 50%" value='<?php echo $row['instansi']; ?>'></th>
                                    </tr>

                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>No Handphone<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="text" name="hp" id='hp' class="form-control" style="width: 30%" value='<?php echo $row['no_hp']; ?>'></th>
                                    </tr>



                                    <tr>
                                        <th colspan="3">
                                            <center>
                                                <button type="submit" name='update' class="btn btn-block btn-primary btn-sm">Submit</button>
                                                <button type="reset" onclick="goBack()" class="btn btn-block btn-warning btn-sm">Cancel</button>
                                            </center>
                                        </th>
                                    </tr>

                                </table>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <form role="form" action="" method="POST" name='simpan_pass' class='form-horizontal form-bordered' onSubmit='return validasi()' enctype="multipart/form-data">
                                <table class="table table-condensed">
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Password<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="password" name="password" id='password' class="form-control" style="width: 30%"></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 20%; text-align: right;"><label>Ulangi Password<label></th>
                                        <th style="width: 2%">:</th>
                                        <th style="width: 78%"><input type="password" name="repassword" id='repassword' class="form-control" style="width: 30%"></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 20%"></th>
                                        <th style="width: 2%"></th>
                                        <th style="width: 78%"> </br></br></br></th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <center>
                                                <button type="submit" name='update_pass' class="btn btn-block btn-primary btn-sm">Submit</button>
                                                <button type="reset" onclick="goBack()" class="btn btn-block btn-warning btn-sm">Cancel</button>
                                            </center>
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.AKHIR -->
                </div>

                <!-- /.box-header -->
                <!-- form start -->
                <!--SCRIPT VALIDASI FORM EDIT TABEL -->
                    <script type='text/javascript'>
                        function validasi() {


                            if (simpan.username.value == "") {
                                alert("Username Tidak Boleh KOSONG ");
                                simpan.username.focus();
                                return false;
                            }
                            if (simpan.nama.value == "") {
                                alert("Nama Tidak Boleh KOSONG");
                                simpan.nama.focus();
                                return false;
                            }
                            if (isNaN(parseInt(simpan.nama.value)) == false) {
                                alert("Nama harus berisi HURUF");
                                simpan.nama.focus();
                                return false;
                            }
                            if (simpan.instansi.value == "") {
                                alert("instansi Tidak Boleh KOSONG");
                                simpan.instansi.focus();
                                return false;
                            }

                            if (simpan.hp.value == "") {
                                alert("No Handphone Tidak Boleh KOSONG");
                                simpan.hp.focus();
                                return false;
                            }

                            var baru = simpan_pass.password.value;
                            var lagi = simpan_pass.repassword.value;

                            if (baru != lagi) {
                                alert('Password baru tidak cocok,\nCek ulang password baru Anda!');
                                return false;
                            }


                            return true;
                        }
                    </script>

                    <!-- /.UPDATE DATA TABLE PRESENTER-->
                    <?php

                    if (isset($_POST['update'])) {
                        $username         = $_POST['username'];
                        $nama             = ucwords($_POST['nama']);
                        $instansi         = ucwords($_POST['instansi']);
                        $email            = $_POST['email'] == '' ? '-' : $_POST['email'];
                        $hp               = $_POST['hp'] == '' ? '-' : $_POST['hp'];
                        //$password         = md5($_POST['password']);
                        $tglubah          = date("Y/m/d");


                        $query_edit = "UPDATE peserta set realname='$nama', email='$email', instansi='$instansi', no_hp='$hp', last_update='$tglubah' WHERE username='$username'";

                        //echo $query_edit;
                        $update = mysqli_query($konek, $query_edit);
                        if ($update) {
                            echo '<script>alert("Profil Pengguna Berhasil di Edit")
                 location.replace("' . $base_url . '/index.php?p=dashboard-peserta")</script>';
                        } else {

                            echo '<script>alert("Profil Pengguna Gagal di Edit")
                 location.replace("' . $base_url . '/index.php?p=edit-presenter")</script>';
                        }
                    }

                    if (isset($_POST['update_pass'])) {
                        $password         = md5($_POST['password']);

                        $query_pas = "UPDATE peserta set password='$password' WHERE username='$username'";
                        $update_pass = mysqli_query($konek, $query_pas);

                        //echo $query_pas;
                        if ($update_pass) {
                            echo '<script>alert("Password Pengguna Berhasil di Ubah")
                 location.replace("' . $base_url . '/index.php?p=dashboard-peserta")</script>';
                        } else {

                            echo '<script>alert("Password Pengguna Pengguna Gagal di Ubah")
                 location.replace("' . $base_url . '/index.php?p=edit-presenter")</script>';
                        }
                    }

                    ?>

                    <!-- /.box -->

                    <!-- Input addon -->


            </div>
        </div>

        </div>
        </div>
    <?php
}
?>