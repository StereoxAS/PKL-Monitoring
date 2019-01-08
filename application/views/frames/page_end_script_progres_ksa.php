<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('resources/js/dataTables.responsive.min.js')?>"></script>

<!-- Echarts JavaScripts -->
<script src="<?php echo base_url()?>resources/vendor/echarts/echarts-all.js"></script>
<script src="<?php echo base_url() ?>resources/js/jquery-3.3.1.min.js"> </script>

<script type="text/javascript">
    var table;
    var currentTab;
    var interv;
    var interv2;
	var JSONprogresKSA;
	var urlProgressKSA = "http://0f3957d8.ngrok.io/pklserver/api/monitoring/progress_ksa";

	
	$(document).ready(function() 
	{
		$('#example').DataTable( 
		{
			ajax: 'http://0f3957d8.ngrok.io/pklserver/api/monitoring/progress_ksa',
			columns: [
				{data: 'id_segmen'},
                {data: 'nim_pcl'},
				{data: 'nama_kab'},
                {data: 'nama_kec'},
                {data: 'nama_desa'},
                {data: 'status_segmen'}
			],
			order: [[2, 'asc']],
			rowGroup: {
				dataSrc: 'id_segmen'
			}
		});
	});	
    
	
	console.log("JSON KSA : " + urlProgressKSA + "     " + table);
	
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
        table.ajax.url('<?php echo base_url() ?>' + 'server/get_detail_listing/' + id);
        table.ajax.reload();
        $('[href=\\#detail]').tab('show');
    });

    $('#reload').click(function () {
        table.ajax.reload();
		$('.btn').tooltip('hide');
    })
	
   
</script>
