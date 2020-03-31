
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">PENDAFTARAN ADMIN</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						
						<div class="form-body">
							<form action="<?php echo base_url(). 'crud/tambah_admin'; ?>" method="post">
								<div class="form-group"> <label for="">Username</label>
								<input type="text" class="form-control" name="username"  placeholder="Username"> 
								</div> 
								<div class="form-group"> <label for="">No HP</label>
								<input type="number" class="form-control" name="nohp"  placeholder="No HP"> 
								</div>
								<div class="form-group"> <label for="exampleInputEmail1">Email address</label> 
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
								</div> 
								<div class="form-group"> 
									<label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password"> 
								</div> 
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
					</div>
					
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
	