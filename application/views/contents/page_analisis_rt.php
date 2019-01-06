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
                                    <select class="form-control" id="select_variabel">
        								<option selected disabled value="">Pilih Variabel</option>
                                                                        <option value="">Var1</option>
                                                                        <option value="">Var2</option>
                                                                        <option value="">Var3</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <div class="form-group col-lg-12">
                                    <button class="btn btn-default btn-lg btn-block" type="button" id="btn_analisis">Cari</button>
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
                    Five Number Summary
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
				<table class="table table-stripped">
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
				</table>
				
				
				<!-- /.panel-body -->
				
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
					<!-- <div id="chart_rt" style="height: 500px;"></div> -->
                                       <div id='mapleafletbali'></div>
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
         var var_buleleng = 100;
         var var_karangasem = 200;
         var var_klungkung = 300;
         var var_bangli = 400;
         var var_gianyar = 500;
         var var_denpasar = 600;
         var var_badung = 700;
         var var_tabanan = 800;
         var var_jembrana = 900;        
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
    </script>
