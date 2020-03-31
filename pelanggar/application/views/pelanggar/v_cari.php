<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Blanko Tilang</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container" style="max-width: 90%">
			<h2 align="center">Cari Data Tilang</h2><br />
			<span style="color: red"><?=$this->session->flashdata('eror')?></span>
				<form action="<?php echo base_url(); ?>Cari/hasil" method="GET" enctype="multipart/form-data">
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="kode" value="<?=$this->input->get('kode')?>" class="form-control">
					<button class="btn btn-primary">Cari</button>
				</div>
			</div>
			</form>
			<br />
			<div class="table-responsive">
				<table class="table">
					<?php foreach ($hasil as $key) { ?>
					<tr>
						<td><?=$key->idpelanggaran;?></td>
						<td><?=$key->namapelanggar;?></td>
						<td><?=$key->tdt;?></td>
						<td>
							<a href="<?=base_url()?>Cari/detail/<?=$key->idpelanggaran;?>" class="btn btn-primary">Detail</a>
						</td>
					</tr>
				<?php }?>
				</table>
			</div>
		</div>
	</body></html>