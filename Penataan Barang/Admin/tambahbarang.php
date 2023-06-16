<?php

session_start();

    if( !isset($_SESSION["login"])){
        header("Location: ../User/index.php");
        exit;
    }

?>
<!DOCTYPE html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
</head>
<body>
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Form Pendaftaran Barang</h1>
        </div>
        <div class="panel-body">
          <form class="" action="connect.php" method="post">
            <div class="form-group">
          <label for="id_barang">ID Barang</label>
          <input
          type="number"
          class="form-control"
          id="id_barang"
          name="id_barang"
          />
        </div>
            <div class="form-group">
              <label for="nama_barang">Area</label>
              <input
              type="text"
              class="form-control"
              id="area"
              name="area"
              />
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input
              type="text"
              class="form-control"
              id="nama_barang"
              name="nama_barang"
              />
            </div>
            <div class="form-group">
              <label for="harga_barang">Harga Barang</label>
              <input
              type="number"
              class="form-control"
              id="harga_barang"
              name="harga_barang"
              />
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn btn-secondary"><a class="nav-link" href="index.php">Beranda</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
