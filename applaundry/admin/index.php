<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Laundry - Pemrograman Web Dasar </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <!-- Memeriksa apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan belum_login");
    }
    ?>

<?php include 'header.php'; ?>

    <div class="container">
        <div class="alert alert-info text-center">
            <h4 style="margin-bottom: 0px"><b>Selamat datang  <?php echo $_SESSION['username']; ?>!</b> di sistem informasi laundry - Pemrograman Web Dasar.
            </h4>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <center>
                <h4><b><i class="glyphicon glyphicon-home"></i> Dashboard <i class="glyphicon glyphicon-home"></i></b></h4>
                </center>
            </div>
            <div class="panel-body">
                <center>
                Sistem Informasi Laundry Pemrogrman Web dasar
                </center>
                <center>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores exercitationem sapiente similique placeat illum officiis, debitis consequuntur qui magnam porro laboriosam excepturi modi incidunt tempore consectetur vero, eum nulla!
                </center>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>