<?php
if ($_SESSION['group_session'] == 'admin') {
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Daftar Pengguna Sistem
        </h1>

    </section>
    </br>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">


                <div class="col-md-12">

                    <!-- form start -->
                    <div class="box">
                        <div class="box-header">
                            <br>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3" align="right">
                                <button type="button" class="btn btn-block btn-primary" data-target="#ModalAddAdmin" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah Pengguna Sistem</button>
                            </div>
                            <div class="col-md-3" align="right">
                                <a href="<?php echo $base_url; ?>/index.php?p=mst-admin" class="btn btn-block btn-primary">
                                    <i class="fa fa-list"></i> Daftar Pengguna Sistem
                                </a>
                            </div>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 20%; text-align: center;">USERNAME</th>
                                        <th style="width: 20%; text-align: center;">REALNAME</th>
                                        <th style="width: 20%; text-align: center;">GROUP SESSION</th>
                                        <th style="width: 20%; text-align: center;">ACTION</th>
                                    </tr>
                                </thead>
                                <?php


                                $select = mysqli_query($konek, "SELECT * FROM login");




                                while ($row_admin = mysqli_fetch_array($select)) {




                                    echo "<tbody>
                                            <tr>
                                                <td >$row_admin[username]</td>
                                                <td >$row_admin[realname]</td>
                                                <td >$row_admin[group_session]</td>
                                                <td align='center'>
                                                <a href='$base_url/index.php?p=mst-edit-admin&adminID=$row_admin[username]'><button type='button' class='btn btn-default'><i class='fa fa-edit'></i> Edit</button></a>
                                                &nbsp
                                                <a href='$base_url/index.php?p=mst-hapus&adminID=$row_admin[username]'onClick=\"return confirm('Apakah anda yakin akan menghapus data Jam $row_admin[username] ?')\"><button type='button' class='btn btn-danger'><i class='fa fa-trash'> Hapus</i></button></a>
                                                </td>
                                            </tr>
                                        </tbody>";
                                };
                                ?>

                                <tfoot>
                                    <tr>
                                        <th>USERNAME</th>
                                        <th>REALNAME</th>
                                        <th>GROUP SESSION</th>
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
         <div id="ModalAddAdmin" name='myform' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Tambahkan Pengguna Sistem</h4>
                    </div>

                    <div class="modal-body">
                        <form action='<?php echo $base_url; ?>/index.php?p=save-admin' method="POST" >

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Modal Name">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan Username..." required />
                                <br>
                                <label for="Modal Name">Nama Lengkap</label>
                                <input type="text" name="realname" class="form-control" placeholder="Masukkan Nama Lengkap..." required />
                                <br>
                                <label for="Modal Name">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password..." required />
                                <br>
                                

                            </div>



                            <div class="modal-footer">
                                <button class="btn btn-success" id="btn" type="submit" name='submit'>
                                    Confirm
                                </button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="$('#add_admin')[0].reset();">
                                    Cancel
                                </button>
                            </div>

                        </form>



                    </div>


                </div>
            </div>
        </div>
       
        <!-- TUTUP MODAL SUBJECT -->
        <!-- <script>
            $(document).ready(function() {

                 
                $('#add_admin').submit(function(e) {
                                data = $('#add_admin').serialize();
                                $.ajax({
                                    type: "POST",
                                    url: "data_api/save-admin.php",
                                    data: data,
                                    dataType: "json",
                                    success: function(result) {
                                        if (result.success) {
                                            alert(result.msg);
                                            $('#ModalAddAdmin').modal('hide');
                                            $('#add_admin')[0].reset();
                                        }
                                    }
                                });
                                e.preventDefault();
                            });
            })
        </script> -->
        </div>
        </div>
    <?php
}
?>