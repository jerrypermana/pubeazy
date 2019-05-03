<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn"></i> Edit Keynote Speakers
        </h1>

    </section>
    <br>
    <?php

    $speakID  = $_GET['speakID'];
    $query      = "SELECT * FROM speakers WHERE speaker_id='$speakID'";
    $hasil = mysqli_query($konek, $query);
    $row = mysqli_fetch_array($hasil);
    $hitung = mysqli_num_rows($hasil);

    if ($hitung == 0) {
        echo '<script>alert("Speakers Tidak Di Temukan")
         location.replace("' . $base_url . '../index.php?id=dashboard")</script>';
    }
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">


            <div class="col-md-3">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Photo</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">


                            <div class="col-sm-8">
                                <?php
                                if($row['image_speaker'] != NULL && $row['image_speaker'] != ''){
                                    echo'<img class="img-responsive" src="../files/speakers/'. $row['image_speaker'] .'" alt="Photo" style="max-width: 100%; height: 100%; text-align: center;">';

                                }else{
                                    echo'<img class="img-responsive" src="../files/presenter/presenter.jpg" alt="Photo" style="max-width: 100%; height: 100%; text-align: center;">';
                                }

                                ?>

                            </div>
                        </div>



                    </div>
                    <!-- /.box-body -->

                </div>
            </div>
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="" method="POST" name='simpan' class='form-horizontal form-bordered' onSubmit='return validasi()' enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Speakers Name*</label>

                                <div class="col-sm-8">
                                    <input type="text" name="speaker_name" id='speaker_name' class="form-control" value='<?php echo $row['speaker_name']; ?>' required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Institution*</label>

                                <div class="col-sm-8">
                                    <input type="text" name="institution" id='institution' class="form-control" value='<?php echo $row['institution']; ?>' required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">About Speakers</label>

                                <div class="col-sm-9">
                                    <textarea id="compose-textarea" class="form-control" name="about_speaker" style="height: 300px"><?php echo $row['about_speaker']; ?> </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Sequance</label>

                                <div class="col-sm-3">
                                    <input type="text" name="sequance" id='sequance' class="form-control" value='<?php echo $row['sequance']; ?>' required>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Upload Paper</label>

                                <div class="col-sm-5">
                                    <label for="exampleInputFile">Insert Your Photo</label>
                                    &nbsp &nbsp <input type="file" name='image' id='image' value='<?php echo $row['image_speaker']; ?>'>
                                    <p class="help-block">Maximum 1 Mb.</p>
                                </div>

                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="cancel" class="btn btn-default">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {

            $speaker_name       = $_POST['speaker_name'];
            $institution        = $_POST['institution'];
            $about_speaker      = $_POST['about_speaker'];
            //$image              = $_POST['image'];
            $sequance           = $_POST['sequance'];
            $input_date         = date('Y-m-d');
            $last_update        = date('Y-m-d');


            $ekstensi_diperbolehkan    = array('jpg', 'png');
            //$nama = 'Abstrak_' . $tglinput . '_' . $member_id . '.pdf';
            $nama = $_FILES['image']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));

            $nama_file = 'Speakers_' . $sequance . '.' . $ekstensi . '';
            $ukuran    = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];


            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if ($ukuran < 1285760) {
                    move_uploaded_file($file_tmp, '../files/speakers/' . $nama_file);

                    $query_speaker  = "INSERT INTO speakers (speaker_name, institution,about_speaker,sequance, image_speaker, input_date, last_update)
                                        VALUES('$speaker_name', '$institution','$about_speaker','$sequance', '$nama_file', '$input_date', '$last_update')";

                    //echo $query_speaker;
                    $insert_speaker = mysqli_query($konek, $query_speaker);

                    if ($insert_speaker) {
                        echo '<script>alert("Speakers Berhasil di Tambahkan")</script>';
                    } else {
                        echo '<script>alert("Speakers Gagal di Tambahkan")</script>';
                    }
                } else {
                    echo '<script>alert("Ukuran File Terlalu Besar")</script>';
                }
            } else {
                echo '<script>alert("Ekstensi Yang Di Upload Tidak Diperbolehkan")</script>';
            }
        }

        ?>
        <script>
            $(function() {
                //Add text editor
                $("#compose-textarea").wysihtml5();
            });
        </script>

    <?php
}
?>