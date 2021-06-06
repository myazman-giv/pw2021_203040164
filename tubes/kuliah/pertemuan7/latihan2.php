<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 7 - 20 Maret 2021
php
*/
?><?php
    // cek apakah tidak ada data di $_GET
    if (
        !isset($_GET["jersey"]) ||
        !isset($_GET["aparel"]) ||
        !isset($_GET["ukuran"]) ||
        !isset($_GET["stok"]) ||
        !isset($_GET["asa"]) ||
        !isset($_GET["harga"])
    ) {
        // redirect
        header("Location: latihan1.php");
        exit;
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detai Jersey</title>
</head>

<body>
    <ul>
        <img src="img/<?= $_GET["gambar"]; ?>">
        <li>Jersey : <?= $_GET["jersey"]; ?></li>
        <li>Aparel : <?= $_GET["aparel"]; ?></li>
        <li>Ukuran : <?= $_GET["ukuran"]; ?></li>
        <li>Stok : <?= $_GET["stok"]; ?></li>
        <li>Asal pengiriman : <?= $_GET["asal"]; ?></li>
        <li>Harga : <?= $_GET["harga"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke halaman sebelumnya</a>
</body>

</html>