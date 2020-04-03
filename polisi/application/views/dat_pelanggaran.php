<!DOCTYPE html>
<html>
<head>
  <title>TILON</title>
  <style type="text/css">
    .dtHorizontalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
      }
      #dtHorizontalExample th, td {
      white-space: nowrap;
      }

      table.dataTable thead .sorting:after,
      table.dataTable thead .sorting:before,
      table.dataTable thead .sorting_asc:after,
      table.dataTable thead .sorting_asc:before,
      table.dataTable thead .sorting_asc_disabled:after,
      table.dataTable thead .sorting_asc_disabled:before,
      table.dataTable thead .sorting_desc:after,
      table.dataTable thead .sorting_desc:before,
      table.dataTable thead .sorting_desc_disabled:after,
      table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
      }
  </style>
  <script type="text/javascript">
    $(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});
  </script>
</head>
<body>
  <section class="content">
      <div class="container-fluid">
        <h1>Data Pelanggar</h1>
        <div class="row">
    <a href="<?php echo base_url(); ?>Fom" class="btn btn-primary">Tambah Data</a><br>
    <span style="background: pink;color: red">
    <?=$this->session->flashdata('idhapus');?>
    </span>
  <div class="table-responsive">
  <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
    <tr>
      <th>No</th>
      <th>Nomor Blanko</th>
      <th>Nama Pelanggar</th>
      <th>Tanggal Lahir</th>
      <th>Foto Plat</th>
      <th>Jenis SIM</th>
      <th>Alamat</th>
      <th>Profesi</th>
      <th>Tanggal Tilang</th>
      <th>Tempat Pelanggaran</th>
      <th>Pasal Pelanggaran</th>
      <th>Barang Yang Disita</th>
      <th>No Hp</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($pelanggar as $u) {

     ?>

     <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $u->idpelanggaran ?></td>
      <td><?php echo $u->namapelanggar ?></td>
      <td><?php echo $u->ttl ?></td>
      <td>
        <a target="_blank" href="<?=base_url()?>gambar/<?php echo $u->plat ?>">
          <img src="<?=base_url()?>gambar/<?php echo $u->plat ?>" width="100" height="auto">
        </a>
      </td>
      <td><?php echo $u->jenissim ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->profesi ?></td>
      <td><?php echo $u->tdt ?></td>
      <td><?php echo $u->tempattilang ?></td>
      <td><a class="btn btn-primary" target="_blank" href="<?=base_url()?>Fom/detail_pasal/<?=$u->idpelanggaran?>">Lihat Detail Pasal</a></td>
       <td><?php echo $u->barangtilang ?></td>
       <td><?php echo $u->nohp ?></td>
       <td><?php echo $u->email ?></td>
       <td>
        <a target="_blank" class="btn btn-secondary" href="<?=base_url()?>Fom/surat_tilang/<?=$u->idpelanggaran?>">Surat Tilang</a><br>
        <a class="btn btn-warning" href="<?=base_url()?>Fom/edit/<?=$u->idpelanggaran?>">Edit</a><br>
        <a class="btn btn-danger" href="<?=base_url()?>Fom/hapus/<?=$u->idpelanggaran?>">Hapus</a>
       </td>
     </td>
   </tr>
 <?php } ?>
</table>
</div>
</div>
</div></section>

</body>
</html>
