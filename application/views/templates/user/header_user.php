<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

    <title><?= $title; ?></title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
  <a class="navbar-brand" href="<?= base_url(); ?>">GANESHA KNOWLEDGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	<div class="container">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <!-- SEBELUM LOGIN -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalDaftar">Daftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
      </li>
      <!-- AKHIR SEBELUM LOGIN -->

      <!-- SETELAH LOGIN -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/daftarbimbel'); ?>">Daftar Bimbel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/profilsaya'); ?>">Profil Saya</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      <!-- AKHIR SETELAH LOGIN -->

      <li class="nav-item">
        <a class="nav-link" href="#">Selamat Datang PENGUNJUNG</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>	

<!-- MODAL DAFTAR -->
<div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="txt-primary text-center">Daftar</h4>
        <hr class="garisbawah">
        <div class="form-group mt-4">
          <input type="text" name="" class="form-control" placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
          <input type="text" name="" class="form-control" placeholder="Alamat Tinggal">
        </div>

        <div class="form-group">
          <input type="text" name="" class="form-control" placeholder="Alamat Email">
        </div>

        <div class="form-group">
          <input type="password" name="" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
          <input type="password" name="" class="form-control" placeholder="Ulangi Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- AKHIR MODAL DAFTAR -->

<!-- MODAL LOGIN -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4 class="txt-primary text-center">Login</h4>
        <hr class="garisbawah">
        <div class="form-group mt-4">
          <input type="text" name="" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
          <input type="password" name="" class="form-control" placeholder="Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- AKHIR MODAL LOGIN -->