<!--Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Progres Pencacahan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    	<div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">
					<div class="row">
						<div class="col-sm-9">
							<h5 id="title">Informasi Agregat Pencacahan</h5>
						</div>
						<div class="col-sm-3">
							<button class="btn btn-link pull-right hidden" data-toggle="tooltip" data-placement="top" title="Muat Ulang Tabel" id="reload"><i class="fa fa-refresh" style="color: white"></i></button>
						</div>
					</div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#aggregat" data-toggle="tab"  style="color: black;">Agregat</a>
                        </li>
                        <li class ="inactive"><a href="#detail" data-toggle="tab" style="color: black;">Detail</a>
                        </li>
                    </ul>

                    <!-- Tabs Panes -->
                    <div class="tab-content">
						<!-- tab aggregat -->
                        <div class="tab-pane fade in active" id="aggregat">
							<br>
							<?php $kabupaten = array("01", "03", "05", "04", "02", "06", "71"); ?>
							<?php foreach ($kabupaten as $kab): ?>
								<div id ="<?php echo $kab?>" class="bar_div">
	                            	<div class="row">
	                            		<div class='col-lg-12'>
											<h4><b><span id='<?php echo "nama_kabupaten_$kab"?>'></span></b><small> [<a class='cont' href='#' id='<?php echo "link_detail_$kab"?>'>Lihat detail</a>]</small></h4>
										</div>
										<div class='col-lg-12'>
											<a style='text-decoration: none; color: black;'>
												<div>
													<p>
														<br>
														<span id='<?php echo "progress_$kab"?>'></span>
														<br>
														<span class='pull-right text-muted'></span>
													</p>
													<div class='progress progress-striped active'>
														<div class='progress-bar progress-bar-success' id='<?php echo "bar_$kab"?>' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: 0%'>
															<span id='<?php echo "percent_$kab"?>'></span>
														</div>
													</div>
												</div>
											</a>
										</div>
										<?php if ($kab != "71"): ?>
											<div class='col-lg-12'>
												<div style='border: solid #e6e8ed 0.1pt;'></div>
											</div>
										<?php endif; ?>
									</div>
	                            </div>
							<?php endforeach; ?>
                        </div>
                        <!-- /.aggregat -->
                        <div class="tab-pane fade" id="detail">
							<br>
                        	<table width="100%" class="table table-striped table-bordered table-hover" id="tabel_progress_cacah">
		                		<thead>
		                			<tr>
		                				<th>BS</th>
		                				<th>NIM</th>
		                				<th>Kabupaten/Kota</th>
		                				<th>Kecamatan</th>
		                				<th>Kelurahan/Desa</th>
		                				<th>Tercacah</th>
		                				<th>Total</th>
		                				<th>Progress</th>
		                			</tr>
		                		</thead>
		                	</table>
                        </div>
                    </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper
