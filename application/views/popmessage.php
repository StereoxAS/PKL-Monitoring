<?php header( "refresh:5;url=http://pkl.stis.ac.id/monitoring" ); ?>
			<div class="text-center modal-content">

				<div class="popup">
						<h3>
							<br>Verifikasi berhasil							
						</h3>
						<h5>
							<br>Anda dapat login menggunakan kode verifkasi yang telah dikirim.<br/> Dalam 5 detik anda akan diarahkan ke halaman login
						</h5>
					<div class="content">
						<?php echo form_open('Login'); ?>						
						<div class="form-group"> 
							<div class="col-sm-7"></div>           
						    <div class="col-sm-3 text-right">
						    	<?php echo form_submit(array('id' => 'submit_ok', 'class' => 'btn btn-default btn-block', 'value' => 'OK')); ?>
						    </div>
							<div class="col-sm-2"></div>
						</div>						
						<?php echo form_close(); ?>    
					</div>
				</div>