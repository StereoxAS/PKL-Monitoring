<!-- DataTables CSS -->
<style type="text/css">
    td.details-control {
        background: url('<?php echo base_url('resources/images/details_open.png'); ?>') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('<?php echo base_url('resources/images/details_close.png'); ?>') no-repeat center center;
    }
    .dataTables_wrapper .dt-buttons {
      float:none;
      text-align:right;
      font-size: 15px;
      height: 25px;
    }
</style>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Daftar PCL</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class ="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">
                            <h5>Tabel Informasi PCL</h5>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-link pull-right" data-toggle="tooltip" data-placement="top" title="Muat Ulang Tabel" id="reload"><i class="fa fa-refresh" style="color: white"></i></button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="table_pcl">
                        <thead>
                            <tr>
                                <th>NIM PCL</th>
                                <th>Nama PCL</th>
                                <th>Nama Kortim</th>
                                <th>No HP PCL</th>
                                <th>Detail</th>
                            </tr>

                             <tbody>
            <?php
                foreach($coba as $msl){
        ?>
                <tr>
            <td><?php echo $msl["nim"]; ?></td>
            <td><?php echo $msl["nama"]; ?></td>
            <td><?php echo $msl["nama_kortim"]; ?></td>
            <td><?php echo $msl["no_hp"]; ?></td>
            <td></td>
        </tr>
           <?php } ?>
    </tbody>
                        </thead>
                    </table>
                    </div>
                </div>
                </div>
                </div>
        </div>
        <!-- /.row -->
</div>
<!-- /#page-wrapper -->
