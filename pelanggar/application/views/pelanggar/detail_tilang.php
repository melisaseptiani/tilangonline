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
	<center>
		<h4>Detail Tilang</h4><hr>
<div class="table-responsive" style="width: 70%">
		<table class="table">
		<?php foreach ($hasil as $u) { ?>
				<tr>
			    <td>ID Pelanggaran</td><td>:</td><td><?=$u->idpelanggaran?></td>
			    </tr>
			    <tr>
			    <td>Nama Pelanggar</td><td>:</td><td><?=$u->namapelanggar?></td>
			    </tr>
			    <tr>
			    <td>Tanggal Lahir</td><td>:</td><td><?=$u->ttl?></td>
			    </tr>
			    <tr>
			    <td>Plat/STNK</td><td>:</td><td><img src="<?=base_url()?>gambar/<?=$u->plat?>" width="200" height="auto"></td>
			    </tr>
			    <tr>
			    <td>Jenis SIM</td><td>:</td><td><?=$u->jenissim?></td>
			    </tr>
			    <tr>
			    <td>Alamat Pelanggar</td><td>:</td><td><?=$u->alamat?></td>
			    </tr>
			    <tr>
			    <td>Profesi Pelanggar</td><td>:</td><td><?=$u->profesi?></td>
			    </tr>
			    <tr>
			    <td>Tanggal diTilang</td><td>:</td><td><?=$u->tdt?></td>
			    </tr>
			    <tr>
			    <td>Tempat Tilang</td><td>:</td><td><?=$u->tempattilang?></td>
			    </tr>
			    <tr>
			    <td>Pasal</td><td>:</td><td><?=$u->pasal?></td>
			    </tr>
			    <tr>
			    <td>Barang yang Disita</td><td>:</td><td><?=$u->barangtilang?></td>
			    </tr>
			    <tr>
			    <td>No HP</td><td>:</td><td><?=$u->nohp?></td>
			    </tr>
			    <tr>
			    <td>Email</td><td>:</td><td><?=$u->email?></td>
			    </tr>
			    <tr>
			    <td></td>
				<td></td>
				<td>
					<a href="<?=base_url()?>Cari/bayar/<?=$u->idpelanggaran;?>" class="btn btn-primary">Bayar</a>
					<a target="_blank" class="btn btn-primary" href="<?=base_url()?>Cari/surat_tilang/<?=$u->idpelanggaran?>">Surat Tilang</a>
				</td>
				</tr>
				<?php }?>
				</table>
			</div>
			</center>