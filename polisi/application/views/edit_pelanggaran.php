<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pengendara</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" action="<?=base_url()?>Fom/save_update">
                <?php foreach ($edit as $key) { ?>
                <div class="card-body">
                  <span style="color: red"><?=$this->session->flashdata('error')?></span>
                  <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Nama Pengendara</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="nama" value="<?=$key->namapelanggar;?>" required>
                  </div>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" required class="form-control" id="exampleInputPassword1" placeholder="ttl" name="ttl" value="<?=$key->ttl;?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Jenis SIM</label>
                    <input required type="text" class="form-control" id="exampleInputPassword1" placeholder="jenis sim" name="jenis_sim" value="<?=$key->jenissim;?>">
                  </div>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Alamat</label>
                    <input required type="text" class="form-control" id="exampleInputPassword1" placeholder="enter alamat" name="alamat" value="<?=$key->alamat;?>">
                  </div>
                      <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Profesi</label>
              <select class="form-control" name="profesi" name="profesi" required>
                <option value="Mahasiswa" <?php if ($key->profesi == 'Mahasiswa') {
                  echo "selected";
                }?>> Mahasiswa</option>
                <option value="Wiraswasta" <?php if ($key->profesi == 'Wiraswasta') {
                  echo "selected";
                }?>>Wiraswasta</option>
                <option value="PNS" <?php if ($key->profesi == 'PNS') {
                  echo "selected";
                }?>>PNS</option>
                <option value="Pedagang" <?php if ($key->profesi == 'Pedagang') {
                  echo "selected";
                }?>>Pedagang</option>
                  </select>
                  </div> 
                  <br>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Tanggal Pelanggaran</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="tanggal" name="tanggal"  value="<?=$key->tdt;?>">
                  </div>
                  <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Tempat Pelanggaran</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter place" name="tempat"  value="<?=$key->tempattilang;?>">
                  </div>
                   <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Pasal Pelanggaran</label>
                    <div class="form-check">
        <?php
          $pasal=explode(', ', $key->pasal);
          //print_r($pasal);
         ?>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 280 Plat No Kendaraan" id="defaultCheck" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 280 Plat No Kendaraan") {
                          echo "checked";
                        }
                    }?>>
                    <label  class="form-check-label" name="pasal[]" for="defaultCheck"> Pasal 280 Plat No Kendaraan</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 281 SIM" id="defaultCheck1" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 281 SIM") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck1"> Pasal 281 SIM</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 282 Mengemudi Tidak Wajar" id="defaultCheck2" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 282 Mengemudi Tidak Wajar") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck2"> Pasal 282 Mengemudi Tidak Wajar</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki" id="defaultCheck3" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck3"> Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 285 Atribut Kendaraan Tidak Lengkap" id="defaultCheck4" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 285 Atribut Kendaraan Tidak Lengkap") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck4"> Pasal 285 Atribut Kendaraan Tidak Lengkap</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 287 Melanggar Rambu-rambu Lalu Lintas" id="defaultCheck5" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 287 Melanggar Rambu-rambu Lalu Lintas") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck5"> Pasal 287 Melanggar Rambu-rambu Lalu Lintas</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 288 Tidak Menunjukkan STNK" id="defaultCheck6" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 288 Tidak Menunjukkan STNK") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck6"> Pasal 288 Tidak Menunjukkan STNK</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 291 Helm tidak SNI" id="defaultCheck7" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 291 Helm tidak SNI") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck7"> Pasal 291 Helm tidak SNI</label>
                    <br>
                    <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 293 Lampu Kendaraan Mati" id="defaultCheck8" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 293 Lampu Kendaraan Mati") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck8">Pasal 293 Lampu Kendaraan Mati</label>
                    <br>
                     <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 294 Berbelok Tanpa Sen" id="defaultCheck9" <?php for($i=0;$i<count($pasal);$i++){
                        if ($pasal[$i] == "Pasal 294 Berbelok Tanpa Sen") {
                          echo "checked";
                        }
                    }?>>
                    <label class="form-check-label" for="defaultCheck9">Pasal 294 Berbelok Tanpa Sen</label>
                  </div>
                  <br>
                   <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Barang Yang Disita</label>
              <select class="form-control" name="barang_yang_disita" required>
                <option value="STNK" <?php if ($key->barangtilang == 'STNK') {
                  echo "selected";
                }?>> STNK</option>
                <option value="SIM" <?php if ($key->barangtilang == 'SIM') {
                  echo "selected";
                }?>>SIM</option>
                <option value="KTP" <?php if ($key->barangtilang == 'KTP') {
                  echo "selected";
                }?>>KTP</option>
                <option value="KARTU PELAJAR" <?php if ($key->barangtilang == 'KARTU PELAJAR') {
                  echo "selected";
                }?>>KARTU PELAJAR</option>
                  </div> </select>
                  <br>
                   <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">No HP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter number" name="no_hp"  value="<?=$key->nohp;?>" required>
                  </div> 
                   <div class="form-group">
                       <label class="table table-sm table-primary" for="exampleInputEmail1">Stnk atau Plat Nomor</label>
                       <img src="<?=base_url()?>gambar/<?=$key->plat;?>" width="200" height="auto">
                      <input type="file" name="plat" class="form-control" name="file" required value="<?=$key->plat;?>">
                      </div> 
                   <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="<?=$key->email;?>" required>
                  </div>
                  </div>
                  <input type="hidden" name="idpelanggaran" value="<?=$key->idpelanggaran?>" required>
                 
                <!-- /.card-body -->
              <?php } ?>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>