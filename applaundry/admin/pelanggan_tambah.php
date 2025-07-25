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

    <div class="container">
        <br /><br /><br />
        <div class="col-md-5 col-md-offset-3">
            <div class="panel">
                <div class="panel-heading">
                    <h4>Tambah Pelanggan Baru</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="pelanggan_aksi.php">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ">
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp..">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat..">
                        </div>
                        <br />
                        <input type=" submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
        </div>
    </div>
    </form>

    <body>

</html>
<?php include 'footer.php'; ?>