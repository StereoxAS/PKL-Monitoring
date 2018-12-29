
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Insert title here</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>resources/css/login.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<br /> <br /> <br /> <br />
	<section class="container">
	    <section class="login-form">
		
		<section>
			<img src="<?php echo base_url();?>resources/images/logodepan.png" alt="" style="width: 250px" />
		</section>
		
		<div class="panel panel-default">
		  	<div class="panel-body">
		    	<?php echo form_open('login/verification', array('class' => 'form-horizontal col-md-12 text-center')); ?>
					<div class="form-group">
						    <?php echo form_input(array('id' => 'nim', 'name' => 'nim', 'class' => 'form-control', 'placeholder' => 'Masukkan NIM / Email (untuk dosen)')); ?>
						    </div>
					
					
					<div class="form-group">
						    <?php echo form_input(array('id' => 'password', 'type' => 'password', 'name' => 'password', 'class' => 'form-control', 'placeholder' => 'Masukkan Password')); ?>
					</div>
					
							<?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-default btn-block', 'value' => 'Login Now')); ?>
							
							</div>
				<?php echo form_close(); ?>
		  	</div>
		</div>
		
		
		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>