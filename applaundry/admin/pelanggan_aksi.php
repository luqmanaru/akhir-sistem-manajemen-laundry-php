<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $hp = $_POST['hp'];
  $alamat = $_POST['alamat'];

  $query = "INSERT INTO pelanggan (nama, hp, alamat) VALUES ('$nama', '$hp', '$alamat')";
  $result = mysqli_query($koneksi, $query);

  if($result) {
    echo "Data berhasil ditambahkan";
  } else {
    echo "Data gagal ditambahkan";
  }
}
?>