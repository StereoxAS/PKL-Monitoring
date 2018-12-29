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
                    Pilih Lokasi Pencacahan
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#agregat" data-toggle="tab">Agregat</a>
                        </li>
                        <li><a href="#detail" data-toggle="tab">Detail</a>
                        </li>
                    </ul>

                    <!-- Tabs Panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="agregat">
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Bangka <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][0] ?>/<?php echo $cacah['beban'][0] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $cacah['tercacah'][0] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][0]/$cacah['beban'][0])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][0]/$cacah['beban'][0])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Bangka Barat <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][1] ?>/<?php echo $cacah['beban'][1] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-succe" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][1]/$cacah['beban'][1])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][1]/$cacah['beban'][1])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Bangka Selatan <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][2] ?>/<?php echo $cacah['beban'][2] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][2]/$cacah['beban'][2])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][2]/$cacah['beban'][2])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kota Pangkal Pinang <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][3] ?>/<?php echo $cacah['beban'][3] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][3]/$cacah['beban'][3])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][3]/$cacah['beban'][3])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Bangka Tengah <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][1] ?>/<?php echo $cacah['beban'][1] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-succe" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][4]/$cacah['beban'][4])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][4]/$cacah['beban'][4])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Belitung <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][5] ?>/<?php echo $cacah['beban'][5] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][5]/$cacah['beban'][5])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][5]/$cacah['beban'][5])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        	<div class="row">
                        		<div class="col-lg-12">
                        			<h4>Kabupaten Belitung Timur <small> [<a class="cont" href="#" id="">Lihat detail</a>]</small></h4>
                        		</div>
                        		<div class="col-lg-12">
                        			<a style="text-decoration: none; color: black;">
		                                <div>
		                                    <p>
		                                    	<br>
		                                    	<?php echo $cacah['tercacah'][6] ?>/<?php echo $cacah['beban'][6] ?> unit cacah<br>
		                                        <span class="pull-right text-muted"></span>
		                                    </p>
		                                    <div class="progress progress-striped active">
		                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($cacah['tercacah'][6]/$cacah['beban'][6])*100 ?>%;">
		                                            <?php echo intval(($cacah['tercacah'][6]/$cacah['beban'][6])*100)."%"?>
		                                        </div>
		                                    </div>
		                                </div>
		                            </a>
                        		</div>
                        		<div class="col-lg-12">
                        			<div style="border: solid #e6e8ed 0.1pt;"></div>
                        		</div>
                        	</div>
                        </div>
                        <!-- /.aggregat -->
                        <div class="tab-pane fade" id="detail">
                        	<h4>Detail</h4>
                        	<table width="100%" class="table table-striped table-bordered table-hover" id="tabel_progress_cacah">
		                		<thead>
		                			<tr>
		                				<th>Blok Sensus</th>
		                				<th>NIM Pencacah</th>
		                				<th>Kabupaten/Kota</th>
		                				<th>Kecamatan</th>
		                				<th>Kelurahan/Desa</th>
		                				<th>Unit Tercacah</th>
		                				<th>Total Unit</th>
		                				<th>Proggres</th>
		                			</tr>
		                		</thead>
		                		<tbody>
		                			<tr>
		                				<td>B005</td>
		                				<td>14.0010</td>
		                				<td>Belitung Timur</td>
		                				<td>Kelapa Kampit</td>
		                				<td>Mayang</td>
		                				<td>68</td>
		                				<td>100</td>
		                				<td>
		                					<div class="progress progress-striped active" style="margin-bottom: 0%;">
		                						<div class="progress-bar progress-bar-success" role="progressbar" style="width: 68%;">68%</div>
		                					</div>
		                				</td>
		                			</tr>
		                		</tbody>
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