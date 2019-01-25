<!-- DataTables -->
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

<!-- Echarts JavaScripts -->
<script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>

<script type="text/javascript">
    
    var table;
    var currentTab;
    var interv;
    var interv2;

    $(document).ready(function() {
		$('.btn').tooltip();
        interv2 = setInterval(get_reload, 3000);

        table = $('#tabel_progress_ubinan').DataTable({
            ajax: '<?php echo base_url() ?>' + 'server/get_detail_ubinan', // CHANGE ME
			displayLength: 25,
			oLanguage: {
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Berikutnya",
					sPrevious: "Sebelumnya",
				},
				sSearch: "Cari",
				sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ hasil",
				sInfoEmpty: "Tidak ada hasil ditemukan",
				sZeroRecords: "Tidak ada hasil ditemukan",
				sLengthMenu: "Menampilkan _MENU_ hasil",
				sInfoFiltered: " (hasil filter dari _MAX_ hasil)",
				sEmptyTable: "Tidak ada data tersedia",
				sLoadingRecords: "Memuat data ..."
			},
            columns: [
                {"data": "tan.noSegmen"},
                {"data": "tan.nim"},
                {"data": "kec.nama"},
                {"data": "kel.nama"},
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
//                {
//                    "data": "progres",
//                    render:function (data, type, full, meta){
//                        jumlah/;
//                        return 
//                    }
//                },
            ],
            order: [[1, 'asc']],
            responsive: true
        });

    });

    function get_reload(){
        $.ajax({
            url: "<?php echo base_url(); ?>/server/get_agregat_listing", //service
            type: "GET",
            dataType: "JSON",
                success: function(result){

                       for(var j = 0; j<7; j++){
                        if(result['data'][j]['jumlah'] == null){
                            result['data'][j]['jumlah'] = 0;
                        }
                        if(result['data'][j]['progress'] == null){
                            result['data'][j]['progress'] = 0;
                         }

                        $("#hasil1_"+result['data'][j]['kode_kabupaten']).html(result['data'][j]['jumlah'] + " unit cacah");

                        }

                    }

            });

    }

    $('.bar_div').on('click', '.cont', function(event){
        // var id = $(this).attr('id');
        var id = event.target.id;
        table.ajax.url('<?php echo base_url() ?>' + 'server/get_detail_ubinan/' + id);
        table.ajax.reload();
        $('[href=\\#detail]').tab('show');
    });

    $('#reload').click(function () {
        table.ajax.reload();
		$('.btn').tooltip('hide');
    })

</script>
