<?php
$conn = mysqli_connect("localhost", "root", "", "data");

if(isset($_POST["submit"])){
  $id_barang = $_POST["id_barang"];
  $area = $_POST["area"];
  $nama_barang = $_POST["nama_barang"];
  $harga_barang = $_POST["harga_barang"];
  }

  $query = "INSERT INTO barang VALUES('$id_barang', '$area', '$nama_barang', '$harga_barang')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data berhasil Ditambahkan'); </script>
  ";
?>