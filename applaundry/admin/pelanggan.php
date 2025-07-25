<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Laundry</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<?php include 'header.php'; ?>
<body style="background: #f0f0f0"> <br><br><br>
<div class="wrapper">    
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h4>Data Pelanggan</h4>
            </div>
            <div class="panel-body">
                <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
                <br>
                <br>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>HP</th>
                        <th>Alamat</th>
                        <th width="15%">AKSI</th>
                    </tr>
                    <?php
                    include "../koneksi.php";
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM pelanggan order by namaPelanggan asc");
                    while ($d = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['namaPelanggan']; ?></td>
                            <td><?php echo $d['hpPelanggan']; ?></td>
                            <td><?php echo $d['alamatPelanggan']; ?></td>
                            <td>
                                <a href="pelanggan_edit.php?id=<?php echo $d['idPelanggan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="pelanggan_hapus.php?id=<?php echo $d['idPelanggan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
                </div>
<?php include 'footer.php'; ?>