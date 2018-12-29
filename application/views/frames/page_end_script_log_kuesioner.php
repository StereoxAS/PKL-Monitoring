<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

<script type="text/javascript">
    var table;

    $(document).ready(function() {
		$('.btn').tooltip();
        table = $('#table_monitoring').DataTable({
            ajax: '<?php echo base_url() ?>' + 'server/get_log_kuesioner', // CHANGE ME
			displayLength: 25,
			oLanguage: {
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Berikutnya",
					sPrevious: "Sebelumnya",
				},
				sSearch: "Cari Kuesioner",
				sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Kuesioner",
				sInfoEmpty: "Tidak ada hasil ditemukan",
				sZeroRecords: "Tidak ada hasil ditemukan",
				sLengthMenu: "Menampilkan _MENU_ Kuesioner",
				sInfoFiltered: " (hasil filter dari _MAX_ Kuesioner)",
				sEmptyTable: "Tidak ada data tersedia",
				sLoadingRecords: "Memuat data ..."
			},
			sortable: false,
			columnDefs: [{ visible: false, targets: 0 }, { orderable: false, targets: [3,4] }],
            columns: [
                {"data": "UploadName"},
                {"data": "nama_pcl"},
                {"data": "nama_kortim"},
                {"data": "status"},
                {"data": "time"},
            ],
            order: [[0, 'asc']],
			drawCallback: function ( settings ) {
	            var api = this.api();
	            var rows = api.rows( {page:'current'} ).nodes();
	            var last = null;

	            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
	                if ( last !== group ) {
	                    $(rows).eq( i ).before(
	                        '<tr class="group text-center" style="background: #e8e8e8"><td colspan="5"><b> Kuesioner '+group+'</b></td></tr>'
	                    );

	                    last = group;
	                }
	            } );
	        },
        });
    });

	// Order by the grouping
    $('#table_monitoring').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] == 0 && currentOrder[1] === 'asc' ) {
            table.order( [ 0, 'desc' ] ).draw();
        }
        else {
            table.order( [ 0, 'asc' ] ).draw();
        }
    } );

    $('#reload').click(function () {
        table.ajax.reload();
		$('.btn').tooltip();
    })

</script>
