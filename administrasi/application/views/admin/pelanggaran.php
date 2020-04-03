
					
<div id="page-wrapper">
			<div class="main-page">
				<h1><center>DATA PELANGGARAN</center></h1>
				</div>
				
				<div class="row">
					
					<div class="row calender widget-shadow">
						<table class="table stats-table ">
							<thead>
								<th>No </th>
								<th>ID Pelanggaran</th>
								<th>Nama </th>
								<th>Jenis Sim</th>
								<th>TTL</th>
								<th>Tanggal Tilang</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Profesi</th>
								<th>Pasal</th>
								<th>Tempat Tilang</th>
								<th>Barang Sitaan</th>
								<th>Plat</th>
								<th>Tanggal Sidang</th>
								<th>Status Bayar</th>
								<th>Aksi</th>

									<?php $no = 1;
									foreach($pelanggaran as $key){ ?>
									<tr >
										<td><?php echo $no++; ?></td>
										<td><?php echo $key->idpelanggaran ?></th>
										<td><?php echo $key->namapelanggar ?></th>
										<td><?php echo $key->jenissim ?></td>
										<td><?php echo $key->ttl ?></th>
										<td><?php echo $key->tdt ?></td>
										<td><?php echo $key->nohp ?></td>
										<td><?php echo $key->email ?></th>
										<td><?php echo $key->alamat ?></th>
										<td><?php echo $key->profesi ?></td>
										<td><?php echo $key->pasal ?></th>
										<td><?php echo $key->tempattilang ?></td>
										<td><?php echo $key->barangtilang ?></td>
										<td><?php echo $key->plat ?></th>
										<td><?php echo $key->tanggalsidang ?></th>
										<td><?php echo $key->status ?></td>
										<td><span class="label label-warning">Edit</span> | <span class="label label-danger">Delete</span></td>
										
									</tr>
									<?php } ?>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
		</div>
	</div>
