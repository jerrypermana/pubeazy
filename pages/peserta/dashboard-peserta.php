<?php
if ($_SESSION['group_session'] == 'peserta') {
    ?>
<!-- Content Header (Page header) -->
<section class="content-header">


</section>
<br>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

           
            <div class="callout callout-info">
                <!-- <h4>INFO</h4>
                <li><?php echo $status; ?></li>
                <li><?php echo $status_loi; ?></li>
                <li><?php echo $status_akhir; ?></li>                
                <li><?php echo $status_loa; ?></li>
                <li><?php echo $status_paper; ?></li> -->
                <!-- <li><?php echo $komentar; ?></li> -->
            </div>

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        
                        <div class="col-md-12">

                            <!-- form start -->
                            <div class="box">
                                <div class="box-header">

                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">LIHAT</th>
                                                <th style="width: 30%;">KONFERENSI</th>
                                                <th style="width: 15%;">PENYELENGGARA</th>
                                                <th style="width: 10%;">PAKET</th>
                                                <th style="width: 20%;">STATUS TRANSFER</th>
                                               
                                            </tr>
                                        </thead>
                                        <?php

                                $id_peserta =  $_SESSION['id_peserta'];
                                $select = mysqli_query($konek, "SELECT tp.transfer_id,p.id_peserta,conf.nama_konferensi,conf.penyelenggara,
                                pk.nama_paket,tp.v_transfer
                            FROM transaksi_peserta as tp
                            LEFT JOIN peserta as p ON tp.id_peserta=p.id_peserta
                            LEFT JOIN conference as conf ON tp.konferensi_id=conf.konferensi_id
                            LEFT JOIN paket_konferensi as pk ON tp.paket_id=pk.paket_id
                            WHERE tp.id_peserta='$id_peserta'");
                            while ($row_transaksi = mysqli_fetch_array($select)) {

                                
                                if ($row_transaksi['v_transfer'] == 0) {

                                    $status = '<p style="color: red; font-weight: bold;"> Belum Transfer</p>';
                                } else {

                                    $status = '<p style="color: green; font-weight: bold;">Sudah Transfer</p>';
                                }
                                echo "<tbody>
                                            <tr>
                                            <td align='center'><a href='$base_url/index.php?p=view-peserta&id=$row_transaksi[transfer_id]'><button type='button' class='btn btn-default'><i class='fa fa-eye'> Lihat </i></button></a>
                                                <td>$row_transaksi[nama_konferensi]</td>
                                                <td>$row_transaksi[penyelenggara] </td>
                                                <td>$row_transaksi[nama_paket] </td>
                                                                                             
                                                 <td>$status</td>
                                               
                                              </td>
                                            </tr>
                                        </tbody>";

                            }
?>
                                        <tfoot>
                                            <tr>
                                                <th>LIHAT</th>
                                                <th>KONFERENSI</th>
                                                <th>PENYELENGGARA</th>
                                                <th>PAKET</th>
                                                <th>STATUS TRANSFER</th>
                                               
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

    </div>
    </div>
    <?php 
}
?> 