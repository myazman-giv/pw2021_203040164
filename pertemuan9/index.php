<?php
/*
Mochamad Yazman Yazid
203040164
https://github.com/myazman-giv/pw2021_203040164
pertemuan 9 - 16 April 2021
php
*/
?><?php
  require 'functions.php';
  $jersey = query("SELECT * FROM jersey");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Jersey</h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Jersey</th>
      <th>Ukuran</th>
      <th>Asal Pengiriman</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($jersey as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["jersey"]; ?></td>
        <td><?= $row["ukuran"]; ?></td>
        <td><?= $row["asal"]; ?></td>
        <td><?= $row["harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>