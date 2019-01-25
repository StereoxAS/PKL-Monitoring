<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

<script type="text/javascript">
    var table;

    /* Formatting function for row details - modify as you need */
    function format (data) {
        return '<div class="panel panel-default">' +
            '<div class="panel-heading">' +
                'Detail PCL' +
            '</div>' +
            '<div class="panel-body">' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Nama PCL: </b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nama +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Prodi: </b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.prodi +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Nama Tim: </b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nama_tim_real +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Wilayah: </b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nama_wilayah +
                    '</div>' +
                '</div>' +
                '<div class="row" style="margin-top:10px">' +
                    '<div class="col-lg-3">' +
                        '<b>Nim Kortim: </b>' +
                    '</div>' +
                    '<div class="col-lg-9">' +
                        data.nim_koor +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>';
    }

    $(document).ready(function() {
        $('.btn').tooltip();
        table = $('#table_pcl').DataTable({
            ajax: '<?php echo base_url() ?>' + 'server/get_tabel_pcl', // CHANGE ME
            displayLength: 25,
            oLanguage: {
                oPaginate: {
                    sFirst: "Pertama",
                    sLast: "Terakhir",
                    sNext: "Berikutnya",
                    sPrevious: "Sebelumnya",
                },
                sSearch: "Cari PCL",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ PCL",
                sInfoEmpty: "Tidak ada hasil ditemukan",
                sZeroRecords: "Tidak ada hasil ditemukan",
                sLengthMenu: "Menampilkan _MENU_ PCL",
                sInfoFiltered: " (hasil filter dari _MAX_ PCL)",
                sEmptyTable: "Tidak ada data tersedia",
                sLoadingRecords: "Memuat data ..."
            },
            columns: [
                {"data": "nim"},
                {"data": "nama"},
                 {"data": "nama_kortim"},
                {
                    "data": "no_hp"
                   
                },
               
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                }
            ],
            columnDefs: [
                            {
                                width: "18%",
                                targets: [0,3],
                            },
                            {
                                width: "29.5%",
                                targets: [1,2],
                            },
                            {
                                width: "5%",
                                targets: 4,
                            }
                        ],
            order: [[1, 'asc']],
        });


        // Add event listener for opening and closing details
        $('#table_pcl tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);
            var data = row.data();
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Close all other row then open this row
                table.rows().every(function (rowIdx, tableLoop, rowLoop) {
                    this.child.hide();
                    $('tr.shown').removeClass('shown');
                });
                row.child(format(data)).show();
                tr.addClass('shown');
            }
        });
    });

    $('#reload').click(function () {
        table.ajax.reload();
        $('.btn').tooltip('hide');
    })

</script>
