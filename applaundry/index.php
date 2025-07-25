<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Laundry</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>

<body style="background: #f0f0f0"> <br><br><br>
    <center>
        <h2>Sistem Informasi Laundry <br>
            Pemrograman Berasis Web</h2>
    </center> <br><br><br>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'> Login Gagal! Username dan Password salah </div>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-info'> Anda telah berhasil logout </div>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<div class='alert alert-warning'> Anda harus log in untuk akses halaman admin </div>";
                }
            }
            ?>

            <form action="login.php" method="post">
                <div class="panel">
                    <br>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="log in">
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>

</body>

</html>