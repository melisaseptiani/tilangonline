<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open('Comment/add', array('method'=>'POST')); ?>
	<input type="text" name="chika">
	<button>Submit</button>
	<? php echo form_close(); ?>

</body>
</html>