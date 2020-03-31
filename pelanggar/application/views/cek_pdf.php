<!DOCTYPE html>
<html>
<html><head>
    
</head>
<body>
	<?php 
		foreach ($d as $u) {
			?>
			<h3 align="center">Bukti Pelanggaran Lalu Lintas</h3>
			<table style="width:90%" border="1">
			   <tr>
			   	<td style="width:60%;"><h5>Kesatuan : Polsek Lekong, Bandung</h5></td>
			    <td>ID Pelanggaran: <b><?=$u->idpelanggaran?></b></td>
			   </tr>
			   <tr>
			    <td>Nama : <?=$u->namapelanggar?></td>
			    <td>Email : <?=$u->email?></td>
			   </tr>
			   <tr>
			    <td>Alamat : <?=$u->alamat?></td>
			    <td>No HP : <?=$u->nohp?></td>
			   </tr>
			   <tr>
			    <td>Tanggal Lahir : <?=$u->ttl?></td>
			    <td>Jenis SIM : <?=$u->jenissim?></td>
			   </tr>
			   <tr>
			    <td>Profesi : <?=$u->profesi?></td>
			    <td>Barang yang Disita : <?=$u->barangtilang?></td>
			   </tr>
			   <tr>
			    <td align="justify">
			    Pada tanggal <?=$u->tdt?> bertempatkan di <?=$u->tempattilang?> telah melanggar aturan tertib kendaraan lalu lintas dan dikenakan pasal. Pasal yang dilanggar : <br><?=str_replace(", ", "<br>", $u->pasal)?>
			    </td>
			    <td align="center">Plat/STNK <br><img src="<?=base_url()?>gambar/<?=$u->plat?>" width="100" height="auto"></td>
			   </tr>
			   <tr>
			   	<td>Tanggal Sidang <?=$u->tdt?> di Pengadilan Negeri Kabupaten Bandung. Pastikan anda telah melakukan pembayaran terlebih dahulu sebelum sidang.</td>
			   	<td>Silahkan lakukan pembayaran melalui Bank BRI dengan menunjukkan atau menggunaan ID Pelanggaran anda <b><?=$u->idpelanggaran?></b> untuk melakukan pembayaran denda tilang anda.
			   	</td>
			   </tr>
			</table>
   <?php }?>
</body>
</html>