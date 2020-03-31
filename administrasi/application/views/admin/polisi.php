
					
<div id="page-wrapper">
			<div class="main-page">
				<h1><center>DATA POLISI</center></h1>
				<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
				</div>
				
				<div class="row">
					
					<div class="row calender widget-shadow">
						<table class="table stats-table ">
							<thead>
								<th>No </th>
								<th>ID Polisi</th>
								<th>Nama</th>
								<th>TTL</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Aksi</th>
								
									<?php $no = 1;
									foreach($polisi as $key){ ?>
									<tr >
										<td><?php echo $no++; ?></td>
										<td><?php echo $key->idpolisi ?></th>
										<td><?php echo $key->namapolisi ?></th>
										<td><?php echo $key->ttl ?></td>
										<td><?php echo $key->nohp ?></th>
										<td><?php echo $key->emailpolisi ?></td>
										<td><?php echo $key->alamat ?></td>
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
