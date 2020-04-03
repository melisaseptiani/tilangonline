
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">UPDATE DATA ADMIN</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						
						<div class="form-body">
							<?php foreach($admin as $key){?>
							<form action="<?php echo base_url(). 'crud/edit_admin'; ?>" method="post">
								<div class="form-group"> <label for="">ID Admin</label>
								<input type="hidden" value="<?php echo $key->idadmin ?>" class="form-control" name="idadmin"  placeholder=" ID Admin"> 
								</div> 
								<div class="form-group"> <label for="">Username</label>
								<input type="text" class="form-control" value="<?php echo $key->username?>"  name="username"  placeholder="Username"> 
								</div> 
								<div class="form-group"> <label for="">No HP</label>
								<input type="number" class="form-control" name="nohp" value="<?php echo $key->nohp ?>"  placeholder="No HP"> 
								</div>
								<div class="form-group"> <label for="exampleInputEmail1">Email address</label> 
								<input type="email" name="email" value="<?php echo $key->email ?>"  class="form-control" id="exampleInputEmail1" placeholder="Email"> 
								</div> 
								<div class="form-group"> 
									<label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" name="password" value="<?php echo $key->password ?>"  id="exampleInputPassword1" placeholder="Password"> 
								</div> 
								
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						<?php } ?>
						</div>
					</div>
					
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
	