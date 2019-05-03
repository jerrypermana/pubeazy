<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn"></i> Keynote Speakers
        </h1>

    </section>
    </br>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-bullhorn"></i> List Keynote Speakers</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <br>
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-3" align="right">
                                            <a href="<?php echo $base_url; ?>/index.php?p=add-speakers" class="btn btn-block btn-primary">
                                            <i class="fa fa-plus"></i> Add Speakers
                                            </a>
                                            
                                        </div>
                                        <div class="col-md-3" align="right">
                                            <a href="<?php echo $base_url; ?>/index.php?p=set-keynote-speakers" class="btn btn-block btn-primary">
                                                <i class="fa fa-refresh"></i> Refresh
                                            </a>
                                        </div>

                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th style="width: 5%; text-align: center;">No</th>
                                                <th style="width: 20%; text-align: center;">Photo</th>
                                                <th style="width: 20%; text-align: center;">Name</th>
                                                <th style="width: 20%; text-align: center;">Institution</th>
                                                <th style="width: 20%; text-align: center;">Actions</th>
                                            </tr>
                                            <?php


                                            $select = mysqli_query($konek, "SELECT * FROM speakers order by sequance ASC ");
                                            while ($row_speak = mysqli_fetch_array($select)) {

                                            if($row_speak['image_speaker'] != NULL){
                                                $photo = '<img class="img-responsive" src="../files/speakers/'. $row_speak['image_speaker'] .'" alt="Photo" style="max-width: 50%; height: 50%; text-align: center;">';

                                            }else{
                                                $photo = '<img class="img-responsive" src="../files/presenter/presenter.jpg" alt="Photo" style="max-width: 100%; height: auto;">';
                                            }


                                                echo "<tbody>
                                            <tr>
                                                <td style='text-align: center;'>$row_speak[sequance]</td>
                                                <td >$photo</td>
                                                <td >$row_speak[speaker_name]</td>
                                                <td >$row_speak[institution]</td>
                                                <td align='center'><a href='$base_url/index.php?p=edit-speakers&speakID=$row_speak[speaker_id]'><button type='button' class='btn btn-default'><i class='fa fa-edit'></i> Edit</button></a>
                                                &nbsp
                                               <a href='$base_url/index.php?p=mst-hapus&speakID=$row_speak[speaker_id]'onClick=\"return confirm('Apakah anda yakin akan menghapus data Speakers $row_speak[speaker_name] ?')\"><button type='button' class='btn btn-danger'><i class='fa fa-trash'> Hapus</i></button></a>
                                                </td>
                                            </tr>
                                        </tbody>";
                                            };
                                            ?>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>



            </div>
        </div>
        </div>
        <!-- /.box -->


        <!-- /.box -->

        <!-- Input addon -->


        </div>
        </div>
        <!-- Modal Popup untuk Add SUbject-->



        </div>
        </div>
    <?php
}
?>