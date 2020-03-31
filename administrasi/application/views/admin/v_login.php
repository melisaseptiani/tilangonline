
<!DOCTYPE html>
<html lang="en">
<head>
	

	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href=" <?php echo base_url('assetslog/') ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesomes.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslog/') ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
			
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
					<span class="login100-form-title p-b-43">
						Admin Login
					</span
									
					<div class="wrap-input100 rs1 validate-input" >
						<input class="input100" type="text" name="username">
						<span class="label-input100">Username</span></input>
						
					</div>			
					
					<div class="wrap-input100 rs2 validate-input" >
						<input class="input100" type="password" name="password">						
						<span class="label-input100">Password</span></input>
						
					</div>

					<div class="container-login100-form-btn" >
						<button class="login100-form-btn" type="submit" name="login">
							Sign in
						</button>
					</div>
					

					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Forgot password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('assetslog/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url('assetslog/') ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslog/') ?>js/main.js"></script>

</body>
</html>
