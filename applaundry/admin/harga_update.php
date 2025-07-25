<?php
include '../koneksi.php';

$harga=$_POST['harga'];

mysqli_query($koneksi,"UPDATE harga set harga_perkilo='$harga'");

header("location:harga.php");
?>