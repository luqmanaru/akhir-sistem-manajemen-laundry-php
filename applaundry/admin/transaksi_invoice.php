<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Laundry PEMROGRAMAN WEB DASAR</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location: ../index.php?pesan-belum_login");
    }
    ?>

    <?php
    include '../koneksi.php';
    ?>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <?php

            // menangkap id yang dikirim melalui url
            $id = $_GET['id'];

            // megambil data pelanggan yang ber id di atas dari tabel pelanggan
            $transaksi = mysqli_query($koneksi, "SELECT * from transaksi, pelanggan where transaksi_id='$id' and transaksi_pelanggan=idPelanggan");
            while ($t = mysqli_fetch_array($transaksi)) {
            ?>
                <center>
                    <h2>LAUNDRY " PWD "</h2>
                </center>
                <h3></h3>
                <a href="transaksi_invoice_cetak.php?id=<?php echo $id; ?>" target="blank" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-print"></i> CETAK</a>
                <br /><br />
                <table class="table">
                    <tr>
                        <th width="20%">No. Invoice</th>
                        <th>:</th>
                        <td>INVOICE-<?php echo $t['transaksi_id']; ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Tgl. Laundry</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>:</th>
                        <td><?php echo $t['namaPelanggan']; ?></td>
                    </tr>
                    <tr>
                        <th>HP</th>
                        <th>:</th>
                        <td><?php echo $t['hpPelanggan']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td><?php echo $t['alamatPelanggan']; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Cucian (Kg)</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_berat']; ?></td>
                    </tr>
                    <tr>
                        <th>Tgl. Selesai</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl_selesai']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>
                            <?php
                            if ($t['transaksi_status'] == "0") {
                                echo "<div class='label label-warning'>PROSES</div>";
                            } else if ($t['transaksi_status'] == "1") {
                                echo "<div class='label label-info'>DI CUCI</div>";
                            } else if ($t['transaksi_status'] == "2") {
                                echo "<div class='label label-success'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>

                        <th>Harga</th>
                        <th>:</th>
                        <td><?php echo "Rp. " . number_format($t['transaksi_harga']) . ",-"; ?></td>
                    </tr>
                </table>
                <br />

                <h4 class="text-center">Daftar Cucian</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                    </tr>
                    <th>Jenis Pakaian</th>
                    <th width="20%">Jumlah</th>
                    </th>
                    <?php
                    
                    // menyimpan id transaksi ke variabel id_transaksi 
                    $id = $t['transaksi_id'];

                    // menampilkan pakaian-pakaian dari transaksi yang ber id di atas
                    $pakaian = mysqli_query($koneksi, "select * from pakaian where pakaian_transaksi='$id'");
                    while ($p = mysqli_fetch_array($pakaian)) {
                    ?>
                        <tr>
                            <td><?php echo $p['pakaian_jenis']; ?></td>
                            <td width="5%"><?php echo $p['pakaian_jumlah']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br />
                <p>
                    <center><i>" Terima kasih telah mempercayakan cucian anda pada kami ".</i></center>
                </p>
            <?php } ?>
        </div>
    </div>
</body>
<html>