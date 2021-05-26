<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidka maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$cow = query("SELECT * FROM sapi WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../asset/img/<?= $cow["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p>Jenis : <?= $cow["jenis"]; ?></p>
            <p>Keunggulan : <?= $cow["deskripsi"]; ?></p>
            <p>Umur : <?= $cow["umur"]; ?></p>
            <p>Bobot : <?= $cow["bobot"]; ?></p>
            <p>Harga : <?= $cow["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
</body>
</html>