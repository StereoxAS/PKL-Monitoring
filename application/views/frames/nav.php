<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
	
    <div class="navbar-header" style="display: inline-block; vertical-align: middle; width: 96%;">
	
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-md visible-lg visible-sm" href="" style="color: white;"> <img src="<?php echo base_url();?>/resources/images/logo1.png" alt="WEB MONITORING PKL STIS 58"></a>
		<a class="navbar-brand visible-xs" href="" style="height: 60px;"> <img src="<?php echo base_url();?>/resources/images/logo2.png" alt="WEB MONITORING PKL STIS 58"></a>
		<ul class="nav navbar-nav navbar-right visible-sm-block visible-md-block visible-lg-block">
		    <li class="sidebar-search" style="display: absolute; width: 250px; margin-top: 12px;">
				<div class="input-group custom-search-form">
					<!-- search autocomplete menggunakan nim -->
					<input type="text" class="form-control" placeholder="Cari Mahasiswa (NIM)" id="autocomplete_nav">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" id="btn_cari_nav">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</li>
    	</ul>
	</div>

    <!-- /.navbar-header -->
    

    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search visible-xs-block">
                    <div class="input-group custom-search-form">
                        <!-- search autocomplete menggunakan nim -->
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa (NIM)" id="autocomplete_nav">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btn_cari_nav">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?php echo base_url('pkl/dashboard')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Progress<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('pkl/progress_ksa')?>">Progress KSA (R1)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/progres_ubinan')?>">Progress Ubinan (R2)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/progres_listing')?>">Progress Listing (R3)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/progres_cacah')?>">Progress Cacah (R3)</a>
                        </li>
                    </ul>
                </li>
                <!--
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Analisis Realtime<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href=" ">Map Tematik</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/analisis_realtime')?>" >Variabel Analisis</a>
                        </li>
                    </ul>
                </li>
                -->
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Informasi Pencacahan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('pkl/search_unit_cacah')?>">Daftar Unit Cacah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/search_unit_cacah')?>">Daftar Unit KSA</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/search_unit_ubinan')?>">Daftar Unit Ubinan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pkl/search_pcl')?>">Daftar PCL</a>
                        </li>
                        
                         <!-- <li>
                            <a href="<?php echo base_url('pkl/log_kuesioner')?>">Log Kuesioner</a>
                         </li>  -->
                    </ul>
                </li>
            
                <!-- <li>
                    <a href=">"><i class="fa fa-dashboard fa-fw"></i> Analisis Real Time</a>
                </li> -->
               
                <li>
                            <a href="<?php echo base_url('pkl/analisis_realtime')?>" ><i class="fa fa-dashboard fa-fw"></i> Analisis Real Time</a>
                </li>
                <li>
                    <a href="<?php echo base_url('pkl/monitoring_masalah')?>"><i class="fa fa-desktop fa-fw"></i> Monitoring Masalah Lapangan</a>
                </li>
                <li>
                     <a href="<?php echo base_url('pkl/logout')?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<!-- jQuery -->
<script src="<?php echo base_url('resources/vendor/jquery/jquery.min.js')?>"></script>

<!-- Bootstrap Typeahead -->
<script src="<?php echo base_url('resources/vendor/bootstrap-typeahead/bootstrap3-typeahead.js')?>"></script>

<script type="text/javascript">
    var autocomplete_nav_data = <?php echo json_encode($autocomplete_nav) ?>; // Data autocomplete yang disediakan dari controller
    $('#autocomplete_nav').typeahead({
        source : autocomplete_nav_data,
    });

    $('#btn_cari_nav').click(function () {
        var autocomplete = $('#autocomplete_nav').val();
        autocomplete = autocomplete.split(" | ");
        var nim = autocomplete[1];
        location.href='<?php echo base_url('pkl/search_pcl/')?>' + nim;
    });
</script>
