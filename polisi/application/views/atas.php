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
              <form role="form" method="post" enctype="multipart/form-data" action="<?=base_url()?>Fom/save_data">
                <div class="card-body">
                  <span style="color: red"><?=$this->session->flashdata('error')?></span>
                  <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Nama Pengendara</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="nama" value="<?=$this->session->flashdata('namapelanggar')?>" required>
                  </div>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" value="<?=$this->session->flashdata('ttl')?>" required class="form-control" id="exampleInputPassword1" placeholder="ttl" name="ttl">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Jenis SIM</label>
                    <input type="text" value="<?=$this->session->flashdata('jenissim')?>" class="form-control" id="exampleInputPassword1" placeholder="jenis sim" name="jenis_sim">
                  </div>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Alamat</label>
                    <input type="text" value="<?=$this->session->flashdata('alamat')?>" class="form-control" id="exampleInputPassword1" placeholder="enter alamat" name="alamat" required>
                  </div>
                      <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Profesi</label>
              <select class="form-control" name="profesi" name="profesi" required>
                <option value="Mahasiswa"> Mahasiswa</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="PNS">PNS</option>
                <option value="Pedagang">Pedagang</option>
                  </select>
                  </div> 
                  <br>
                  <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Tanggal Pelanggaran</label>
                    <input required value="<?=$this->session->flashdata('tdt')?>" type="date" class="form-control" id="exampleInputPassword1" placeholder="tanggal" name="tanggal">
                  </div>
                  <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Tempat Pelanggaran</label>
                    <input required value="<?=$this->session->flashdata('tempattilang')?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="enter place" name="tempat">
                  </div>
                   <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Pasal Pelanggaran</label>
                    <div class="form-check">
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 280 Plat No Kendaraan" id="defaultCheck">
              <label  class="form-check-label" name="pasal[]" for="defaultCheck"> Pasal 280 Plat No Kendaraan</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 281 SIM" id="defaultCheck1">
              <label class="form-check-label" name="pasal[]" for="defaultCheck1"> Pasal 281 SIM</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 282 Mengemudi Tidak Wajar" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2"> Pasal 282 Mengemudi Tidak Wajar</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheck3"> Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value=" Pasal 285 Atribut Kendaraan Tidak Lengkap" id="defaultCheck4">
              <label class="form-check-label" for="defaultCheck4"> Pasal 285 Atribut Kendaraan Tidak Lengkap</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 287 Melanggar Rambu-rambu Lalu Lintas" id="defaultCheck5">
              <label class="form-check-label" for="defaultCheck5"> Pasal 287 Melanggar Rambu-rambu Lalu Lintas</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 288 Tidak Menunjukkan STNK" id="defaultCheck6">
              <label class="form-check-label" for="defaultCheck6"> Pasal 288 Tidak Menunjukkan STNK</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 291 Helm tidak SNI" id="defaultCheck7">
              <label class="form-check-label" for="defaultCheck7"> Pasal 291 Helm tidak SNI</label>
              <br>
              <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 293 Lampu Kendaraan Mati" id="defaultCheck8">
              <label class="form-check-label" for="defaultCheck8">Pasal 293 Lampu Kendaraan Mati</label>
              <br>
               <input class="form-check-input" name="pasal[]" type="checkbox" value="Pasal 294 Berbelok Tanpa Sen" id="defaultCheck9">
              <label class="form-check-label" for="defaultCheck9">Pasal 294 Berbelok Tanpa Sen</label>
                  </div>
                  <br>
                   <div class="form-group">
                    <label class="table table-sm table-primary" for="exampleInputEmail1">Barang Yang Disita</label>
              <select class="form-control" name="barang_yang_disita">
                <option value="STNK"> STNK</option>
                <option value="SIM">SIM</option>
                <option value="KTP">KTP</option>
                <option value="KARTU PELAJAR">KARTU PELAJAR</option>
                  </div> </select>
                  <br>
                   <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">No HP</label>
                    <input value="<?=$this->session->flashdata('nohp')?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="enter number" name="no_hp">
                  </div> 
                   <div class="form-group">
                       <label class="table table-sm table-primary" for="exampleInputEmail1">Stnk atau Plat Nomor</label>
                      <input type="file" name="plat" class="form-control" name="file" required>
                      </div> 
                   <div class="form-group">
                     <label class="table table-sm table-primary" for="exampleInputEmail1">Email</label>
                    <input type="text" value="<?=$this->session->flashdata('email')?>" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
                  </div>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>