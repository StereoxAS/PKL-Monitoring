<!-- Page Content -->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Analisis Real Time</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pilihan Variabel Analisis
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group col-lg-12">
                                <div class="form-group col-lg-12">
                                    <label>Variabel Analisis</label>
                                    <select class="form-control" id="formVar">
        								<option selected disabled value="disable">Pilih Variabel</option>
                                                                        <option value="Terkirim">Produktivitas (Terkirim)</option>
                                                                        <option value="Confirmed">Produktivitas (Final)</option>
                                                                        <option value="Var3">Var3</option>

                                    </select>
                                </div>
                                <br>
                                <br>
                                <div class="form-group col-lg-12">
                                   
                                </div>
                            </div>
                        </div>
						<!-- /.col-lg-12 -->
                    </div>
					<!-- /.row -->
                </div>
				<!-- /.panel-body -->
            </div>
			<!-- /.panel -->
	</div>
		
		
		<div class="col-lg-6">
                <div class="panel panel-default">
                <div class="panel-heading">
                    Pie Chart Diagram
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
				<!-- <table class="table table-stripped">
				<tbody>
					<tr>
						<th><b>Min</b></th>
						<td id="fivenumbersummary_min">0</td>
					</tr>
					<tr>
						<th><b>Q1</b></th>
						<td id="fivenumbersummary_q1">0</td>
					</tr>
					<tr>
						<th><b>Median</b></th>
						<td id="fivenumbersummary_median">0</td>
					</tr>
					<tr>
						<th><b>Q3</b></th>
						<td id="fivenumbersummary_q3">0</td>
					</tr>
					<tr>
						<th><b>Max</b></th>
						<td id="fivenumbersummary_max">0</td>
					</tr>
				</tbody>
				</table> -->
				<!-- /.panel-body -->
                                
				<script async="" src="<?php echo base_url()?>resources/vendor/piechart/analytics.js.download"></script>
                                <script src="<?php echo base_url()?>resources/vendor/piechart/Chart.bundle.js.download"></script><style type="text/css">/* Chart.js */
                                @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
                                <script src="<?php echo base_url()?>resources/vendor/piechart/utils.js.download"></script>
                                <div id="canvas-holder" style="width:100%">
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                    </div>
                                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                        </div>
                                </div>
                                    
        <canvas id="chart-area" width="540" height="270" class="chartjs-render-monitor" style="display: block; width: 540px; height: 270px;"></canvas>
	</div>
	<!-- <button id="randomizeData">Randomize Data</button>
	<button id="addDataset">Add Dataset</button>
	<button id="removeDataset">Remove Dataset</button> -->
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

	</script>
                                
				</div>
			<!-- /.panel -->
		</div>
		
		</div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Outliers
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="tabel_progress_ksa">
						<thead>
							<tr>
								<th>NIM</th>
								<th>Produktivitas</th>
								<th>Confirmation</th>
								<th>Status</th>								
							</tr>
						</thead>
					</table>
                </div>

			<!-- /.panel -->
            </div>
		
	</div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Boxplot
                </div>
                <!-- /.panel-heading -->
                <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
                <div id="myDiv" style="height:600px;width:500px; margin:0 auto;" ></div>
                

                <div class="panel-body">
								
				</div>
			<!-- /.panel -->
		</div>
		
		</div>
		
        <!-- /.col-lg-4 -->
        
		<div class="col-lg-12">
			<div class="panel panel-default">
                <div class="panel-heading">
                     Map Tematik 
                     <button class="pull-right" data-toggle="tooltip" data-placement="top" title="Tampilkan" id="tampilkanMaptematik"><i class="fa fa-refresh" style="color: black"></i></button> 
  		</div>
                            
                <!-- /.panel-heading -->
                <div class="panel-body">
                                        <div class="panel-body"> Cari Fase Subsegmen
                                        <select name="formMap" id="formMap">
                                        <option selected disabled value="">...</option>
                                        <option name="vegetatif1" value="vegetatif1">F1 Vegetatif 1</option>
                                        <option name="vegetatif2" value="vegetatif2">F2 Vegetatif 2</option>
                                        <option name="generatif" value="generatif">F3 Generatif</option>
                                        <option name="panen" value="panen">F4 Panen</option>
                                        <option name="persiapan_lahan" value="persiapan_lahan">F5 Persiapan Lahan</option>
                                        <option name="puso" value="puso">F6 Puso</option>
                                        <option name="bukanpadi" value="bukanpadi">F7 Bukan Sawah Padi</option>
                                        <option name="bukansawah" value="bukansawah">F8 Bukan Sawah</option>
                                        </select>
                                        </div>
                    
					<!-- <div id="chart_rt" style="height: 500px;"></div> -->
                                        <div id='mapleafletbali' ></div>
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div> 
		<!-- /.col-lg-8 -->
                
    </div>

    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script>
         var var_buleleng = 5;
         var var_karang_asem = 15;
         var var_klungkung = 25;
         var var_bangli = 55;
         var var_gianyar = 150;
         var var_denpasar = 250;
         var var_badung = 750;
         var var_tabanan = 1000;
         var var_jembrana = 1000;        
</script>

        <link rel="stylesheet" href="<?php echo base_url()?>resources/vendor/mapleafletbali/leaflet.css" />
        <script id="leafletScript" src="<?php echo base_url()?>resources/vendor/mapleafletbali/leaflet.js"></script>
        <script type="text/javascript" id="geojsonScript" src="<?php echo base_url()?>resources/vendor/mapleafletbali/bali.js"></script>        
        
	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		#mapleafletbali {
			width: 600px;
			height: 400px;
		}
	</style>
        
        <style>
        #mapleafletbali { width: 1000px; height: 500px; }
        .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
        .legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
        </style>
        
        
        <script id="mapleafletbaliScript" type="text/javascript" src="<?php echo base_url()?>resources/vendor/mapleafletbali/mapleafletbali.js"></script>

     <script>
    $(document).ready(function(){
                $('#formMap').change(function(){
                    var fase_id = $(this).val();
                    map.remove();
                    $('#leafletScript').remove();
                    $('#geojsonScript').remove();
                    $('#mapleafletbaliScript').remove();
                    
                $.ajax({
                url: "<?php echo base_url() ?>Server/get_maptematik_faseksa?fase_id="+fase_id,
                method: "GET",
                success: function(data) {
                
                var_buleleng = data[0]['buleleng'];
                var_karang_asem = data[0]['karang_asem'];
                var_klungkung = data[0]['klungkung'];
                var_bangli = data[0]['bangli'];
                var_gianyar = data[0]['gianyar'];
                var_denpasar = data[0]['denpasar'];
                var_badung = data[0]['badung'];
                var_tabanan = data[0]['tabanan'];
                var_jembrana = data[0]['jembrana'];   
                console.log(data);
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/leaflet.js", function() {
                $('script:last').attr('id', 'leafletScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/bali.js", function() {
                $('script:last').attr('id', 'geojsonScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/mapleafletbali.js", function() {
                $('script:last').attr('id', 'mapleafletbaliScript');
                });
                
                }                                                
                                        });
                                    });
                                });
    </script>   
    
    <script>
    $(document).ready(function(){
                $('#tampilkanMaptematik').click(function(){
                    var fase_id = $(this).val();
                    map.remove();
                    $('#leafletScript').remove();
                    $('#geojsonScript').remove();
                    $('#mapleafletbaliScript').remove();
                    
                $.ajax({
                url: "<?php echo base_url() ?>Server/get_maptematik_faseksa?fase_id="+fase_id,
                method: "GET",
                success: function(data) {
                
                var_buleleng = data[0]['buleleng'];
                var_karang_asem = data[0]['karang_asem'];
                var_klungkung = data[0]['klungkung'];
                var_bangli = data[0]['bangli'];
                var_gianyar = data[0]['gianyar'];
                var_denpasar = data[0]['denpasar'];
                var_badung = data[0]['badung'];
                var_tabanan = data[0]['tabanan'];
                var_jembrana = data[0]['jembrana'];   
                console.log(data);
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/leaflet.js", function() {
                $('script:last').attr('id', 'leafletScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/bali.js", function() {
                $('script:last').attr('id', 'geojsonScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/mapleafletbali.js", function() {
                $('script:last').attr('id', 'mapleafletbaliScript');
                });
                
                }                                                
                                        });
                                    });
                                });
    </script>   
        
<!--    <script>
    $(document).ready(function(){
                $('#tampilkanMaptematik').click(function(){
                    map.remove();
//                    $('#leafletScript').remove();
//                    $('#geojsonScript').remove();
//                    $('#mapleafletbaliScript').remove();
                $.ajax({
                url: "<?php echo base_url() ?>Server/get_maptematik_faseksa",
                method: "GET",
                success: function(data) {
                
                
                var_buleleng = data[];
                var_karangasem = data[];
                var_klungkung = data[];
                var_bangli = data[];
                var_gianyar = data[];
                var_denpasar = data[];
                var_badung = data[];
                var_tabanan = data[];
                var_jembrana = data[];   
                console.log(var_buleleng);
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/leaflet.js", function() {
                $('script:last').attr('id', 'leafletScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/bali.js", function() {
                $('script:last').attr('id', 'geojsonScript');
                });
                
                $.getScript("<?php echo base_url()?>resources/vendor/mapleafletbali/mapleafletbali.js", function() {
                $('script:last').attr('id', 'mapleafletbaliScript');
                });
                
                }                                                
                                        });
                                    });
                                });
    </script>-->
