<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder text-danger" href="#">MATPING</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add Area</a></li>
                            <li><a class="dropdown-item" href="tambahbarang.php">Add Item</a></li>
                            <li><a class="dropdown-item" href="tampilbarang.php">Manage Item</a></li>
                            <li><a class="dropdown-item" href="#">Manage Area</a></li>
                            <li><a class="dropdown-item" href="#">Delete Area</a></li>
                            <li><a class="dropdown-item" href="#">Delete Item</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-danger me-2" type="submit">Filter</button>
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger " type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <table cellpadding="20" width="800px" align="center">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Barang</th>
          <th scope="col">Area</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Barang</th>
          <th colspan="2">Aksi</th>
      </tr>
  </thead>


  <?php
  include "koneksi.php";

  $no=1;
  $ambildata = mysqli_query($koneksi,"select * from barang");
  while($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr>
    <td>$no</td>
    <td>$tampil[id_barang]</td>
    <td>$tampil[area]</td>
    <td>$tampil[nama_barang]</td>
    <td>$tampil[harga_barang]</td>
    <td>
        <a href='?kode=$tampil[id_barang]'> Hapus </a>
    </td>
    <tr>";
    $no++;
}
?>
</table>

<?php
include "koneksi.php";

if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where id_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilbarang.php'>";

}
?>

<!-- END MAIN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>