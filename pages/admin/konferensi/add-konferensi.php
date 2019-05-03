<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Conference
        </h1>

    </section>
    </br>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- form start -->
                                <form role="form" action="" method="POST" name='simpan' class='form-horizontal form-bordered' onSubmit='return validasi()' enctype="multipart/form-data">


                                    <table class="table table-condensed">
                                        <tr>
                                            <th style="width: 20%; text-align: right;"><label>Nama Konferensi*<label></th>
                                            <th style="width: 2%">:</th>
                                            <th style="width: 78%"><input type="text" name="nama_konferensi" id='nama_konferensi' class="form-control" style="width: 90%"></th>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: right;"><label>Penyelenggara*<label></th>
                                            <th style="width: 2%">:</th>
                                            <th style="width: 78%"><input type="text" name="penyelenggara" id='penyelenggara' class="form-control" style="width: 90%"></th>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: right;"><label>Tanggal Konferensi*<label></th>
                                            <th style="width: 2%">:</th>
                                            <th style="width: 78%"><input type="date" name="tanggal" id='tanggal' class="form-control" style="width: 30%"></th>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: right;"><label>Ruang*<label></th>
                                            <th style="width: 2%">:</th>
                                            <th style="width: 78%">
                                                <select class="form-control" name="ruang" style="width: 50%;">
                                                    <?php
                                                $query_ruang = mysqli_query($konek, "SELECT * FROM mst_ruang");
                                                while ($row_ruang = mysqli_fetch_array($query_ruang)) {

                                                    echo "<option value='$row_ruang[ruang_id]'>$row_ruang[nama_ruang]</option>";
                                                }

                                                ?>

                                                </select>
                                        </tr>

                                        <tr>
                                            <th style="width: 20%"></th>
                                            <th style="width: 2%"></th>
                                            <th style="width: 78%"> </br></br></br></th>
                                        </tr>
                                        <tr>
                                            <th colspan="3">
                                                <center>
                                                    <button type="submit" name='submit' class="btn btn-block btn-primary btn-sm">Submit</button>
                                                    <button type="reset" onclick="goBack()" class="btn btn-block btn-warning btn-sm">Cancel</button>
                                                </center>
                                            </th>
                                        </tr>


                                    </table>
                                </form>
                                <script type='text/javascript'>
                                    function validasi() {


                                        if (simpan.nama_konferensi.value == "") {
                                            alert("Nama Konferensi Tidak Boleh KOSONG ");
                                            simpan.nama_konferensi.focus();
                                            return false;
                                        }
                                        if (simpan.penyelenggara.value == "") {
                                            alert("Penyelenggara Tidak Boleh KOSONG");
                                            simpan.penyelenggara.focus();
                                            return false;
                                        }
                                        return true;
                                    }
                                </script>
                                <?php
                                                if (isset($_POST['submit'])) {

                                                    $nama_konferensi        = ucwords($_POST['nama_konferensi']);
                                                    $penyelenggara          = ucwords($_POST['penyelenggara']);
                                                    $tanggal                = $_POST['tanggal'];
                                                    $ruang                  = $_POST['ruang'];
                                                    $tglinput               = date('Y-m-d');
                                                    $tglubah                = date('Y-m-d');



                                                    $query_konferensi = "INSERT INTO conference (nama_konferensi, penyelenggara,tanggal,ruang_id, input_date, last_update)
                                        VALUES('$nama_konferensi', '$penyelenggara','$tanggal','$ruang','$tglinput', '$tglubah')";

                                                    $insert_conference = mysqli_query($konek, $query_konferensi);

                                                    if ($insert_conference) {
                                                        echo '<script>alert("Nama Konferensi Berhasil di Tambahkan")
                                    location.replace("' . $base_url . '/index.php?p=list-konferensi")</script>';
                                                    } else {
                                                        echo '<script>alert("Nama Konferensi Gagal di Tambahkan")
                                    location.replace("' . $base_url . '/index.php?p=add-konferensi")</script>';
                                                    }
                                                }

                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box -->


                                    <!-- /.box -->

                                    <!-- Input addon -->


                                </div>
                            </div>


                            </div>
                            </div>

                                                <?php
                                            }
                                            ?>