<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Bayar Tilang</title>
    <link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">




    <style>
      html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="text-center">
    <?php 
      if ($status == 0) {
    ?>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="<?=base_url()?>Cari/save_bayar">
      <h1 class="h3 mb-3 font-weight-normal">Pembayaran Tilang</h1>
      <p>Silahkan lakukan pembayaran dengan ke Bank BRI dengan kode pembayaran anda <b><?=$idpelanggaran?></b>.</p>
      <p>Jika anda sudah melakukan pembayaran, silahkan upload bukti pembayaran dibawah ini.</p>
      <label>Nomor Blanko</label>
      <input type="text" name="idpelanggaran" class="form-control" value="<?=$idpelanggaran?>" required>
      
      <label>Bukti Pembayaran <br><span style="color: red"><?=$this->session->flashdata('error');?></span></label>
      <input type="file" class="form-control" name="bukti" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
    <?php
      }elseif ($status == 3 ) {
    ?>
      <form class="form-signin" method="post" enctype="multipart/form-data" action="<?=base_url()?>Cari/save_bayar">
      <h1 class="h3 mb-3 font-weight-normal">Pembayaran Tilang</h1>
      <h3>Bukti Pembayaran anda tidak valid. Silahkan cek lalu upload kembali.</h3>
      <p>Silahkan lakukan pembayaran dengan ke Bank BRI dengan kode pembayaran anda <b><?=$idpelanggaran?></b>.</p>
      <p>Jika anda sudah melakukan pembayaran, silahkan upload bukti pembayaran dibawah ini.</p>
      <label>Nomor Blanko</label>
      <input type="text" name="idpelanggaran" class="form-control" value="<?=$idpelanggaran?>" required>
      
      <label>Bukti Pembayaran <br><span style="color: red"><?=$this->session->flashdata('error');?></span></label>
      <input type="file" class="form-control" name="bukti" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
    <?php
      }elseif ($status == 2 ) {
    ?>
      <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Pembayaran Tilang Anda Valid. Terimakasih. </h1>
      </form>
    <?php
      }elseif ($status == 1 ) {
    ?>
      <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Pembayaran Tilang anda sedang dilakukan validasi</h1>
      </form>
    <?php
      }
    ?>
</body>
</html>
