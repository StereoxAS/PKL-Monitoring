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
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
					<div id="chart_rt" style="height: 500px;"></div>
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
