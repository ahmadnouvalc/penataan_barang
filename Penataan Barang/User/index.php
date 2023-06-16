<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                     
                </form>
                <form action="" method="POST">
                    <input type="text" name="query" placeholder="Cari"/>
                    <input type="submit" name="cari" values="Search"/>
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
      </tr>
  </thead>
  


  <?php
  include "koneksi.php";

  $no=1;
  $query = $_POST['query'];
  if($query !=''){
    $ambildata = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang LIKE '".$query."'");
  }else{
    $ambildata = mysqli_query($koneksi,"SELECT * FROM barang");
  } 
  
  while($tampil = mysqli_fetch_array($ambildata)){
?>
    <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $tampil['id_barang']?></td>
    <td><?php echo $tampil['area']?></td>
    <td><?php echo $tampil['nama_barang']?></td>
    <td><?php echo $tampil['harga_barang']?></td>

    <tr>
<?php } ?>

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
