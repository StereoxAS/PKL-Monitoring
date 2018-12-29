<style type="text/css">
    td.details-control {
        background: url('<?php echo base_url() . 'resources/images/details_open.png'; ?>') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('<?php echo base_url() . 'resources/images/details_close.png'; ?>') no-repeat center center;
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
            <h1 class="page-header">Monitoring Masalah Lapangan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class ="panel panel-default">
                <div class="panel-heading">
                Tabel Pengaduan Masalah
                </div>
                <div class="panel-body">
                    <div class="adv-table">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
                </div>
                </div>
        </div>
        <!-- /.row -->
</div>
<!-- /#page-wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url()?>resources/vendor/jquery/jquery.min.js"></script>

    <!-- core -->
    <script src="<?php echo base_url()?>resources/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>resources/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>resources/dist/js/sb-admin-2.js"></script>

    <!-- dynamic table -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>resources/js/DT_bootstrap.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>resources/vendor/jquery/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <!-- button datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript">

        /* Formatting function for row details - modify as you need */
        function format (d) {//changeme
            // `d` is the original data object for the row
            return '<table>'+
                '<tr>'+
                '</tr>'+
            '</table>';
        }

        $(document).ready(function() {
            $.fn.dataTable.ext.buttons.reload = {
                text: 'Reload',
                action: function ( e, dt, node, config ) {
                    dt.ajax.reload();
                }
            };

            var table = $('#example').DataTable( {
                ajax: "get_list_masalah",//changeme
                dom: "Blfrstip",
                buttons: [
                    "reload"
                ],
                columns: [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    { "data": "nama" },
                    { "data": "judul" },
                    { "data": "keterangan" },
                    { "data": "status" }
                ],
                order: [[1, 'asc']]
            } );

            // Add event listener for opening and closing details
            $('#example tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            } );
        } );

    </script>

</body>

</html>
