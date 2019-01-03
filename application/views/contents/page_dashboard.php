<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="border-bottom: 0px;">Selamat datang, <span class="nama"><b><?php echo ucwords($this->session->nama);?></b></span></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">

          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">Peta Progress</div>
			  <div class="panel-body">
			  
				<div class="col-lg-6">
                                    <!-- col-lg-6 z-depth-2 -->
                                
                                <div>
                                           
                                <p>
                                Cari Kabupaten / Kota
                               
                                <!-- <form action ="" method="POST"> -->
                                <select name="formKabkot" id="formKabkot">
                                    <?php foreach($all_kabkot as $semua_kabkot): ?>
                                    <option value="<?php echo $semua_kabkot->id_kabkot; ?>"><?php echo $semua_kabkot->nama_kabkot; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                                  
				<!-- <div id="map"></div> -->
                                
                               <!--
                                $idembeddddd = $_POST['formKabkot'];
                                $idembedddd = $this->Pkl->get_embed_kabkot($idembeddddd);
                               php echo $idembeddddd  -->
                                 
                                 
                               <div name="mapKabkot" id="mapKabkot">
                                   
                               <iframe id="frameKabkot" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252665.33056312407!2d114.54276913839894!3d-8.313153948670598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1631a25b65eb5%3A0x3030bfbca7cbf30!2sJembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1546354871584" width="470" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                               </div>
                                

				
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>Kabupaten / Kota</th>
                                                <th>Unit KSA Tercacah</th>
                                                <th>Progress KSA</th>
                                                <th>Unit Ubinan Tercacah</th>
                                                <th>Progress Ubinan</th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
                                                <td><div id="tableNamakabkot">Jembrana</div></td>
						<td><div id="tableKsatercacahkabkot"></div></td>
						<td><div id="tableProgressksakabkot"></div></td>
                                                <td><div id="tableUbinantercacahkabkot"></div></td>
						<td><div id="tableProgressubinankabkot"></div></td>
					  </tr>
					</tbody>
				  </table>
                                
                                <table class="table table-bordered">
					<thead>
					  <tr>
						
						<th>Unit Terlisting</th>
						<th>Progress Cacah</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						
						<td><div id="tableUnitterlistingkabkot"></div></td>
						<td><div id="tableProgresscacahkabkot"></div></td>
					  </tr>
					</tbody>
				  </table>
                                
				  <br>
				</div>
				<div class="col-lg-6">
                                <!--   
				<center><h3><span class="namakabterpilih">BENGKULU</span></h3></center>
                                -->
                                
                                <div>
                                <p>
                                Cari Kecamatan
                                
                                
                                <select name="formKecamatan" id="formKecamatan" >
                                    <option value="5101010">Melaya</option>
                                    <option value="5101020">Negara</option>
                                    <option value="5101021">Jembrana</option>
                                    <option value="5101030">Mendoyo</option>
                                    <option value="5101040">Pekutatan</option>
                                </select>
                                
                                </p>
                                </div>
				<!-- <div id="map2"></div> -->
                                <div name="mapKecamatan" id="mapKecamatan">
                               <iframe id="frameKecamatan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126353.68633506789!2d114.47202175480734!3d-8.247651422192408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1679c2805aa07%3A0x4030bfbca7d2d80!2sMelaya%2C+Jembrana+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543865850283" width="460" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>           
                               </div>
                                
				<table class="table table-bordered">
					<thead>
					  <tr>
						<th>Kecamatan</th>
						<th>Unit KSA Tercacah</th>
                                                <th>Progress KSA</th>
                                                <th>Unit Ubinan Tercacah</th>
                                                <th>Progress Ubinan</th>
					
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><div id="tableNamakecamatan">Melaya</div></td>
						<td><div id="tableKsatercacahkecamatan"></div></td>
						<td><div id="tableProgressksakecamatan"></div></td>
                                                <td><div id="tableUbinantercacahkecamatan"></div></td>
						<td><div id="tableProgressubinankecamatan"></div></td>
					  </tr>
					</tbody>
				  </table>
                                <table class="table table-bordered">
					<thead>
					  <tr>
						
						<th>Unit Terlisting</th>
						<th>Progress Cacah</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						
						<td><div id="tableUnitterlistingkecamatan"></div></td>
						<td><div id="tableProgresscacahkecamatan"></div></td>
					  </tr>
					</tbody>
				  </table>
				<br>
				</div>
			  </div>	 
			</div>
          </div>

          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
				  <div class="row">
    					<div class="col-xs-9">
    						Progress Pencacahan Total
    					</div>
                                        <!--
    					<div class="col-xs-3">
    						<a class="pull-right" data-toggle="tooltip" data-placement="top" title="Lihat Detail" href="<?php echo base_url('pkl/progres_cacah')?>"><i class="fa fa-external-link" style="color: white"></i></a>
    					</div>
                                        -->
    				</div>
			  </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8" id="progress_bar"></div>
                  <div class="col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>
            <!--
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
				<div class="row">
  					<div class="col-xs-9">
  						Progress Listing
  					</div>
  					<div class="col-xs-3">
  						<a class="pull-right" data-toggle="tooltip" data-placement="top" title="Lihat Detail" href="<?php echo base_url('pkl/progres_listing')?>"><i class="fa fa-external-link" style="color: white"></i></a>
  					</div>
  				</div>
			</div> 
            
              
              <div class="panel-body">
                <div class="col-lg-12">
                  <table class="table table-striped table-bordered table-hover" id="tabel_listing">
                      <thead>
                          <tr>
                            <th>Kab./Kota</th>
                            <th>Terlisting</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
					  <tfoot>
						<tr>
							<th colspan="1" style="text-align:right">Total:</th>
							<th></th>
			            </tr>
			        </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
    -->

		  <div class="col-lg-4">
			<div class="panel panel-default">
              <div class="panel-heading">Sisa Waktu Pencacahan</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
			 
	              <span id="countDown"></span>
	                  <ul id="example">
	                    <li><span class="days">00</span><p class="days_text" style="color: #3f3f3f">Hari</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="hours">00</span><p class="hours_text" style="color: #3f3f3f">Jam</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="minutes">00</span><p class="minutes_text" style="color: #3f3f3f">Menit</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="seconds">00</span><p class="seconds_text" style="color: #3f3f3f">Detik</p></li> <!-- 1de9b6
	                  </ul>
	              
				</div>
            </div>
		  </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->  
</div>
<!-- /#page-wrapper -->

<!-- jQuery 
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
-->
<!-- Bootstrap Typeahead 
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function){
        $('#all_kabkot').('change', )
    }
    </script>
-->
<script src="<?php echo base_url() ?>resources/js/jquery-3.3.1.min.js"> </script>
                               <!-- Dropdown kecamatan dari formkabkot ok-->
                               <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#formKecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_allkecamatan_control?kabkot_id="+kabkot_id,
                                            method: "GET",//"POST", <!-- type -->
                                            //data: {kabkot_id: kabkot_id}, <!-- 'kako_id='+kabkot_id, --> <!-- response -->
                                            success: function(data) {
                                            for(var i = 0; i<data.length ; i++){
                                                var html = `<option value ="${data[i].id_kecamatan}">${data[i].nama_kecamatan}</option>`;
                                                $('#formKecamatan').append(html); <!-- data -->                                                
                                                }                                            
                                            }                                                
                                        });
                                    });
                                });
                                </script>
                                <!-- Frame kabkot dari formkabkot ok-->
                                 <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#frameKabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_embedkabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#frameKabkot').attr("src","https://www.google.com/maps/"+data[0].embed_kabkot); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- frame kecamatan dari formkabkot ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#frameKecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_embedkecamatanawal_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#frameKecamatan').attr("src","https://www.google.com/maps/"+data[0].embed_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- frame kecamatan dari formkecamatan ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#frameKecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_embedkecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#frameKecamatan').attr("src","https://www.google.com/maps/"+data[0].embed_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table nama kabkot awal dari formkabkot ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableNamakabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_tablenamakabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableNamakabkot').append(data[0].nama_kabkot); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                               <!-- table nama kecamatan awal dari formkabkot ok-->
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableNamakecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_tablenamakecamatanawal_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableNamakecamatan').append(data[0].nama_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                <!-- table nama kecamatan dari formkecamatan -->
                                <script>
                                $(document).ready(function(){
                                    $('#formKecamatan').change(function(){
                                        var kecamatan_id = $(this).val();
                                        $('#tableNamakecamatan').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_tablenamakecamatan_control?kecamatan_id="+kecamatan_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableNamakecamatan').append(data[0].nama_kecamatan); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>
                                 <!-- table Ksa kabkot dari formkabkot -->   
                                <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        $('#tableKsatercacahkabkot').empty();
                                        $.ajax({
                                            url: "<?php echo base_url() ?>Pkl/get_tableksatercacahkabkot_control?kabkot_id="+kabkot_id,
                                            method: "GET", <!-- type -->                                                                                   
                                            success: function(data) {
                                                $('#tableKsatercacahkabkot').append(data[0].nama_kabkot); <!-- data -->
                                            }
                                        });
                                    });
                                });
                                </script>