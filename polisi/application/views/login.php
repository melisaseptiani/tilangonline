<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="<?=base_url()?>assets/css/login.css" rel="stylesheet">
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
        <h2 class="form-signin-heading">Silahkan Login</h2>
		<?php
        	if (validation_errors() || $this->session->flashdata('result_login')) {
        ?>
        <div class="alert alert-error">
        	<button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong>
            <?php echo validation_errors(); ?>
            <?php echo $this->session->flashdata('result_login'); ?>
        </div>    
        <?php } ?>
        <input type="text" class="input-block-level" name="email" placeholder="yourmail@gmail.com">
        <input type="password" class="input-block-level" name="password" placeholder="Password">
        <button class="btn btn-primary" type="submit">Login</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>