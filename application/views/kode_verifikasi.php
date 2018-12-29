			<div class="text-center modal-content">	
				<div class="popup">
						<h2>
							<br>Silahkan masukkan kode verifikasi
						</h2>
					<div class="content">
						<?php echo form_open('Login/resetpass'); ?>
						<div class="form-group">
							<div class="col-sm-2"></div>
						    <div class="col-sm-8">
						    <?php echo form_input(array('id' => 'kode', 'name' => 'kode', 'class' => 'form-control', 'placeholder' => 'Kode')); ?>
						    </div>
							<div class="col-sm-2"></div>
						</div>						
						<div class="form-group"> 
							<div class="col-sm-7"></div>           
						    <div class="col-sm-3 text-right">
						    	<?php echo form_submit(array('id' => 'submit_kode', 'class' => 'btn btn-default btn-block', 'value' => 'Submit')); ?>
						    </div>
							<div class="col-sm-2"></div>
						</div>
						<div>
							<div class="col-sm-12 note text-center">
								<p>NOTE : Mohon periksa e-mail anda</p>
							</div>
						</div>
						<?php echo form_close(); ?>    
					</div>
				</div>