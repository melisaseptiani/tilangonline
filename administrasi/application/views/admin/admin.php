
					
<div id="page-wrapper">
			<div class="main-page">
				<h1><center>DATA ADMIN</center></h1>
				<center><?php echo anchor('home/daftaradmin','Tambah Data'); ?></center>
				</div>
				
				<div class="row">
					
					<div class="row calender widget-shadow">
						<table class="table stats-table ">
							<thead>
								<th>No </th>
								<th>ID Admin</th>
								<th>Username</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Aksi</th>
								
									<?php $no = 1;
									foreach($admin as $key){ ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $key->idadmin ?></td>>
										<td><?php echo $key->username ?></td>
										<td><?php echo $key->nohp ?></td>
										<td><?php echo $key->email ?></td>
										<td><span class="label label-warning"href="<?=base_url()?>crud/update_admin<?=$key->idadmin?>">Edit</span> | <span class="label label-danger">Delete</span></td>
										
									</tr>
									<?php } ?>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
		</div>
	</div>
