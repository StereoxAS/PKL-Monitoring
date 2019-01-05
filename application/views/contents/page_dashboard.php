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
                                    <option selected disabled value="">...</option>
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
                               <iframe id="frameKabkot" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4352177527!2d114.51104914828034!3d-8.455072623045481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sid!2sid!4v1546617299915" width="470" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>    
                               
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
                                                <td><div id="tableNamakabkot"></div></td>
						<td><div id="tableKsatercacahkabkot">0</div></td>
						<td><div id="tableProgressksakabkot">0%</div></td>
                                                <td><div id="tableUbinantercacahkabkot">0</div></td>
						<td><div id="tableProgressubinankabkot">0%</div></td>
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
						
						<td><div id="tableUnitterlistingkabkot">0</div></td>
						<td><div id="tableProgresscacahkabkot">0%</div></td>
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
                                    <option selected disabled value="">...</option>
                                    <!-- <option value="5101010">Melaya</option>
                                    <option value="5101020">Negara</option>
                                    <option value="5101021">Jembrana</option>
                                    <option value="5101030">Mendoyo</option>
                                    <option value="5101040">Pekutatan</option> -->
                                </select>
                                
                                </p>
                                </div>
				<!-- <div id="map2"></div> -->
                                <div name="mapKecamatan" id="mapKecamatan">
                               <iframe id="frameKecamatan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4352177527!2d114.51104914828034!3d-8.455072623045481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sid!2sid!4v1546617299915" width="460" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                               
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
						<td><div id="tableNamakecamatan"></div></td>
						<td><div id="tableKsatercacahkecamatan">0</div></td>
						<td><div id="tableProgressksakecamatan">0%</div></td>
                                                <td><div id="tableUbinantercacahkecamatan">0</div></td>
						<td><div id="tableProgressubinankecamatan">0%</div></td>
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
						
						<td><div id="tableUnitterlistingkecamatan">0</div></td>
						<td><div id="tableProgresscacahkecamatan">0%</div></td>
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
  						Cacah Total Kab./Kota
  					</div>
                                            <!--
                                            <div class="col-sm-3">
                                                <button class="btn btn-link pull-right" data-toggle="tooltip" data-placement="top" title="Muat Ulang Tabel" id="reload" href="<?php echo base_url('pkl/progres_listing')?>><i class="fa fa-external-link" style="color: white"></i></button>
                                            </div>
                                            -->
  					<div class="col-xs-3">
                                           
  						 <button class="pull-right" data-toggle="tooltip" data-placement="top" title="Tampilkan" id="tampilkanTotalperkabkot"><i class="fa fa-refresh" style="color: black"></i></button> 
  					</div> 
  				</div>
			</div>  
            
              
              <div class="panel-body">
                <div class="col-lg-12"> 
                    <table class="table table-bordered">
					<thead>
					  <tr>
						<th>Kab./Kota</th>
						<th>Progress</th>
                                                
					
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><div>Jembrana</div></td>
						<td><div id="progressTotaljembrana">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Tabanan</td>
						<td><div id="progressTotaltabanan">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Badung</td>
						<td><div id="progressTotalbadung">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Gianyar</td>
						<td><div id="progressTotalgianyar">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Klungkung</td>
						<td><div id="progressTotalklungkung">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Bangli</td>
						<td><div id="progressTotalbangli">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Karang Asem</td>
						<td><div id="progressTotalkarang_asem">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Buleleng</td>
						<td><div id="progressTotalbuleleng">0</div></td>
						
					  </tr>
                                          <tr>
						<td><div></div>Denpasar</td>
						<td><div id="progressTotaldenpasar">0</div></td>
						
					  </tr>
					</tbody>
				  </table>
                    <!--
                  <table class="table table-striped table-bordered table-hover" id="progress_perkabkot">
                      <thead>
                          <tr>
                            <th>Kab./Kota</th>
                            <th>Progress</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
					  <!-- <tfoot>
						<tr>
							 <th colspan="1" style="text-align:right">Total:</th> 
							<th></th>
			            </tr>
			        </tfoot> 
                  </table> -->
                </div>
              </div>
            </div>
          </div>
            
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
				  <div class="row">
    					<div class="col-xs-9">
    						Progress Cacah Total
    					</div>
                                        <!--
    					<div class="col-xs-3">
    						<a class="pull-right" data-toggle="tooltip" data-placement="top" title="Lihat Detail" href="<?php echo base_url('pkl/progres_cacah')?>"><i class="fa fa-external-link" style="color: white"></i></a>
    					</div> -->
                                        
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
