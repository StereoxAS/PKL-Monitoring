<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Progres PCL</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
	<div id="scrollTarget"></div>
    <div class="row">
    	<div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">
					<div class="row">
						<div class="col-sm-9">
							<h5>Tabel Informasi PCL</h5>
						</div>
						<div class="col-sm-3">
							<button class="btn btn-link pull-right" data-toggle="tooltip" data-placement="top" title="Muat Ulang Tabel" id="reload"><i class="fa fa-refresh" style="color: white"></i></button>
						</div>
					</div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
					<div class="alert alert-warning alert-dismissible hidden" role="alert" id="alert_gagal">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Timeout!</strong> Pencarian PCL gagal dilakukan
					</div>
					<!--
                	<div class="panel panel-default">
						<div id="gmap" style="width: 100%; height: 400px;"></div>
					</div>
				-->
                    <div class="tab-content">
						<br>
                        	<table width="100%" class="table table-striped table-bordered table-hover" id="tabel_pcl">
	                		<thead>
	                			<tr>
	                				<th rowspan="2" style="vertical-align: middle">NIM </th>
                                    <th rowspan="2" style="vertical-align: middle">PCL</th>
	                				<th rowspan="2" style="vertical-align: middle">Kortim</th>
	                				<!--  <th rowspan="2" style="vertical-align: middle">Wilayah</th>  -->
	                				<th colspan="3" class="text-center">Progress</th>
	                			 
	                			</tr>
								
								<tr>
									<th style="vertical-align: middle">KSA</th>
									<th style="vertical-align: middle">Ubinan</th>
									<th style="vertical-align: middle">Pola Tanam</th>
								</tr>
						
	                		</thead>
	                		<tbody>
					            <?php
					                foreach($coba as $msl){
					        			?>
						                <tr>
						            <td><?php echo $msl['nim']; ?></td>
						            <td><?php echo $msl['nama']; ?></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            
						        </tr>


						           <?php } ?>
						    </tbody>
	                	</table>
                    </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->
