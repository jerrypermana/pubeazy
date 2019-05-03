<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        <i class="fa fa-bullhorn"></i>  Keynote Speakers
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
                                        <h3 class="box-title">Responsive Hover Table</h3>

                                        <div class="box-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Reason</th>
                                            </tr>
                                            <tr>
                                                <td>183</td>
                                                <td>John Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="label label-success">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            </tr>
                                            <tr>
                                                <td>219</td>
                                                <td>Alexander Pierce</td>
                                                <td>11-7-2014</td>
                                                <td><span class="label label-warning">Pending</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            </tr>
                                            <tr>
                                                <td>657</td>
                                                <td>Bob Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="label label-primary">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            </tr>
                                            <tr>
                                                <td>175</td>
                                                <td>Mike Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="label label-danger">Denied</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            </tr>
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


                <div class="col-md-12">

                    <!-- form start -->
                    <div class="box">
                        <div class="box-header">
                            <br>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3" align="right">
                                <button type="button" class="btn btn-block btn-primary" data-target="#ModalAddRuang" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah Ruang</button>
                            </div>
                            <div class="col-md-3" align="right">
                                <a href="<?php echo $base_url; ?>/index.php?p=mst-ruang" class="btn btn-block btn-primary">
                                    <i class="fa fa-list"></i> Daftar Ruang
                                </a>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 20%; text-align: center;">NAMA RUANG</th>
                                        <th style="width: 20%; text-align: center;">KUOTA</th>
                                        <th style="width: 20%; text-align: center;">INPUT DATE</th>
                                        <th style="width: 20%; text-align: center;">LAST UPDATE</th>
                                        <th style="width: 20%; text-align: center;">ACTION</th>
                                    </tr>
                                </thead>
                                <?php


                                $select = mysqli_query($konek, "SELECT * FROM mst_ruang");




                                while ($row_ruang = mysqli_fetch_array($select)) {




                                    echo "<tbody>
                                            <tr>
                                                <td >$row_ruang[nama_ruang]</td>
                                                <td >$row_ruang[kuota]</td>
                                                <td >$row_ruang[input_date]</td>
                                                <td >$row_ruang[last_update]</td>
                                                <td align='center'><a href='$base_url/index.php?p=mst-edit-ruang&ruangID=$row_ruang[ruang_id]'><button type='button' class='btn btn-default'><i class='fa fa-edit'></i> Edit</button></a>
                                                &nbsp
                                               <a href='$base_url/index.php?p=mst-hapus&ruangID=$row_ruang[ruang_id]'onClick=\"return confirm('Apakah anda yakin akan menghapus data Jam $row_ruang[nama_ruang] ?')\"><button type='button' class='btn btn-danger'><i class='fa fa-trash'> Hapus</i></button></a>
                                                </td>
                                            </tr>
                                        </tbody>";
                                };
                                ?>

                                <tfoot>
                                    <tr>
                                        <th>NAMA RUANG</th>
                                        <th>KUOTA</th>
                                        <th>INPUT DATE</th>
                                        <th>LAST UPDATE</th>

                                        <th>ACTION</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

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
        <div id="ModalAddRuang" name='myform' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Tambahkan Account Bank</h4>
                    </div>

                    <div class="modal-body">
                        <form id="add_ruang" method="POST">

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Modal Name">Nama Ruang</label>
                                <input type="text" name="nama_ruang" class="form-control" placeholder="Masukkan Nama Ruangan..." required />
                                <br>
                                <label for="Modal Name">Kuota Ruangan</label>
                                <input type="text" name="kuota" class="form-control" placeholder="Masukkan Kuota Ruangan..." required />
                                <br>

                            </div>



                            <div class="modal-footer">
                                <button class="btn btn-success" id="btn" type="submit">
                                    Confirm
                                </button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="$('#add_ruang')[0].reset();">
                                    Cancel
                                </button>
                            </div>

                        </form>



                    </div>


                </div>
            </div>
        </div>

        <!-- TUTUP MODAL SUBJECT -->
        <script>
            $(document).ready(function() {


                $('#add_ruang').submit(function(e) {
                    data = $('#add_ruang').serialize();
                    $.ajax({
                        type: "POST",
                        url: "data_api/save-ruang.php",
                        data: data,
                        dataType: "json",
                        success: function(result) {
                            if (result.success) {
                                alert(result.msg);
                                $('#ModalAddRuang').modal('hide');
                                $('#add_ruang')[0].reset();
                            }
                        }
                    });
                    e.preventDefault();
                });
            })
        </script>
        </div>
        </div>
    <?php
}
?>