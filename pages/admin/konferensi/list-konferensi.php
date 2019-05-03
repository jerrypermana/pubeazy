<?php
if ($_SESSION['group_session'] == 'admin') {
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
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3>
                        List Conference
                    </h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">

                    </div>
                    <div class="col-md-6" align="right">
				    
				  </div>
                    <div class="col-md-3" align="right">
                        <a href='<?php echo $base_url; ?>/index.php?p=add-konferensi' class="btn btn-block btn-warning">
                            <i class="fa fa-list"></i> &nbsp; Tambah Konferensi
                        </a>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href='<?php echo $base_url; ?>/index.php?p=list-konferensi' class="btn btn-block btn-warning">
                            <i class="fa fa-list"></i> &nbsp; Daftar Konferensi                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12">

                        <!-- form start -->
                        <div class="box">

                            <div class="box-header">

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="paper_table" data-show-refresh="true" data-classes="table table-bordered" data-pagination="true" data-id-field="id" data-page-list="[10, 25, 50, 100, ALL]" data-side-pagination="server"></table>
                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
    </div>
    </div>

    <!-- /.box -->

    <!-- Input addon -->
    <script>
        $(document).ready(function() {
            $('#paper_table').bootstrapTable({
                pagination: true,
                search: true,
                pageSize: 10,
                url: 'data_api/api-list-konferensi.php',
                singleSelect: true,
                columns: [{
                        field: 'nama_konferensi',
                        title: 'Nama Konferensi',
                        width: '30%',
                        halign: 'center',
                        align: 'left',
                        sortable: false
                    },
                    {
                        field: 'tanggal',
                        title: 'Tanggal Konferensi',
                        align: 'center',
                        halign: 'center',
                        width: '20%',
                        sortable: true,
                        formatter: tglIndo
                    },
                    {
                        field: 'penyelenggara',
                        title: 'Penyelenggara',
                        width: '20%',
                        halign: 'center',
                        sortable: false
                    },
                    {
                        field: 'input_date',
                        title: 'Tanggal Data Masuk',
                        align: 'center',
                        halign: 'center',
                        width: '10%',
                        sortable: true,
                        formatter: tglIndo
                    },
                    {
                        field: 'konferensi_id',
                        title: 'SETTING',
                        align: 'center',
                        halign: 'center',
                        width: '20%',
                        formatter: function(value, row) {
                            return "<a href='<?php echo $base_url; ?>/index.php?p=edit-konferensi&id=" + value + "''><button type='button' class='btn btn-default'><i class='fa fa-edit'></i></button></a>&nbsp<a href='<?php echo $base_url; ?>/index.php?id=delete-bibliography&iditem=" + value + "'onClick=\"return confirm('Apakah anda yakin akan menghapus data item " + row.title + " ?')\"><button type='button' class='btn btn-default'><i class='fa fa-trash'></i></button></a>";

                        }
                    }
                ],
                onLoadSuccess: function(e) {
                    //				$('#total_record').html(e.total);
                    $('.fixed-table-pagination').addClass('panel-footer clearfix ');
                }
            });
        });

        function tglIndo(value) {
            var tanggal = new Date(value).getDate();
            var bulan = new Date(value).getMonth() + 1;
            var tahun = new Date(value).getYear();

            tahun = (tahun < 1000) ? tahun + 1900 : tahun;
            tanggal = tanggal < 10 ? '0' + tanggal : tanggal;
            bulan = bulan < 10 ? '0' + bulan : bulan;

            return tanggal + "-" + bulan + "-" + tahun;
        }
    </script>
    <?php 
}
?> 