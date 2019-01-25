    <!-- DataTables -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

    <!-- Echarts JavaScripts -->
    <script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>

    <script type="text/javascript">
        var table;
        var currentTab;
        var interv2;

		function get_aggregate() {
			$.ajax({
				url: "<?php echo base_url(); ?>" + "server/get_agregat_cacah/", //service
				type: "GET",
				dataType: "JSON",
				success: function(result){
					$.each(result['data'], function (key, value) {
						var id_nama = '#nama_kabupaten_' + value['kode_kabupaten'];
						var id_progress = '#progress_' + value['kode_kabupaten'];
						var id_bar = '#bar_' + value['kode_kabupaten'];
						var id_percent = '#percent_' + value['kode_kabupaten'];
						value['progress'] = value['progress'] == null ? 0 : value['progress'];
						value['jumlah'] = value['jumlah'] == null ? 0 : value['jumlah'];
						$(id_nama).html(value['nama_kabupaten']);
						$(id_progress).html(value['jumlah'] + "/" + value['beban_cacah']);
						$(id_bar).css('width', (value['progress']*100) + '%').attr('aria-valuenow', (value['progress']*100));
						$(id_percent).html((value['progress']*100).toFixed(3) + '%');
					})
				},
				error: function (result) {
					console.log(result);
				}
			});
		}

    	$(document).ready(function() {
			$('.btn').tooltip();
			get_aggregate();
            interv2 = setInterval(get_aggregate, 3000);

            table = $('#tabel_progress_cacah').DataTable({
                ajax: "<?php echo base_url() ?>" + "server/get_detail_cacah/", // CHANGE ME
				displayLength: 25,
				oLanguage: {
					oPaginate: {
						sFirst: "Pertama",
						sLast: "Terakhir",
						sNext: "Berikutnya",
						sPrevious: "Sebelumnya",
					},
					sSearch: "Cari",
					sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Hasil",
					sInfoEmpty: "Tidak ada hasil ditemukan",
					sZeroRecords: "Tidak ada hasil ditemukan",
					sLengthMenu: "Menampilkan _MENU_ Hasil",
					sInfoFiltered: " (hasil filter dari _MAX_ Hasil)",
					sEmptyTable: "Tidak ada data tersedia",
					sLoadingRecords: "Memuat data ..."
				},
                columns: [
                    {"data": "nama_bs"},
                    {"data": "nim"},
                    {"data": "nama_kabupaten"},
                    {"data": "nama_kecamatan"},
                    {"data": "nama_desa"},
                    {
                        "data": "jumlah",
                            render:function (data, type, full, meta) {
                                if (data == null) {
                                    return 0;
                                }else{
                                    return data;
                                }
                            }
                    },
                    {"data": "beban_cacah"},
                    {
                        data: "progress" ,
                            render:function (data, type, full, meta) {
                                // TODO : desimal 3angka
                                if (data != null) {
                                    return "<div class='progress progress-striped active' style='margin-bottom: 0%;'><div class='progress-bar progress-bar-success' role='progressbar' style='width: "+parseFloat(data)*100+"%;'>"+parseFloat(data)*100+"%</div></div>"
                                }else{
                                    return "<div class='progress progress-striped active' style='margin-bottom: 0%;'><div class='progress-bar progress-bar-success' role='progressbar' style='width: 0%;'>0%</div></div>"
                                }
                            }
                    }
                ],
                order: [[1, 'asc']],
                responsive: true
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                currentTab = $(e.target).text(); // get current tab

                if (currentTab !='Detail'){
					$('#reload').addClass('hidden');
					$('#title').html('Informasi Agregat Pencacahan');
                    interv2 = setInterval(get_aggregate, 3000);
                    table.ajax.url("<?php echo base_url('server/get_detail_cacah') ?>");
                    table.ajax.reload();
                }else {
					$('#reload').removeClass('hidden');
					$('#title').html('Tabel Informasi Cacah');
                    clearInterval(interv2);
                }
            });

	   });


    $('.bar_div').on('click', '.cont', function(event){
        var id = $(this).attr('id');
		id = id.replace("link_detail_", "");
		console.log(id);
        table.ajax.url("<?php echo base_url('server/get_detail_cacah/') ?>" + id);
        table.ajax.reload();
		$('#reload').removeClass('hidden');
        $('[href=\\#detail]').tab('show');
    });

    $('#reload').click(function () {
        table.ajax.reload();
		$('.btn').tooltip('hide');
    })

    </script>
